<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Типографика (свойства текста)</title>
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
<h1>Типографика (Свойства текста)</h1>

<p>
Свойства текста CSS позволяют управлять внешним видом и отображением текста на веб-странице. В этом разделе мы рассмотрим основные свойства, которые влияют на типографику и оформление текста.
</p>

<h2>
Шрифт (font-family)
</h2>

<p>
Свойство font-family определяет шрифт текста. Можно указать один или несколько шрифтов, разделяя их запятыми. Если указанный шрифт недоступен, браузер выберет альтернативный шрифт из списка.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
body {
    font-family: Arial, Helvetica, sans-serif;
}
</code></pre>

<h2>
Размер шрифта (font-size)
</h2>

<p>
Свойство font-size устанавливает размер шрифта. Он может быть задан в различных единицах измерения, таких как пиксели (px), проценты (%), эм (em) и другие.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
h1 {
    font-size: 24px;
}
</code></pre>

<h2>
Начертание (font-weight, font-style)
</h2>

<p>
Свойства font-weight и font-style управляют начертанием текста. font-weight определяет жирность текста (нормальный, полужирный, жирный), а font-style определяет стиль (нормальный, курсивный, наклонный).
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
p {
    font-weight: bold;
    font-style: italic;
}
</code></pre>

<h2>
Отступы между буквами и словами (letter-spacing, word-spacing)
</h2>

<p>
Свойства letter-spacing и word-spacing управляют отступами между буквами и словами соответственно.
</p>

<p style="padding: 15px 0;">Примеры:</p>

<pre><code style="background-color: white;">
p {
    letter-spacing: 1px;
    word-spacing: 5px;
}
</code></pre>

<h2>
Выравнивание текста (text-align)
</h2>

<p>
Свойство text-align определяет выравнивание текста внутри блока или элемента. Возможные значения: left, center, right, justify.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
div {
    text-align: center;
}
</code></pre>

<h2>
Декорации текста (text-decoration)
</h2>

<p>
Свойство text-decoration добавляет декорации к тексту, такие как подчеркивание, зачеркивание, линия над текстом и линия сквозь текст.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
a {
    text-decoration: underline;
}
</code></pre>




<h2>Заключение</h2>
Свойства текста CSS предоставляют широкий набор инструментов для управления типографикой и оформлением текста на веб-страницах. Используйте их с умом, чтобы создавать красивый и удобочитаемый контент для ваших пользователей.
</p>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>