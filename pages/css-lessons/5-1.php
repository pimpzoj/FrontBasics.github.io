<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Медиа-запросы</title>
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
<h1>Что такое медиа-запросы.</h1>

<p>
Медиа-запросы CSS позволяют адаптировать стили веб-страницы в зависимости от различных характеристик устройства, таких как ширина экрана, ориентация, разрешение и т. д. В этом разделе мы рассмотрим основные концепции медиа-запросов и их использование.
</p>

<h2>
Структура медиа-запроса
</h2>

<p>
Медиа-запросы состоят из ключевого слова @media, за которым следует условие, определяющее, когда стили должны быть применены. Условие может включать различные параметры, такие как max-width, min-width, orientation и т. д.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
@media (max-width: 768px) {
    /* Стили для экранов с максимальной шириной 768 пикселей */
}
</code></pre>

<h2>
Применение медиа-запросов
</h2>

<p>
Медиа-запросы могут быть применены к различным частям CSS, включая весь файл стилей, отдельные правила или блоки стилей. Это позволяет создавать адаптивные дизайны, которые оптимально отображаются на разных устройствах.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
/* Стили для маленьких экранов */
@media (max-width: 768px) {
    body {
        font-size: 14px;
    }
}

/* Дополнительные стили для больших экранов */
@media (min-width: 1024px) {
    body {
        font-size: 16px;
    }
}
</code></pre>

<h2>
Преимущества использования медиа-запросов
</h2>

<p>● Адаптивность: Медиа-запросы позволяют создавать адаптивные дизайны, которые корректно отображаются на разных устройствах и в разных условиях просмотра.</p>
<p>● Улучшенный пользовательский опыт: Адаптивные дизайны, оптимизированные с помощью медиа-запросов, обеспечивают удобство использования сайта на мобильных устройствах, планшетах и десктопах.</p>

<h2>Заключение</h2>
Медиа-запросы CSS являются мощным инструментом для создания адаптивных и гибких веб-дизайнов. Понимание и использование медиа-запросов позволяет разработчикам создавать универсальные и пользовательские дружественные веб-страницы, которые эффективно адаптируются к различным устройствам и условиям просмотра.
</p>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>