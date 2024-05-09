<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link rel="stylesheet" type="text/css" href="style/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="style/css/login.css">
	<link rel="stylesheet" type="text/css" href="style/css/header.css">
    <link rel="shortcut icon" href="img/Shortcut.svg" type="image/x-icon">

	<link rel="stylesheet" type="text/css" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://unpkg.com/imask"></script>
	<script src="scripts/header.js"></script>
	<script src="scripts/mask.js"></script>
</head>
<body>
<?php
    include("components/header.php")
  ?>

    <div class="container">
		<h1 class="form-title">Авторизация</h1>
		<form action="auth/auth.php" method="post">
		  <div class="main-user-info">
		  <div class="user-input-box">
			  <label for="fullName">Логин</label>
			  <input type="text"
					  id="login"
					  name="login"
					  placeholder="Введите логин"/>
			</div>
			<div class="user-input-box">
			  <label for="password">Пароль</label>
			  <input type="password"
					  id="password"
					  name="password"
					  placeholder="Введите пароль"/>
			</div>
		  </div>
		  <div class="form-submit-btn">
			<input type="submit" value="Войти">
		  </div>
		</form>
	  </div>











</body>
</html>