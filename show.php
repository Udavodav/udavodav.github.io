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

<?php
include "php/dbconnection.php";
$result = getProduct($_GET['id']);
if($result->rowCount() == 0)
    echo '<div class="list-title second-line">Товар не найден</div>';
else {
    $row = $result->fetch();
    echo '<div class="col-sm-12 col-md-10 col-xl-8 d-block m-auto">';
    echo '<div class="card-show mt-5">';
    echo '<div class="row text-center">';
    echo '<div class="col-sm-12 col-md-6 col-lg-5 img-container">';
    echo '<div class="img-box">';
    echo '<img class="img-show" src="images/'.$row['image'].'">';
    echo '</div>';
    echo '</div>';
    echo '<div class="col-sm-12 col-md-6 col-lg-7 my-2 d-inline-block ">';
    echo '<div class="txt-show-title">'.$row['title'].'</div>';
    echo '<div>';
    echo '<label class="txt-show-price"><strong>'.$row['price'].'</strong></label>';
    echo '<label class="txt-show-price"> руб</label><br>';
    echo '<label class="txt-show">от <strong>'.round($row['price']/12, 0) .'</strong> руб/мес</label><br>';
    echo '<label class="txt-show-up"><strong>Гарантия 12 мес</strong></label><br>';
    echo '<a href="order.php?id='.$_GET['id'].'" class="text-decoration-none mx-3 flex-box">';
    echo '<div class="btn-show flex-box px-5 my-3">Купить</div>';
    echo '</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '<div class="mb-5">';
    echo '<div class="txt-show-up"><strong>Характеристики</strong></div>';
    echo '<div class="mx-3 txt-show">';
    echo '<label>Диагональ: '.$row['diagonal'].'</label><br>';
            echo '<label>ОЗУ: '.$row['osu'].' ГБ</label><br>';
            echo '<label>Встроенная память: '.$row['psu'].' ГБ</label><br>';
            echo '<label>Емкость аккумулятора: '.$row['akkum'].' мА*ч</label><br>';
            echo '<label>Камеры: '.$row['camera'].' Мп</label><br>';
            echo '<label>Габариты: '.$row['size'].' мм</label><br>';
            echo '<label>Версия Bluetooth: '.round($row['bluetooth'],1).'</label><br>';
            echo '<label>NFC: '; echo $row['nfc'] ? "Есть" : "Нет"; echo '</label><br>';
            echo '<label>Интерфейс для зарядки: '.$row['energy'].'</label><br>';
            echo '<label>Быстрая зарядка: '; echo $row['fast_energy'] ? 'Есть' : 'Нет'; echo '</label><br>';
            echo '<label>Операционная система: '.$row['os'].'</label><br>';
            echo '<label>Версия ОС: '.$row['os_vertion'].'</label><br>';
            echo '<label>Количество ядер: '.$row['count_yader'].'</label><br>';
            echo '<label>Разрешение экрана: '.$row['display'].'</label><br>';
        echo '</div>';
    echo '</div>';

echo '</div>';
}

?>


<footer class="footer mt-auto py-3">
    <div class="row">
        <label class="col-2 mx-3">ГАДЖЕТЫ @ 2024</label>

        <div class="col-2 mr">
            <a href="#"><img src="images/youtube.png" width="30"></a>
            <a href="#"><img src="images/telegram.png" width="30"></a>
            <a href="#"><img src="images/vk.png" width="30"></a>
        </div>
    </div>
</footer>

</body>
</html>