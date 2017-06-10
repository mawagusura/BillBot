#include "detection.h"
#include "../../include/fonctionnement/detection_reconnaissance_suivi.h"
#include "../../include/fonctionnement/systeme.h"
#include <math.h>
#include <iostream>
#define M_PI   3.14159265358979323846264338327950288
using namespace cv;

/*
DEFINITIONS DES METHODES :
*/

//Méthode detection des pièces
void Detection::detection()
{
    //Constantes definition
    const int _rayon =3;
    const int _blanc=255, _noir=0, _gris=150;
    const int _seuilBlanc = 50;    const int _seuilNoir = 20;

    int i,j,z;

    //
    //_____________________________________________Chargement de l'image_________________________________
    //

    Mat imageAnalyser = Systeme::getListeImages()[0];

    //
    //______________________________________________1ère étape: Traitement de l'image__________________________________________
    //

    //images
    Mat imageFiltrer; //creation d'une image filtré
    Mat imageDeBase; //on veut travailler sur une image de base qui ne sera jamais modifiée, utilisée comme référence
    cvtColor( imageAnalyser, imageFiltrer, CV_BGR2GRAY );//mise en noir et blanc de notre l'image a traiter
    cvtColor( imageAnalyser, imageDeBase, CV_BGR2GRAY );

    //Variable
    int _taille = pow(_rayon*2+1,2)-1;
    int tab[_taille];
    //initialisation
    bool trieRealise=false;
    int x=0, y=0;
    //Pour chaque pixels
    for (int i=_rayon; i<imageFiltrer.rows-_rayon;i++){  //ligne image
        for(int j=_rayon; j<imageFiltrer.cols-_rayon ;j++){ //colonne image
            int indiceTab=0;
            //On stock l'intensité des pixels autour de lui dans un rayon ici
            for( x=i-_rayon; x<i+_rayon;x++){
                for( y=j-_rayon; y<j+_rayon;y++){
                    Scalar filtrePi= imageDeBase.at<uchar>(x,y);
                    tab[indiceTab]=filtrePi.val[0];
                    indiceTab++;
                }
            }
            //Tri a bulle du tableau
            int tmp =0;
            int en_desordre =1;
            while(en_desordre==1){
                    en_desordre = 0;
                    //on mets les valeurs dans l'ordre
                    for(int u=0; u<_taille; u++){
                        if(tab[u]>tab[u+1]){
                            tmp=tab[u+1];
                            tab[u+1]=tab[u];
                            tab[u]=tmp;
                            en_desordre = 1;
                        }
                    }
            }
            //On garde la mediane, la valeur à taille/2-1
            imageFiltrer.row(i).col(j)=tab[_taille/2-1];
        }
    }

    //
    //_______________________________2eme etape : Detection des bords des pièces _________________________
    //

    //
    // a) Creation d'une matrice blanche noir grise en fonction des differences d'intensité du pixel.
    //

    // un pixel de l'image mBNG sera blanc noir ou gris. (blanc: bord / noir: non bord / gris: indéfini)
    Mat mBNG;
    cvtColor( imageAnalyser, mBNG, CV_BGR2GRAY );

    //stockage du taux de différence d'intensité et des vecteurs des différences d'intensité sur la ligne et sur la colonne
    Mat diffTotal,diffLigne, diffCol;
    cvtColor( imageAnalyser, diffLigne, CV_BGR2GRAY );
    cvtColor( imageAnalyser, diffCol, CV_BGR2GRAY );
    cvtColor( imageAnalyser, diffTotal, CV_BGR2GRAY );

    //Pour chaque pixel
    for (int i=0; i<mBNG.rows-1;i++){  //ligne
        for(int j=0; j<mBNG.cols-1 ;j++){ //colonne
            //stockage des différence d'intensité dans diffLigne et diffCol
            diffLigne.at<uchar>(i,j)=imageFiltrer.at<uchar>(i,j)-imageFiltrer.at<uchar>(i,j+1);
            diffCol.at<uchar>(i,j)=imageFiltrer.at<uchar>(i,j)-imageFiltrer.at<uchar>(i+1,j);

            //calcul de la racine carrée de la somme des différences au carrée
            double diffActuelleLigne=cv::abs(imageFiltrer.at<uchar>(i,j)-imageFiltrer.at<uchar>(i,j+1));
            double diffActuelleCol=cv::abs(imageFiltrer.at<uchar>(i,j)-imageFiltrer.at<uchar>(i+1,j));
            double tauxDI =sqrt(diffActuelleCol*diffActuelleCol+diffActuelleLigne*diffActuelleLigne);
            diffTotal.at<uchar>(i,j)= tauxDI;
            //si tauxDI  est supérieux a seuilBlanc
            if(tauxDI >_seuilBlanc){
                //on met le pixel en blanc
                mBNG.at<uchar>(i,j)=_blanc;
            //si c'est inférieur a seuilNoir
            }else if (tauxDI <=_seuilNoir){
                //on met le pixel en noir
                mBNG.at<uchar>(i,j)=_noir;
                //si c'est entre les deux seuils
            }else{
                //on met en gris
                mBNG.at<uchar>(i,j)=_gris;
            }
        }
    }

    //
    // b) Affinement de la largeur des cercles
    //
    double pAngle = -33;
    for (int i=0; i<mBNG.rows-1;i++){  //ligne
        for(int j=0; j<mBNG.cols-1 ;j++){ //colonne
                if(mBNG.at<uchar>(i,j)!=_noir){
                    //calcul de l'angle
                    Scalar diffActuelleLigne=imageFiltrer.at<uchar>(i,j)-imageFiltrer.at<uchar>(i,j+1);
                    Scalar diffActuelleCol=imageFiltrer.at<uchar>(i,j)-imageFiltrer.at<uchar>(i+1,j);
                    pAngle= atan(diffActuelleLigne.val[0]/diffActuelleCol.val[0])* (180/3.14);
                    double angleMod= fmod(pAngle+360,180);
//                    if(angleMod<=0){
//                        cout<<"1"<<endl;
//                    }
                    //Si l'angle est entre 0 et 22.5
                    int decalageL,decalageC; //serviront pour le décalage des lignes et des colonnes
                    if(angleMod<=22.5){ //direction horizontal
                        decalageL=0;
                        decalageC=1;
                    }else if(angleMod<=67.7){ //direction diagonale bas droite
                        decalageL=-1;
                        decalageC=1;
                    }else if(angleMod<=112,5 ){ //direction verticale
                        decalageL=1;
                        decalageC=0;
                    }else if(angleMod<=157,5){ //direction diagonale bas gauche
                        decalageL=1;
                        decalageC=1;
                    }else{       //direction horizontal
                        decalageL=0;
                        decalageC=1;
                    }
                    //on garde le pixel qui a le tauxDI le plus élevé
                    if(diffTotal.at<uchar>(i,j)>=diffTotal.at<uchar>(i-decalageL,j-decalageC)){
                            mBNG.at<uchar>(i-decalageL,j-decalageC)=_noir;
                            if(diffTotal.at<uchar>(i,j)>=diffTotal.at<uchar>(i+decalageL,j+decalageC)){
                                    mBNG.at<uchar>(i+decalageL,j+decalageC)=_noir;
                            }else{
                                diffTotal.at<uchar>(i,j)=_noir;
                            }
                    }else{
                            diffTotal.at<uchar>(i,j)=_noir;
                            if( diffTotal.at<uchar>(i-decalageL,j-decalageC)>=diffTotal.at<uchar>(i+decalageL,j+decalageC) ){
                                    mBNG.at<uchar>(i+decalageL,j+decalageC)=_noir;
                            }else{
                                mBNG.at<uchar>(i-decalageL,j-decalageC)=_noir;
                            }
                        }

                }
        }
     }


    //
    //Suppression du gris.
    //

    bool _continue=true;
    bool blanc,gris;
    int nbPixelGrisAvant=0; int nbPixelGrisApres=1;

    //tant que nous devons continuer et que le nombre de pixel gris change
    while (_continue && nbPixelGrisAvant!=nbPixelGrisApres ){
        //initialisation
        _continue=false;
        blanc=false; gris=false;

        //Pour chaque pixel
        for (int i=0; i<mBNG.rows-1;i++){  //ligne
            for(int j=0; j<mBNG.cols-1 ;j++){ //colonne
                    //initialisation
                    nbPixelGrisAvant=nbPixelGrisApres;
                    nbPixelGrisApres=0;

                    //on récupère sa couleur
                    Scalar colorActuelle=mBNG.at<uchar>(i,j);
                    //Si elle est grise
                    if(colorActuelle.val[0]==_gris){
                            //initialisation
                        _continue=true;
                        nbPixelGrisApres++;
                        int x=i-1,y; blanc=false;

                        //On parcours les voisins du pixels tant qu'un des voisins n'est pas blanc
                        while( x<i+1 && !blanc ){
                            y=j-1;
                            while( y<j+1 && !blanc ){
                                //On récupère sa couleur
                                Scalar colorVoisin=mBNG.at<uchar>(x,y);
                                //Si un voisin est blanche
                                if(colorVoisin.val[0]==_blanc) {
                                    //on met le pixel en blanc
                                    mBNG.row(i).col(j)=_blanc;
                                    blanc=true;
                                }else if(colorVoisin.val[0]==_gris){
                                    gris=true;
                                }
                                y+=1;
                            }
                            x+=1;
                        }if(!blanc){
                            if(gris){
                                mBNG.row(i).col(j)=_gris;
                            }else{
                                mBNG.row(i).col(j)=_noir;
                            }
                        }
                    }
            }
        }

    }
    //si le nombre de pixel gris est le même, alors tous les pixels gris sont mis en noir
    if(nbPixelGrisAvant==nbPixelGrisApres){
         for (int i=0; i<mBNG.rows-1;i++){  //ligne
            for(int j=0; j<mBNG.cols-1 ;j++){ //colonne
                Scalar colorActuelle=mBNG.at<uchar>(i,j);
                    //Si elle est grise
                    if(colorActuelle.val[0]==_gris){
                        mBNG.row(i).col(j)=_noir;
                    }
            }
         }
    }

    //_______________________________2eme etape : Trouver le centre ________________________

    /////////////////////////////////////////////////////
    //DETECTION DU CENTRE DES PIECES ET DE LEURS RAYONS//
    /////////////////////////////////////////////////////
    const int nbPieceMaxTrouvable = 100; // Nombre de pièces max trouvables
    const int rayonMax = 30; // on va aller du rayon 50 au rayon 50+30*5

    Mat imgVide(Size(mBNG.cols,mBNG.rows), CV_8UC3); // Socle d'image qui sera remplit par image noire
    Mat noir;// noir sera une image 1020*770 complètement noir, chargée à chaque boucle (pour chaque rayon testé)
    cvtColor(imgVide, noir, CV_BGR2GRAY);
    imwrite("images/noir.jpg", noir); // on stock noir dans /images pour la recharger plusieurs fois par la suite

    int seuilDensite=39; // Combien de pixel blancs dans une case de 100 pixels pour qu'on considère que c'est un centre de cercle ?
    int pieceTrouvees=0; // Compteur de nombre de pièces trouvées
    int posXtab, posYtab;
    int abs, ord, rayon; // attribut des pièces
    int u; // Compteur de la boucle pour tester les différents rayons

    int posCarreCentre[4][nbPieceMaxTrouvable]; //tabl#define M_PI   3.14159265358979323846264338327950288eau TEMPORAIRE sur les infos des pièce;
    // [1] abscisse [2] ordonné [3] rayon, [4] densité de pixel, nbPieceMaxTrouvable : nb pièce max que peut contenir ce tableau
    int quadrillage [mBNG.rows/10][mBNG.cols/10]; // tableau divisant noir en cases 10*10 pour le vote de densité de pixels blancs
    int quadrillageCentre[mBNG.rows/10][mBNG.cols/10];

    rayon=50;

    // Mise à 0 du tableau de densité
    for(i=0; i<mBNG.rows/10; i++){
        for(y=0; y<mBNG.cols/10; y++){
            quadrillageCentre[i][y]=0;
        }
    }
    for(u=0; u<rayonMax; u++){
        rayon+=5; // On va tracer les cercles pour tous les rayons de 55 à 200 pixels, de 5 en 5
        // (Ré)-Initialisation à chaque nouveau rayon du tableau de densité de présence des pixels blancs à 0
        for(i=0; i<mBNG.rows/10; i++){
            for(y=0; y<mBNG.cols/10; y++){
                quadrillage[i][y]=0;
            }
        }
        cvtColor(imgVide, noir, CV_BGR2GRAY); // Rechargement d'une image noire sur laquelle tracer les cercles
        // Traçage des cercles autours de chaque pixel de type contours
        for(i=0; i<mBNG.rows; i++){
            for(y=0; y<mBNG.cols; y++){
                if(mBNG.at<uchar>(i,y)==255){
                    for(int m=0; m<15; m++){            // 15,24 idéal, NB : 15*24 doit toujours = 360
                        abs=rayon*cos(m*24*M_PI/180)+y; // exemple : 10*36, 5*72
                        ord=rayon*sin(m*24*M_PI/180)+i; // plus m est grand, plus on fait de points sur le cercle
                                                        // abs, ord désignent les coordonnées d'un point du cercle
                        // Petit test pour ne pas créer de points du cercle en dehors de l'image, car
                        // écrire au pixel 1025 sur une image 1020 l'écrit au pixel 5 (tourne "en rond")
                        if(abs<mBNG.cols && ord < mBNG.rows && abs > 0 && ord >0){
                            noir.at<uchar>(ord,abs)=255;
                        }
                    }
                }
            }
        }
        //création quadrillage; (optionnel ?); réfléchir sur un carré de taille impaire pour choper un milieu parfait
        for(i=0; i<mBNG.rows/10; i++){
            for(y=0; y<mBNG.cols; y++){
                noir.at<uchar>(i*10,y)=155;
            }
        }
        for(i=0; i<mBNG.rows; i++){
            for(y=0; y<mBNG.cols/10; y++){
                noir.at<uchar>(i,y*10)=155;
            }
        }
        // Fin création du quadrillage
        // Boucle qui remplit le tableau de densité de présence des pixels blancs dans le quadrillage
        for(i=0; i<mBNG.rows; i++){
            for(y=0; y<mBNG.cols; y++){
                if(noir.at<uchar>(i,y)==255){
                    posXtab = i/10;
                    posYtab = y/10;
                    quadrillage[posXtab][posYtab]++;
                }
            }
        }

        // Détection de zone du quadrillage où il y a une très forte densité de pixels blancs --> centre
        for(i=0; i<mBNG.rows/10; i++){
            for(y=0; y<mBNG.cols/10; y++){
                if(quadrillage[i][y]>seuilDensite){
                    // Remplacer ces ligne par piece.new quand on aura une classe
                    posCarreCentre[0][pieceTrouvees]=y*10;  // Enregistrement abscisse
                    posCarreCentre[1][pieceTrouvees]=i*10;  // Enregistrement ordonnée
                    posCarreCentre[2][pieceTrouvees]=rayon; // Enregistrement rayon
                    posCarreCentre[3][pieceTrouvees]=quadrillage[i][y]; // Enregistrement densité
                    quadrillageCentre[i][y]=quadrillage[i][y];
                    pieceTrouvees++;
                }
            }
        }
    }

    ///////////////////////////////////////////////////
    //PARTIE CALCULS CENTRE A PARTIR DES DENSITE MAX///
    ///////////////////////////////////////////////////

    int posPieces[4][nbPieceMaxTrouvable]; // Tablau d'informations finales sur les pièces
    int pieceTrouveesMax=0;
    int v;
    int densM =0; // densité temporaire du max
    int xRetenu, yRetenu; // Positions temporaires du max
    bool nonAjout=true;

    //je calcule densM une première fois
    for(i=0; i<mBNG.rows/10; i++){
        for(y=0; y<mBNG.cols/10; y++){
            if(densM<quadrillageCentre[i][y]){
                densM=quadrillageCentre[i][y];
                xRetenu=i;
                yRetenu=y;
            }
        }
    }
    if(pieceTrouvees>0){
    do{
        // On retient que la zone autour de la densitéMax ne peut plus contenir de centre
        for(u=xRetenu-3; u<xRetenu+3; u++){
            for(v=yRetenu-3; v<yRetenu+3; v++){
                quadrillageCentre[u][v]=0;
            }
        }
        j=0;
        xRetenu=xRetenu*10;
        yRetenu=yRetenu*10;
        while(nonAjout){ // Le while sert à trouver le bon "j" pour ajouter les infos dans posPieces au bon indice
            if(posCarreCentre[3][j]=densM && posCarreCentre[0][j]==yRetenu && posCarreCentre[1][j]==xRetenu ){
                nonAjout=false;
                posPieces[0][pieceTrouveesMax]=posCarreCentre[0][j]+5; // +5 pour donner le milieu de la case
                posPieces[1][pieceTrouveesMax]=posCarreCentre[1][j]+5;
                posPieces[2][pieceTrouveesMax]=posCarreCentre[2][j];
                posPieces[3][pieceTrouveesMax]=densM;
                pieceTrouveesMax++;
            }
            j++;
        }
        nonAjout=true;
        //je recalcule denM pour savoir si oui ou non je referais ce while
        densM=0;
        for(i=0; i<mBNG.rows/10; i++){
            for(y=0; y<mBNG.cols/10; y++){
                if(densM<quadrillageCentre[i][y]){
                    densM=quadrillageCentre[i][y];
                    xRetenu=i;
                    yRetenu=y;
                }
            }
        }

    }while(densM>seuilDensite);

    for(int i=0; i<pieceTrouveesMax; i++){
		Point centre =Point(posPieces[0][i],posPieces[1][i]);
		int rayon = posPieces[2][i];
		Systeme::listePieces.push_back(Piece(centre,rayon,imageAnalyser));
    }
    }
    else
    std::cout<<"Aucune pièce trouvée, désolé "<<std::endl;

    /////////////////////////////////////////////////////////
    //FIN DETECTION DU CENTRE DES PIECES ET DE LEURS RAYONS//
    /////////////////////////////////////////////////////////

}

