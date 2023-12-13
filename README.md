# Algo-Labyrinthe

## Pseudo-code

```
plateau <- [x][y]
S <- case_départ
G <- case_arrivée
case_joueur <- case_départ
Tant que case actuelle != G
    Si possibilité d'aller en bas (case visée estvide ou n'est pas un mur)
        case_joueur[x][y-1]
        valeur_case_joueur <- coordonées case précédente
    Sinon si possibilité d'aller à droite (case visée estvide ou n'est pas un mur)
        case_joueur[x+1][y]
        valeur_case_joueur <- coordonées case précédente
    Sinon si possibilité d'aller en haut (case visée estvide ou n'est pas un mur)
        case_joueur[x][y+1]
        valeur_case_joueur <- coordonées case précédente
    Sinon si possibilité d'aller à gauche (case visée estvide ou n'est pas un mur)
        case_joueur[x-1][y]
        valeur_case_joueur <- coordonées case précédente    
    Sinon
        Tant que déplacement impossible (case visée n'est pas vide ou est un mur)
            case_joueur <- déplacement_case_précédente
        Fin tant que
```
