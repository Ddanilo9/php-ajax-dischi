<?php
include __DIR__.'/../../dischi/dischi.php';
header('Content-Type: application/json');
$data = [
    'succes' => true,
    'response' => $dischi
];
echo json_encode($data);
