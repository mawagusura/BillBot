#include "include/classes/piece.h"
#include "include/fonctionnement/systeme.h"
#include "include/fonctionnement/suivi.h"
#include "include/fonctionnement/detection.h"
#include "../includesDeBase.h"
#include <iostream>

using namespace cv;
using namespace std;

void choixExempleImage(){
    //Initialisation d'un nombre d'image
    Mat tabimg[5];
    int choix;

    // Texte sur console pour choisir
    cout<<"Commencement..."<<endl;
    cout<<"Veuillez choisir une image:"<<endl;
    cout<<"Choix 1: Une piece de 2 euros"<<endl;
    cout<<"Choix 2: Trois pieces euros"<<endl;
    cout<<"Votre choix:"<<endl;

    // Choisir un exemple
    //Soit 1 pièce
    //Soit 2 Pièces
    cin>>choix;
    while(choix<0 || choix>2){
        cout<<"Veuillez rentrer 1 ou 2"<<endl;
        cin>>choix;
    }

    switch(choix){
        case 1:{
            tabimg[0] = imread("data/noir_2euros.jpg");
            tabimg[1] = imread("data/noir_2euros2.jpg");  //Image à n+1 pièce décalé à droite
            tabimg[2] = imread("data/noir_2euros3.jpg");
            break;
        }

        case 2:{
            tabimg[0] = imread("data/noir_groupe5.jpg");
            tabimg[1] = imread("data/noir_groupe52.jpg");  //Image à n+1 pièce décalé à droite
            tabimg[2] = imread("data/noir_groupe53.jpg");
            break;
        }
    }
    for(int i=0;i<3;i++){
        Systeme::addImage(tabimg[i]);
    }
}

int main(){
    //Choix de l'exemple et ajout des images au Systeme
    choixExempleImage();

    //--------------------------------------------------
    // Detection des pièces dans les images de l'exemple
    //---------------------------------------------------
    cout<<"Detection......";
    Detection::detection();
    cout<<"Fin detection!"<<endl;

    Systeme::affichagePiece();
    //---------
    // SUIVI
    //---------
    cout<<"Suivi des pieces"<<endl;
    suivi::suiviSemiFiltreParticulaire();
    // suivi::suiviFiltreParticulaire(); // Le suivi avec le filtreParticulaire ne fonctionne pas avec ces images actuellement
    cout<<"Mise a jour position des pieces OK !"<<endl;

    //--------------------------
    //Affichage résultat image
    //----------------------------
    imshow("Dernière image",Systeme::listeImages.at(Systeme::listeImages.size()-1)); // Affichadge de la dernoère image


    //Gestion arrêt programme
    waitKey(0);
}
