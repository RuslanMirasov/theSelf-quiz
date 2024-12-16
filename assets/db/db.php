<?php
//DB WORCK
$db_server = "localhost";
$db_username = "mirasovdev";
$db_password = "QWERTmnbvc100";
$db_name = "mirasovdevDB";

//Подключение к серверу и создание базы данных
$connect = new mysqli($db_server, $db_username, $db_password);
if ($connect === false) {
   die("ERROR: Ошибка подключения к серверу");
}
//Создание базы данных и таблицы
$createDP = "CREATE DATABASE IF NOT EXISTS " . $db_name . " CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
if (mysqli_query($connect, $createDP) === false) {
   die("Ошибка: " . mysqli_error($connect));
}
$connect->close();

//Подключение к базе данных и создание таблицы
$db = new mysqli($db_server, $db_username, $db_password, $db_name);
if ($db === false) {
   die("ERROR: Ошибка подключения к базе:");
} else {
   //Создание таблицы
   $createTABLE = "CREATE TABLE IF NOT EXISTS Costumers (id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,phone TEXT(30))";
   if (mysqli_query($db, $createTABLE) === false) {
      die("Ошибка создания таблицы: " . mysqli_error($db));
   }
}

//Запись номера в таблицу, если такого номера в таблице нет
if (isset($_POST['phone'])) {
   $new_number = $_POST['phone'];
   $add_new_number = false;
   $select_oll = mysqli_query($db, "SELECT * FROM Costumers");
   $content = mysqli_fetch_all($select_oll, MYSQLI_ASSOC);
   if ($content) {
      foreach ($content as $row) {
         if ($row['phone'] != $new_number) {
            $add_new_number = true;
         } else {
            $add_new_number = false;
            break;
         }
      }
      if ($add_new_number == true) {
         mysqli_query($db, "INSERT Costumers (phone) VALUES ('" . $new_number . "')");
         echo "ok";
      } else {
         echo "За номером <span class='bold error_color'>" . $new_number . "</span> <br>уже закреплена скидка!";
      }
   } else {
      mysqli_query($db, "INSERT Costumers (phone) VALUES ('" . $new_number . "')");
      echo "ok";
   }
}


$db->close();
