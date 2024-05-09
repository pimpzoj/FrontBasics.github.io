<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Строки и столбцы</title>
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
<h1>Строки и столбцы</h1>

<p>
Строки и столбцы являются основными компонентами таблицы в HTML. В этом разделе мы рассмотрим, как использовать строки и столбцы для организации данных в таблице.
</p>

<h2>
	Строки (тег &lt;tr&gt;)
</h2>

<p>
Тег &lt;tr&gt; (table row) используется для создания строки в таблице. Каждая строка содержит один или несколько элементов ячеек, определенных с помощью тегов &lt;td&gt; или &lt;th&gt;.
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

<h2>Столбцы (теги &lt;td&gt; и &lt;th&gt;)</h2>
<p>
Теги &lt;td&gt; (table data) и &lt;th&gt; (table header) используются для создания ячеек данных в таблице. Каждая ячейка соответствует одному элементу данных в строке.
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

<h2>Атрибуты строк и столбцов</h2>
<p>
Теги &lt;tr&gt;, &lt;td&gt; и &lt;th&gt; могут также содержать различные атрибуты для настройки внешнего вида и поведения таблицы, такие как colspan, rowspan и другие.
</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;table&gt;
  &lt;tr&gt;
    &lt;th colspan="2"&gt;Заголовок ячеек 1 и 2&lt;/th&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td rowspan="2"&gt;Данные 1&lt;/td&gt;
    &lt;td&gt;Данные 2&lt;/td&gt;
  &lt;/tr&gt;
&lt;/table&gt;
</code></pre>

<h2>Заключение</h2>
<p>
Строки и столбцы представляют основные компоненты таблицы в HTML. Используйте теги &lt;tr&gt;, &lt;td&gt; и &lt;th&gt; с умом, чтобы организовать данные в таблице таким образом, чтобы они были понятны и удобочитаемы для пользователей.
</p>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>