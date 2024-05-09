<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Как работает HTML в веб-разработке</title>
    <link rel="stylesheet" type="text/css" href="../../style/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../../style/lessons/html-css/html-general.css">
	<link rel="stylesheet" type="text/css" href="../../style/css/header.css">
    <link rel="shortcut icon" href="../../img/Shortcut.svg" type="image/x-icon">

	<link rel="stylesheet" type="text/css" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="../../scripts/header.js"></script>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/default.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>

	
</head>
<body>
<?php
    include("../../components/header.php")
  ?>

<div class="wrapper">
<div class="main">

<h1>
Как работает HTML в веб-разработке
</h1>

<p>HTML является основой веб-разработки и играет ключевую роль в создании веб-страниц. Понимание того, как работает HTML, поможет вам эффективно создавать и структурировать содержимое вашего веб-сайта.</p>

<h2>
Структура HTML документа
</h2>

<p>HTML документ состоит из различных элементов, таких как теги, атрибуты и содержимое. Вот основные составляющие HTML документа:</p>

<h2>
Теги
</h2>

<p>Теги - это основные строительные блоки HTML, которые определяют различные элементы на странице, такие как заголовки, параграфы, изображения и ссылки. Каждый элемент имеет свой собственный тег, который определяет его тип и форматирование.</p>

<h2>
Атрибуты
</h2>

<p>Атрибуты предоставляют дополнительную информацию о элементах и задают им различные свойства. Например, атрибут "src" в теге <img> определяет источник изображения, а атрибут "href" в теге <a> указывает на URL ссылки.</p>

<h2>Содержимое</h2>

<p>Содержимое элемента определяется между его открывающим и закрывающим тегами и представляет собой текст, изображения или другие вложенные элементы.</p>

<h2>Работа браузера с HTML
</h2>

<p>Когда пользователь запрашивает веб-страницу в браузере, браузер загружает HTML документ и интерпретирует его содержимое. Браузер разбирает HTML код и отображает содержимое страницы в соответствии с его структурой и форматированием.</p>

<h2>Парсинг HTML</h2>

<p>Браузер анализирует HTML документ и создает древовидную структуру, известную как "DOM" (Document Object Model). DOM представляет собой иерархию элементов страницы, которая может быть изменена с помощью JavaScript.</p>

<h2>Отображение содержимого</h2>

<p>Браузер отображает содержимое HTML страницы в соответствии с ее структурой и стилями, определенными с помощью CSS. Он располагает элементы на странице, учитывая их порядок и свойства, заданные в HTML и CSS.</p>

<h2>Заключение</h2>

<p>HTML является основой веб-разработки и играет важную роль в создании содержимого веб-страниц. Понимание его основных принципов поможет вам создавать качественные и доступные веб-сайты для ваших пользователей.</p>






</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>