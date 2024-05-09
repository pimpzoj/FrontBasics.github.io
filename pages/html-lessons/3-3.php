<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Абзацы и переносы строк</title>
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
<h1>Абзацы и переносы строк</h1>

<p>Абзацы и переносы строк в HTML используются для организации текста и создания визуальной структуры веб-страницы. В этом разделе мы рассмотрим, как использовать абзацы и переносы строк для форматирования текста на вашей странице.
</p>

<h2>
Тег &lt;p&gt;
</h2>

<p>Тег &lt;p&gt; используется для создания абзацев текста на веб-странице. Каждый абзац обычно отображается как отдельный блок текста с отступом сверху и снизу.</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;p&gt;Это первый абзац.&lt;/p&gt;
&lt;p&gt;Это второй абзац.&lt;/p&gt;
</code></pre>

<h2>Тег &lt;br&gt;</h2>
<p>Тег &lt;br&gt; используется для создания переноса строки внутри абзаца. Он позволяет разместить текст на следующей строке без создания нового абзаца.</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;p&gt;Это первая строка.&lt;br&gt;Это вторая строка.&lt;/p&gt;
</code></pre>

<h2>Пустые абзацы</h2>
<p>Пустые абзацы могут использоваться для создания вертикальных отступов между разделами текста или элементами на странице. Это можно сделать, вставив пустой тег &lt;p&gt;.</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;p&gt;Это текст в первом абзаце.&lt;/p&gt;
&lt;p&gt;&lt;/p&gt;
&lt;p&gt;Это текст во втором абзаце.&lt;/p&gt;
</code></pre>

<h2>Заключение</h2>
<p>Абзацы и переносы строк являются важными элементами веб-страниц, которые позволяют организовать текст для улучшения его читаемости и визуального восприятия. Используйте их с умом, чтобы делать ваш контент более структурированным и понятным для пользователей.
</p>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>