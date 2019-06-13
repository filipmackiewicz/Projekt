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
session_start();
require_once "baza.php";
$db = new PDO($dsn, $db_user, $db_password);
$db->query("SET NAMES 'utf8'");
$id=$_SESSION['id'];

?>
	<header>
		<h1 class="logo">Bukink kom najlepsza strona z noclegami!</h1>
		<nav id="topnav">
			<ul class="menu">
				<li><a href="buking.php">Strona główna</a></li>
				<li><a href="uaktualnij.php">Uaktualnij dane</a></li>
				<li><a href="konto.php">Twoje Konto</a></li>
				<li><a href="wyloguj.php">Wyloguj się</a></li>
			</ul>	
		</nav>
	</header>
	<main>
		<article>
			<section>
			<div class="categories">
				<div class="komentarze">
					<header>
						<h1>Historia twoich rezerwacji: </h1>
					</header>
					<?php
                                    $sql = "SELECT * from zamowienie natural join pokoje where id_uzytkownika=$id";
                                    foreach($db->query($sql) as $row) {
                                        {
                                                ?>
												
					<div class="wpis">
						<div class="wpistekst">
							<h2><?php echo $row['nazwa'] ?></h2>
							<p>Wyposazenie: <?php echo $row['wyposazenie'] ?></p>
							<p>Platnosc: <?php echo $row['platnosc'] ?></p>
						</div>
					</div>

										

                            <?php
                                        }
                                    }                         
                                ?>
								
								

					

				</div>
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