<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>
    <link rel="stylesheet" type="text/css" href="style/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="style/css/contacts.css">
	<link rel="stylesheet" type="text/css" href="style/css/header.css">
    <link rel="shortcut icon" href="img/Shortcut.svg" type="image/x-icon">

	<link rel="stylesheet" type="text/css" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="scripts/header.js"></script>
</head>
<body>
<?php
    include("components/header.php")
  ?>

<div class="wrapper">

	<div class="contact">
		<div class="container">
			<h2 style="font-family: Rubik, sans-serif;">Контакты</h2>
			<div class="contact-wrapper">
				<div class="contact-info">
					<h3>Контактная информация:</h3>
					<p> <i class="fas fa-phone"></i>+7(999)999-99-99</p>
					<p> <i class="fas fa-envelope"></i>contact@mail.ru</a></p>
					<p> <i class="fas fa-map-marker-alt"></i> Орловская область, г. Мценск,<br> ул. Тургенева 196</p>
				</div>
				<div class="map">
					<iframe class="map__frame" src="https://yandex.ru/map-widget/v1/?um=constructor%3Ad48591cdb3c0cb77948a6ce2766f9d3ad0ebcdbd4ded51ad8b222a25b42a315d&amp;source=constructor" width="750" height="500" frameborder="0"></iframe>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>