<?php
namespace fofa1;
use mysqli;

class DB {
    static $host = "localhost";
    static $user = "root";
    static $password = "";
    static $database = "fofa1";
    public $link;

    public function __construct(){
        $this->link = new mysqli(DB::$host, DB::$user, DB::$password, DB::$database);
        $this->link->set_charset("utf8");
    }

    public function get_all_photos(){
        $sql_result = $this->link->query("SELECT * FROM photos ORDER BY id DESC ");
        if ($sql_result->num_rows){
            return $sql_result->fetch_all(MYSQLI_ASSOC);
        }
        return [];
    }
    public function get_user_photos($uid){
        $sql_result = $this->link->query("SELECT * FROM photos WHERE uid = $uid ORDER BY id DESC ");
        if ($sql_result->num_rows){
            return $sql_result->fetch_all(MYSQLI_ASSOC);
        }
        return [];
    }

    public function check_user($login, $password){
        $sql_result = $this->link->prepare("SELECT * FROM users WHERE Email = ? AND password = ?");
        $sql_result->bind_param("ss", $login, $password);
        $sql_result->execute();
        $sql_result = $sql_result->get_result();
        if ($sql_result->num_rows){
            $user = $sql_result->fetch_assoc();
            return $user["id"];
        }
        return false;
    }
    public function check_login($login){
        $sql_result = $this->link->prepare("SELECT * FROM users WHERE Email = ? ");
        $sql_result->bind_param("s", $login);
        $sql_result->execute();
        $sql_result = $sql_result->get_result();
        if ($sql_result->num_rows){
            return true;
        }
        return false;
    }
    public function new_user($login, $password)
    {
        $this->link->query("INSERT INTO users (Name, Password, Email) VALUES ( '', '$password', '$login')");

    }
    public function new_photo($uid, $image, $text)
    {
        $this->link->query("INSERT INTO photos(uid, Image, Text, Tags) VALUES ( $uid, '$image', '$text', '')");
    }
    public function get_photo_by_id($photo_id)
    {
        $sql_result = $this->link->query(
            "SELECT `p` .*, `u`.`Name` FROM `photos` `p` LEFT JOIN `users` `u` on `u`.`id` = `p`.`uid` WHERE `p`.`id` = '$photo_id'");
        if ($sql_result->num_rows){
            return $sql_result->fetch_assoc();
        }
        return false;
    }
    public function get_photo_comments($photo_id)
    {
        $sql_result = $this->link->query(
            "SELECT `c` .*, `u`.`Name` FROM `comments` `c` LEFT JOIN `users` `u` on `u`.`id` = `c`.`uid`
                   WHERE `c`.`Pid` = '$photo_id' ORDER BY `id` DESC");
        if ($sql_result->num_rows) {
            return $sql_result->fetch_all(MYSQLI_ASSOC);
        }
        return [];
    }
    public function add_comment($pid, $uid, $text)
    {
        $date = date("Y-m-d");
        $this->link->query("INSERT INTO `comments` (PID, Uid, Text, Post_date) VALUES ($pid, $uid, '$text', '$date')");
        $last_id = $this->link->insert_id;
        $inserted_comment = $this->link->query(
        "SELECT `c` .*, `u`.`Name` FROM `comments` `c` LEFT JOIN `users` `u` on `u`.`id`=`c`.`uid` WHERE `c`.`id` = '$last_id' ");
        return $inserted_comment->fetch_assoc();
    }
}