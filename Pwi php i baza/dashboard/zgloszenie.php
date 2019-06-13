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
				<li><a href="buking.html">Srona główna</a></li>
				<li><a href="hotele.html">Hotele</a></li>
				<li><a href="apartamenty.html">Apartamenty</a></li>
				<li><a href="mieszkania.html">Mieszkania</a></li>
				<li><a href="logowanie.html">zaloguj się</a></li>
			</ul>	
		</nav>
	</header>
	<main>
			<article>
				<section>
					<div class="categories">
						<form action="#" method="post">
							<fieldset>
								<legend>Wybierz opcje zgloszenia</legend>
								<div><label><input type="radio" name="opcja" checked> Chce złożyć zażalenie </label></div>
								<div><label><input type="radio" name="opcja"> Chce wysłać pytanie </label></div>
								<div><label><input type="radio" name="opcja"> Chce nawiązać współpracę </label></div>
							</fieldset>
						<div class="row">
							<div><label for="komentarz"> Uzupełnij swoją wiadomość </label></div>
							<textarea name="komentarz" id="komentarz" rows="10" cols="80" maxlength="2566" minlength="10"></textarea>
						</div>
						<fieldset>
							<legend>Dane personalne</legend>
							<div><label>Imię <input type="text" placeholder="Podaj swoje imie"></label></div>
							<div><label>Nazwisko <input type="text" placeholder="Podaj swoje nazwisko"></label></div>
							<div><label>email <input type="text" placeholder="Podaj swój e-mail"></label></div>
						</fieldset>
						<div class="row">
							<button type="button">Wyslij</button>
							<input type="button" value="Powrót" onclick="window.location.href='buking.html'" />
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