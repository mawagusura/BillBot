#include "../../include/fonctionnement/systeme.h"

using namespace cv;

std::vector<Devise> Systeme::listeDevises;
std::vector<Piece> Systeme::listePieces;
std::vector<Mat> Systeme::listeImages;

/*
    GETTERS
*/

std::vector<Devise> Systeme::getListeDevises(){

    return listeDevises;
}

std::vector<Piece> Systeme::getListePieces(){
    return listePieces;
}

std::vector<Mat> Systeme::getListeImages(){
    return listeImages;
}


/*
    SETTERS
*/

void Systeme::setListeDevises(std::vector<Devise> newListeDevises){
    listeDevises = newListeDevises;
}

void Systeme::addDevise(Devise devise){
    listeDevises.push_back(devise);
}

/*void Systeme::removeDevise(Devise devise){

}*/

void Systeme::setListePieces(std::vector<Piece> newListePieces){
    listePieces = newListePieces;
}

void Systeme::addPiece(Piece piece){
    listePieces.push_back(piece);
}

/*void Systeme::removePiece(Piece piece){

}*/


void Systeme::setListeImages(std::vector<Mat> newListeImages){
    listeImages = newListeImages;
}

void Systeme::addImage(Mat image){
    listeImages.push_back(image);
}
/*void Systeme::removeImage(Mat image){

}*/

void Systeme::affichagePiece(){
    int i=1;
    for(Piece &piece: listePieces){
        char str[20];
        sprintf(str,"Piece  %u",i);
        imshow(str, piece.getImgPiece());
        i++;
    }
}




