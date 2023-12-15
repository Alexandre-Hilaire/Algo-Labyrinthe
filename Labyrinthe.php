<?php

$labyrinthe =[
    [".", "M", '.', '.', '.', '.', '.'],
    ['.', "M", '.', "M", "M", '.', "M"],
    ['.', "M", '.', "M", '.', '.', '.'],
    ['.', '.', '.', '.', "M", "M", '.'],
    ['.', "M", '.', "M", '.', '.', '.'],
    ['.', "M", '.', '.', '.', "M", '.']

];


function affiche_terrain($labyrinthe): void
{

//    petite boucle pour simuler un rafraichissement de la console
    for ($i = 0; $i < 50; $i++) {
        echo PHP_EOL;
    }

//    Boucle pour afficher le tableau 2D
    foreach ($labyrinthe as $row) {
        foreach ($row as $elements){
            print_r(" " . $elements[0] . " ");
        }
        echo PHP_EOL;
    }
}

function check($case_joueur, $labyrinthe) {
    $position_joueur_x = $case_joueur[1];
    $position_joueur_y = $case_joueur[0];
    $x_max_length = count($labyrinthe[1])-1;
    $y_max_length = count($labyrinthe[0])-1;

    if (($position_joueur_y < $y_max_length && ($labyrinthe[$position_joueur_y + 1][$position_joueur_x] === '.')) || $labyrinthe[$position_joueur_y + 1][$position_joueur_x] === 'G' ){
        return [$position_joueur_y + 1, $position_joueur_x];
    }
    else if (($position_joueur_x < $x_max_length && ($labyrinthe[$position_joueur_y][$position_joueur_x + 1] === '.')) || $labyrinthe[$position_joueur_y][$position_joueur_x + 1] === 'G') {
        return [$position_joueur_y, $position_joueur_x + 1];
    }
    else if ($position_joueur_y > 0  && ($labyrinthe[$position_joueur_y - 1][$position_joueur_x] === '.' || $labyrinthe[$position_joueur_y - 1][$position_joueur_x] === 'G') ) {
        return [$position_joueur_y -1, $position_joueur_x];
    }
    else if (($position_joueur_x > 0 && ($labyrinthe[$position_joueur_y][$position_joueur_x - 1] === '.')) || $labyrinthe[$position_joueur_y][$position_joueur_x - 1] === 'G') {
        return [$position_joueur_y, $position_joueur_x - 1];
    }
    else {
        return "bloqué";
    }
}
function remonter($case_joueur,$labyrinthe){
    while (check($case_joueur, $labyrinthe) === "bloqué"){
        $case_joueur = $labyrinthe[$case_joueur[0]][$case_joueur[1]];
    }
    return $case_joueur;
}

$case_depart = 'S';
$case_arrivee = 'G';
$coordonees_case_depart = [0, 0];
$coordonees_case_arrivee = [2, 4];
$pas = 0;

$labyrinthe[$coordonees_case_depart[0]][$coordonees_case_depart[1]] = $case_depart;
$labyrinthe[$coordonees_case_arrivee[0]][$coordonees_case_arrivee[1]] = $case_arrivee;

$case_joueur = $coordonees_case_depart;


affiche_terrain($labyrinthe);
While (($case_joueur) !== $coordonees_case_arrivee){
    sleep(2);
    $case_precedente = $case_joueur;
    if (check($case_joueur, $labyrinthe) === "bloqué") {
        echo "bloqué";
        $case_joueur = remonter($case_joueur, $labyrinthe);
    } else {
        $case_joueur = check($case_joueur, $labyrinthe);
        $labyrinthe[$case_joueur[0]][$case_joueur[1]] = [$case_precedente[0], $case_precedente[1]];
        $pas++;
    }


    affiche_terrain($labyrinthe);
}
echo "La sortie à été trouvée !";
echo $pas;