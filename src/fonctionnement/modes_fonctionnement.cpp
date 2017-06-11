#include "../../include/fonctionnement/modes_fonctionnement.h"
#include <iostream>
#include <vector>
#include <algorithm>
#include "../../include/fonctionnement/systeme.h"

using namespace std;

//-----------------------------------------------------------------------------------------------
//fonction qui cherche si une pièce est présente dans une liste

int include(vector<PieceType>nosPieces, Piece unePiece)
{
    int i=0;
    bool included=false;
    while (i<nosPieces.size() && !included)
    {
        if (nosPieces[i] == *(unePiece.getType()))
        {
            included=true;
        }
        else i++;
    }
    return nosPieces[i] == *(unePiece.getType())?i:-1;
}

//--------------------------------------------------------------------------------------------
//mode 1 : sélection par devise
vector< pair<PieceType,int> > modeDevise(string devise)
{
    int i = 0;
    bool found = false;
    vector< pair<PieceType,int> > piecesChoisies;

    while(i < Systeme::listeDevises.size() && !found) {
        found = Systeme::listeDevises[i].getNom() == devise;
        i++;
    }
    i--;

    if(found) {
        std::vector<PieceType> listePieces = Systeme::listeDevises[i].getListePieceType();
        //tableau des types de pièces présents sur le tapis répondant aux critères choisis
        std::vector<PieceType> pieces;
        //tableau des quantités de pièces correspondant à chaque type du tableau "pieces"
        std::vector<int> quantite;

        for(int i = 0; i < listePieces.size(); i++) {
            pieces.push_back(listePieces[i]);
            quantite.push_back(listePieces[i].getListePiece().size());
        }

        for(int i = 0; i < pieces.size(); i++) {
            piecesChoisies.push_back(make_pair(pieces[i], quantite[i]));
        }
    }

    else
        throw string("Devise non presente sur le tapis.");

    return piecesChoisies;
}

//--------------------------------------------------------------------------------------------
//mode 2 : sélection par valeur d'une devise
vector< pair<PieceType,int> > modeValeur(string devise, float val)
{
    int i = 0;
    bool found = false;
    vector< pair<PieceType,int> > piecesChoisies;

    while(i < Systeme::listeDevises.size() && !found) {
        found = Systeme::listeDevises[i].getNom() == devise;
        i++;
    }
    i--;

    if(found) {
        std::vector<PieceType> listeTypes = Systeme::listeDevises[i].getListePieceType();

        i = 0;
        found = false;

        while(i < listeTypes.size() && !found) {
            found = (listeTypes[i].getValeur() == val);
            i++;
        }
        i--;

        if(found) {
            piecesChoisies.push_back(make_pair(listeTypes[i], listeTypes[i].getListePiece().size()));
        }

        else
            throw string("Valeur non presente sur le tapis.");
    }

    else
        throw string("Devise non presente sur le tapis.");

    return piecesChoisies;
}

//--------------------------------------------------------------------------------------------
//mode 3 : sélection par somme
vector< pair<PieceType,int> > modeSomme(string devise, float somme)
{
    vector< pair<PieceType,int> > listePieces = modeDevise(devise);

    bool inversion;
    int longueur = listePieces.size();

    do {
        inversion = false;

        for(int i = 0; i < longueur-1; i++)
        {
            if (listePieces[i].first.getValeur() < listePieces[i+1].first.getValeur())
            {
                pair<PieceType, int> temp = listePieces[i];

                listePieces[i] = listePieces[i+1];
                listePieces[i+1] = temp;

                inversion = true;
            }
        }
        longueur--;
    } while(inversion);

    int taille = listePieces.size();

    PieceType pieces[taille];
    int quantites[taille];

    for(int i = 0; i < listePieces.size(); i++) {
        pieces[i] = listePieces[i].first;
        quantites[i] = listePieces[i].second;
    }

    int original[taille] ;
    int result[taille];
    float sommeOriginale = somme;
    int i = 0;

    for (int j = 0; j < taille; j++)
    {
        original[j] = quantites[j];
        result[j] = 0;
    }

    while (i < taille && somme > 0)
    {
        if (quantites[i] > 0)
        {
            if (somme-pieces[i].getValeur() >= 0)
            {
                quantites[i]--;
                somme-=pieces[i].getValeur();
            }
            else i++;
        }
        else i++;
    }

    int total=0;
    for (i = 0; i < taille; i++)
    {
        result[i] = original[i]-quantites[i];
        total += result[i]*pieces[i].getValeur();
    }

    vector< pair < PieceType, int > > piecesChoisies;

    if (total!=sommeOriginale)
        throw string("Somme impossible a atteindre avec les pieces presentes.");

    else
        for(int i = 0; i < taille; i++)
            piecesChoisies.push_back(make_pair(pieces[i], result[i]));

    return piecesChoisies;
}

//----------------------------------------------------------------------------------------
//MAIN
//val représente somme ou valeur

vector< pair<PieceType,int> > mainFonctionnement(int mode, string devise, float val)
{
    //choisir le mode
    switch (mode)
    {
        case 1 : return(modeDevise(devise));
        break;
        case 2 : return(modeValeur(devise, val));
        break;
        case 3 : return(modeSomme(devise, val));
        break;
        default :
            cout<<"erreur"<<endl;
            vector< pair<PieceType,int> > t;
            return t;
    }
}
