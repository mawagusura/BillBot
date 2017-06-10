#ifndef PIECE_H
#define PIECE_H

#include "pieceType.h"
#include "../includesDeBase.h"

class PieceType;

class Piece
{
    private:
    /*
        ATTRIBUTS
    */
    cv::Point coord;
    int rayon;
    cv::Mat imgPiece;
    PieceType *type;

    protected:


    public:
    /*
        CONSTRUCTEURS
    */
    Piece();
    Piece(cv::Point newCoord, int newRayon,cv::Mat newImgPiece);
    Piece(cv::Point newCoord, int newRayon,cv::Mat newImgPiece, PieceType *newType);

    /*
        GETTERS
    */
    cv::Point getCoord() const ;
    int getRayon() const ;
    cv::Mat getImgPiece();
    PieceType* getType();

    /*
        SETTERS
    */
    void setCoord(cv::Point newCoord);
    void setRayon(int newRayon);
    void setImgPiece(cv::Mat image);
    void setType(PieceType* type);

    bool operator <(const Piece& rhs) const
    {
        return coord.x < rhs.coord.x ||
        coord.y < rhs.coord.y;
    }

    bool operator ==(const Piece& rhs) const
    {
        return coord.x == rhs.coord.x
        && coord.y < rhs.coord.y;
    }

    /*
        Methode
    */
    cv::Mat roiPiece(cv::Mat);
    void updateImgPiece(cv::Mat);

};



#endif // PIECE_H
