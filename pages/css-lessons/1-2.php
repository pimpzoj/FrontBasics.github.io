<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Как CSS взаимодействует с HTML</title>
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

<h1>
Как CSS взаимодействует с HTML
</h1>

<p>
CSS (Cascading Style Sheets) и HTML (HyperText Markup Language) работают в паре для создания структурированных и стилизованных веб-страниц. В этом разделе мы рассмотрим, как CSS взаимодействует с HTML и каким образом стили применяются к элементам на веб-странице.
</p>

<h2>
Внедрение стилей в HTML
</h2>

<p>
Стили могут быть внедрены в HTML документы несколькими способами:
</p>

<p>● Внешние таблицы стилей: CSS код хранится в отдельных файлах .css и подключается к HTML документу с помощью тега &lt;link&gt;.</p>
<p>● Внутренние стили: CSS код помещается непосредственно внутрь тега &lt;style&gt; внутри HTML документа.</p>
<p>● Inline стили: CSS код прописывается непосредственно в атрибутах HTML элементов.</p>

<h2>Каскадирование и приоритет стилей</h2>
<p>
При наличии нескольких правил CSS, применяющихся к одному и тому же элементу, используется механизм каскадирования для определения приоритета стилей. При этом учитываются специфичность селекторов, порядок следования правил и весовые значения.
</p>

<h2>Наследование стилей</h2>
<p>
Некоторые свойства CSS могут быть унаследованы дочерними элементами от родительских элементов. Например, цвет текста или размер шрифта, заданные для элемента-родителя, могут быть унаследованы его дочерними элементами.
</p>

<h2>Пример взаимодействия HTML и CSS</h2>
<p>
HTML:
</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;CSS взаимодействует с HTML&lt;/title&gt;
    &lt;link rel="stylesheet" href="styles.css"&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;p class="highlight"&gt;Пример текста с примененным стилем&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>

<p>
CSS(styles.css):
</p>
<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
.highlight {
    background-color: yellow;
}
</code></pre>

<h2>Заключение</h2>
<p>
CSS и HTML тесно взаимодействуют между собой, позволяя создавать красивые и структурированные веб-страницы. Понимание этого взаимодействия поможет вам эффективно применять стили к вашим HTML документам и создавать высококачественный веб-контент.
</p>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>