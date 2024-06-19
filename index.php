<?php
$link = new mysqli("localhost", "root", "", "photos");
$link->set_charset("utf8");
$data = $link->query("SELECT * FROM 'photos'")->fetch_all(MYSQLI_ASSOC);
$result = $conn->query("SELECT username FROM registration WHERE username = '$uname'")

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>9</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="media.css">
</head>

<body>
    <header>
        <div class="popup">
            <a href="#">Главная</a>
            <a id="show_add_photo" href="#">Фото</a>
            <a href="#">Посты</a>
            <a href="#">Личный кабинет</a>
        </div>
        <div class="mobile_icon">
            <img src="free-icon-font-bars-staggered-9795314 (3).png" alt="">
        </div>
    </header>
    <h1>Галерея</h1>
    <div id="grid">
        <div class="photo">
            <img src="https://picsum.photos/seed/1/1920/1080" alt="">
            <p>Фоточка №1</p>
        </div>
        <div class="photo">
            <img src="https://picsum.photos/seed/2/1920/1080" alt="">
            <p>Фоточка №2</p>
        </div>
        <div class="photo">
            <img src="https://picsum.photos/seed/3/1920/1080" alt="">
            <p>Фоточка №3</p>
        </div>
        <div class="photo">
            <img src="https://picsum.photos/seed/4/1920/1080" alt="">
            <p>Фоточка №4</p>
        </div>
    </div>
    <div id="add_new_photo">
        <div>
            <input id="new_photo_src" type="text" placeholder="Картинка">
            <input id="new_photo_text" type="text" placeholder="Подпись">
            <button id="add_photo">Добавить</button>
            <button id="cancel">Отмена</button>
        </div>
    </div>

    <div id="popup_photo">
        <img src="" alt="">
    </div>
    <script src="script.js"></script>
</body>

</html>