#include "../../include/classes/pieceType.h"
#include "../../include/classes/devise.h"

using namespace cv;


/*
    CONSTRUCTEURS
*/
PieceType::PieceType(){
    devise = NULL;
    valeur = 0;
    imgPieceType = 0;
}

PieceType::PieceType(Devise* newDevise, float newValeur, Mat newImgPieceType){
    devise = newDevise;
    valeur = newValeur;
    imgPieceType = newImgPieceType;
}

PieceType::PieceType(Devise* newDevise, float newValeur, Mat newImgPieceType, std::vector<Piece> newListePiece){
    PieceType(newDevise, newValeur, newImgPieceType);
    listePiece = newListePiece;
}


/*
    GETTERS
*/

Devise* PieceType::getDevise(){
    return devise;
}

float PieceType::getValeur(){
    return valeur;
}

std::vector<Piece> PieceType::getListePiece(){
    return listePiece;
}

Mat PieceType::getImgPieceType(){
    return imgPieceType;
}

/*
    SETTERS
*/

void PieceType::setDevise(Devise* newDevise){
    devise = newDevise;
}

void PieceType::setValeur(float newValeur){
    valeur = newValeur;
}

void PieceType::setListePiece(std::vector<Piece> newListePiece){
    listePiece = newListePiece;
}

void PieceType::addPiece(Piece piece){
    listePiece.push_back(piece);
}

/*
void PieceType::removePiece(Piece piece){
    struct cmpNode {
        Piece const &mapiece;
        cmpNode(Piece cp) : mapiece(cp) {}
        bool operator()(Piece const& candidatePiece) {
            return candidatePiece.getCoord() == mapiece.getCoord()
              && candidatePiece.getRayon() == mapiece.getRayon();
        }
    };

    listePiece.erase (
        std::remove_if (
            listePiece.begin(),
            listePiece.end(),
            //cmpNode(piece)
            [](const Piece p){return p == piece ;}
        ),
        listePiece.end()
    );
}
*/

void PieceType::setImgPieceType(Mat newImgPieceType){
    imgPieceType = newImgPieceType;
}

