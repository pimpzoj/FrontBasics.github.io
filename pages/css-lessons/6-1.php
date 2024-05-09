<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Анимации и переходы</title>
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
<h1>Свойства для создания анимаций и переходов.</h1>

<p>
Анимации и переходы CSS позволяют добавить динамичности и интерактивности к элементам на веб-странице. Они позволяют создавать плавные эффекты, такие как изменение цвета, размера или положения элементов. В этом разделе мы рассмотрим основные свойства CSS для создания анимаций и переходов.
</p>

<h2>
Свойство transition
</h2>

<p>
Свойство transition позволяет плавно изменять значения свойств CSS при определенных событиях, таких как наведение курсора, изменение состояния или фокус элемента.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
.button {
    transition: background-color 0.3s ease;
}

.button:hover {
    background-color: #ff0000;
}
</code></pre>

<h2>
Свойства анимации
</h2>

<p>
Свойства анимации позволяют создавать более сложные и динамичные анимации, контролируя различные аспекты анимации, такие как продолжительность, задержка, направление и т. д.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
@keyframes slide {
    from {
        transform: translateX(0);
    }
    to {
        transform: translateX(100px);
    }
}

.element {
    animation: slide 1s ease-in-out;
}
</code></pre>

<h2>
Свойство animation-play-state
</h2>

<p>
Свойство animation-play-state позволяет приостанавливать и возобновлять анимацию в зависимости от состояния элемента.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
.element:hover {
    animation-play-state: paused;
}
</code></pre>

<h2>
Использование ключевых кадров
</h2>

<p>
Ключевые кадры (@keyframes) определяют изменения свойств CSS на различных этапах анимации и позволяют создавать более сложные и интересные анимационные эффекты.
</p>

<p style="padding: 15px 0;">Пример:</p>

<pre><code style="background-color: white;">
@keyframes pulse {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.2);
    }
    100% {
        transform: scale(1);
    }
}
</code></pre>

<h2>Заключение</h2>
Свойства для создания анимаций и переходов CSS являются мощными инструментами для добавления интерактивности и привлекательности к веб-страницам. Понимание и использование этих свойств позволяет разработчикам создавать динамичные и привлекательные пользовательские интерфейсы.
</p>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>