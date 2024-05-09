<?php
  // Объявление переменных для строк формы
  $name = filter_var(trim($_POST['name']),
  FILTER_SANITIZE_STRING);
  $email = filter_var(trim($_POST['email']),
  FILTER_SANITIZE_STRING);
  $login = filter_var(trim($_POST['login']),
  FILTER_SANITIZE_STRING);
  $phone = filter_var(trim($_POST['phone']),
  FILTER_SANITIZE_STRING);
  $password = filter_var(trim($_POST['password']),
  FILTER_SANITIZE_STRING);

  // Хэширование пароля
  $password = md5($password."ht43rh34ht2jr");

  // Подключение к базе данных
  require "../auth/connect.php";

  if(!$mysql->query("INSERT INTO `users` (`name`, `login`, `email`, `phone`, `password`) VALUES('$name', 
'$login', '$email', '$phone', '$password')")){
    return die("Ошибка добавления данных: ". $mysql->error);
  }else {
    return header("Location:/login.php?message=Успешная регистрация");
  }

  // Закрытие базы данных
  $mysql->close();
?>