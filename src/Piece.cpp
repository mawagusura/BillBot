#include "Piece.h"

using namespace cv;

//-------------------------------//
//          Constructeur         //

Piece::Piece()
{
    pos= Point(0,0);
    radius=0;
    imgPce=0;
}

Piece::Piece(Point PosInit,int r,cv::Mat image)
{
    pos= PosInit;
    radius=r;
    imgPce=loadRoiPiece(image);
   // tpix=loadTabPix();
}

Piece::~Piece(){
}


        //--------------------------//
        //          SUIVI           //
        //--------------------------//


//---------------------------------------//
//              Methode                  //

// Retourne une image de la pièce
cv::Mat Piece::loadRoiPiece(cv::Mat image){
    //Rectangle contenant les données du point de coordonnées:
    Rect r(pos.x-radius, pos.y-radius, radius*2,radius*2);

    // Obtenir la ROI de l'image grise:
    Mat roi(image, r);

    // créer un masque noir de même taille:
    Mat mask(roi.size(), roi.type(), Scalar::all(0));

    // créer un cercle blanc dans le mask
    circle(mask, Point(radius,radius), radius, Scalar::all(255), -1);

    // combine roi & mask:
    Mat roiImage = roi & mask;

    return roiImage;
}



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


int Piece::getRadius(){
    return radius;
}

Mat Piece::getImg(){
    return imgPce;
}

void Piece::setPos(Point point){
    pos=point;
}

cv::Point Piece::getPos(){
    return pos;
}
