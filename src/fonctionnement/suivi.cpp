#include "../../include/fonctionnement/suivi.h"
#include "../../include/fonctionnement/systeme.h"

using namespace std;
using namespace cv;

/**** VERSION 1 : Vérifie la similitude entre deux tableau de pixel de même taille ****/

int suivi::checkSimilitude(Piece pc1,Piece pc2){
	int seuil=150;  //Marge d'erreur
	int similarite=0;
    cv::Scalar color1,color2;
    int cols=pc1.getImgPiece().cols;
    int ligne=pc1.getImgPiece().rows;

	for(int i=0;i<cols;i++){
		for(int j=0;j<ligne;j++){
            color1 = pc1.getImgPiece().at<uchar>(i,j);
            color2 = pc2.getImgPiece().at<uchar>(i,j);
			if(abs(color1.val[0] - color2.val[0])>seuil)
				similarite=similarite+1;
		}
	}
	return similarite;
}


/**** VERSION 2 : Vérifie la similitude entre deux tableaux de pixels de même taille ****/
int suivi::getMSE(Piece pc1,Piece pc2){
    int diffPix,total=0;
    cv::Scalar color1,color2;
    int cols=pc1.getImgPiece().cols;
    int ligne=pc1.getImgPiece().rows;

	for(int i=0;i<cols;i++){
		for(int j=0;j<ligne;j++){
            color1 = pc1.getImgPiece().at<uchar>(i,j);
            color2 = pc2.getImgPiece().at<uchar>(i,j);
			diffPix=abs(color1.val[0] - color2.val[0]);
			total+=pow(diffPix,2);
		}
	}
	return (total/(cols*ligne));
}

/**** Fonction qui recherche la piece de l'image 1 sur l'image 2 et retourne les coordonnées du centre si la piece est trouvée ***/
/**** VERSION 1 ****/
Piece suivi::recherchePiece(Mat img2, Piece piece){

	bool trouve = false ;

    //On se place de manière à ne pas déborder de l'image (position centrale de la piece)
    Point pos = Point(piece.getRayon(),piece.getRayon());

    // On crée une nouvelle pièce à partir de la position x+1 de la précédente pièce
    // on suppose que la pièce bouge vers la droite
    Piece pc2;

    int i = 1;
	int j = 1;
    int limiteImg= img2.cols  - (int) piece.getRayon();
	int limiteImg2= img2.rows - (int) piece.getRayon();

    while(!trouve && i<limiteImg){
        j=1;
        pos.y=piece.getRayon();
		while(!trouve && j<limiteImg2){
            pc2 = Piece(Point(pos.x, pos.y), piece.getRayon(),img2,piece.getType()) ;
			//regarder si les deux images sont identiques en comparant le nb de pixels
			if(checkSimilitude(piece,pc2) <= 20){ //getnbPixels(imgRoi2) + margeErreur
				trouve = true ;
			}
            pos.y++;
            j++ ;
		}
        pos.x++;
		i++;
	}
	if(trouve == false)
		return Piece();
	else
		return pc2;
}

/**************************************/

