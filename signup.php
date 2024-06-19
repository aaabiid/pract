<?php
if (isset($_POST["login"],$_POST["password"])){
    require_once "DB.php";
    require "vendor/autoload.php";
    $db = new fofa1\DB();
    $login_exit = $db->check_login($_POST["login"]);
    if ($login_exit){
        header("Location: user.php?sign_error=login");
    }
    else{
        $db->new_user($_POST["login"], $_POST["password"]);
        header("Location: user.php?sign_success=ok");
    }
}