<?php

$disks = [
    [
        "titolo" => "Abbey Road",
        "artista" => "The Beatles",
        "anno" => 1969,
        "genere" => "Rock",
        "etichetta" => "Apple Records"
    ],
    [
        "titolo" => "Thriller",
        "artista" => "Michael Jackson",
        "anno" => 1982,
        "genere" => "Pop",
        "etichetta" => "Epic"
    ],
    [
        "titolo" => "The Dark Side of the Moon",
        "artista" => "Pink Floyd",
        "anno" => 1973,
        "genere" => "Progressive Rock",
        "etichetta" => "Harvest"
    ],
    [
        "titolo" => "Rumours",
        "artista" => "Fleetwood Mac",
        "anno" => 1977,
        "genere" => "Soft Rock",
        "etichetta" => "Warner Bros."
    ],
    [
        "titolo" => "Back in Black",
        "artista" => "AC/DC",
        "anno" => 1980,
        "genere" => "Hard Rock",
        "etichetta" => "Atlantic"
    ]
];

header('Content-Type: application/json');
echo json_encode($disks);
