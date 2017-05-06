#ifndef SYSTEME_H
#define SYSTEME_H

#include "Piece.h"

class Systeme
{
    public:
        //Constructeur
        Systeme();
        virtual ~Systeme();

        //--------------------------//
        //          SUIVI           //
        //--------------------------//

        //Methode Static
        static int checkSimilitude(Piece,Piece);
        static Piece recherchePiece(cv::Mat img2, Piece piece);


        //--------------------------//
        //       DETECTION          //
        //--------------------------//



        //--------------------------//
        //      Reconnaissance      //
        //--------------------------//




        //--------------------------//
        //      OPTIMISATION        //
        //--------------------------//





    protected:

    private:
};

#endif // SYSTEME_H
