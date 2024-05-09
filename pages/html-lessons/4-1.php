<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Списки</title>
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
<h1>Неупорядоченные и упорядоченные списки</h1>

<p>Списки в HTML используются для представления информации в упорядоченном или неупорядоченном виде. В этом разделе мы рассмотрим, как создавать неупорядоченные и упорядоченные списки на вашей веб-странице.
</p>

<h2>
Неупорядоченные списки
</h2>

<p>Неупорядоченные списки используются для представления элементов в случайном порядке, без какой-либо числовой или буквенной нумерации. Каждый элемент списка обычно отмечается маркером или иконкой.</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;ul&gt;
  &lt;li&gt;Первый элемент&lt;/li&gt;
  &lt;li&gt;Второй элемент&lt;/li&gt;
  &lt;li&gt;Третий элемент&lt;/li&gt;
&lt;/ul&gt;
</code></pre>

<h2>Упорядоченные списки</h2>
<p>Упорядоченные списки представляют элементы, упорядоченные по порядку с помощью числовой или буквенной нумерации. Каждый элемент списка автоматически пронумерован в порядке следования.</p>
<p style="padding: 15px 0;">Пример:</p>

<h3>Список с числовой нумерацией:</h3>

<pre><code style="background-color: white;">
&lt;ol&gt;
  &lt;li&gt;Первый элемент&lt;/li&gt;
  &lt;li&gt;Второй элемент&lt;/li&gt;
  &lt;li&gt;Третий элемент&lt;/li&gt;
&lt;/ol&gt;
</code></pre>

<h3>Список с буквенной нумерацией:</h3>

<pre><code style="background-color: white;">
&lt;ol type="a"&gt;
  &lt;li&gt;Первый элемент&lt;/li&gt;
  &lt;li&gt;Второй элемент&lt;/li&gt;
  &lt;li&gt;Третий элемент&lt;/li&gt;
&lt;/ol&gt;
</code></pre>

<h2>Вложенные списки</h2>
<p>В HTML можно создавать вложенные списки, где каждый элемент списка может содержать другой список внутри себя. Это позволяет создавать более сложные структуры данных на странице.</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;ul&gt;
  &lt;li&gt;Первый элемент
    &lt;ul&gt;
      &lt;li&gt;Подэлемент 1&lt;/li&gt;
      &lt;li&gt;Подэлемент 2&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;Второй элемент&lt;/li&gt;
&lt;/ul&gt;

</code></pre>

<h2>Заключение</h2>
<p>Неупорядоченные и упорядоченные списки являются важными элементами веб-страниц, которые помогают организовать и представить информацию пользователю в удобной форме. Используйте списки с умом, чтобы делать ваш контент более структурированным и понятным.
</p>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>