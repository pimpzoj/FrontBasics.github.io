<?php
  // Объявление переменных для строк формы
  $login = filter_var(trim($_POST['login']),
  FILTER_SANITIZE_STRING);
  $password = filter_var(trim($_POST['password']),
  FILTER_SANITIZE_STRING);

  // Подключение к базе данных
  require "../auth/connect.php";

  // Хэширование пароля
  $password = md5($password."ht43rh34ht2jr");

  // Выбрать все записи из таблицы "user" где логин и пароль равны введенным значениям
  $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = 
'$password'");

  // Сделать из переменной массив данных для удобства
  $user = $result -> fetch_assoc();
  
  // Если число найденных записей = 0, то вывести сообщение
  if(count((array) $user) == 0) {
    return header("Location:/login.php?message=Пользователь не найден!");
    exit();
  }
  
  // Установить куки по полю name на определенное время
  setcookie('role', $user['role'], time() + 7200, "/");
  setcookie('login', $user['login'], time() + 7200, "/");

  // Закрытие базы данных
  $mysql->close();

  header('Location:/');
?>