<?php 

    require_once __DIR__ . '/../database/database.php';

    $filterDisks = $disks;

    header('Content-Type: application/json');
    echo json_encode($filterDisks);
