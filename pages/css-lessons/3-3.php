<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Размеры и позиционирование элементов</title>
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
<h1>Размеры и позиционирование элементов.</h1>

<p>
Размеры и позиционирование элементов CSS играют ключевую роль в создании макета и компоновки веб-страницы. В этом разделе мы рассмотрим основные свойства CSS, которые позволяют управлять размерами и расположением элементов на веб-странице.
</p>

<h2>
Ширина и высота (width, height)
</h2>

<p>
Свойства width и height определяют ширину и высоту элемента соответственно. Они могут быть заданы в различных единицах измерения, таких как пиксели (px), проценты (%), эм (em) и другие.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
div {
    width: 300px;
    height: 200px;
}
</code></pre>

<h2>
Внутренние и внешние отступы (padding, margin)
</h2>

<p>
Свойства padding и margin управляют внутренними и внешними отступами элемента соответственно. Они могут быть заданы в различных единицах измерения.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
div {
    padding: 20px;
    margin: 10px;
}
</code></pre>

<h2>
Позиционирование (position)
</h2>

<p>
Свойство position определяет метод позиционирования элемента на веб-странице. Возможные значения: static, relative, absolute, fixed.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
.header {
    position: fixed; /* Фиксированное позиционирование */
    top: 0;
    left: 0;
}

.menu {
    position: absolute; /* Абсолютное позиционирование */
    top: 50px;
    right: 0;
}

.content {
    position: relative; /* Относительное позиционирование */
}
</code></pre>

<h2>
Границы и рамки (border)
</h2>

<p>
Свойство border определяет границы элемента. Оно включает толщину, стиль и цвет границы.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
div {
    border: 1px solid black;
}
</code></pre>

<h2>
Флексбоксы и сетки (flexbox, grid)
</h2>

<p>
CSS также предоставляет мощные инструменты для создания гибких и адаптивных макетов с помощью флексбоксов и сеток.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
.container {
    display: flex; /* Флексбокс-контейнер */
    justify-content: center; /* Центрирование по горизонтали */
    align-items: center; /* Центрирование по вертикали */
}

.grid-container {
    display: grid; /* Сетка */
    grid-template-columns: repeat(3, 1fr); /* Три колонки равной ширины */
    gap: 10px; /* Отступы между элементами */
}
</code></pre>

<h2>Заключение</h2>
Понимание размеров и позиционирования элементов CSS является ключевым для создания эффективных и красивых веб-макетов. Экспериментируйте с различными свойствами и методами, чтобы создавать уникальные и привлекательные дизайны для вашего сайта.
</p>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>