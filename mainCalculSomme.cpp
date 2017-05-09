#include <iostream>
#include <ctime>

using namespace std;

//retourne un tableau d'entiers correspondant aux nombre de pièces nécessaires de chaque type
int* somme(int *values, int *dispos, int entry, int valuesSize) {
    clock_t t1, t2;

    t1 = clock();

    int bestScore = INT_MAX;
    int *bestSolution = NULL;

    int solution[valuesSize];
    int start = 0, score = 0;

    while(start >= 0) {

        for(int i = start; i < valuesSize; i++) {
            solution[i] = min(entry / values[i], dispos[i]);
            entry -= solution[i] * values[i];
            score += solution[i];
        }

        if(entry == 0) {
            if(score < bestScore) {
                bestScore = score;

                //bestSolution = (int*) malloc(sizeof(int) * valuesSize);
                bestSolution = new int[valuesSize];

                for(int i = 0; i < valuesSize; i++)
                    bestSolution[i] = solution[i];
            }
        }

        start = valuesSize - 1;

        while(start >= 0 && solution[start] == 0)
            start--;

        if(start >= 0) {
            solution[start]--;
            score--;
            entry += values[start];
            start++;
        }
    }

    t2 = clock();
    printf("Temps d'execution : %f\n", (float)(t2-t1)/CLOCKS_PER_SEC);

    return bestSolution;
}

int main(int argc, char** argv) {
    int valuesSize = 8;
    //valeurs
    int values[] = {200, 100, 50, 20, 10, 5, 2, 1};
    //nombre de pièces disponibles pour chaque valeur
    int dispos[] = {35, 60, 50, 5, 5, 5, 5, 5};

    //somme voulue
    int entry = 10000;

    //calcul de la solution
    int* solution = somme(values, dispos, entry, valuesSize);

    //affichage
    printf("Somme voulue : %d (en centimes)\n\n", entry);

    printf("[");
    for(int i = 0; i < valuesSize - 1; i++) {
        printf("%d\t", values[i]);
    }
    printf("%d] : Valeurs\n", values[valuesSize-1]);

    printf("[");
    for(int i = 0; i < valuesSize - 1; i++) {
        printf("%d\t", dispos[i]);
    }
    printf("%d] : Disponibilites\n", dispos[valuesSize-1]);

    //affichage de la solution
    if(solution != NULL) {
        printf("[");
        for(int i = 0; i < valuesSize - 1; i++) {
            printf("%d\t", solution[i]);
        }
        printf("%d] : Solution\n\n", solution[valuesSize-1]);

        for(int i = 0; i < valuesSize; i++) {
            if(solution[i] != 0) {
                printf("%d piece(s) de %d, ", solution[i], values[i]);
            }
        }
        printf("\n");

        delete solution;

    } else {
        printf("\nPas de solution\n");
    }

    return 0;
}
