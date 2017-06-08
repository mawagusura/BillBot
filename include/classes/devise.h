#ifndef DEVISE_H
#define DEVISE_H

#include <map>
#include <vector>
#include "../includesDeBase.h"
#include "pieceType.h"
#include <string>

/*
struct DeviseCompare
{
   bool operator() (const Devise& lhs, const Devise& rhs) const
   {
       return lhs.nom < rhs.nom;
   }
};*/


class Devise
{
    private:
    /*
        ATTRIBUTS
    */
    string nom;
    std::map<Devise, float> conversions;
    std::vector<PieceType> listePieceType;

    protected:

    public:
    /*
        CONSTRUCTEURS
    */
    Devise();
    Devise(string newNom);
    Devise(string newNom, std::map<Devise, float> newConversions, std::vector<PieceType> newListePieceType);

    /*
        GETTERS
    */
    string getNom();
    std::map<Devise, float> getConversions();
    std::vector<PieceType> getListePieceType();

    /*
        SETTERS
    */
    void setNom(string newNom);
    void addConversion(Devise devise, float tauxConv);
    void removeConversion(Devise devise, float tauxConv);
    void setListePieceType(std::vector<PieceType> newListePieceType);
    void addPieceType(PieceType pieceType);
    void removePieceType(PieceType pieceType);

    bool operator <(const Devise& rhs) const
    {
        return nom < rhs.nom;
    }

    bool operator ==(const Devise& rhs) const
    {
        return nom == rhs.nom;
    }
};

#endif // DEVISE_H

/* USING MAPS :

  std::map<std::string, int> m;
  m["hello"] = 23;
  // check if key is present
  if (m.find("world") != m.end())
    std::cout << "map contains key world!\n";
  // retrieve
  std::cout << m["hello"] << '\n';
  std::map<std::string, int>::iterator i = m.find("hello");
  assert(i != m.end());
  std::cout << "Key: " << i->first << " Value: " << i->second << '\n';

*/

