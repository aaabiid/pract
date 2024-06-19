<?php
session_start();
if (isset($_POST["photo_id"], $_POST["text"], $_SESSION["user_id"])){
    require_once "DB.php";
    require "vendor/autoload.php";
    $db = new fofa1\DB();
    $inserted_comment = $db->add_comment($_POST["photo_id"],$_SESSION["user_id"], $_POST["text"]);
    echo json_encode($inserted_comment);
}