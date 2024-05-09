<?php
  $mysql = new mysqli ('localhost', 'root', '', 'frontbasics');
  
  if($mysql -> connect_error)
    die("Ошибка подключения: ". $mysql -> connect_error);
?>