<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание форм</title>
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
<h1>Создание форм</h1>

<p>
Формы в HTML предоставляют средство для взаимодействия пользователя с веб-страницей, отправки данных на сервер и других манипуляций. В этом разделе мы рассмотрим, как создавать формы на вашей веб-странице.
</p>

<h2>
Тег &lt;form&gt;
</h2>

<p>
Тег &lt;form&gt; используется для создания формы на веб-странице. Он определяет контейнер для элементов формы, таких как поля ввода, кнопки отправки и другие.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;form action="/submit_form" method="post"&gt;
  &lt;!-- Здесь будут располагаться элементы формы --&gt;
&lt;/form&gt;
</code></pre>

<h2>Элементы формы</h2>
<p>
Элементы формы, такие как текстовые поля, флажки, кнопки и другие, размещаются внутри тега &lt;form&gt;. Каждый элемент имеет свои уникальные атрибуты и типы, которые определяют его поведение.
</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;form action="/submit_form" method="post"&gt;
  &lt;label for="username"&gt;Имя пользователя:&lt;/label&gt;
  &lt;input type="text" id="username" name="username" required&gt;

  &lt;label for="email"&gt;Email:&lt;/label&gt;
  &lt;input type="email" id="email" name="email" required&gt;

  &lt;label for="message"&gt;Сообщение:&lt;/label&gt;
  &lt;textarea id="message" name="message" rows="4" cols="50"&gt;&lt;/textarea&gt;

  &lt;input type="submit" value="Отправить"&gt;
&lt;/form&gt;
</code></pre>

<h2>Атрибуты формы</h2>
<p>
Тег &lt;form&gt; может также содержать различные атрибуты для указания цели отправки данных и метода передачи данных.
</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;form action="/submit_form" method="post"&gt;
  &lt;!-- Содержимое формы --&gt;
&lt;/form&gt;
</code></pre>

<h2>Заключение</h2>
<p>
Формы в HTML являются важным инструментом для взаимодействия пользователя с веб-страницей. Используйте тег <form> и элементы формы с умом, чтобы создавать удобные и функциональные формы для ваших пользователей.
</p>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>