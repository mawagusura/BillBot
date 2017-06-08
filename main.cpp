#include "include/classes/piece.h"
#include "include/fonctionnement/systeme.h"
#include "include/fonctionnement/suivi.h"
#include "include/fonctionnement/detection.h"
#include "../includesDeBase.h"
#include <iostream>

using namespace cv;
using namespace std;


static void testAlgo(){

    cout<<"Commencement..."<<endl;

    Mat tabimg[5];
    /*tabimg[0] = imread( "data/blanctest.jpg");
    tabimg[1] = imread("data/blanctest2.jpg");  //Image à n+1 pièce décalé à droite
    tabimg[2] = imread("data/blanctest3.jpg");*/
    tabimg[0] = imread( "data/noir_groupe5.jpg");
    tabimg[1] = imread("data/noir_groupe52.jpg");  //Image à n+1 pièce décalé à droite
    tabimg[2] = imread("data/noir_groupe53.jpg");
    /*
    tabimg[0] = imread( "data/noir_2euros.jpg");
    tabimg[1] = imread("data/noir_2euros2.jpg");  //Image à n+1 pièce décalé à droite
    tabimg[2] = imread("data/noir_2euros3.jpg");
    */

    //Création de deux pièces utilisant l'image pour tester
    //Une pièce bien centre et la deuxième décaler
    // ICI ON ADMET QU'ON CONNAIT DEJA LA POS DE LA PIECE ETsrand(time(NULL)); SON RAYON DANS L'IMAGE

    for(int i=0;i<3;i++){
        Systeme::addImage(tabimg[i]);
    }
    cout<<"Detection"<<endl;
    Detection::detection();
    if( !Systeme::listePieces.empty())
        cout<<Systeme::listePieces[0].getCoord().x<<"  "<<Systeme::listePieces[0].getCoord().y<<endl;
    cout<<"Fin detection!"<<endl;

    cout<<"Suivi des pièces"<<endl;
    suivi::suiviPiece();
    cout<<"Mise à jour position des pièces OK !"<<endl;

    if( !Systeme::listePieces.empty())
        cout<<Systeme::listePieces[0].getCoord().x<< " "<<Systeme::listePieces[0].getCoord().y<<endl;

    //Gestion arrêt programme
    waitKey(0);
}


int main(){
    testAlgo();
}
