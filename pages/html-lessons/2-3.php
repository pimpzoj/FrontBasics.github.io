<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Атрибуты тегов</title>
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
<h1>Атрибуты тегов</h1>

<p>Атрибуты предоставляют дополнительную информацию о элементах HTML и позволяют управлять их поведением и внешним видом. В этом разделе мы рассмотрим некоторые из наиболее распространенных атрибутов, используемых в HTML.</p>

<h2>
Атрибут "id"
</h2>

<p>Атрибут "id" присваивает уникальный идентификатор элементу. Этот идентификатор используется для создания ссылок на элементы страницы или для стилизации элемента с помощью CSS.</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;div id="header"&gt;Это заголовок страницы&lt;/div&gt;
</code></pre>

<h2>Атрибут "class"</h2>
<p>Атрибут "class" присваивает один или несколько классов элементу. Классы используются для группировки элементов и применения к ним общих стилей с помощью CSS.</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;p class="intro"&gt;Это вводный абзац.&lt;/p&gt;
</code></pre>

<h2>Атрибут "href"</h2>
<p>Атрибут "href" определяет адрес ссылки, на который будет переход при клике на элемент. Этот атрибут используется в теге &lt;a&gt; для создания гиперссылок.</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;a href="https://www.example.com"&gt;Ссылка на примерный сайт&lt;/a&gt;
</code></pre>

<h2>Атрибут "src"</h2>
<p>Атрибут "src" указывает путь к файлу изображения или другому мультимедийному ресурсу. Он используется в теге &lt;img&gt; для загрузки изображения на страницу.</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;img src="image.jpg" alt="Описание изображения"&gt;
</code></pre>

<h2>Атрибут "alt"</h2>
<p>Атрибут "alt" предоставляет альтернативный текст для изображения, который отображается в случае, если изображение не может быть загружено или не отображается. Это помогает в доступности контента для пользователей с ограниченными возможностями.</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;img src="image.jpg" alt="Описание изображения"&gt;
</code></pre>

<h2>Заключение</h2>
<p>Атрибуты тегов играют важную роль в создании веб-страниц, позволяя добавлять дополнительную информацию и функциональность к элементам HTML. Используйте атрибуты с умом, чтобы делать ваш контент более информативным и удобным для пользователей.</p>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>