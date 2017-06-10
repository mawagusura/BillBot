#ifndef DNA_H
#define DNA_H
#include <vector>
#include "../classes/piece.h"

using namespace std;

class DNA
{
    public:
        DNA();
        DNA(int total);
        DNA(int total, vector<int> &_order);
        ~DNA();

        static constexpr float murate = 0.3;
        static vector<Piece> pieces;
        static int nbPieces;
        float dist;
        float fitness;
        vector<int> order;

        float calcDistance();
        float mapFitness(float minD, float maxD);
        void normalizeFitness(int total);
        vector<int> crossOver(DNA &other);

    protected:

    private:
        void shuffle();
        void _swap(int i, int j);
};

bool operator<(DNA const &a, DNA const &b);


int executeOpti(vector< pair<PieceType, int> > piecesEligibles);
void judgeFitnessNormalize(float minDist, float maxDist, vector<DNA> &pop);
DNA pickOne(vector<DNA> &pop);

#endif // DNA_H

