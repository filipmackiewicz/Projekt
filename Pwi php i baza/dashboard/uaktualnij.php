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
				<li><a href="buking.php">Strona główna</a></li>
				<li><a href="konto.php">Moje konto</a></li>
				<li><a href="buking.php">Wyloguj się</a></li>
			</ul>	
		</nav>
	</header>
	<main>
		<article>
			<section>
			<div class="categories">
				<header>
					<h1>Dane osobowe</h1>
					<p> Możesz dodać dodatkowe informacje na temat swojej osoby na twoim koncie by ułatwić nam kontakt i innego rodzaju sprawy.</p>
				</header>
			<form action="zmiendane.php" method="post">
				<div class="row">
					<div class="przyklad1">
					<fieldset>
						<legend>Dane osobowe</legend>
						<div><label>Adres Zamieszkania <input type="text" name="nowyadres" placeholder="Podaj swój adres"></label></div>
						<div><label>Kod-pocztowy <input type="text" name="nowykod" pattern="^[0-9]{2}-[0-9]{3}$" placeholder="Podaj swój kod pocztowy"></label></div>
						<div><label>Numer telefonu <input type="text"    pattern="^[0-9]{9}$" name="nowynumer" placeholder="Podaj swój numer telefonu"></label></div>
						<div><label>Imie<input type="text" name="noweimie" placeholder="Podaj swoje imie"></label></div>
						<div><label>Nazwisko <input type="text" name="nazwisko" placeholder="Podaj swój numer telefonu"></label></div>
					</fieldset>
				</div>
			</div>
				<div class="row">
					<button type="submit">Zapisz dane osobowe</button>
					<input type="button" value="Powrót" onclick="window.location.href='konto.html'" />
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