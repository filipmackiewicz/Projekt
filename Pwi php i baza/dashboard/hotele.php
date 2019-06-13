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
				<li><a href="apartamenty.php">Apartamenty</a></li>
				<li><a href="mieszkania.php">Mieszkania</a></li>
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
				<h1>Topowe Hotele w Polsce</h1>
				<p> Poniżej znajdziesz aktualne ogłoszenia hoteli z wolnym terminem noclegu na najbliższy rok.</p>
			</header>

				<div class="przyklad">
					<form method="post"  action="rezerwacja.php">
					<figure>
						<figcaption>Mariott Warszawa</figcaption>
						<input type="hidden" id="nazwaapart1" name="nazwa" value="Mariott Warszawa">
						<input type="hidden" id="idapart" name="idapart" value="7">
						<img src="img/mariot1.jpg" alt="Mariott Warszawa">
							<fieldset>
								<legend>Wyposażenie</legend>
							<div class="row">
								<div class="przyklad1">
								<div><label class="form-check-label" for="gridRadios1">Podwójne łóżko</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios1" value="Podwójne łóżko" checked></div>
								<div><label class="form-check-label" for="gridRadios2">Wifi</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios2" value="Wifi"></div>
								<div><label class="form-check-label" for="gridRadios3">Telewizor</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios3" value="Telewizor"></div>
								<div><label class="form-check-label" for="gridRadios4">Śniadanie do łóżka</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios4" value="Śniadanie do łóżka"></div>
							</div>
							<fieldset>
								<legend>Platnosc</legend>
							<div class="row">
							<div class="przyklad1">
								<div><label class="form-check-label" for="gridRadios5">Karta</label> <input class="form-check-input" type="radio" name="decyzja2" id="gridRadios5" value="Karta"></div>
								<div><label class="form-check-label" for="gridRadios6"> Gotówka</label><input class="form-check-input" type="radio" name="decyzja2" id="gridRadios6" value="Gotówka"></div>
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
						<figcaption>Hotel Żubrówka</figcaption>
						<img src="img/zubrowka1.jpg" alt="Hotel Żubrówka">
						<input type="hidden" id="nazwaapart2" name="nazwa" value="Hotel Żubrówk">
						<input type="hidden" id="idapart1" name="idapart" value="8">
							<fieldset>
								<legend>Wyposażenie</legend>
							<div class="row">
								<div class="przyklad1">
								<div><label class="form-check-label" for="gridRadios7">Basen</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios7" value="Basen" checked></div>
								<div><label class="form-check-label" for="gridRadios8">Wifi</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios8" value="Wifi"></div>
								<div><label class="form-check-label" for="gridRadios9">Telewizor</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios9" value="Telewizor"></div>
								<div><label class="form-check-label" for="gridRadios10">Prysznic</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios10" value="Prysznic"></div>
								</div>
								<fieldset>
								<legend>Platnosc</legend>
							<div class="row">
							<div class="przyklad1">
								<div><label class="form-check-label" for="gridRadios11">Karta</label> <input class="form-check-input" type="radio" name="decyzja2" id="gridRadios11" value="Karta"></div>
								<div><label class="form-check-label" for="gridRadios12"> Gotówka</label><input class="form-check-input" type="radio" name="decyzja2" id="gridRadios12" value="Gotówka"></div>
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
						<figcaption>Hotel Gołębiewski</figcaption>
						<input type="hidden" id="nazwaapart3" name="nazwa" value="Hotel Gołębiewski">
						<input type="hidden" id="idapart2" name="idapart" value="9">
						<img src="img/golebiewski.jpg" alt="Gołębiewski">
							<fieldset>
								<legend>Wyposażenie</legend>
							<div class="row">
								<div class="przyklad1">
								<div><label class="form-check-label" for="gridRadios13">Basen</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios13" value="Basen" checked></div>
								<div><label class="form-check-label" for="gridRadios14">Wifi na recepcji</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios14" value="Wifi na recepcji"></div>
								<div><label class="form-check-label" for="gridRadios15">Telewizor 232 cali</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios15" value="Telewizor 232 cali"></div>
								<div><label class="form-check-label" for="gridRadios16">Bilard</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios16" value="Bilard"></div>
							</div>
							<fieldset>
								<legend>Platnosc</legend>
							<div class="row">
							<div class="przyklad1">
								<div><label class="form-check-label" for="gridRadios17">Karta</label> <input class="form-check-input" type="radio" name="decyzja2" id="gridRadios17" value="Karta"></div>
								<div><label class="form-check-label" for="gridRadios18"> Gotówka</label><input class="form-check-input" type="radio" name="decyzja2" id="gridRadios18" value="Gotówka"></div>
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