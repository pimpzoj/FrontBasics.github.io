<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Свойства и значения</title>
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
<h1>Свойства и значения</h1>

<p>
Свойства и значения CSS определяют внешний вид и макет элементов на веб-странице. В этом разделе мы рассмотрим различные свойства CSS и их значения, которые можно использовать для стилизации элементов HTML.
</p>

<h2>
Основные свойства CSS
</h2>

<h3>Цвет текста (color)</h3>

<p>
Свойство color устанавливает цвет текста элемента.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
p {
    color: blue;
}
</code></pre>

<h3>Фоновый цвет (background-color)</h3>

<p>
Свойство background-color устанавливает цвет фона элемента.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
div {
    background-color: lightgray;
}
</code></pre>

<h3>Размер шрифта (font-size)</h3>

<p>
Свойство font-size устанавливает размер шрифта элемента.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
h1 {
    font-size: 24px;
}
</code></pre>

<h3>Отступы (padding и margin)</h3>

<p>
Свойства padding и margin устанавливают внутренние и внешние отступы элемента соответственно.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
div {
    padding: 10px;
    margin: 20px;
}
</code></pre>

<h2>Значения свойств CSS</h2>
<h3>
Абсолютные единицы измерения
</h3>
<p>
Некоторые свойства, такие как font-size, могут быть заданы в абсолютных единицах измерения, таких как пиксели (px) или пункты (pt).
</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
p {
    font-size: 16px;
}
</code></pre>

<h3>
Относительные единицы измерения
</h3>
<p>
Другие свойства могут быть заданы в относительных единицах измерения, таких как проценты (%) или em, относительно размеров или других характеристик элемента.
</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
div {
    width: 50%;
}
</code></pre>

<h2>Комбинированные свойства</h2>
<p>
Некоторые свойства CSS могут быть комбинированы для создания более сложных эффектов, таких как градиенты, тени и анимации.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
button {
    background: linear-gradient(to right, red, blue);
    box-shadow: 2px 2px 4px gray;
    transition: background-color 0.3s ease;
}
</code></pre>

<h2>Заключение</h2>
Свойства и значения CSS предоставляют широкий спектр возможностей для стилизации веб-страниц. Понимание основных свойств и их значений позволяет создавать красивые и функциональные дизайны для ваших проектов.
</p>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>