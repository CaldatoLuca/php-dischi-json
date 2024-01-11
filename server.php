<?php

$disks = [
    [
        "titolo" => "Abbey Road",
        "artista" => "The Beatles",
        "anno" => 1969,
        "genere" => "Rock",
        "src" => "https://picsum.photos/200/300"

    ],
    [
        "titolo" => "Thriller",
        "artista" => "Michael Jackson",
        "anno" => 1982,
        "genere" => "Pop",
        "src" => "https://picsum.photos/200/300"
    ],
    [
        "titolo" => "The Dark Side of the Moon",
        "artista" => "Pink Floyd",
        "anno" => 1973,
        "genere" => "Progressive Rock",
        "src" => "https://picsum.photos/200/300"

    ],
    [
        "titolo" => "Rumours",
        "artista" => "Fleetwood Mac",
        "anno" => 1977,
        "genere" => "Soft Rock",
        "src" => "https://picsum.photos/200/300"

    ],
    [
        "titolo" => "Back in Black",
        "artista" => "AC/DC",
        "anno" => 1980,
        "genere" => "Hard Rock",
        "src" => "https://picsum.photos/200/300"

    ],
    [
        "titolo" => "A Night at the Opera",
        "artista" => "Queen",
        "anno" => 1975,
        "genere" => "Rock",
        "src" => "https://picsum.photos/200/300"
    ],

];

header('Content-Type: application/json');
echo json_encode($disks);
