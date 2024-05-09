<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Цитаты и блоки цитат</title>
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
<h1>Цитаты и блоки цитат</h1>

<p>Цитаты в HTML используются для выделения текста, который был процитирован из другого источника. Это помогает подчеркнуть важность или авторитетность определенной информации. В этом разделе мы рассмотрим различные способы использования цитат и блоков цитат в HTML.</p>

<h2>
Тег &lt;blockquote&gt;
</h2>

<p>Тег &lt;blockquote&gt; используется для создания блока цитаты, который отображается в виде отдельного блока текста с отступом от левого и правого края. Этот тег обычно используется для длинных цитат, которые занимают несколько строк.</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;blockquote&gt;
  &lt;p&gt;Это цитата известного человека или источника.&lt;/p&gt;
&lt;/blockquote&gt;
</code></pre>

<h2>Тег &lt;q&gt;</h2>
<p>Тег &lt;q&gt; используется для выделения короткой цитаты, которая встраивается непосредственно в текс и обычно окружается кавычками. Этот тег обычно используется для цитат, которые занимают одну строку.</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;p&gt;Великий философ сказал: &lt;q&gt;Знание - сила&lt;/q&gt;.&lt;/p&gt;
</code></pre>

<h2>Тег &lt;cite&gt;</h2>
<p>Тег &lt;cite&gt; используется для указания источника цитаты или названия произведения. Он обычно включается внутри блока цитаты или после цитированного текста.</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;blockquote&gt;
  &lt;p&gt;Цитата из книги "Война и мир" &lt;cite&gt;Льва Толстого&lt;/cite&gt;.&lt;/p&gt;
&lt;/blockquote&gt;
</code></pre>

<h2>Заключение</h2>
<p>Цитаты и блоки цитат представляют собой важный элемент веб-страниц, который помогает выделить важные источники информации. Используйте их с умом, чтобы делать ваш контент более информативным и авторитетным для пользователей.</p>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>