<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FrontBasics</title>
    <link rel="stylesheet" type="text/css" href="style/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="style/css/index.css">
	<link rel="stylesheet" type="text/css" href="style/css/header.css">
    <link rel="shortcut icon" href="img/Shortcut.svg" type="image/x-icon">

	<link rel="stylesheet" type="text/css" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="scripts/header.js"></script>
	<script src="scripts/scroll.js"></script>

</head>
<body>
<?php
    include("components/header.php")
  ?>

<div class="wrapper">

<div class="main">
	<h1 class="main__h1">Окунись в сферу создания сайтов<br>
		вместе с Front<span style="color: #5092df;">Basics</span></h1>
	<h2 class="main__h2">Начни создавать сайты с полного нуля</h2>
	<button onclick="scrollToHandler()" class="main__btn">Узнать больше <img class="click__img" src="img/click.png" alt=""></button>
</div>

<h2 class="whatisfront">Что такое верстка и зачем ее изучать</h2>

<div class="second">
	<div class="second__bg"></div>
	<p class="second__text"><span style="color: #5092df; font-weight: 700;">Вёрстка</span> - это процесс создания структуры и внешнего вида 
		веб-страницы с помощью HTML и CSS. HTML отвечает за структуру 
		страницы, а CSS - за её внешний вид.
		<br><br>
		В наше время верстка по-прежнему является востребованным навыком. 
		Веб-разработчики, которые владеют навыками верстки, могут найти 
		работу в различных компаниях, занимающихся разработкой веб-сайтов и приложений.</p>
		<img class="second__img" src="img/programmer.png" alt="">
</div>

<h2 class="whatisfront element-animation">Кому подойдет этот сайт</h2>

<div class="cards element-animation">
	<div class="card">
		<img class="card__img" src="img/1.png" alt="1 card img">
		<p class="card__text">Студентам, которые изучают веб-разработку</p>
	</div>
	<div class="card">
		<img class="card__img" src="img/2.png" alt="2 card img">
		<p class="card__text">Начинающим веб-разработчикам, которые хотят научиться создавать сайты с помощью HTML и CSS</p>
	</div>
	<div class="card">
		<img class="card__img" src="img/3.png" alt="3 card img">
		<p class="card__text">Начинающим бэкенд-разработчикам, этим людям очень важно знать основы верстки</p>
	</div>
</div>

<div class="contact element-animation">
	<div class="container">
		<div class="contact-wrapper">
			<div class="contact-form">
				<h3>Окунитесь в мир HTML</h3>
					<ul>
						<li><p>Введение</p></li>
						<li><p>Текст</p></li>
						<li><p>Списки</p></li>
						<li><p>Таблицы</p></li>
						<li><p>Формы</p></li>
						<li><p>Семантика</p></li>
					</ul>
			</div>
			<div class="contact-info">
					<img class="html__img" src="img/html.jpg" alt="hmtl-image">
			</div>
		</div>
		<div class="contact-wrapper">
			<div class="contact-info">
					<img class="html__img" src="img/css.jpg" alt="css-image">
			</div>
			<div class="contact-form">
				<h3>Познакомьтесь с CSS</h3>
					<ul>
						<li><p>Введение</p></li>
						<li><p>Визуальное оформление</p></li>
						<li><p>Позиционирование</p></li>
						<li><p>Медиа-запросы</p></li>
						<li><p>Анимации</p></li>
					</ul>
			</div>
		</div>
	</div>
</div>
</div>
<script src="scripts/animation.js"></script>
</body>
</html>
