<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Внешние и внутренние стили</title>
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
<h1>Внешние и внутренние стили</h1>

<p>
В CSS существует несколько способов определения стилей для веб-страниц. В этом разделе мы рассмотрим различия между внешними и внутренними стилями, их преимущества и недостатки.
</p>

<h2>
Внешние стили
</h2>

<p>
Внешние стили позволяют определять стили в отдельных CSS файлов, которые затем подключаются к HTML документам с помощью тега <link>. Этот метод позволяет разделять структуру и стиль, облегчая поддержку и обновление кода.
</p>

<p style="padding: 15px 0;">Пример подключенного CSS файла:</p>

<pre><code style="background-color: white;">
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;External Styles&lt;/title&gt;
    &lt;link rel="stylesheet" href="styles.css"&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;p&gt;This is a paragraph with external styles.&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h2>
Внутренние стили
</h2>

<p>
Внутренние стили позволяют определять стили непосредственно внутри тега &lt;style&gt; внутри секции &lt;head&gt; HTML документа. Этот метод удобен для создания стилей, которые применяются только к определенным страницам.
</p>

<p style="padding: 15px 0;">Пример внутренних стилей:</p>

<pre><code style="background-color: white;">
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;Internal Styles&lt;/title&gt;
    &lt;style&gt;
        p {
            color: blue;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;p&gt;This is a paragraph with internal styles.&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h2>Сравнение</h2>

<h3>
	Преимущества внешних стилей:
</h3>

<p>● Разделение структуры и стиля, что упрощает поддержку и обновление кода.</p>
<p>● Можно использовать одни и те же стили на нескольких страницах сайта.</p>


<h3>
	Преимущества внутренних стилей:
</h3>

<p>● Удобство определения стилей, применяемых только к определенной странице.</p>
<p>● Возможность использования стилей в HTML документах без необходимости создания отдельных CSS файлов.</p>



<h2>Заключение</h2>
Внешние и внутренние стили предоставляют различные способы определения стилей для веб-страниц. Выбор между ними зависит от конкретных потребностей вашего проекта и предпочтений разработчика.
</p>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>