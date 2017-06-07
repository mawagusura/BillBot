#include "../../include/fonctionnement/systeme.h"

using namespace cv;


/*
    GETTERS
*/

std::vector<Devise> Systeme::getListeDevises(){

    return Systeme::listeDevises;
}

std::vector<Piece> Systeme::getListePieces(){
    return Systeme::listePieces;
}

std::vector<Mat> Systeme::getListeImages(){
    return Systeme::listeImages;
}


/*
    SETTERS
*/

void Systeme::setListeDevises(std::vector<Devise> newListeDevises){
    Systeme::listeDevises = newListeDevises;
}

void Systeme::addDevise(Devise devise){
    Systeme::listeDevises.push_back(devise);
}

/*void Systeme::removeDevise(Devise devise){

}*/

void Systeme::setListePieces(std::vector<Piece> newListePieces){
    Systeme::listePieces = newListePieces;
}

void Systeme::addPiece(Piece piece){
    Systeme::listePieces.push_back(piece);
}

/*void Systeme::removePiece(Piece piece){

}*/

void Systeme::setListeImages(std::vector<Mat> newListeImages){
    Systeme::listeImages = newListeImages;
}

void Systeme::addImage(Mat image){
    Systeme::listeImages.push_back(image);
}

/*void Systeme::removeImage(Mat image){

}*/




