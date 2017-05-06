#include "Systeme.h"

using namespace cv;

// CONTRUCTEUR

Systeme::Systeme(){
}

Systeme::~Systeme()
{
    //dtor
}

        //--------------------------//
        //          SUIVI           //
        //--------------------------//



// V�rifie la similitude entre deux tableau de pixel de m�me taille
int Systeme::checkSimilitude(Piece pc1,Piece pc2){
	int seuil=150;  //Marge d'erreur
	int similarite=0;
    cv::Scalar color1,color2;
    int cols=pc1.getImg().cols;
    int ligne=pc1.getImg().rows;

	for(int i=0;i<cols;i++){
		for(int j=0;j<ligne;j++){
            color1 = pc1.getImg().at<uchar>(i,j);
            color2 = pc2.getImg().at<uchar>(i,j);
			if(abs(color1.val[0] - color2.val[0])>seuil)
				similarite=similarite+1;
		}
	}

	return similarite;
}

// Fonction qui recherche la piece de l'image 1 sur l'image 2 et retourne les coordonn�es du centre si la piece est trouv�e
Piece Systeme::recherchePiece(Mat img2, Piece piece){

	//int margeErreur = 1 ;
	bool trouve = false ;
    Point pos ;

    //on decale la position d'un pixel sur l'axe des absisses
    pos.x = piece.getPos().x ;
    //on suppose qu'on reste sur la meme ligne
    pos.y = piece.getPos().y ;

    // On cr�e une nouvelle pi�ce � partir de la position x+1 de la pr�c�dente pi�ce
    // Car on suppose que la pi�ce bouge vers la droite
    Piece pc2;

    int i = 1;
    int limiteImg= img2.cols -(int)pos.x - (int) piece.getRadius();
    while(!trouve && i<limiteImg){
		pc2 = Piece(Point(pos.x+i, pos.y), piece.getRadius(),img2) ;

		//regarder si les deux images sont identiques en comparant le nb de pixels
		if(checkSimilitude(piece,pc2) <= 20){ /*getnbPixels(imgRoi2) + margeErreur*/
			trouve = true ;
        }
		i++ ;
	}

	if(trouve == false)
		return Piece();
	else
		return pc2;
}


        //--------------------------//
        //       DETECTION          //
        //--------------------------//



        //--------------------------//
        //      Reconnaissance      //
        //--------------------------//




        //--------------------------//
        //      OPTIMISATION        //
        //--------------------------//

