<header>
				<?php
				if ($_COOKIE["role"] == ''):
				?>

	<a href="../index.php" class="logo"><span class="front">Front</span>Basics</a>
		<ul class="navbar">
			<li><a href="../index.php">Главная</a></li>
			<li><a href="../pages/html-no-auth.php">HTML</a></li>
			<li><a href="../pages/css-no-auth.php">CSS</a></li>
			<li><a href="../contacts.php">Контакты</a></li>
		</ul>
		<div class="nav-in">
				<a href="../login.php" class="login-btn">Войти</a>
				<a href="../registration.php" class="btn">Регистрация</a>
				<div class="bx bx-menu" id="menu-icon"></div>
		</div>
		<?php endif; ?>

				<?php
				if ($_COOKIE["login"] != ''):
				?>

	<a href="../../index.php" class="logo"><span class="front">Front</span>Basics</a>
		<ul class="navbar">
			<li><a href="../../index.php">Главная</a></li>
			<li><a href="../../pages/html-auth.php">HTML</a></li>
			<li><a href="../../pages/css-auth.php">CSS</a></li>
			<li><a href="../../contacts.php">Контакты</a></li>
		</ul>
			<div class="nav-in">
				<?=$_COOKIE["login"]?>
				<a href="../../auth/exit.php" class="btn">Выйти</a>
				<div class="bx bx-menu" id="menu-icon"></div>
			</div>
		<?php endif; ?>
	</header>