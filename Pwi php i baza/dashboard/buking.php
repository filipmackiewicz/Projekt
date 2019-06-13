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
				<li><a href="hotele.php">Hotele</a></li>
				<li><a href="apartamenty.php">Apartamenty</a></li>
				<li><a href="mieszkania.php">Mieszkania</a></li>
				<?php
				if(@$_SESSION['zalogowany']==true){
					?>
				<li><a href="konto.php">Moje Konto</a></li>
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
				<h1>Witaj na naszej stronie</h1>
				<p> Chcesz wyjechać na wakacje a nie masz zorganizowanego noclegu? Świetnie trafiłeś, na naszej stronie znajdziesz 
					nocleg w każdym polskim mieście. Ponizej znajdziesz pare przykładowych hoteli, apartamentów które mamy w naszej ofercie.</p>
			</header>

				<div class="przyklad">
					<figure>
						<a href="hotele.php"><img src="img/mariot.jpg" alt="Mariott Warszawa"></a>
							<figcaption>Mariott Warszawa</figcaption>
					</figure>
				</div>
				

				<div class="przyklad">
					<figure>
						<a href="mieszkania.php"><img src="img/andrzej.jpg" alt="pokoje u andrzeja"></a>
							<figcaption>Mieszkanie u Andrzeja</figcaption>
					</figure>
				</div>

				<div class="przyklad">
					<figure>
						<a href="apartamenty.php"><img src="img/mariolka.png" alt="Apartamety u Mariolki"></a>
							<figcaption>Apartamenty u Mariolki</figcaption>
					</figure>
				</div>

				<div class="przyklad">
					<figure>
						<a href="mieszkania.php"><img src="img/mieszkanie.jpg" alt="mieszkanie Poznań"></a>
							<figcaption>Mieszkanie Poznań</figcaption>
					</figure>
				</div>

				<div class="przyklad">
					<figure>
						<a href="apartamenty.php"><img src="img/villa.jpg" alt="Villa"></a>
							<figcaption>Aprtamety w Augustowie</figcaption>
					</figure>
				</div>

				<div class="przyklad">
					<figure>
						<a href="hotele.php"><img src="img/zubrowka2.jpg" alt="mieszkanie Białystok"></a>
							<figcaption>Żubrówka Białowierza</figcaption>
					</figure>
				</div>
			</div>
			</section>
			<section id="najnowsze">
				<div class="komentarze">
					<header>
						<h1>Najnowsze komentarze</h1>
						<p>Poniżej znajdziesz najnowsze komentarze z opiniami klientów na temat różnych noclegów.</p>
					</header>
					<div class="wpis">
					
						<div class="wpiszdjecie">
							<img src="img/mariot.jpg" alt="Mariott Warszawa">
						</div>
						<div class="wpistekst">
							<h2>Hotel Mariott Warszawa</h2>
							<p>Witam, wlasnie wróciłem z noclegu w Warszawie w tym miejscu, pobyt w tym pokoju to było coś niesamowitego. Spanie lepsze niż w domu a kołderka pachniała fiołkami.</p>
						</div>
					</div>
					

					<div class="wpis">
					
						<div class="wpiszdjecie">
							<img src="img/mariolka.png" alt="Mariolka">
						</div>
						<div class="wpistekst">
							<h2>Apartamenty u Mariolki</h2>
							<p>Wysłałem syna na 3 tygodnie do apartamentu u Mariolki aby od niego odpocząć, napisze krótko ale jasno: apartament przerósł moje oczekiwania, tak mu się spodobało, że nie wraca od 5 lat.</p>
						</div>
					</div>

					<div class="wpis">
					
						<div class="wpiszdjecie">
							<img src="img/andrzej.jpg" alt="Mariott">
						</div>
						<div class="wpistekst">
							<h2>Pokoje u Andrzeja</h2>
							<p>U Andrzeja jak u sąsiada, zawsze dobrze i tanio. Sklep monopolowy za rogiem także daleko chodzić nie trzeba a cena bardzo adekwatna. Pozdrawiam :) </p>
						</div>
					</div>
				</div>
			</section>	
			<section>
				<div class="kontakt">
					<header>
						<h1>Kontakt z obsługą</h1>
							<p>Masz jakieś zastrzeżenia, lub chciałbyś nawiązać współprace z nasza stroną? - zapraszamy do kontaktu! </p>
				
					</header>
					<a href="zgloszenie.php" class="przycisk">Kontakt</a>
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