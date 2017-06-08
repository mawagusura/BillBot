#ifndef DET_REC_SUIV_H
#define DET_REC_SUIV_H

#include "../includesDeBase.h"
#include "../classes/piece.h"
#include <iostream>
#include <time.h>
#include <array>
#include <chrono>

class suivi
{
    public:

        static int checkSimilitude(Piece,Piece);
        static int getMSE(Piece,Piece);
        static Piece recherchePiece(cv::Mat,Piece);
        static cv::Point rechAmelioree(cv::Mat,Piece);
        static cv::Point filtreParticule(cv::Mat,int,Piece);
        static void suiviPiece(std::vector<Piece>,cv::Mat);
        static int random(int,int);

    protected:

    private:
};

#endif // SUIVI_H
