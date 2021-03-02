<?php 

    require_once __DIR__ . '/../database/database.php';

    $genres = [];

    foreach ($disks as $disk) {
        if (array_search($disk['genre'], $genres) === false) {
            array_push($genres, $disk['genre']);
        }
    }
