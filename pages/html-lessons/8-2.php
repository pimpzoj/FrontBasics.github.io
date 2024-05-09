<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Фреймы и i-фреймы</title>
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
<h1>Фреймы и i-фреймы</h1>

<p>
Фреймы и i-фреймы - это элементы HTML, которые позволяют встраивать одну веб-страницу в другую. Они используются для создания многостраничных документов или для встраивания сторонних контентов, таких как видео, карты или другие веб-страницы. В этом разделе мы рассмотрим различия между фреймами и i-фреймами, их использование и советы по использованию.
</p>

<h2>
Фреймы (Frames)
</h2>

<p>
Фреймы были одним из первых способов разделения веб-страницы на несколько областей, каждая из которых могла загружать отдельный документ. Однако из-за своей сложности и недостаточной доступности на мобильных устройствах, фреймы стали менее популярными.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;frameset cols="25%,75%"&gt;
  &lt;frame src="menu.html" /&gt;
  &lt;frame src="content.html" /&gt;
&lt;/frameset&gt;
</code></pre>

<h2>i-фреймы (Inline Frames)</h2>
<p>
i-фреймы, или встроенные фреймы, представляют собой элемент HTML, который позволяет встраивать одну веб-страницу внутри другой в виде внутреннего окна. Они легко встраиваются на страницу и имеют более широкую поддержку в современных браузерах.
</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;iframe src="https://www.example.com"&gt;&lt;/iframe&gt;
</code></pre>

<h2>Различия между фреймами и i-фреймами</h2>

<p>● Фреймы разделяют весь экран на несколько областей, тогда как i-фреймы встраиваются внутри одной страницы.</p>
<p>● Использование фреймов требует определения областей с помощью тега &lt;frameset&gt;, в то время как i-фреймы добавляются просто с помощью тега &lt;iframe&gt;.</p>
<p>● Фреймы имеют ограниченную поддержку на мобильных устройствах, в то время как i-фреймы легко адаптируются к различным устройствам.</p>

<h2>Советы по использованию</h2>

<p>● Используйте i-фреймы для встраивания сторонних контентов, таких как карты или видео.</p>
<p>● Избегайте использования фреймов из-за их сложности и ограниченной поддержки.</p>
<p>● Убедитесь, что встроенный контент соответствует требованиям вашего сайта и не нарушает безопасность или производительность.</p>



<h2>Заключение</h2>
<p>
Фреймы и i-фреймы предоставляют средства для встраивания веб-страниц в другие документы. Используйте i-фреймы для более простого и удобного встраивания контента на ваш сайт, избегая сложностей и ограничений, связанных с использованием фреймов.
</p>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>