#ifndef PIECE_H
#define PIECE_H

#include <opencv2/opencv.hpp>
#include <opencv/cv.h>
#include <opencv/highgui.h>
#include <opencv2/imgproc/imgproc.hpp>
#include <stdio.h>

class Piece
{
    public:
        //Constructeur
        Piece();
        Piece(cv::Point,int,cv::Mat);
        virtual ~Piece();

        //--------------------------//
        //          SUIVI           //
        //--------------------------//

        //Methode
        cv::Mat loadRoiPiece(cv::Mat);

        //--------------------------//
        //       DETECTION          //
        //--------------------------//



        //--------------------------//
        //      Reconnaissance      //
        //--------------------------//




        //--------------------------//
        //      OPTIMISATION        //
        //--------------------------//


        //--------------------------//
        //      GETTER & SETTER     //
        //--------------------------//
        int getRadius();
        cv::Mat getImg();
        cv::Point getPos();
        void setPos(cv::Point);

    protected:

    private:
        cv::Point pos;      //Position de la pi�ce
        int radius;         //Rayon de la pi�ce
        cv::Mat imgPce;     //Image de la pi�ce
};

#endif // PIECE_H
