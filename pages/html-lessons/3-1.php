<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форматирование текста</title>
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
<h1>Форматирование текста</h1>

<p>Форматирование текста в HTML позволяет изменять его внешний вид, делая контент более читаемым и привлекательным для пользователей. В этом разделе мы рассмотрим некоторые основные способы форматирования текста в HTML.</p>

<h2>
Полужирный текст (Bold)
</h2>

<p>Для отображения текста полужирным шрифтом используется тег &lt;strong&gt; или &lt;b&gt;. Это помогает выделить важные части текста и привлечь внимание читателя.</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;p&gt;Этот текст будет &lt;strong&gt;полужирным&lt;/strong&gt;.&lt;/p&gt;
</code></pre>

<h2>Курсивный текст (Italic)</h2>
<p>Курсивный текст создается с помощью тега &lt;em&gt; или &lt;i&gt;. Он используется для выделения участков текста, которые имеют особое значение или акцент.</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;p&gt;Этот текст будет &lt;em&gt;курсивным&lt;/em&gt;.&lt;/p&gt;
</code></pre>

<h2>Подчеркнутый текст (Underline)</h2>
<p>Для добавления подчеркивания к тексту используется тег &lt;u&gt;. Однако, рекомендуется избегать этого стиля, так как он может ввести пользователя в заблуждение, предполагая, что это гиперссылка.</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;p&gt;Этот текст будет &lt;u&gt;подчеркнутым&lt;/u&gt;.&lt;/p&gt;
</code></pre>

<h2>Зачеркнутый текст (Strikethrough)</h2>
<p>Зачеркнутый текст создается с помощью тега &lt;s&gt; или &lt;strike&gt;. Этот стиль используется для обозначения текста, который был удален или неактуален.</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;p&gt;Этот текст будет &lt;s&gt;зачеркнутым&lt;/s&gt;.&lt;/p&gt;
</code></pre>

<h2>Моноширинный текст (Monospace)</h2>
<p>Тег &lt;code&gt; используется для отображения моноширинного текста, который обычно используется для отображения кода или команд.</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;p&gt;Этот текст будет &lt;code&gt;моноширинным&lt;/code&gt;.&lt;/p&gt;
</code></pre>

<h2>Заключение</h2>
<p>Форматирование текста в HTML позволяет создавать разнообразный и привлекательный контент на веб-страницах. Используйте различные стили текста с умом, чтобы делать ваш контент более читаемым и понятным для пользователей.</p>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>