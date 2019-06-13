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
				<h1>Ekskluzywne apartamenty</h1>
				<p> Poniżej znajdziesz aktualne ogłoszenia apartamentów z wolnym terminem noclegu na najbliższy rok.</p>
			</header>

			
			
				<div class="przyklad">
				<form method="post"  action="rezerwacja.php">
					<figure>
						<figcaption>Apartamenty u Mariolki</figcaption>
						<input type="hidden" id="nazwaapart" name="nazwa" value="Apartamenty u Mariolki">
						<input type="hidden" id="idapart" name="idapart" value="4">
						<img src="img/mariolka.png" alt="Mariolka">
							<fieldset>
								<legend>Wyposażenie</legend>
							<div class="row">
								<div class="przyklad1">
                                    </div>
                                    <div class="form-check">
                                        <div><label class="form-check-label" for="gridRadios1">Pojedyncze łóżko</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios1" value="Pojedyncze łóżko" checked></div>
										<div><label class="form-check-label" for="gridRadios2">Lodoówka</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios2" value="Lodówka"></div>
										<div><label class="form-check-label" for="gridRadios3">Pralka</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios3" value="Pralka" checked></div>
										<div><label class="form-check-label" for="gridRadios3">Kuchenka</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios4" value="Kuchenka" checked></div>
										
						
									</div>
						<fieldset>
								<legend>Platnosc</legend>
							<div class="row">
							<div class="przyklad1">
								<div class="form-check">
								<div><label class="form-check-label" for="gridRadios1">Karta</label> <input class="form-check-input" type="radio" name="decyzja2" id="gridRadios5" value="Karta"></div>
								<div><label class="form-check-label" for="gridRadios1"> Gotówka</label><input class="form-check-input" type="radio" name="decyzja2" id="gridRadios6" value="Gotówka"></div>
									</div></div>
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
						<figcaption>Apartamenty Wrocław</figcaption>
						<input type="hidden" id="nazwaapart2" name="nazwa" value="Apartamenty Wrocław">
						<input type="hidden" id="idapart2" name="idapart" value="5">
						<img src="img/wroclaw1.jpg" alt="Wroclaw">
							<fieldset>
								<legend>Wyposażenie</legend>
							<div class="row">
								<div class="przyklad1">
								<div><label class="form-check-label" for="gridRadios1">Basen</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios7" value="Basen" checked></div>
								<div><label class="form-check-label" for="gridRadios2">Wifi</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios8" value="Wifi"></div>
								<div><label class="form-check-label" for="gridRadios3">Telewizor</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios9" value="Telewizor"></div>
								<div><label class="form-check-label" for="gridRadios4">Prysznic</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios10" value="Prysznic"></div>
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
				
				
				<div class="przyklad">
				<form method="post"  action="rezerwacja.php">
					<figure>
						<figcaption>Apartamenty w Augustowie</figcaption>
						<input type="hidden" id="nazwaapart3" name="nazwa" value="Apartamenty w Augustowie">
						<input type="hidden" id="idapart3" name="idapart" value="3">
						<img src="img/augustow1.jpg" alt="Augustow">
							<fieldset>
								<legend>Wyposażenie</legend>
							<div class="row">
								<div class="przyklad1">
								<div><label class="form-check-label" for="gridRadios1">Basen</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios13" value="Basen" checked></div>
								<div><label class="form-check-label" for="gridRadios2">Wifi na recepcji</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios14" value="Wifi na recepcji"></div>
								<div><label class="form-check-label" for="gridRadios3">Telewizor 15 cali</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios15" value="Telewizor 15 cali"></div>
								<div><label class="form-check-label" for="gridRadios4">Bilard</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios16" value="Bilard"></div>
							</div>
							<fieldset>
								<legend>Platnosc</legend>
							<div class="row">
							<div class="przyklad1">
								<div><label class="form-check-label" for="gridRadios1">Karta</label> <input class="form-check-input" type="radio" name="decyzja2" id="gridRadios17" value="Karta"></div>
								<div><label class="form-check-label" for="gridRadios1"> Gotówka</label><input class="form-check-input" type="radio" name="decyzja2" id="gridRadios18" value="Gotówka"></div>
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
						<figcaption>Apartamenty w Białymstoku</figcaption>
						<input type="hidden" id="nazwaapart4" name="nazwa" value="Apartamenty w Białymstoku">
						<input type="hidden" id="idapart4" name="idapart" value="6">
						<img src="img/bialystok1.jpg" alt="bialystok">
							<fieldset>
								<legend>Wyposażenie</legend>
							<div class="row">
								<div class="przyklad1">
								<div><label class="form-check-label" for="gridRadios1">Basen</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios19" value="Basen" checked></div>
								<div><label class="form-check-label" for="gridRadios2">Wifi na recepcji</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios20" value="Wifi na recepcji"></div>
								<div><label class="form-check-label" for="gridRadios3">Telewizor 15 cali</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios21" value="Telewizor 15 cali"></div>
								<div><label class="form-check-label" for="gridRadios4">Bilard</label><input class="form-check-input" type="radio" name="decyzja" id="gridRadios22" value="Bilard"></div>
							</div>
							<fieldset>
								<legend>Platnosc</legend>
							<div class="row">
							<div class="przyklad1">
								<div><label class="form-check-label" for="gridRadios1">Karta</label> <input class="form-check-input" type="radio" name="decyzja2" id="gridRadios23" value="Karta"></div>
								<div><label class="form-check-label" for="gridRadios1"> Gotówka</label><input class="form-check-input" type="radio" name="decyzja2" id="gridRadios24" value="Gotówka"></div>
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