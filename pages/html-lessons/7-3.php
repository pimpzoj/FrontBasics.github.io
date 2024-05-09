<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Валидация данных</title>
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
<h1>Валидация данных</h1>

<p>
Валидация данных - это процесс проверки введенной пользователем информации на соответствие определенным критериям или правилам. Веб-формы, такие как формы обратной связи или формы регистрации, часто используют валидацию данных для обеспечения корректного и безопасного ввода информации. В этом разделе мы рассмотрим, как реализовать валидацию данных с помощью встроенных средств HTML.
</p>

<h2>
Встроенная валидация HTML5
</h2>

<p>
HTML5 предоставляет встроенные средства валидации для некоторых типов данных, таких как email, URL, числа и т.д. Это позволяет браузерам автоматически проверять правильность введенных пользователем данных без необходимости написания дополнительного кода.
</p>

<h3>
Типы полей для ввода
</h3>

<p>HTML5 предоставляет различные типы полей для ввода, которые автоматически проверяются на валидность. Например:</p>

<p>● email: Проверяет, является ли введенное значение действительным email адресом.</p>

<pre><code style="background-color: white;">
&lt;label for="email"&gt;Email:&lt;/label&gt;
&lt;input type="email" id="email" name="email" required&gt;
</code></pre>

<p>● url: Проверяет, является ли введенное значение действительным URL адресом.</p>

<pre><code style="background-color: white;">
&lt;label for="website"&gt;Website:&lt;/label&gt;
&lt;input type="url" id="website" name="website" required&gt;
</code></pre>

<h3>Атрибуты для проверки</h3>

<p>HTML5 также предоставляет атрибуты для дополнительной настройки валидации данных:
</p>

<p>● required: Обязательное поле для заполнения.</p>
<p>● pattern: Позволяет указать регулярное выражение для проверки введенного значения.</p>

<pre><code style="background-color: white;">
&lt;label for="zip"&gt;ZIP Code:&lt;/label&gt;
&lt;input type="text" id="zip" name="zip" pattern="[0-9]{5}" required&gt;
</code></pre>

<h2>Заключение</h2>
<p>
Валидация данных является важной частью разработки веб-форм и приложений. Используйте встроенные средства валидации HTML5, чтобы обеспечить правильность и безопасность вводимой пользователем информации на вашем веб-сайте.
</p>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>