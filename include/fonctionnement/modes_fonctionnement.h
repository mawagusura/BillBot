#ifndef DET_MOD_FONC_H
#define DET_MOD_FONC_H

#include "../includesDeBase.h"
#include "../classes/pieceType.h"
#include "../classes/piece.h"

using namespace std;

int include(vector<PieceType>nosPieces, Piece unePiece);
vector< pair<PieceType,int> > modeDevise(string devise);
vector< pair<PieceType,int> > modeValeur(string devise, float val);
vector< pair<PieceType,int> > modeSomme(string devise, float somme);
vector< pair<PieceType,int> > mainFonctionnement(int mode, string devise = "Euro", float val = 0.0);



#endif // DET_MOD_FONC_H

