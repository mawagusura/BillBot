#include <math.h>
#include <vector>
#include <time.h>
#include <limits>
#include "../../include/classes/piece.h"
#include "../../include/fonctionnement/optimisation.h"
#include <algorithm>

using namespace std;

const int screenHeight = 600;
const int screenWidth = 800;

using namespace cv;
using namespace std;

vector<Piece> DNA::pieces;



void judgeFitnessNormalize(float minDist, float maxDist, vector<DNA> &pop) {
    float sum = 0;
    int len = pop.size();

    //on affecte une fitness à chaque pièce, ici fitness = (distance de la population - distance minimale) / (distance max - distnace min)
    for(int i = 0; i < len; i++)
        sum += pop[i].mapFitness(minDist, maxDist);

    //on transforme les fitness en probabilité entre 0 et 1 par rapport à la somme des fitness de la population
    for(int i = 0; i < len; i++)
        pop[i].normalizeFitness(sum);

    //on trie la population par rapport à leur fitness
    sort(pop.begin(), pop.end());
}

DNA pickOne(vector<DNA> &pop) {
    int index = -1;
    //r entre 0 et 1
    float r = static_cast <float> (rand()) / static_cast <float> (RAND_MAX);

    //on choisit le membre en fonction des fitness de la population : plus elle petite, plus il a de chances d'être choisi
    while(r >= 0) {
        index++;
        r -= pop[index].fitness;
    }
    return pop[index];
}

int getDist(Point a, Point b){
   return  ((a.x - b.x)*(a.x - b.x)+(a.y - b.y)*(a.y - b.y));
}

int DNA::nbPieces;

int executeOpti(vector< pair<PieceType, int> > piecesEligibles)
{
    vector<Piece> piecesTemp;
    vector<Piece> pieces;

    //Point reference
    Point pref = Point(0,0);

    for(int i = 0; i < piecesEligibles.size(); i++) {
        if(piecesEligibles[i].second != 0) {
            vector<Piece> piecesTemp = piecesEligibles[i].first.getListePiece();
            vector<int> distances;

            for(int j = 0; j < piecesTemp.size(); j++) {
                distances.push_back(getDist(pref, piecesTemp[j].getCoord()));
            }

            bool inversion;
            int len = distances.size();
            do {
                inversion = false;

                for(int j = 0; j < len -1; j++) {
                    if(distances[j] > distances[j+1]) {
                        int dt = distances[j];
                        Piece pt = piecesTemp[j];

                        distances[j] = distances[j+1];
                        distances[j+1] = dt;

                        piecesTemp[j] = piecesTemp[j+1];
                        piecesTemp[j+1] = pt;

                        inversion = true;
                    }
                    len--;
                }
            } while(inversion);

            for(int j = 0; j < piecesEligibles[i].second; j++)
                pieces.push_back(piecesTemp[j]);
        }
    }

    float recordDistance = numeric_limits<float>::infinity();
    //meilleure population
    DNA bestEver;
    //population optimale sur un tour donné, ne sert que poiur l'affichage
    DNA bestNow;
    vector<DNA> population;

    int popTotal = 400;
    int membTotal = 0;
    int membLimit = 40000;

    int nbPieces = pieces.size();
    DNA::nbPieces = nbPieces;

    srand(time(NULL));

    float minDist = numeric_limits<float>::infinity();
    float maxDist = 0;


    DNA::pieces = pieces;

    //on crée une population aléatoire
    bool stop = false;

    cout << "nb de pieces : " << nbPieces << endl;
    cout << "nb d'individus dans la population : " << popTotal << endl;
    cout << "nb de generations : " << membLimit / popTotal << endl;


    for(int i = 0; i < popTotal; i++) {
        population.push_back(DNA(nbPieces));
    }

        try {

        while(!stop) {
            if(membTotal <= membLimit) {
                minDist = numeric_limits<float>::infinity();
                maxDist = 0;

                for(int i = 0; i < popTotal; i++) {
                    membTotal++;
                    int d = population[i].calcDistance();

                    if(d < recordDistance) {
                        recordDistance = d;
                        bestEver = population[i];
                    }

                    if(d < minDist) {
                        minDist = d;
                        bestNow = population[i];
                    }

                    if(d > maxDist)
                        maxDist = d;
                }

                judgeFitnessNormalize(minDist, maxDist, population);
                //population.resize(popTotal);

                vector<DNA> newPop;
                vector<int> order;

                for(int i = 0; i < popTotal; i++) {
                    DNA a = pickOne(population);
                    DNA b = pickOne(population);

                    order = a.crossOver(b);
                    //population.push_back(DNA(nbPieces, order));
                    newPop.push_back(DNA(nbPieces, order));
                }

                for(int i = 0; i < popTotal; i++) {
                    membTotal++;
                    int d = newPop[i].calcDistance();

                    if(d < recordDistance) {
                        recordDistance = d;
                        bestEver = newPop[i];
                        cout << "longueur du meilleur chemin : " << d << endl;
                    }

                    if(d < minDist) {
                        minDist = d;
                        bestNow = newPop[i];
                    }

                    if(d > maxDist)
                        maxDist = d;
                }

                judgeFitnessNormalize(minDist, maxDist, newPop);
                population.insert(population.end(), newPop.begin(), newPop.end());
                newPop = vector<DNA>();

                sort(population.begin(), population.end());
                population.resize(popTotal);

            }
            else {
                stop = true;
                cout << "Limite atteinte" << endl;
            }
        }
    }
      catch(bad_alloc e) {
                    cout << "Porbleme !" << endl;
    }

    vector<Point> points;
    vector<float> labels;

    for(int i = 0; i < nbPieces; i++){
        Point p = pieces[bestEver.order[i]].getCoord();
        points.push_back(p);

        PieceType pt = *(pieces[bestEver.order[i]].getType());
        labels.push_back(pt.getValeur());
    }

    namedWindow("Optimisation", CV_WINDOW_AUTOSIZE);

    Mat img = Mat(screenHeight,screenWidth,CV_8UC3,Scalar(255,255,255));

    for(int i = 0; i < nbPieces-1; i++){
        circle(img, points[i], 7, Scalar(0,0,0),-1);
        line(img, points[i], points[i+1], Scalar(0,0,0), 2);

        ostringstream oss;
        oss << labels[i];

        putText(img, oss.str(), points[i], FONT_HERSHEY_SIMPLEX, 1, Scalar(0, 0, 0), 2);
    }

    circle(img, points[nbPieces-1], 7, Scalar(0,0,0), -1);
    line(img, points[nbPieces-1], points[0], Scalar(0,0,0), 2);

    ostringstream oss;
    oss << labels[nbPieces-1];

    putText(img, oss.str(), points[nbPieces-1], FONT_HERSHEY_SIMPLEX, 1, Scalar(0, 0, 0), 2);

    imshow("Optimisation",img);
    waitKey(0);
    destroyWindow("Optimisation");
    return 0;
}

