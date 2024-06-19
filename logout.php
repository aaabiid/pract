<?php
    session_start();
    unset($_SESSION["user_id"]);
    header("Location:index2.php");