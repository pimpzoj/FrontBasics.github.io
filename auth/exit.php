<?php
  setcookie('role', $user['role'], time() - 7200, "/");
  setcookie('login', $user['login'], time() - 7200, "/");

  header('Location:/');
?>