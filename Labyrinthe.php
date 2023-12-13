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
    sleep(2);
//    petite boucle pour simuler un rafraichissement de la console
    for ($i = 0; $i < 50; $i++) {
        echo PHP_EOL;
    }

//    Boucle pour afficher le tableau 2D
    foreach ($labyrinthe as $row) {
        echo " " . implode("\t", $row) . " " . PHP_EOL;
    }
}

//function check($case_joueur, $labyrinthe, $direction){
//    if
//    switch ($direction){
//        case "sud":
//
//            break;
//        case "est":
//
//            break;
//        case "nord":
//
//            break;
//        case "ouest":
//
//            break;
//    }
//    if (empty($case_cible) && $case_cible !== 1){
//
//    }
//}

$case_depart = 'S';
$case_arrivee = 'G';
$coordonees_case_depart = [0, 0];
$coordonees_case_arrivee = [2, 4];


$labyrinthe[$coordonees_case_depart[0]][$coordonees_case_depart[1]] = $case_depart;
$labyrinthe[$coordonees_case_arrivee[0]][$coordonees_case_arrivee[1]] = $case_arrivee;

affiche_terrain($labyrinthe);

$case_joueur = $coordonees_case_depart;
//$labyrinthe[$case_joueur[0]][$case_joueur[1]] = 'J';

affiche_terrain($labyrinthe);

//While (($case_joueur) !== $case_arrivee){
//
//}