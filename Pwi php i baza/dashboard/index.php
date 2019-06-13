<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<title>bukink.kom</title>
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="css/fontello.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
</head>

<body>
	<header>
		<h1 class="logo">Bukink kom najlepsza strona z noclegami!</h1>
		<nav id="topnav">
			<ul class="menu">
				<li><a href="buking.php">Strona Główna</a></li>
				<li><a href="hotele.php">Hotele</a></li>
				<li><a href="apartamenty.php">Apartamenty</a></li>
				<li><a href="mieszkania.php">Mieszkania</a></li>
			</ul>	
		</nav>
	</header>
	<main>
		<article>
			<section>
			<div class="categories">
			<header>
				<h1>Zaloguj sie do swojego konta</h1>
			</header>
				<form action="zaloguj.php" method="post">
				<div class="row">
					<div class="przyklad1">
					<fieldset>
						<legend>Zaloguj się</legend>
						<label>Login<input type="text" name="login" placeholder="Podaj swój login"></label>
						<label>Hasło<input type="password" name="haslo"></label>
					</fieldset>
				</div>
			</div>
				<div class="row">
					<input type="submit" value="Zaloguj się"/>
				</div>
				</form>
				<h1 class="logo">Nie masz konta? Załóż je teraz!</h1>
				<form action="rejestracja.php" method="post">
				<div class="row">
					<div class="przyklad1">
					<fieldset>
						<legend>Załóż konto</legend>
						<div><label>login <input type="text" name="login" placeholder="Podaj swój login"></label></div>
						<div><label>haslo <input type="password" name="haslo" placeholder="Podaj swoje hasło"></label></div>
						<div><label>imie <input type="text" name="imie" placeholder="Podaj swoje imię"></label></div>
						<div><label>nazwisko <input type="text" name="nazwisko" placeholder="Podaj swoje nazwisko"></label></div>
						<div><label>numer telefonu <input type="text" pattern="^[0-9]{9}$" name="numer_tel" placeholder="Podaj swoj numer"></label></div>
						<div><label>adres <input type="text" name="adres" placeholder="Podaj swoj adres"></label></div>
						<div><label>kod_pocztowy <input type="text" pattern="^[0-9]{2}-[0-9]{3}$" name="kod_pocztowy"  placeholder="Podaj swoj kod pocztowy"></label></div>
					</fieldset>
				</div>
			</div>
				<div class="row">
					<input type="submit" value="Załóż konto"/>
				</div>
			</form>
			</div>
		</section>
		</article>
	</main>
	<footer>
		<div class="media">
			<div class="mediadivs">
				<div class="fb">
					<i class="icon-facebook"></i>
				</div>
				<div class="yt">
					<i class="icon-youtube"></i>
				</div>
				<div class="tw">
					<i class="icon-twitter"></i>
				</div>
				<div class="gplus">
					<i class="icon-gplus"></i>
				</div>
				<div style="clear:both"></div>
			</div>
		</div>

			<div class="info">
				Wszelkie prawa zastrzeżone &copy; 2019 Filip Mackiewicz
			</div>
	</footer>
</body>
</html>