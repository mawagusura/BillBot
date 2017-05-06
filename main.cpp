#include "Piece.h"
#include "Systeme.h"
#include <iostream>

using namespace cv;
using namespace std;

        //--------------------------//
        //          SUIVI           //
        //--------------------------//

void suivi(){

    // Création image dans laquelle se trouve une pièce

    Mat image = imread( "data/images.jpg", IMREAD_GRAYSCALE);
    Mat image2 = imread("data/imagesdecale.jpg", IMREAD_GRAYSCALE);  //Image à n+1 pièce décalé à droite

    //Création de deux pièces utilisant l'image pour tester
    //Une pièce bien centre et la deuxième décaler
    // ICI ON ADMET QU'ON CONNAIT DEJA LA POS DE LA PIECE ET SON RAYON DANS L'IMAGE
    Piece pc1(Point(137,143),87,image);

    //Visualisation de l'image de base
    imshow( "image 1", image);
    imshow( "image 2", image2 );

    //Visualisation de la première pièces
    imshow( "pc1", pc1.getImg() );

    // Recherche de la pièce dans la deuxième image
    Piece pc2 = Systeme::recherchePiece(image2,pc1);
    if(pc2.getRadius()!=0){ // Si pièce existante
        imshow("pc2",pc2.getImg());
    }

    //Gestion arrêt programme
    waitKey(0);

}

int main()
{
    suivi();

    return 0;
}




