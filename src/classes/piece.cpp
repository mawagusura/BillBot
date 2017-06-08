#include "../../include/classes/piece.h"
#include "../../include/classes/pieceType.h"

using namespace cv;


/*
    CONSTRUCTEURS
*/
Piece::Piece(){
    coord = Point(0,0);
    rayon = 0;
    imgPiece = 0;
    type = NULL;
}

Piece::Piece(Point newCoord, int newRayon,Mat newImgPiece, PieceType *newType){
    coord = newCoord;
    rayon = newRayon;
    imgPiece = newImgPiece;
    type = newType;
}

/*
    GETTERS
*/
Point Piece::getCoord() const {
    return coord;
}

int Piece::getRayon() const {
    return rayon;
}

Mat Piece::getImgPiece(){
    return imgPiece;
}

PieceType* Piece::getType(){
    return type;
}


/*
    SETTERS
*/
void Piece::setCoord(Point newCoord){
    coord = newCoord;
}

void Piece::setRayon(int newRayon){
    rayon = newRayon;
}

void Piece::setImgPiece(Mat newImgPiece){
    imgPiece = newImgPiece;
}

void Piece::setType(PieceType* newType){
    type = newType;
}
