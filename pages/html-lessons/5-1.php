<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание ссылок</title>
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
<h1>Создание ссылок</h1>

<p>Ссылки в HTML позволяют создавать гиперссылки на другие веб-страницы, документы, изображения и другие ресурсы в интернете. В этом разделе мы рассмотрим, как создавать ссылки на вашей веб-странице.
</p>

<h2>
Тег &lt;a&gt;
</h2>

<p>Тег &lt;a&gt; используется для создания гиперссылок в HTML. Он может содержать атрибуты, такие как href, который указывает на URL целевой страницы или ресурса, на который должна вести ссылка.</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;a href="https://www.example.com"&gt;Ссылка на примерный сайт&lt;/a&gt;
</code></pre>

<h2>Текст ссылки</h2>
<p>Текст, заключенный между открывающим и закрывающим тегами &amp;lt;a&amp;gt;, является текстом ссылки, который будет отображаться на веб-странице. Этот текст может быть любым, и он будет отображаться как гиперссылка.</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;a href="https://www.example.com"&gt;Нажмите здесь, чтобы перейти на примерный сайт&lt;/a&gt;
</code></pre>

<h2>Альтернативный текст</h2>
<p>Всегда рекомендуется включать альтернативный текст для ссылок с помощью атрибута alt. Этот текст будет отображаться, если ссылка не может быть загружена или не отображается, что улучшает доступность контента для пользователей.</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;a href="https://www.example.com" alt="Описание ссылки"&gt;Примерный сайт&lt;/a&gt;
</code></pre>

<h2>Заключение</h2>
<p>Создание ссылок является важной частью веб-разработки, поскольку это позволяет пользователям навигировать по вашему сайту и переходить на другие страницы или ресурсы в интернете. Используйте тег &lt;a&gt; с умом, чтобы делать ваш контент более интерактивным и доступным для пользователей.
</p>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>