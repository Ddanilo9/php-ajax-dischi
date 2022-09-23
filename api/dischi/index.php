<?php
//dati
include __DIR__.'/../../dischi/dischi.php';

//recupero parametro Get
$genr = isset($_GET['genre']) ? $_GET['genre'] : null;


//filtrare in base al genere
if($genr) {
    $dischi = array_filter($dischi, function($d) use ($genr){
        // $genr = $_GET['genre'];
        return $genr == $d['genre'];
    });
}

//set content type
header('Content-Type: application/json');

//formattare la risposta
$data = [
    'succes' => true,
    'response' => $dischi
];

//stampo in Json
echo json_encode($data);
