<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вложенные списки</title>
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
<h1>Вложенные списки</h1>

<p>В HTML можно создавать вложенные списки, где каждый элемент списка может содержать другой список внутри себя. Это позволяет создавать более сложные структуры данных на странице. В этом разделе мы рассмотрим, как создавать и использовать вложенные списки на вашей веб-странице.
</p>

<h2>
Вложенные неупорядоченные списки
</h2>

<p>Вложенные неупорядоченные списки создаются путем вложения тегов &lt;ul&gt; один в другой. Каждый внутренний список будет отображаться с отступом от предыдущего элемента списка.</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;ul&gt;
  &lt;li&gt;Элемент 1
    &lt;ul&gt;
      &lt;li&gt;Подэлемент 1&lt;/li&gt;
      &lt;li&gt;Подэлемент 2&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;Элемент 2&lt;/li&gt;
&lt;/ul&gt;
</code></pre>

<h2>Вложенные упорядоченные списки</h2>
<p>Аналогично, вложенные упорядоченные списки создаются путем вложения тегов <ol> один в другой. Каждый внутренний список будет отображаться с отступом от предыдущего элемента списка.</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;ol&gt;
  &lt;li&gt;Элемент 1
    &lt;ol&gt;
      &lt;li&gt;Подэлемент 1&lt;/li&gt;
      &lt;li&gt;Подэлемент 2&lt;/li&gt;
    &lt;/ol&gt;
  &lt;/li&gt;
  &lt;li&gt;Элемент 2&lt;/li&gt;
&lt;/ol&gt;
</code></pre>

<h2>Комбинированные вложенные списки</h2>
<p>В HTML также можно создавать комбинированные вложенные списки, в которых внутри одного типа списка вложены элементы другого типа списка.</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;ul&gt;
  &lt;li&gt;Неупорядоченный элемент
    &lt;ol&gt;
      &lt;li&gt;Упорядоченный подэлемент 1&lt;/li&gt;
      &lt;li&gt;Упорядоченный подэлемент 2&lt;/li&gt;
    &lt;/ol&gt;
  &lt;/li&gt;
  &lt;li&gt;Еще один неупорядоченный элемент&lt;/li&gt;
&lt;/ul&gt;
</code></pre>

<h2>Заключение</h2>
<p>Вложенные списки представляют собой мощный инструмент для создания сложных структур данных на веб-страницах. Используйте их с умом, чтобы делать ваш контент более структурированным и понятным для пользователей.
</p>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>