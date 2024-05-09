<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Цвета и фоны</title>
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
<h1>Цвета и фоны</h1>

<p>
В CSS цвета и фоны играют важную роль в создании стильного и привлекательного визуального дизайна веб-страниц. В этом разделе мы рассмотрим основные способы задания цветов и фонов в CSS.
</p>

<h2>
Цвет текста
</h2>

<p>
Цвет текста определяется с помощью свойства color. Можно использовать различные форматы цветов, такие как имена цветов, шестнадцатеричные коды или функции rgba().
</p>

<p style="padding: 15px 0;">Примеры:</p>

<pre><code style="background-color: white;">
p {
    color: red; /* Имя цвета */
}

h1 {
    color: #336699; /* Шестнадцатеричный код */
}

span {
    color: rgba(255, 0, 0, 0.5); /* RGBA функция */
}
</code></pre>

<h2>
Цвет фона
</h2>

<p>
Цвет фона определяется с помощью свойства background-color. Он может быть установлен таким же образом, как и цвет текста.
</p>

<p style="padding: 15px 0;">Примеры:</p>

<pre><code style="background-color: white;">
body {
    background-color: lightgray; /* Имя цвета */
}

.header {
    background-color: #f0f0f0; /* Шестнадцатеричный код */
}

.footer {
    background-color: rgba(0, 0, 255, 0.2); /* RGBA функция */
}
</code></pre>

<h2>
Фоновые изображения
</h2>

<p>
В CSS также можно задать фоновые изображения с помощью свойства background-image.
</p>

<p style="padding: 15px 0;">Примеры:</p>

<pre><code style="background-color: white;">
div {
    background-image: url('background.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
</code></pre>

<h2>
Градиенты
</h2>

<p>
CSS позволяет создавать градиентные фоны с помощью функции linear-gradient() или radial-gradient().
</p>

<p style="padding: 15px 0;">Примеры:</p>

<pre><code style="background-color: white;">
.header {
    background: linear-gradient(to right, red, yellow); /* Горизонтальный линейный градиент */
}

.footer {
    background: radial-gradient(circle, blue, green); /* Радиальный градиент */
}
</code></pre>




<h2>Заключение</h2>
Цвета и фоны CSS предоставляют широкий спектр возможностей для создания красивого и привлекательного дизайна веб-страниц. Экспериментируйте с различными цветами, фонами и эффектами, чтобы создать уникальный стиль для вашего сайта.
</p>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>