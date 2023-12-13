<?php
$labyrinthe =[
    [0, 1, 0, 0, 0, 0, 0],
    [0, 1, 0, 1, 1, 0, 1],
    [0, 1, 0, 1, 'G', 0, 0],
    [0, 0, 0, 0, 1, 1, 0],
    [0, 1, 0, 1, 0, 0, 0],
    [0, 1, 0, 0, 0, 1, 0]

];

foreach ($labyrinthe as $row){
    echo " " . implode("\t", $row) . " " . PHP_EOL;
}