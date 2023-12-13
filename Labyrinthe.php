<?php
$labyrinthe =[
    ['.', '□', '.', '.', '.', '.', '.'],
    ['.', '□', '.', '□', '□', '.', '□'],
    ['.', '□', '.', '□', '.', '.', '.'],
    ['.', '.', '.', '.', '□', '□', '.'],
    ['.', '□', '.', '□', '.', '.', '.'],
    ['.', '□', '.', '.', '.', '□', '.']

];


function affiche_terrain($labyrinthe) {

//    petite boucle pour simuler un rafraichissement de la console
    for ($i = 0; $i < 50; $i++) {
        echo PHP_EOL;
    }

//    Boucle pour afficher le tableau 2D
    foreach ($labyrinthe as $row) {
        echo " " . implode("\t", $row) . " " . PHP_EOL;
    }
}

function check($case_joueur, $labyrinthe) {
    $position_joueur_x = $case_joueur[0];
    $position_joueur_y = $case_joueur[1];
    $x_max_length = count($labyrinthe[0]) -1;
    $y_max_length = count($labyrinthe) -1;

    if ($position_joueur_y < $y_max_length && $labyrinthe[$position_joueur_y + 1][$position_joueur_x] !== "□" && $labyrinthe[$position_joueur_y + 1][$position_joueur_x] === '.') {
        return "sud";
    }
    if ($position_joueur_x < $x_max_length && $labyrinthe[$position_joueur_y][$position_joueur_x + 1] !== "□" && $labyrinthe[$position_joueur_y][$position_joueur_x + 1] === '.') {
        return "est";
    }
    if ($position_joueur_y > 0 && $position_joueur_y < $y_max_length && $labyrinthe[$position_joueur_y - 1][$position_joueur_x] !== "□" && $labyrinthe[$position_joueur_y - 1][$position_joueur_x] === '.') {
        return "nord";
    }
    if ($position_joueur_x > 0 && $position_joueur_x <= $x_max_length && $labyrinthe[$position_joueur_y][$position_joueur_x - 1] !== "□" && $labyrinthe[$position_joueur_y][$position_joueur_x - 1] === '.') {
        return "ouest";
    }
    return "bloqué";
}

$case_depart = 'S';
$case_arrivee = 'G';
$coordonees_case_depart = [0, 0];
$coordonees_case_arrivee = [2, 4];

$labyrinthe[$coordonees_case_depart[0]][$coordonees_case_depart[1]] = $case_depart;
$labyrinthe[$coordonees_case_arrivee[0]][$coordonees_case_arrivee[1]] = $case_arrivee;

$case_joueur = $coordonees_case_depart;

sleep(2);
affiche_terrain($labyrinthe);
//While (($case_joueur) !== $case_arrivee){
    echo check($case_joueur, $labyrinthe);
//}