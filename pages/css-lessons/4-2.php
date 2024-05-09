<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Позиционирование элементов</title>
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
<h1>Позиционирование элементов.</h1>

<p>
Позиционирование элементов в CSS позволяет управлять их расположением на веб-странице. В этом разделе мы рассмотрим основные методы позиционирования элементов и их использование.
</p>

<h2>
Статическое позиционирование (position: static)
</h2>

<p>
По умолчанию, все элементы на веб-странице имеют статическое позиционирование. Они размещаются в потоке документа в соответствии с порядком их следования в HTML коде.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
.static-element {
    position: static;
}
</code></pre>

<h2>
Относительное позиционирование (position: relative)
</h2>

<p>
Элементы с относительным позиционированием остаются в потоке документа, но могут быть сдвинуты относительно своего исходного местоположения с помощью свойств top, right, bottom и left.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
.relative-element {
    position: relative;
    top: 10px;
    left: 20px;
}
</code></pre>

<h2>
Абсолютное позиционирование (position: absolute)
</h2>

<p>
Элементы с абсолютным позиционированием удаляются из потока документа и располагаются относительно ближайшего позиционированного родителя или контейнера. Если такого элемента нет, они позиционируются относительно окна браузера.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
.absolute-element {
    position: absolute;
    top: 50px;
    left: 100px;
}
</code></pre>

<h2>
Фиксированное позиционирование (position: fixed)
</h2>

<p>
Значение none скрывает элемент со страницы. Элемент не будет отображаться и не будет занимать место в макете страницы.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
.fixed-element {
    position: fixed;
    top: 20px;
    right: 20px;
}
</code></pre>

<h2>Заключение</h2>
Позиционирование элементов в CSS предоставляет широкий набор инструментов для создания разнообразных макетов и компоновок на веб-странице. Понимание различных методов позиционирования позволяет разработчикам создавать гибкие и эффективные дизайны для своих проектов.
</p>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>