<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Атрибуты ссылок</title>
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
<h1>Атрибуты ссылок</h1>

<p>
	Атрибуты в HTML предоставляют дополнительную информацию о элементах, в том числе и о ссылках. В этом разделе мы рассмотрим различные атрибуты, которые могут быть использованы в теге ссылки &lt;a&gt; для управления и расширения функциональности ссылок на вашей веб-странице.
</p>

<h2>
Атрибут href
</h2>

<p>
	Атрибут href определяет адрес (URL) ресурса, на который ссылка указывает. Это может быть адрес другой веб-страницы, документа, изображения или любого другого ресурса в интернете.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;a href="https://www.example.com"&gt;Ссылка на примерный сайт&lt;/a&gt;
</code></pre>

<h2>Атрибут target</h2>
<p>
	Атрибут target определяет контекст, в котором будет открыта связанная страница после нажатия на ссылку. Значение _blank открывает ссылку в новом окне или вкладке браузера.</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;a href="https://www.example.com" target="_blank"&gt;Ссылка на примерный сайт&lt;/a&gt;
</code></pre>

<h2>Атрибут rel</h2>
<p>
	Атрибут rel (relationship) используется для определения отношений между текущим документом и целевым документом. Например, rel="nofollow" указывает поисковым системам не следовать по ссылке.
</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;a href="https://www.example.com" rel="nofollow"&gt;Ссылка на примерный сайт&lt;/a&gt;
</code></pre>

<h2>Атрибут title</h2>
<p>
	Атрибут title предоставляет всплывающую подсказку при наведении курсора на ссылку. Это помогает дополнительно описать цель или содержание ссылки.
</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;a href="https://www.example.com" title="Описание ссылки"&gt;Ссылка на примерный сайт&lt;/a&gt;
</code></pre>

<h2>Заключение</h2>
<p>
	Атрибуты ссылок предоставляют множество возможностей для управления и настройки поведения ссылок на вашей веб-странице. Используйте атрибуты с умом, чтобы делать ваш контент более интерактивным и информативным для пользователей.
</p>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>