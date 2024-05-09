<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Элементы ввода</title>
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
<h1>Элементы ввода</h1>

<p>
Элементы ввода в HTML позволяют пользователям вводить данные на веб-странице. Они включают в себя различные типы полей для ввода текста, выбора опций, выбора файлов и другие. В этом разделе мы рассмотрим основные элементы ввода, которые вы можете использовать на вашей веб-странице.
</p>

<h2>
Текстовое поле (тег &lt;input type="text"&gt;)
</h2>

<p>
Текстовое поле позволяет пользователю вводить однострочный текст. Оно создается с помощью тега &lt;input&gt; с атрибутом type, установленным на "text".
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;label for="username"&gt;Имя пользователя:&lt;/label&gt;
&lt;input type="text" id="username" name="username" required&gt;
</code></pre>

<h2>Поле для ввода пароля (тег &lt;input type="password"&gt;)</h2>
<p>
Поле для ввода пароля скрывает введенные символы и используется для ввода конфиденциальной информации, такой как пароль.
</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;label for="password"&gt;Пароль:&lt;/label&gt;
&lt;input type="password" id="password" name="password" required&gt;
</code></pre>

<h2>Поле для ввода email (тег &lt;input type="email"&gt;)</h2>
<p>
Поле для ввода email валидирует введенные данные в формате email.
</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;label for="email"&gt;Email:&lt;/label&gt;
&lt;input type="email" id="email" name="email" required&gt;
</code></pre>

<h2>Флажок (тег &lt;input type="checkbox"&gt;)</h2>
<p>
checkbox позволяет пользователю выбрать одно или несколько значений из предложенных.
</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;input type="checkbox" id="subscribe" name="subscribe" value="subscribe"&gt;
&lt;label for="subscribe"&gt;Подписаться на рассылку&lt;/label&gt;
</code></pre>

<h2>Кнопка отправки формы (тег &lt;input type="submit"&gt;)</h2>
<p>
Кнопка отправки формы используется для отправки данных формы на сервер.
</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;input type="submit" value="Отправить"&gt;
</code></pre>

<h2>Заключение</h2>
<p>
Элементы ввода предоставляют средства для взаимодействия пользователя с вашей веб-страницей. Используйте различные типы полей ввода с умом, чтобы сделать вашу форму удобной и функциональной для пользователей.
</p>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>