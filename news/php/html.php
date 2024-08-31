<?php

namespace php;

require_once "vendor/autoload.php";

use php\Connection;

use php\cycle;



?>
<!DOCTYPE html>
<html lang="ru">
<header class="header">
    <div class="container">
        <div class="header-content">
            <div class="header-content">
                <div class="header-tab-one"><a href="#">О нас</a>
                </div>
                <div class="header-tab-two"><a href="#">Контакты</a></div>
                <div class="header-tab-three"><a href="#">Фото</a></div>
                <div class="header-tab-fore"><a href="#">Подписка</a></div>
                <div class="header-tab-five"><a href="#">Документы</a></div>
            </div>
        </div>
    </div>
    </div>
</header>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://localhost/News/css/News.css">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="while.php" metod="GET">
            <div class="tit">
                <h1 class="title">Новости </h1>
            </div>
            <h2> Cпорт </h2>
            <div class="news">
                <div class="head-news-one">
                    <a href="#"> <?php echo $name; ?> </a>
                </div>
                <div class="news-one">
                    <div class="text-news-one">
                        <a href="#"> <?php echo $text; ?> </a>
                    </div>
                    <div class="img-news-one"><a href="#"> <img src="<?php echo $img; ?> " alt="" width="300px" height="200px"></a></div>

                </div>
                <div class="head-news-two"><a href="#"> <?php echo $name_two; ?></a></div>
                <div class="header-two">
                    <div class="text-news-two"><a href="#"> <?php echo $text_two; ?></a></div>
                    <div class="img-news-two"><a href="#"> <img src="<?php echo $img_two; ?> " alt="" width="300px" height="200px"></a></div>

                </div>

            </div>
            <div class="head-news-three"><a href="#"> <?php echo $name_three; ?></a></div>
            <div class="header-three">
                <div class="text-news-three"><a href="#"> <?php echo $text_three; ?></a></div>
                <div class="img-news-three"><a href="#"> <img src="<?php echo $img_three; ?> " alt="" width="300px" height="200px"></a></div>

            </div>

    </div>
    </form>
    </div>
    </div>
    </table>
</body>

</html>