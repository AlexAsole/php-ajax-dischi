<?php require_once __DIR__ . '/database/database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='css/style.css'>
    <title>Bool-Music</title>
</head>
<body>
<div class="wrapper">
    <div class="header">
        <img src="img/logo.png" alt="">
        <select name="genre">
        <?php foreach ($disks as $disk) { ?>
            <option value=<?php echo $disk['genre'] ?>><?php echo $disk['genre'] ?></option>
        <?php } ?>
        </select>
    </div>
    <div class="container">
        <?php foreach ($disks as $disk) { ?>
        <div class="box">
            <img src= <?php echo $disk['poster'] ?> alt="">
            <div class="title"><?php echo $disk['title'] ?></div>
            <div class="author"><?php echo $disk['author'] ?></div>
            <div class="year"><?php echo $disk['year'] ?></div>
        </div>
        <?php } ?>
    </div>
</div>
</body>
</html>