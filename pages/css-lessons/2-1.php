<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Селекторы и правила</title>
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
<h1>Селекторы и правила</h1>

<p>Селекторы и правила CSS являются основными строительными блоками для создания стилей на веб-страницах. В этом разделе мы рассмотрим различные виды селекторов и как они используются для применения стилей к элементам HTML.
</p>

<h2>
Основные виды селекторов
</h2>

<h3>Элементы HTML</h3>

<p>Селекторы элементов CSS выбирают все элементы с определенным именем тега. Например, селектор p выберет все элементы &lt;p&gt; на странице.</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
p {
    color: blue;
}
</code></pre>

<h3>Классы</h3>

<p>Селекторы классов CSS выбирают все элементы с определенным значением атрибута класса. Классы начинаются с точки. Например, селектор .highlight выберет все элементы с классом "highlight".</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
.highlight {
    background-color: yellow;
}
</code></pre>

<h3>Идентификаторы</h3>

<p>Селекторы идентификаторов CSS выбирают один элемент с определенным значением атрибута id. Идентификаторы начинаются с решетки. Например, селектор #header выберет элемент с id "header".</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
#header {
    font-size: 24px;
}
</code></pre>

<h3>Комбинированные селекторы
</h3>

<p>Селекторы CSS могут быть комбинированы для более точного выбора элементов. Например, селектор h1.highlight выберет все заголовки первого уровня с классом "highlight".</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
h1.highlight {
    color: red;
}
</code></pre>

<h2>Правила CSS</h2>
<p>Правила CSS определяют стили, которые будут применяться к выбранным элементам. Они состоят из пары свойств и значений, разделенных двоеточием, заключенных в фигурные скобки.</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
.selector {
    property: value;
}
</code></pre>

<h2>Вес селекторов</h2>
<p>При наличии нескольких правил CSS, которые применяются к одному и тому же элементу, используется механизм каскадирования для определения приоритета. Обычно более специфичные селекторы и правила имеют больший вес.</p>

<h2>Заключение</h2>
Селекторы и правила CSS предоставляют мощные инструменты для стилизации веб-страниц. Понимание различных видов селекторов и правил поможет вам эффективно применять стили к вашим HTML документам и создавать красивые и функциональные веб-сайты.
</p>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>