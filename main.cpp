#include "Piece.h"
#include "Systeme.h"
#include <iostream>

using namespace cv;
using namespace std;

        //--------------------------//
        //          SUIVI           //
        //--------------------------//

void suivi(){

    // Cr�ation image dans laquelle se trouve une pi�ce

    Mat image = imread( "data/images.jpg", IMREAD_GRAYSCALE);
    Mat image2 = imread("data/imagesdecale.jpg", IMREAD_GRAYSCALE);  //Image � n+1 pi�ce d�cal� � droite

    //Cr�ation de deux pi�ces utilisant l'image pour tester
    //Une pi�ce bien centre et la deuxi�me d�caler
    // ICI ON ADMET QU'ON CONNAIT DEJA LA POS DE LA PIECE ET SON RAYON DANS L'IMAGE
    Piece pc1(Point(137,143),87,image);

    //Visualisation de l'image de base
    imshow( "image 1", image);
    imshow( "image 2", image2 );

    //Visualisation de la premi�re pi�ces
    imshow( "pc1", pc1.getImg() );

    // Recherche de la pi�ce dans la deuxi�me image
    Piece pc2 = Systeme::recherchePiece(image2,pc1);
    if(pc2.getRadius()!=0){ // Si pi�ce existante
        imshow("pc2",pc2.getImg());
    }

    //Gestion arr�t programme
    waitKey(0);

}

int main()
{
    suivi();

    return 0;
}




