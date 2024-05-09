<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Структура HTML-документа</title>
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
<h1>Структура HTML-документа</h1>

<p>HTML-документ имеет определенную структуру, которая включает в себя несколько основных элементов, таких как DOCTYPE, &lt;html&gt;, &lt;head&gt; и &lt;body&gt;. Понимание этих элементов поможет вам правильно организовать ваш HTML-код.</p>

<h2>
DOCTYPE
</h2>

<p>DOCTYPE (Document Type Declaration) является первой строкой в HTML-документе и определяет версию HTML, которая используется в документе. Он также указывает браузеру на тип документа и стандарты, которые следует использовать при его интерпретации.</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;!DOCTYPE html&gt;
</code></pre>

<h2>Тег &lt;html&gt;</h2>
<p>Тег &lt;html&gt; является контейнером для всего содержимого HTML-документа и определяет начало и конец документа. Все остальные элементы HTML должны быть вложены внутрь тега &lt;html&gt;.</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;html&gt;
  &lt;!-- Содержимое документа --&gt;
&lt;/html&gt;
</code></pre>

<h2>Тег &lt;head&gt;</h2>
<p>Тег &lt;head&gt; содержит метаинформацию о документе, такую как заголовок страницы, метатеги для поисковых систем, ссылки на внешние ресурсы (CSS, JavaScript) и другие элементы, не отображаемые непосредственно на странице.</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;head&gt;
  &lt;title&gt;Заголовок страницы&lt;/title&gt;
  &lt;meta charset="UTF-8"&gt;
  &lt;link rel="stylesheet" href="styles.css"&gt;
&lt;/head&gt;
</code></pre>

<h2>Тег &lt;body&gt;</h2>
<p>Тег &lt;body&gt; содержит основное содержимое HTML-документа, которое отображается в браузере. Здесь располагается текст, изображения, ссылки и другие элементы, видимые пользователю.</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;body&gt;
  &lt;h1&gt;Привет, мир!&lt;/h1&gt;
  &lt;p&gt;Это моя первая веб-страница.&lt;/p&gt;
&lt;/body&gt;
</code></pre>

<h2>Заключение</h2>
<p>Правильное использование DOCTYPE и элементов &lt;html&gt;, &lt;head&gt; и &lt;body&gt; важно для создания правильной структуры HTML-документа. Они помогают браузеру правильно интерпретировать и отображать вашу веб-страницу.</p>











</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>