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
<?php
 session_start(); ?>
	<header>
		<h1 class="logo">Bukink kom najlepsza strona z noclegami!</h1>
		<nav id="topnav">
			<ul class="menu">
				<li><a href="buking.php">Strona Główna</a></li>
				<li><a href="hotele.php">Hotele</a></li>
				<li><a href="apartamenty.php">Apartamenty</a></li>
											<?php
				if(@$_SESSION['zalogowany']==true){
					?>
				<li><a href="wyloguj.php">Wyloguj</a></li>
				<?php }
				else {
				?>
				<li><a href="index.php">zaloguj sie</a></li>
				<?php 
				}
				?>
			</ul>	
		</nav>
	</header>
	<main>
		<article>
			<section>
			<div class="categories">
			<header>
				<h1>Ładne mieszkania</h1>
				<p> Poniżej znajdziesz aktualne ogłoszenia mieszkań z wolnym terminem wynajmu na najbliższy rok.</p>
			</header>
				<div class="przyklad">
				<form method="post"  action="rezerwacja.php">
					<figure>
						<figcaption>Mieszkaie u Andrzeja - Kalisz</figcaption>
						<input type="hidden" id="nazwaapart90" name="nazwa" value="Mieszkaie u Andrzeja - Kalisz">
						<input type="hidden" id="idapart90" name="idapart" value="10">
						<img src="img/andrzej.jpg" alt="andrzej">
							<fieldset>
								<legend>Wyposażenie</legend>
							<div class="row">
								<div class="przyklad1">
								<div><label class="form-check-label" for="gridRadios1">Duże podwórko</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios1" value="Duże podwórko" checked></div>
								<div><label class="form-check-label" for="gridRadios2">Lodówka</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios2" value="Lodówka"></div>
								<div><label class="form-check-label" for="gridRadios3">Telewizor</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios3" value="Telewizor"></div>
								<div><label class="form-check-label" for="gridRadios4">Pralka</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios4" value="Pralka"></div>
							</div>
							<fieldset>
								<legend>Platnosc</legend>
							<div class="row">
							<div class="przyklad1">
								<div><label class="form-check-label" for="gridRadios1">Karta</label> <input class="form-check-input" type="radio" name="decyzja2" id="gridRadios5" value="Karta"></div>
								<div><label class="form-check-label" for="gridRadios1"> Gotówka</label><input class="form-check-input" type="radio" name="decyzja2" id="gridRadios6" value="Gotówka"></div>
							</div>
							</div>
							</fieldset>
						</div>
						</fieldset>
							<div class="row">
								<input type="submit" value="Rezerwuje" />
							</div>
					</figure>
					</form>
				</div>
				<div class="przyklad">
				<form method="post"  action="rezerwacja.php">
					<figure>
						<figcaption>Mieszkanie na Podkarpaciu</figcaption>
						<input type="hidden" id="nazwaapart09" name="nazwa" value="Mieszkanie na Podkarpaciu">
						<input type="hidden" id="idapart09" name="idapart" value="11">
						<img src="img/mieszkanie2.jpg" alt="mieszkanie">
							<fieldset>
								<legend>Wyposażenie</legend>
							<div class="row">
								<div class="przyklad1">
								<div><label class="form-check-label" for="gridRadios1">Wanna</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios7" value="Wanna" checked></div>
								<div><label class="form-check-label" for="gridRadios2">Taras</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios8" value="Taras"></div>
								<div><label class="form-check-label" for="gridRadios3">Telewizor</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios9" value="Telewizor"></div>
								<div><label class="form-check-label" for="gridRadios4">Wifi</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios10" value="Wifi"></div>
							</div>
							<fieldset>
								<legend>Platnosc</legend>
							<div class="row">
							<div class="przyklad1">
								<div><label class="form-check-label" for="gridRadios1">Karta</label> <input class="form-check-input" type="radio" name="decyzja2" id="gridRadios11" value="Karta"></div>
								<div><label class="form-check-label" for="gridRadios1"> Gotówka</label><input class="form-check-input" type="radio" name="decyzja2" id="gridRadios12" value="Gotówka"></div>
							</div>
							</div>
							</fieldset>
						</div>
						</fieldset>
							<div class="row">
								<input type="submit" value="Rezerwuje" />
							</div>
					</figure>
					</form>
				</div>
				</div>
			</section>
			<section id="najnowsze">
				<div class="kontakt">
					<header>
						<h1>Kontakt z obsługą</h1>
							<p>Masz jakieś zastrzeżenia, lub chciałbyś nawiązać współprace z nasza stroną? - zapraszamy do kontaktu! </p>
					</header>
					<a href="zgloszenie.html" class="przycisk">Kontakt</a>
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