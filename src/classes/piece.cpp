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

Piece::Piece(Point newCoord, int newRayon,Mat newImgPiece){
    coord = newCoord;
    rayon = newRayon;
    imgPiece = roiPiece(newImgPiece);
    type = NULL;
}

Piece::Piece(Point newCoord, int newRayon,Mat newImgPiece, PieceType *newType){
    coord = newCoord;
    rayon = newRayon;
    imgPiece = roiPiece(newImgPiece);
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

/*
Methode
*/

// Retourne une image de la pièce
Mat Piece::roiPiece(Mat image){
    //Rectangle contenant les données du point de coordonnées:
    Rect r(coord.x-rayon, coord.y-rayon, rayon*2,rayon*2);

    // Obtenir la ROI de l'image grise:
    Mat roi(image, r);

    // créer un masque noir de même taille:
    Mat mask(roi.size(), roi.type(), Scalar::all(0));

    // créer un cercle blanc dans le mask
    circle(mask, Point(rayon,rayon), rayon, Scalar::all(255), -1);

    // combine roi & mask:
    Mat roiImage = roi & mask;

    return roiImage;
}
