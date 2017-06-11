#include <stdlib.h>
#include "include/classes/piece.h"
#include "include/fonctionnement/systeme.h"
#include "include/fonctionnement/suivi.h"
#include "include/fonctionnement/detection.h"
#include "include/fonctionnement/modes_fonctionnement.h"
#include "include/fonctionnement/optimisation.h"
#include "include/includesDeBase.h"
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

    //--------------------------
    //Test des parties mode de fonctionnement et optimisation
    //----------------------------

    //Création de pièces fixes, donc création des PieceType et des différentes listes nécessaires
    Mat mat = Mat(800,600,CV_8UC3,Scalar(255,255,255));

    vector<Devise> listeDevises;
    listeDevises.push_back(Devise("Euro"));

    vector<PieceType> listePiecesType;
    listePiecesType.push_back(PieceType(&listeDevises[0], 200, mat));
    listePiecesType.push_back(PieceType(&listeDevises[0], 50, mat));
    listePiecesType.push_back(PieceType(&listeDevises[0], 100, mat));
    listePiecesType.push_back(PieceType(&listeDevises[0], 20, mat));

    vector<Piece> listePieces200;
    listePieces200.push_back(Piece(Point(50, 50), 0, mat, &listePiecesType[0]));
    listePieces200.push_back(Piece(Point(75, 150), 0, mat, &listePiecesType[0]));

    vector<Piece> listePieces100;
    listePieces100.push_back(Piece(Point(400, 400), 0, mat, &listePiecesType[2]));

    vector<Piece> listePieces50;
    listePieces50.push_back(Piece(Point(550, 500), 0, mat, &listePiecesType[1]));
    listePieces50.push_back(Piece(Point(500, 450), 0, mat, &listePiecesType[1]));

    vector<Piece> listePieces20;
    listePieces20.push_back(Piece(Point(525, 550), 0, mat, &listePiecesType[3]));

    listePiecesType[0].setListePiece(listePieces200);
    listePiecesType[1].setListePiece(listePieces50);
    listePiecesType[2].setListePiece(listePieces100);
    listePiecesType[3].setListePiece(listePieces20);

    listeDevises[0].setListePieceType(listePiecesType);

    Systeme::setListeDevises(listeDevises);

    //execution des parties Modes de fonctionnement et Optimisation
    cout << "\nExecution des parties Modes de fonctionnement et Optimisation sur des pieces generees de manieres statiques" << endl << endl;
    try {
        //on dispose de 2 pieces de 2€, 1 piece de 1€, 2 pieces de 50 cts et 1 piece de 20 cts
        //mainFonctionnement(1, "Euro") : sélection de toutes les pièces en euro sur le tapis
        //mainFonctionnement(2, "Euro", 200) : sélection de toutes les pièces de 2€
        //mainFonctionnement(1, "Euro", 570) : sélection des pièces élgibles à la somme de 5,70€

        vector< pair<PieceType,int> > results;
        results = mainFonctionnement(3, "Euro", 570);
        executeOpti(results);
    }

    catch (string const& e) {
        cout << e << endl;
    }







   //Systeme::setListeDevises(listeDevises);


    //Gestion arrêt programme
    waitKey(0);
}
