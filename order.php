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
            <a href="index.html"><div>Главная</div></a>
            <a href="list.php"><div>Товары</div></a>
            <a href="#"><div>Услуги ремонта</div></a>
        </div>
    </div>
</header>

<?php
include 'php/dbconnection.php';

if(isset($_POST['btn_submit'])){
    $message = addOrder($_POST['input_name'], $_POST['input_surname'], $_POST['input_patronymic'],
        $_POST['input_phone'], $_POST['input_address'], $_GET['id']);
    echo $message;
}

?>


<div class="col-xs-12 col-md-10 col-xl-8 d-block m-auto">
    <div class="my-3 mx-3">
        <div class="list-title first-line">ДОСТАВКА</div>
    </div>
    <div >
        <form action="" method="POST" id="order_form">
            <div class="mb-3">
                <label for="input_surname" class="form-label txt-bold">Фамилия</label>
                <input type="text" class="form-control" name="input_surname" id="input_surname" placeholder="Фамилия" required>
            </div>
            <div class="mb-3">
                <label for="input_name" class="form-label txt-bold">Имя</label>
                <input type="text" class="form-control" name="input_name" id="input_name" placeholder="Имя" required>
            </div>
            <div class="mb-3">
                <label for="input_patronymic" class="form-label txt-bold">Отчество</label>
                <input type="text" class="form-control" name="input_patronymic" id="input_patronymic" placeholder="Отчество">
            </div>
            <div class="mb-3">
                <label for="input_phone" class="form-label txt-bold">Номер телефона</label>
                <input type="tel" id="input_phone" name="input_phone" class="form-control" placeholder="+7 (999) 99 99 999" required>
            </div>
            <div class="mb-3">
                <label for="input_address" class="form-label txt-bold">Адрес доставки</label>
                <input type="text" class="form-control" name="input_address" id="input_address" placeholder="Адрес доставки" required>
            </div>
            <div class="mb-5">
                <button type="submit" class="px-5 btn-back" name="btn_submit">Оформить</button>
            </div>
        </form>
    </div>

</div>


<footer class="footer mt-auto py-3">
    <div class="row">
        <label class="col-2 mx-3">ГАДЖЕТЫ  @  2024</label>

        <div class="col-2 mr">
            <a href="#"><img src="images/youtube.png" width="30"></a>
            <a href="#"><img src="images/telegram.png" width="30"></a>
            <a href="#"><img src="images/vk.png" width="30"></a>
        </div>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/jquery.maskedinput.min.js"></script>
<script src="js/script.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

<script>
    $(document).ready(function() {
        $("#input_phone").mask("+7 (999) 99-99-999");
    });
</script>

</body>
</html>