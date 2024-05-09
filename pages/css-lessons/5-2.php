<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание адаптивных веб-страниц</title>
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
<h1>Создание адаптивных веб-страниц.</h1>

<p>
Адаптивная верстка — это подход к разработке веб-страниц, который обеспечивает оптимальное отображение контента на различных устройствах и экранах, включая компьютеры, планшеты и мобильные телефоны. В этом разделе мы рассмотрим основные принципы и техники создания адаптивных веб-страниц.
</p>

<h2>
Использование медиа-запросов
</h2>

<p>
Медиа-запросы CSS являются ключевым инструментом для создания адаптивных веб-страниц. Они позволяют адаптировать стили и макет страницы в зависимости от характеристик устройства, таких как ширина экрана, ориентация и разрешение.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
/* Стили для маленьких экранов */
@media (max-width: 768px) {
    /* Подходящие стили для мобильных устройств */
}

/* Стили для больших экранов */
@media (min-width: 1024px) {
    /* Дополнительные стили для планшетов и десктопов */
}
</code></pre>

<h2>
Гибкое использование относительных единиц измерения
</h2>

<p>
Используйте относительные единицы измерения, такие как проценты или em, вместо абсолютных значений, чтобы контент мог адаптироваться к разным размерам экранов.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
.container {
    width: 90%; /* Ширина контейнера занимает 90% ширины родительского элемента */
}
</code></pre>

<h2>
Гибкая сетка и флексбоксы
</h2>

<p>
Используйте гибкие сетки и флексбоксы для создания адаптивных макетов, которые могут легко реагировать на изменения размеров экрана.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
.container {
    display: flex; /* Флексбокс-контейнер */
    flex-wrap: wrap; /* Разрешает перенос элементов на новую строку */
}
</code></pre>

<h2>
Изображения и мультимедиа
</h2>

<p>
Используйте адаптивные изображения и мультимедиа, такие как max-width: 100%, чтобы они могли подстраиваться под размер экрана и не выходить за пределы контейнера.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
img {
    max-width: 100%; /* Изображения подстраиваются под ширину контейнера */
    height: auto; /* Сохраняет соотношение сторон изображения */
}
</code></pre>

<h2>Тестирование на разных устройствах</h2>

<p>
Важно тестировать созданный адаптивный дизайн на различных устройствах и экранах, чтобы убедиться, что он корректно отображается и работает на всех платформах.
</p>

<h2>Заключение</h2>
Создание адаптивных веб-страниц позволяет обеспечить удобное и эффективное взаимодействие пользователей с вашим контентом на различных устройствах. Понимание и применение основных принципов адаптивного дизайна позволяет создавать современные и универсальные веб-приложения, которые соответствуют требованиям современного пользовательского опыта.
</p>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>