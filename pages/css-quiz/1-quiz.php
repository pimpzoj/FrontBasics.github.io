<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тест</title>
    <link rel="stylesheet" type="text/css" href="../../style/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../../style/css/quiz.css">
	<link rel="stylesheet" type="text/css" href="../../style/css/header.css">
    <link rel="shortcut icon" href="../../img/Shortcut.svg" type="image/x-icon">

	<link rel="stylesheet" type="text/css" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="../../scripts/header.js"></script>

</head>
<body>
<?php
    include("../../components/header.php")
  ?>

<div class="wrapper">
<div class="quiz-container" id="quiz">
  <div class="quiz-header">
    <h2 id="question">Question text</h2>
    <ul>
      <li>
        <input type="radio" name="answer" id="a" class="answer">
        <label for="a" id="a_text">Question</label>
      </li>

      <li>
        <input type="radio" name="answer" id="b" class="answer">
        <label for="b" id="b_text">Question</label>
      </li>

      <li>
        <input type="radio" name="answer" id="c" class="answer">
        <label for="c" id="c_text">Question</label>
      </li>

      <li>
        <input type="radio" name="answer" id="d" class="answer">
        <label for="d" id="d_text">Question</label>
      </li>
    </ul>
  </div>
  <button id="submit">Выбрать</button>
</div>
</div>
<script src="1-quiz.js"></script>
</body>
</html>