<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" type="text/css" href="style/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="style/css/registration.css">
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
		<h1 class="form-title">Регистрация</h1>
		<form action="auth/reg.php" method="post">
		  <div class="main-user-info">
			<div class="user-input-box">
			  <label for="fullName">Полное имя</label>
			  <input type="text"
					  id="name"
					  name="name"
					  pattern="[а-яА-Я\s]+"
					  placeholder="Введите ФИО"/>
			</div>
			<div class="user-input-box">
			  <label for="fullName">Логин</label>
			  <input type="text"
					  id="login"
					  name="login"
					  pattern="[\u0041-\u007A\u0430-\u044F0-9]+"
					  placeholder="Введите логин"/>
			</div>
			<div class="user-input-box">
			  <label for="email">Электронная почта</label>
			  <input type="email"
					  id="email"
					  name="email"
					  placeholder="Введите Email"/>
			</div>
			<div class="user-input-box">
				<script type="text/javascript">jQuery(function($){$("#phon").mask("+375 (99) 999-99-99");});</script>
			  <label for="phoneNumber">Номер телефона</label>
			  <input type="text"
			  		  data-mask="phone"
					  id="phone"
					  name="phone"
					  placeholder="Введите номер телефона"/>
			</div>
			<div class="user-input-box">
			  <label for="password">Пароль</label>
			  <input type="password"
					  id="password"
					  name="password"
					  placeholder="Введите пароль"/>
			</div>
			<div class="user-input-box">
			  <label for="confirmPassword">Подтверждение пароля</label>
			  <input type="password"
					  id="confirmPassword"
					  name="confirmPassword"
					  placeholder="Повторите пароль"/>
			</div>
		  </div>
		  <div class="form-submit-btn">
			<input type="submit" value="Зарегистрироваться">
		  </div>
		</form>
	  </div>











</body>
</html>