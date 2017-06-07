#include "../../include/classes/devise.h"

using namespace cv;


/*
    CONSTRUCTEURS
*/
Devise::Devise(){
    nom = "";
}

Devise::Devise(String newNom){
    nom = newNom;
}

Devise::Devise(String newNom, std::map<Devise, float> newConversions, std::vector<PieceType> newListePieceType){
    nom = newNom;
    conversions = newConversions;
    listePieceType = newListePieceType;
}


/*
    GETTERS
*/
String Devise::getNom(){
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
void Devise::setNom(String newNom){
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


