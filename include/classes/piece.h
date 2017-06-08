#ifndef PIECE_H
#define PIECE_H

#include "../includesDeBase.h"

class PieceType;

class Piece
{
    private:
    /*
        ATTRIBUTS
    */
    Point coord;
    int rayon;
    Mat imgPiece;
    PieceType *type;

    protected:


    public:
    /*
        CONSTRUCTEURS
    */
    Piece();
    Piece(Point newCoord, int newRayon,Mat newImgPiece, PieceType *newType);

    /*
        GETTERS
    */
    Point getCoord() const ;
    int getRayon() const ;
    Mat getImgPiece();
    PieceType* getType();

    /*
        SETTERS
    */
    void setCoord(Point newCoord);
    void setRayon(int newRayon);
    void setImgPiece(Mat image);
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
};

#endif // PIECE_H
