# PHP Disks

Creare una web-app che permetta di leggere una lista di dischi presente nel nostro server.

## Svolgimento

### Back-end

Creo l' array in un file `.json`

Dentro il mio 'server' (server.php) eseguo i seguenti comandi:

````php
//leggo il file disks.json e lo salvo in database


```php
//lo trasfromo in php (oggi non serve, solo in caso di operazioni da fare in php)

$disks = json_decode($database);
````

```php
// specifico che le informazioni passate sono di tipo json e trasfromo l' array da php a json

header('Content-Type: application/json');
echo json_encode($disks);
```

Queste operazioni mi permettono di richiamare, tramite 'axios', l' array nel mio file main.js. Andando poi a utilizzare i dati come sempre fatto.

### Front-end

Così come per tutti gli esercizi svolti finora effettuo una chiamata e salvo la `response.data` in un array, che utilizzerò per mostrare i dati in pagine tramite v-for e interpolazione Vue.

## Conclusioni

Ho usato postman per poter vedere che chiamata stavo facendo e per debuggare

Ho voluto chaimare il file principale index.html e non index.php per separare maggiormente la parte back-end da quella front-end
