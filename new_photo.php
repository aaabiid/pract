<?php
 if (isset($_POST["image"],$_POST["text"])){
    require_once "DB.php";
     require "vendor/autoload.php";
     $db = new fofa1\DB();
     session_start();
     $user_id = $_SESSION["user_id"];
     $db->new_photo($user_id, $_POST["image"],$_POST["text"]);
     header("location: user.php");
}