<?php 

    require_once __DIR__ . '/../database/database.php';

    header('Content-Type: application/json');

    $genres = [];
    foreach($disks as $disk){
        if(!in_array( $disk['genre'] ,$genres )){
          $genres[] = $disk['genre'];
        }
    }


    
    if(isset($_GET['genre']) && $_GET['genre'] !== 'All') {
        
        
        if(!in_array( $_GET['genre'] ,$genres )){
            http_response_code(400);
        }
    
        
        if (!empty($_GET['genre']) ) {
            $filterDisk =[];
            foreach($disks as $disk){
                if(strpos($disk['genre'] , $_GET['genre']) !== false ){
                    $filterDisk[] = $disk;
                }
            }
        }
        
        echo json_encode($filterDisk);
    } else {
        echo json_encode($disks);
    }
