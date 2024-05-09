<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display и значения</title>
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
<h1>Свойство Display и значения.</h1>

<p>
Свойство display в CSS определяет тип отображения элемента на веб-странице. Оно играет ключевую роль в управлении макетом и компоновкой элементов. В этом разделе мы рассмотрим основные значения свойства display и их использование.
</p>

<h2>
Значение "block"
</h2>

<p>
Значение block делает элемент блочным. Блочные элементы занимают всю доступную ширину на странице и начинаются с новой строки.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
div {
    display: block;
}
</code></pre>

<h2>
Значение "inline"
</h2>

<p>
Значение inline делает элемент строчным. Строчные элементы занимают только столько пространства, сколько необходимо для их содержимого, и не начинаются с новой строки.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
span {
    display: inline;
}
</code></pre>

<h2>
Значение "inline-block"
</h2>

<p>
Значение inline-block делает элемент комбинацией блочного и строчного элемента. Он занимает только столько пространства, сколько необходимо для его содержимого, но при этом сохраняет свойства блочного элемента.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
button {
    display: inline-block;
}
</code></pre>

<h2>
Значение "none"
</h2>

<p>
Значение none скрывает элемент со страницы. Элемент не будет отображаться и не будет занимать место в макете страницы.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
.hidden {
    display: none;
}
</code></pre>

<h2>
Значение "flex" и "grid"
</h2>

<p>
Значения flex и grid позволяют создавать гибкие и адаптивные макеты с помощью флексбоксов и сеток.
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
Свойство display и его значения позволяют эффективно управлять отображением элементов на веб-странице. Понимание и использование различных значений display помогает создавать разнообразные макеты и дизайны, которые соответствуют требованиям вашего проекта.
</p>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>