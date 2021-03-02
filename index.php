<?php require_once __DIR__ . '/database/database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='css/style.css'>
    <title>Bool-Music</title>
</head>
<body>
<div class="wrapper">
    <div class="header">
    
    </div>
    <div class="container">
        <div class="content">
            <?php foreach ($disks as $disk) { ?>
            <div class="content-box">
                <img src= <?php echo $disk['poster'] ?> alt="">
            
            </div>
            <?php } ?>

        </div>
        
    </div>


</div>
    
</body>
</html>