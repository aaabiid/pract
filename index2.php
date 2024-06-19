<?php
session_start();
$user_id = $_SESSION["user_id"] ?? false;
require_once "DB.php";
require_once "Photo.php";
    require "vendor/autoload.php";
    $db = new fofa1\DB();
    $data = $db->get_all_photos();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, maximum-scale=1.0,">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>  
        <link rel="stylesheet" href="style.css"> 
    </head>
    <body>
    <?php include "header.php" ?>

    <h1>Галерея</h1>
    <div id="grid">
         <?php foreach ($data as $photo): ?>
             <?= (new fofa1\Photo($photo["id"], $photo["image"], $photo["Text"]))->get_html() ?>
         <?php endforeach; ?>
    </div>

    <?php include "add_form.php"; ?>

    <div id="popup_photo">
        <img src="" alt="">
    </div>

    <script src="script.js"></script>
    
</body>
</html>