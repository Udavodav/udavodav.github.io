<?php

    $connection = new PDO("mysql:host=localhost;dbname=lab4", "root", "");

    if($connection == false){
        echo "Подключение не установлено!";
    }

    function getProducts()
    {
        global $connection;
        return $connection->query('SELECT * FROM products');
    }

    function getProduct($id){
        global $connection;
        return $connection->query('SELECT * FROM products WHERE id='.$id);
    }

    function addOrder($name, $surname, $patronymic, $phone, $address, $productId)
    {
        global $connection;
        try {
            $sql = "INSERT INTO orders (product_id, name, surname, patronymic, address, phone)
                        VALUES ($productId, '$name', '$surname', '$patronymic', '$address', '$phone')";
            $affectedRowsNumber = $connection->exec($sql);
            // если добавлена как минимум одна строка
            if($affectedRowsNumber > 0 ){
                return "Данные успешно добавленны";
            }
        }
        catch (PDOException $e) {
            return "Ошибка базы данных: " . $e->getMessage();
        }
    }

?>