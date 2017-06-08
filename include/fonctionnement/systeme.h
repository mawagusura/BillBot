#ifndef SYSTEME_H
#define SYSTEME_H


#include <vector>
#include "../includesDeBase.h"
#include "../classes/devise.h"


class Systeme
{

    /*
    classe de stockage des objets utilisés
    */
    private:
    /*
        ATTRIBUTS
    */
    static std::vector<Devise> listeDevises;
    static std::vector<Piece> listePieces;
    static std::vector<Mat> listeImages;

    protected:

    public:
    /*
        GETTERS
    */
    static std::vector<Devise> getListeDevises();
    static std::vector<Piece> getListePieces();
    static std::vector<Mat> getListeImages();

    /*
        SETTERS
    */
    static void setListeDevises(std::vector<Devise> newListeDevises);
    static void addDevise(Devise devise);
    //static void removeDevise(Devise devise);
    static void setListePieces(std::vector<Piece> newListePieces);
    static void addPiece(Piece piece);
    //static void removePiece(Piece piece);
    static void setListeImages(std::vector<Mat> newListeImages);
    static void addImage(Mat image);
    //static void removeImage(Mat image);


};

#endif // SYSTEME_H


