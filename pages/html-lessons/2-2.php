<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Элементы и теги HTML</title>
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
<h1>Элементы и теги HTML</h1>

<p>HTML предоставляет множество элементов и тегов для создания разнообразного контента на веб-странице. В этом разделе мы рассмотрим некоторые из основных элементов, таких как заголовки, списки, ссылки и изображения.</p>

<h2>
Заголовки (Heading)
</h2>

<p>Заголовки используются для обозначения различных разделов страницы и иерархии информации. В HTML существует шесть уровней заголовков, от &lt;h1&gt; до &lt;h6&gt;, где &lt;h1&gt; - самый высокий уровень заголовка, а &lt;h6&gt; - самый низкий.</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;h1&gt;Это заголовок первого уровня&lt;/h1&gt;
&lt;h2&gt;Это заголовок второго уровня&lt;/h2&gt;
</code></pre>

<h2>Списки (Lists)</h2>
<p>Списки используются для представления информации в упорядоченном или неупорядоченном виде. В HTML есть два основных типа списков: упорядоченные списки (&lt;ol&gt;) и неупорядоченные списки (&lt;ul&gt;), а также список определений (&lt;dl&gt;).</p>
<p style="padding: 15px 0;">Пример:</p>

<h3>Упорядоченные списки</h3>

<pre><code style="background-color: white;">
&lt;ol&gt;
  &lt;li&gt;Первый элемент&lt;/li&gt;
  &lt;li&gt;Второй элемент&lt;/li&gt;
&lt;/ol&gt;
</code></pre>

<h3>Неупорядоченные списки</h3>

<pre><code style="background-color: white;">
&lt;ul&gt;
  &lt;li&gt;Пункт 1&lt;/li&gt;
  &lt;li&gt;Пункт 2&lt;/li&gt;
&lt;/ul&gt;
</code></pre>

<h2>Ссылки (Links)</h2>
<p>Ссылки используются для создания гиперссылок на другие веб-страницы или ресурсы. В HTML для создания ссылок используется тег &lt;a&gt;, а атрибут href указывает на URL целевой страницы.</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;a href="https://www.example.com"&gt;Ссылка на примерный сайт&lt;/a&gt;
</code></pre>

<h2>Изображения (Images)</h2>
<p>Изображения используются для вставки графических элементов на страницу. Для вставки изображения в HTML используется тег &lt;img&gt;, а атрибут src содержит путь к файлу изображения.</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;img src="image.jpg" alt="Описание изображения"&gt;
</code></pre>

<h2>Заключение</h2>
<p>Элементы и теги HTML предоставляют широкий набор возможностей для создания разнообразного и качественного контента на веб-страницах. Используйте их с умом, чтобы делать ваш контент более информативным и привлекательным для пользователей.</p>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>