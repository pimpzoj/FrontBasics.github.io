<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сортировка и фильтрация в таблицах</title>
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
<h1>Сортировка и фильтрация данных в таблицах</h1>

<p>
Хотя сортировка и фильтрация данных в таблицах обычно реализуются с помощью JavaScript, существуют также некоторые способы достичь этой функциональности без использования скриптов.
</p>

<h2>
Сортировка данных
</h2>

<p>
Сортировка данных в таблице может быть достигнута путем вручную упорядочивания строк в HTML-разметке. Это требует добавления атрибутов HTML к каждому столбцу таблицы, чтобы указать порядок сортировки.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;table&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th&gt;&lt;a href="#sort"&gt;Заголовок 1&lt;/a&gt;&lt;/th&gt;
      &lt;th&gt;&lt;a href="#sort"&gt;Заголовок 2&lt;/a&gt;&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;td&gt;Данные 1&lt;/td&gt;
      &lt;td&gt;Данные 2&lt;/td&gt;
    &lt;/tr&gt;
    &lt;!-- Остальные строки таблицы --&gt;
  &lt;/tbody&gt;
&lt;/table&gt;
</code></pre>

<h2>Фильтрация данных</h2>
<p>
Фильтрация данных в таблице может быть реализована с помощью HTML-атрибутов, таких как colspan и rowspan, чтобы объединить ячейки и создать структуру для фильтров.
</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;input type="text" id="filterInput" placeholder="Поиск по таблице"&gt;

&lt;table&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th&gt;Заголовок 1&lt;/th&gt;
      &lt;th&gt;Заголовок 2&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;td&gt;Данные 1&lt;/td&gt;
      &lt;td&gt;Данные 2&lt;/td&gt;
    &lt;/tr&gt;
    &lt;!-- Остальные строки таблицы --&gt;
  &lt;/tbody&gt;
&lt;/table&gt;
</code></pre>

<h2>Заключение</h2>
<p>
Хотя без JavaScript реализация сортировки и фильтрации данных в таблицах ограничена, вы можете использовать HTML-атрибуты для некоторых базовых функций. Однако для более сложных и интерактивных функций лучше использовать JavaScript.
</p>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>