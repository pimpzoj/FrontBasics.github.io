<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Семантические теги</title>
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
<h1>Семантические теги</h1>

<p>
Семантические теги HTML предоставляют структуру и смысл вашим веб-страницам, делая код более понятным для разработчиков и поисковых систем. В этом разделе мы рассмотрим основные семантические теги, такие как &lt;header&gt;, &lt;footer&gt;, &lt;nav&gt; и &lt;section&gt;, их назначение и использование.
</p>

<h2>
Тег &lt;header&gt;
</h2>

<p>
Тег &lt;header&gt; предназначен для определения заголовочной части вашего документа или секции. Обычно это может включать в себя логотип, название сайта, навигационное меню и другие важные элементы.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;header&gt;
    &lt;h1&gt;Заголовок сайта&lt;/h1&gt;
    &lt;nav&gt;
        &lt;ul&gt;
            &lt;li&gt;&lt;a href="#"&gt;Главная&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#"&gt;О нас&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#"&gt;Контакты&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/nav&gt;
&lt;/header&gt;
</code></pre>

<h2>Тег &lt;footer&gt;</h2>
<p>
Тег &lt;footer&gt; определяет нижнюю часть документа или секции, которая может содержать информацию об авторстве, контактные данные, ссылки на социальные сети и другие дополнительные сведения.
</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;footer&gt;
    &lt;p&gt;Авторские права &amp;copy; 2024 Ваше имя.&lt;/p&gt;
    &lt;nav&gt;
        &lt;ul&gt;
            &lt;li&gt;&lt;a href="#"&gt;Политика конфиденциальности&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#"&gt;Условия использования&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/nav&gt;
&lt;/footer&gt;
</code></pre>

<h2>Тег &lt;nav&gt;</h2>
<p>
Тег &lt;nav&gt; предназначен для определения блока навигации, который содержит ссылки на различные разделы вашего сайта или другие страницы.
</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;nav&gt;
    &lt;ul&gt;
        &lt;li&gt;&lt;a href="#"&gt;Главная&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;О нас&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;Контакты&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
</code></pre>

<h2>Тег &lt;section&gt;</h2>
<p>
Тег &lt;section&gt; определяет раздел документа или страницы, обычно содержащий связанный контент. Он может быть использован для разделения контента на более логические блоки.
</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;section&gt;
    &lt;h2&gt;Наша команда&lt;/h2&gt;
    &lt;p&gt;Здесь будет представлена информация о нашей команде и ее участниках.&lt;/p&gt;
&lt;/section&gt;
</code></pre>

<h2>Заключение</h2>
<p>
Семантические теги HTML, такие как &lt;header&gt;, &lt;footer&gt;, &lt;nav&gt; и &lt;section&gt;, помогают организовать ваш код и делают его более понятным и читаемым. Используйте их соответственно, чтобы структурировать вашу веб-страницу и повысить ее семантическую ценность.
</p>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>