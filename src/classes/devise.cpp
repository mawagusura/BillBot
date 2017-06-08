#include "../../include/classes/devise.h"


using namespace cv;
using namespace std;

/*
    CONSTRUCTEURS
*/
Devise::Devise(){
    nom = "";
}

Devise::Devise(string newNom){
    nom = newNom;
}

Devise::Devise(string newNom, std::map<Devise, float> newConversions, std::vector<PieceType> newListePieceType){
    nom = newNom;
    conversions = newConversions;
    listePieceType = newListePieceType;
}


/*
    GETTERS
*/
string Devise::getNom(){
    return nom;
}

std::map<Devise, float> Devise::getConversions(){
    return conversions;
}

std::vector<PieceType> Devise::getListePieceType(){
    return listePieceType;
}


/*
    SETTERS
*/
void Devise::setNom(string newNom){
    nom = newNom;
}

void Devise::addConversion(Devise devise, float tauxConv){
    conversions.insert(std::pair<Devise, float>(devise, tauxConv));
}

void Devise::removeConversion(Devise devise, float tauxConv){
    map<Devise,float>::iterator iter = conversions.find(devise) ;
    if( iter != conversions.end() )
        conversions.erase( iter );
    else puts( "not found" ) ;
}

void Devise::setListePieceType(std::vector<PieceType> newListePieceType){
    listePieceType = newListePieceType;
}

void Devise::addPieceType(PieceType pieceType){
    listePieceType.push_back(pieceType);
}

/*
void Devise::removePieceType(PieceType pieceType){

}
*/