/**** Fonction hybride ****/
/**** VERSION 2 ***/
Point suivi::rechAmelioree(Mat img, Piece piece){
    Point XY[35];
    float P[35];
	srand(time(NULL));
	int nbPoint=25,nbessai=5,MSE,sigma=10;
    int limiteImg= img.cols - (int) piece.getRayon();
	int limiteImg2= img.rows - (int) piece.getRayon();
	float totalProba,sommeX,sommeY;
	float ProbaFin[nbessai];
	Point PFIN[nbessai];
	Piece pc2;

    for(int i=0;i<nbessai;i++){
        totalProba=0,sommeX=0,sommeY=0;
        // Faire la somme des YiPi et XiPi pour avoir le nouveau point
        //On se place de manière à ne pas déborder de l'image (position centrale de la piece)
        Point pos = Point(piece.getRayon(),piece.getRayon());
        //Création des points au hasard
        for(int i=0;i<nbPoint;i++){
            XY[i].x=random(piece.getRayon(),limiteImg);
            XY[i].y=random(piece.getRayon(),limiteImg2);
            pc2 = Piece(XY[i],piece.getRayon(),img,piece.getType());
            MSE = getMSE(piece,pc2); // Moyenne pondéré
            P[i]= exp((-MSE)/(2*pow(sigma,2)));
            totalProba+=P[i];
        }

        //Après avoir trouvé le total des proba, diviser chaque proba
        //par ce total afin d'avoir une probabilité sur 1
            for(int i=0;i<nbPoint;i++){
                // Marque les points pris au hasard
                P[i]=P[i]/totalProba;
                //Somme XIYIPI
                sommeX+= XY[i].x*P[i];
                sommeY+= XY[i].y*P[i];
            }
            PFIN[i]=Point(sommeX,sommeY);

            //Marque le point le plus probable du centre estimé
            drawMarker(img, Point(sommeX,sommeY), Scalar(0),MARKER_CROSS,20,4,8);
        }
        totalProba=0;sommeX=0; sommeY=0;

        for(int i=0;i<nbessai;i++){
            pc2 = Piece(PFIN[i],piece.getRayon(),img,piece.getType());
            MSE = getMSE(piece,pc2); // Moyenne pondéré
            ProbaFin[i]= exp((-MSE)/(2*pow(sigma,2)));
            totalProba+=ProbaFin[i];
        }

        for(int i=0;i<nbessai;i++){
            // Marque les points pris au hasard
            ProbaFin[i]=ProbaFin[i]/totalProba;
            //Somme XIYIPI
            sommeX+= PFIN[i].x*ProbaFin[i];
            sommeY+= PFIN[i].y*ProbaFin[i];
        }

        //imshow("image orig",img);
        //Marque le point le plus probable du centre estimé
        drawMarker(img, Point(sommeX,sommeY), Scalar(255),MARKER_CROSS,20,4,8);
        return Point(sommeX,sommeY);
}
/*****************************************************/


