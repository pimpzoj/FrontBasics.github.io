<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Что такое HTML</title>
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
	<h1>Что такое HTML</h1>
	<p>HTML (HyperText Markup Language) – это основной язык разметки веб-страниц. 
		Он представляет собой набор стандартных тегов и атрибутов, которые определяют 
		структуру и содержимое веб-страницы.</p>
		<h2>Основные понятия</h2>
		<h3>Теги</h3>
		<p>Теги - это основные строительные блоки HTML. Они используются для определения различных элементов на странице, таких как заголовки, параграфы, изображения и ссылки. Теги обычно имеют открывающий и закрывающий теги, которые определяют начало и конец элемента соответственно.</p>
		<p style="padding: 15px 0;">Пример:</p>



		
		<pre><code style="background-color: white;">
&lt;!DOCTYPE html&gt;
&lt;html lang="ru"&gt;
		</code></pre>

		<h3>
		Атрибуты
		</h3>

		<p>Атрибуты используются для предоставления дополнительной информации о элементах. Они могут содержать значения, которые определяют свойства или характеристики элемента.</p>
		<p style="padding: 15px 0;">Пример:</p>

		<pre><code style="background-color: white;">
&lt;img src="image.jpg" alt="Изображение"&gt;
		</code></pre>

		<h2>
		Зачем нужен HTML?
		</h2>

		<p>HTML играет ключевую роль в создании веб-страниц, поскольку определяет структуру и содержание контента. Благодаря HTML браузеры могут интерпретировать и отображать веб-страницы так, чтобы пользователи могли просматривать информацию в удобном виде.
<br>
Основные функции HTML:
<br><br>
<ul type="circle">
<li>● <span>Структурирование контента:</span> HTML позволяет организовать информацию на странице с помощью различных элементов, таких как заголовки, списки, таблицы и т.д.</li>
<li>● <span>Семантика:</span> Правильное использование тегов HTML помогает поисковым системам и другим инструментам лучше понимать содержимое страницы.</li>
<li>● <span>Доступность:</span> HTML предоставляет возможности для создания доступных веб-страниц, которые могут использоваться людьми с ограниченными возможностями.</li></p>
</ul>

		<h2>
		Заключение
		</h2>
		<p>
		HTML является основой веб-разработки и является необходимым языком для изучения для тех, кто хочет создавать собственные веб-страницы. Понимание основ HTML поможет вам создавать качественный и доступный контент для интернета.
		</p>


</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>