DNA::DNA() {}

DNA::DNA(int total) {
    dist = numeric_limits<float>::infinity();
    fitness = 0;

    for(int i = 0; i < total; i++)
        order.push_back(i);

    for(int i = 0; i < 100; i++)
        shuffle();
}

DNA::DNA(int total, vector<int> &_order){
    dist = numeric_limits<float>::infinity();
    fitness = 0;

    order = _order;

    if(static_cast <float> (rand()) / static_cast <float> (RAND_MAX) < murate) {
        shuffle();
    }
}

DNA::~DNA() {
    order = vector<int>();
}

void DNA::shuffle() {
    int i = rand()%order.size();
    int j = rand()%order.size();
    _swap(i, j);
}

void DNA::_swap(int i, int j) {
    int tmp = order[i];
    order[i] = order[j];
    order[j] = tmp;
}

//calcul de la distance totale entre chaque pièces d'un membre d'une population donnée
float DNA::calcDistance() {
    float sum = 0;
    int pieceAIndex;
    int pieceBIndex;
    Piece pieceA;
    Piece pieceB;

    for(int i = 0; i < nbPieces - 1; i++) {
        pieceAIndex = order[i];
        pieceA = pieces[pieceAIndex];
        pieceBIndex = order[i+1];
        pieceB = pieces[pieceBIndex];

        float a = pieceB.getCoord().x - pieceA.getCoord().x;
        float b = pieceB.getCoord().y - pieceB.getCoord().y;
        float d = a*a + b*b;

        sum += d;
    }

    pieceA = pieces[order[nbPieces-1]];
    pieceB = pieces[order[0]];

    float a = pieceB.getCoord().x - pieceA.getCoord().x;
    float b = pieceB.getCoord().y - pieceA.getCoord().y;
    float d = a*a + b*b;

    sum += d;
    dist = sum;

    return dist;
}

float DNA::mapFitness(float minD, float maxD) {
    fitness = (dist - minD) / (maxD - minD);
    fitness = pow(fitness, 4);
    return fitness;
}

void DNA::normalizeFitness(int total) {
    fitness /= total;
}

vector<int> slice(const vector<int> &v, int start = 0, int end = -1) {
    int oldlen = DNA::nbPieces;
    int newlen;

    if (end == -1 or end >= oldlen){
        newlen = oldlen-start;
    } else {
        newlen = end-start;
    }

    vector<int> nv(newlen);

    for (int i = 0; i < newlen; i++) {
        nv[i] = v[start+i];
    }
    return nv;
}

vector<int> DNA::crossOver(DNA &other) {
    int start = rand()%nbPieces;
    int _end = rand()%(nbPieces-start) + (start+1);

    vector<int> newOrder = slice(order, start, _end);
    int leftOver = nbPieces - newOrder.size();
    int _count = 0;
    int i = 0;
    int len = newOrder.size();

    while(_count < leftOver && i<nbPieces) {
        int piece = other.order[i];
        bool included = false;
        int j = 0;

        while(j < len && !included) {
            included = newOrder[j] == piece;
            j++;
        }

        if(!included) {
            newOrder.push_back(piece);
            _count++;
            len++;
        }
        i++;
    }
    return newOrder;
}


bool operator<(DNA const &a, DNA const &b) {
    return a.fitness < b.fitness;
}




