/****** Fonction utilise la methode du filtre particulaire pour retrouver la pièce   *******/
/**** VERSION 3 ****/
Point suivi::filtreParticule(Mat img,int nblancement,Piece piece,Point XY[],float P[]){
    srand(time(NULL));
	int nbPoint=34,MSE,sigma=10;
    int limiteImg= img.cols - (int) piece.getRayon();
	int limiteImg2= img.rows - (int) piece.getRayon();
	float totalProba=0,totalProba2=0,sommeX=0,sommeY=0; // Faire la somme des YiPi et XiPi pour avoir le nouveau point
	bool trouve = false ;
	Piece pc2;
	Piece pc3;
    //On se place de manière à ne pas déborder de l'image (position centrale de la piece)
    Point pos = Point(piece.getRayon(),piece.getRayon());

    //Pour le premier lancement recherche de la pièce a l'aide de points tirées aléatoirement
    if(nblancement==0){
        //Création des points au hasard
        for(int i=0;i<nbPoint;i++){
            XY[i].x=random(piece.getRayon(),limiteImg);
            XY[i].y=random(piece.getRayon(),limiteImg2);
            pc2 = Piece(XY[i],piece.getRayon(),img);
            MSE = getMSE(piece,pc2); // Moyenne pondéré
            P[i]= exp((-MSE)/(2*pow(sigma,2)));
            totalProba+=P[i];
        }

        //Après avoir trouvé le total des proba, diviser chaque proba
        //par ce total afin d'avoir une probabilité sur 1
        for(int i=0;i<nbPoint;i++){
            // Marque les points pris au hasard
            drawMarker(img, Point(XY[i]), Scalar(0),MARKER_CROSS,20,1,8);
            P[i]=P[i]/totalProba;

            //Somme XIYIPI (Esperance)
            sommeX+= XY[i].x*P[i];
            sommeY+= XY[i].y*P[i];
        }
        //Marque le point le plus probable du centre estimé
        drawMarker(img, Point(sommeX,sommeY), Scalar(255),MARKER_CROSS,20,4,8);

        return Point(sommeX,sommeY);
    }

    //pour le reste des images
    else{

        Point XY2[35];
        Point XY3[35];
        int nbPoint2 = 30; //nombbre de points choisis à partir des premiers
        float P2[nbPoint2];
        vector<float> poids(nbPoint);

        //normal_distribution : permet d'obtenir un point éloigné d'une certaine valeur d'un point choisi
        normal_distribution<double> distribution(100.0,50.0);

        //création d'une valeur aléatoire (seed)
        typedef chrono::high_resolution_clock myclock;
        myclock::time_point beginning = myclock::now();

        // obtenir un seed a partir d'un timer
        myclock::duration d = myclock::now() - beginning;

        unsigned seed = d.count();

        default_random_engine generator(seed);
        default_random_engine generator2(seed);
        default_random_engine generator3(seed);

        for(int i = 0 ; i<nbPoint ; i++){
            poids[i] = P[i];
        }

        for(int i = 0 ; i<nbPoint2 ; i++){
            //discrete_distribution : permet de tirer un point en fonction des probas de chaque point
            discrete_distribution<int> proba(poids.begin(), poids.end());
            int ind = proba(generator);

            if(ind >= nbPoint || ind < 0){
            }
            else{
                XY2[i] = XY[ind] ;
            }

            //normal_distribution
            int dist = distribution(generator2);
            int dist2 = distribution(generator3);

            //pour que les points choisis ne sortent pas de l'image
            if(XY2[i].x + dist > limiteImg){
                XY3[i].x = XY2[i].x;
            }
            else
                XY3[i].x = XY2[i].x + dist;

            if(XY2[i].y + dist2 > limiteImg2){
                XY3[i].y = XY2[i].y;
            }
            else
                XY3[i].y = XY2[i].y + dist2;

            pc3 = Piece(Point(XY3[i].x,XY3[i].y),piece.getRayon(),img);
            MSE = getMSE(piece,pc3); // Moyenne pondérée
            P2[i]= exp((-MSE)/(2*pow(sigma,2)));
            totalProba2+=P2[i];
        }

        for(int i=0; i<nbPoint2 ; i++){ //nbpoint
            // Marque les anciens points (gris)
            drawMarker(img, Point(XY2[i].x, XY2[i].y), Scalar(255),MARKER_CROSS,20,1,8);
            //Marque des nouveaux points (noirs)
            drawMarker(img, Point(XY3[i].x, XY3[i].y), Scalar(0),MARKER_CROSS,20,1,8);
            P2[i]=P2[i]/totalProba2;

            //Somme XIYIPI calcul du centre estimé
            sommeX+= XY3[i].x*P2[i];
            sommeY+= XY3[i].y*P2[i];

            P[i] = P2[i] ;
            XY[i] = XY3[i] ;
        }

        //Marque le point le plus probable du centre estimé
        drawMarker(img, Point(sommeX,sommeY), Scalar(255),MARKER_CROSS,20,4,8);

        return Point(sommeX,sommeY);
    }
}

/**** fonction qui renvoie une valeur aleatoire ****/
int suivi::random(int mini,int maxi){
    return (mini + (rand() % (maxi - mini)));
}


void suivi::suiviPiece(){
    if(!Systeme::listePieces.empty()){
       for (Mat &img : Systeme::listeImages){
            int i=1;
            for (Piece &piece : Systeme::listePieces) // access by reference to avoid copying
                    {
                        Point pos = suivi::rechAmelioree(img,piece);
                        piece.setCoord(pos);
                        std::cout<<"La piece numéro "<<i<<" a bougé a la position: "<< pos<<std::endl;
                        i++;
                    }

        }
    }else std::cout<<"Pas de pièce à suivre"<<endl;
}

void suivi::suiviPiece2(){
       int nbfois=0;
       for (Mat &img : Systeme::listeImages){
       	for (Piece &piece : Systeme::listePieces) // access by reference to avoid copying
	        {
                Point XY[35];
                float P[35];
	            Point pos = suivi::filtreParticule(img,nbfois,piece,XY,P);
	            piece.setCoord(pos);
	            std::cout<<"La piece a bougé a la position: "<< pos<<std::endl;
	        }
        nbfois++;
       }
}

