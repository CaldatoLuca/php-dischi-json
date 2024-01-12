# PHP Disks

Creare una web-app che permetta di leggere una lista di dischi presente nel nostro server.

## Svolgimento

### Back-end

Creo l' array in un file `.json`

Dentro il mio 'server' (server.php) eseguo i seguenti comandi:

```php
//leggo il file disks.json e lo salvo in database

$database = file_get_contents(__DIR__ . '/discs.json');
```

```php
//lo trasfromo in php per poterci fare operazioni

$disks = json_decode($database);
```

Creo la logica dietro la visualizzazione della descrizione al click sul disco

Metodo per indice

```php
//uso isset e non !empty per evitare il caso in cui indice = 0 restituisca false (false è 0)
if (isset($_GET['index']) && $_GET['index'] !== '') {
    //salvo il valore in GET in una variabile index
    $index = $_GET['index'];

    //assegno a una variabile l' elemento dell' indice
    $current_disk = $discs[$index];

    $result = $current_disk;
}
```

Metodo per id

```php
if (isset($_GET['index']) && $_GET['index'] !== '') {

    $index = $_GET['index'];

    $element_position = array_search($index, array_column($result, 'id'));

    if ($element_position !== false) {
        $result = $discs[$element_position];
    }
}
```

```php
// specifico che le informazioni passate sono di tipo json e trasfromo l' array da php a json

header('Content-Type: application/json');
echo json_encode($result);
```

Queste operazioni mi permettono di richiamare, tramite 'axios', l' array nel mio file main.js. Andando poi a utilizzare i dati come sempre fatto.

### Front-end

Così come per tutti gli esercizi svolti finora effettuo una chiamata e salvo la `response.data` in un array, che utilizzerò per mostrare i dati in pagine tramite v-for e interpolazione Vue.

Creo un metodo per fare una chiamata con parametro index (che corrisponde all' indice o all' id a seconda della logica)

```js
    showDescription(index) {
      axios.get(this.apiUrl, { params: { index: index } }).then((response) => {
        this.description = response.data.descrizione;
      });
    },
```

Quello che cambia è cosa passare alla funzione quando la richiamo (index o disc.id)

## Conclusioni

Ho usato postman per poter vedere che chiamata stavo facendo e per debuggare

Ho voluto chaimare il file principale index.html e non index.php per separare maggiormente la parte back-end da quella front-end
