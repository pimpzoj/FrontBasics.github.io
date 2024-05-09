<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание таблиц</title>
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
<h1>Создание таблиц</h1>

<p>
	Таблицы в HTML предоставляют удобный способ организации и представления структурированных данных на веб-странице. В этом разделе мы рассмотрим, как создавать таблицы с помощью HTML.
</p>

<h2>
	Тег &lt;table&gt;
</h2>

<p>
	Тег &lt;table&gt; используется для создания таблицы на веб-странице. Он является контейнером для всей таблицы и содержит один или несколько тегов &lt;tr&gt;, которые представляют строки таблицы.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;table&gt;
  &lt;!-- Здесь будут располагаться строки таблицы --&gt;
&lt;/table&gt;
</code></pre>

<h2>Тег &lt;tr&gt;</h2>
<p>
	Тег &lt;tr&gt; (table row) используется для создания строки в таблице. Каждый тег &lt;tr&gt; содержит один или несколько тегов &lt;td&gt; или &lt;th&gt;, которые представляют ячейки таблицы.
</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;table&gt;
  &lt;tr&gt;
    &lt;td&gt;Ячейка 1&lt;/td&gt;
    &lt;td&gt;Ячейка 2&lt;/td&gt;
  &lt;/tr&gt;
&lt;/table&gt;
</code></pre>

<h2>Тег &lt;td&gt; и &lt;th&gt;</h2>
<p>
	Тег &lt;td&gt; (table data) используется для создания обычной ячейки данных в таблице. Тег &lt;th&gt; (table header) используется для создания заголовочной ячейки, которая обычно содержит заголовок столбца или строки.
</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;table&gt;
  &lt;tr&gt;
    &lt;th&gt;Заголовок 1&lt;/th&gt;
    &lt;th&gt;Заголовок 2&lt;/th&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;Данные 1&lt;/td&gt;
    &lt;td&gt;Данные 2&lt;/td&gt;
  &lt;/tr&gt;
&lt;/table&gt;
</code></pre>

<h2>Атрибуты таблицы</h2>
<p>
	Тег &lt;table&gt; может также содержать различные атрибуты для настройки внешнего вида и поведения таблицы, такие как border, cellpadding, cellspacing и другие.
</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;table border="1" cellpadding="5" cellspacing="0"&gt;
  &lt;!-- Содержимое таблицы --&gt;
&lt;/table&gt;
</code></pre>

<h2>Заключение</h2>
<p>
Таблицы в HTML являются важным инструментом для представления структурированных данных на веб-странице. Используйте теги &lt;table&gt;, &lt;tr&gt;, &lt;td&gt; и &lt;th&gt; с умом, чтобы создавать информативные и удобочитаемые таблицы для ваших пользователей.
</p>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>