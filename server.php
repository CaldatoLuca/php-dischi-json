<?php

//leggo il file disk.json
$database = file_get_contents(__DIR__ . '/disks.json');

//lo trasfromo in php (oggi non serve, solo in caso di operazioni da fare in php)
$disks = json_decode($database);

// specifico che le informazioni passate sono di tipo json e trasfromo l' array da php a json
header('Content-Type: application/json');
echo json_encode($disks);
