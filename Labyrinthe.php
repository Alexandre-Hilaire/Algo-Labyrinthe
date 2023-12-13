<?php
$labyrinthe =[
    [0, 1, 0, 0, 0, 0, 0],
    [0, 1, 0, 1, 1, 0, 1],
    [0, 1, 0, 1, 'G', 0, 0],
    [0, 0, 0, 0, 1, 1, 0],
    [0, 1, 0, 1, 0, 0, 0],
    [0, 1, 0, 0, 0, 1, 0]

];
$display = json_encode($labyrinthe, JSON_PRETTY_PRINT);
$format_display = str_replace((['[', ']', ',', '{', '}']), '', $display);

foreach ($labyrinthe as $row){
    echo " " . implode("\t", $row) . " " . PHP_EOL;
}