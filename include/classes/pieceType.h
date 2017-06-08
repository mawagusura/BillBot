#ifndef PIECE_TYPE_H
#define PIECE_TYPE_H

#include <vector>
#include "piece.h"
#include "devise.h"
#include "../includesDeBase.h"

class Devise;
class Piece;

class PieceType
{
    private:
    /*
        ATTRIBUTS
    */
    Devise *devise;
    float valeur;
    cv::Mat imgPieceType;
    std::vector<Piece> listePiece;

    protected:

    public:
    /*
        CONSTRUCTEURS
    */
    PieceType();
    PieceType(Devise* newDevise, float newValeur, cv::Mat newImgPieceType);
    PieceType(Devise* newDevise, float newValeur, cv::Mat newImgPieceType, std::vector<Piece> newListePiece);

    /*
        GETTERS
    */
    Devise* getDevise();
    float getValeur();
    std::vector<Piece> getListePiece();
    cv::Mat getImgPieceType();

    /*
        SETTERS
    */
    void setDevise(Devise* newDevise);
    void setValeur(float newValeur);
    void setListePiece(std::vector<Piece> newListePiece);
    void addPiece(Piece piece);
    //void removePiece(Piece piece);
    void setImgPieceType(cv::Mat newImgPieceType);

    bool operator <(const PieceType& rhs) const
    {
        return devise < rhs.devise || (devise == rhs.devise && valeur < rhs.valeur);
    }

    bool operator ==(const PieceType& rhs) const
    {
        return devise == rhs.devise && valeur == rhs.valeur;
    }
};

#endif // PIECE_TYPE_H

