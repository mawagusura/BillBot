#include <iostream>

using namespace std;

void printCoins(int denom[], int n) {
  if (n > 0) {
   printCoins(denom, n - denom[n]);
   cout << denom[n] << "\n";
  }
 }

void makeChangeLimitedCoins(int *D, int len,  int *S, int N) {
  int C[N+1];
  C[0] = 0;

  int track[N+1][len];
  for (int i = 0; i < len; i++) {
   track[0][i] = S[i];
  }

  int denom[N+1];

  for (int j=1; j<=N; j++) {
   C[j] = INT_MAX;
   for (int k=0; k<len ; k++) {
    if (j >= D[k] && (C[j-D[k]] < INT_MAX) && (track[j-D[k]][k] > 0)) {
     if ((C[j] > 1+C[j-D[k]])) {
      C[j] =  1 + C[j-D[k]];
      denom[j] = D[k];
      track[j][k] = track[j-D[k]][k] - 1;
     } else {
      track[j][k] = track[j-D[k]][k];
     }
    } else if (j < D[k] ){
     track[j][k] = track[0][k];
    }
   }
  }

  printCoins(denom, N);
}

int main() {

    int len = 7;

    int D[]     = {200, 100, 50, 20, 10, 5, 1};
    int limit[] = {160, 500, 78, 45, 39, 68, 55};

    makeChangeLimitedCoins(D, len, limit, 34000);

    return 0;
}
