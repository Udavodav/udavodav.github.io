
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="css/mystyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Гаджеты</title>
</head>
<body class="d-flex flex-column min-vh-100">

<header class="header">
    <div class="row">
        <div class="menu-list my-3 col-sm-12 justify-content-center col-md-3 col-lg-3 col-xl-4">
            <img src="images/logo.png" class="logo"/>
        </div>

        <div class="menu-list col-sm-12 justify-content-center col-md-9 col-lg-9 col-xl-8">
            <a href="index.html">
                <div>Главная</div>
            </a>
            <a href="list.php">
                <div>Товары</div>
            </a>
            <a href="#">
                <div>Услуги ремонта</div>
            </a>
        </div>
    </div>
</header>

<div class="col-sm-12 col-md-10 col-xl-8 d-block m-auto">
    <div class="my-3 mx-3">
        <input class="" type="text" placeholder="Поиск" id="search">
    </div>
    <div class="my-3 mx-3">
        <div class="list-title first-line">КАТАЛОГ</div>
        <div class="list-title second-line">ТОВАРОВ</div>
    </div>
    <?php
    include "php/dbconnection.php";

    $result = getProducts();
    if($result->rowCount() == 0)
        echo '<div class="list-title second-line">Товары не найдены</div>';
    else{
        foreach($result as $row) {
            echo '<div class="card-list">';
            echo '<a href="show.php?id='.$row['id'].'">';
            echo '<div class="row">';
            echo '<div class="col-sm-5 col-md-4 col-lg-3 img-container">';
            echo '<div class="img-box">';
            echo '<img class="img-list" src="images/'.$row['image'].'">';
            echo '</div>';
            echo '</div>';
            echo '<div class="col-sm-7 col-md-8 col-lg-9 my-2">';
            echo '<div class="txt txt-title">' . $row['title'] . '</div>';
            echo '<div>';
            echo '<label class="txt">Диагональ: ' . $row['diagonal'] . '</label><br>';
            echo '<label class="txt">ОЗУ: ' . $row['osu'] . ' ГБ</label><br>';
            echo '<label class="txt">Встроенная память: ' . $row['psu'] . ' ГБ</label><br>';
            echo '<label class="txt">Емкость аккумулятора: ' . $row['akkum'] . ' мА*ч</label><br>';
            echo '<label class="txt">Камеры: ' . $row['camera'] . ' Мп</label><br>';
            echo '<label class="txt">Габариты: ' . $row['size'] . ' мм</label><br>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</a>';
            echo '</div>';
        }
    }
    ?>

</div>

<footer class="footer mt-auto py-3">
    <div class="row">
        <label class="col-4 mx-3">ГАДЖЕТЫ @ 2024</label>

        <div class="col-4 mr">
            <a href="#"><img src="images/youtube.png" width="30"></a>
            <a href="#"><img src="images/telegram.png" width="30"></a>
            <a href="#"><img src="images/vk.png" width="30"></a>
        </div>
    </div>
</footer>

</body>
</html>