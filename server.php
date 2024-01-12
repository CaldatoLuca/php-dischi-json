<?php

//leggo il file disc.json
$database = file_get_contents(__DIR__ . '/discs.json');

//lo trasfromo in php (oggi non serve, solo in caso di operazioni da fare in php)
$discs = json_decode($database);

$result = $discs;

//creazione disco
if (isset($_POST['create'])) {

    //senza controlli su testo o possibili id uguali
    $disc = [
        'id' => rand(1, 1000),
        'titolo' => $_POST['titolo'],
        'artista' => $_POST['artista'],
        'anno' => $_POST['anno'],
        'genere' => $_POST['genere'],
        'descrizione' => $_POST['descrizione'],
        'src' => "https://picsum.photos/200/300"
    ];

    $result[] = $disc;
    //salvataggio su file
    file_put_contents('discs.json', json_encode($result));
}

//METODO DI RICERCA PER ID
if (isset($_GET['index']) && $_GET['index'] !== '') {

    $index = $_GET['index'];

    $element_position = array_search($index, array_column($result, 'id'));

    if ($element_position !== false) {
        $result = $discs[$element_position];
    }
}

// specifico che le informazioni passate sono di tipo json e trasfromo l' array da php a json
header('Content-Type: application/json');
echo json_encode($result);

/*
METODO DI RICERCA PER INDICE

//faccio chiamata in get con parametro index, per cercare il singolo elemento dell' array
//isset è meglio di !empty perchè accetta anche indice 0 che con !empty da false (0 = false)
if (isset($_GET['index']) && $_GET['index'] !== '') {
    //salvo il valore in GET in una variabile index
    $index = $_GET['index'];

    //assegno a una variabile l' elemento dell' indice 
    $current_disk = $discs[$index];

    $result = $current_disk;
}
*/