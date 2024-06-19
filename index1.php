<?php
    $data = [
        [
           "path" => "https://yandex.kz/images/search?text=картинки+космос&pos=0&rpt=simage&img_url=https%3A%2F%2Fwww.technopat.net%2Fwp-content%2Fuploads%2F2021%2F02%2FFarfarout.jpg&from=tabbar&lr=162",
           "title" => "Мост"
        ],  
        [
            "path" => "https://yandex.kz/images/search?text=картинки+космос&pos=1&rpt=simage&img_url=https%3A%2F%2Fimages-wixmp-ed30a86b8c4ca887773594c2.wixmp.com%2Ff%2F1251671d-f16e-4132-b437-6e1d86cf5ea3%2Fd9z60dd-b44172dd-c05c-4ae6-949d-f1be9485df61.png%2Fv1%2Ffill%2Fw_1095%2Ch_730%2Cq_70%2Cstrp%2Fnebula_stock_2_by_cosmicspark_d9z60dd-pre.jpg%3Ftoken%3DeyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTA2NyIsInBhdGgiOiJcL2ZcLzEyNTE2NzFkLWYxNmUtNDEzMi1iNDM3LTZlMWQ4NmNmNWVhM1wvZDl6NjBkZC1iNDQxNzJkZC1jMDVjLTRhZTYtOTQ5ZC1mMWJlOTQ4NWRmNjEucG5nIiwid2lkdGgiOiI8PTE2MDAifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.-4p70TeVKilXq67oHFeeMv3qPCnpkR0q1teFPtzEJl8&from=tabbar&lr=162",
            "title" => "Комп"
        ],
        [
            "path" =>  "https://yandex.kz/images/search?text=картинки+космос&pos=2&rpt=simage&img_url=https%3A%2F%2Fi.pinimg.com%2Foriginals%2F6f%2Fad%2Fc2%2F6fadc29d97ab55aa5185d4116d5d10d3.jpg&from=tabbar&lr=162",
            "title" => "Водопад"
        ],
        [
            "path" => "https://yandex.kz/images/search?text=картинки+космос&pos=3&rpt=simage&img_url=https%3A%2F%2Fu.livelib.ru%2Falbum%2F1005973391%2Fo%2Fkigv8jb5%2Fo-o.jpeg&from=tabbar&lr=162",
            "title" => ""
        ]   
    ];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, maximum-scale=1.0,">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>  
        <style>
            img{
                max-width: 500px;
            }
        </style>    
    </head>
    <body>
        <?php foreach ($data as $str): ?>
            <img src="<?= $str["path"] ?>" />
            <p><?= $str["title"] ?></p>
        <?php endforeach; ?>
    </body>
</html>
