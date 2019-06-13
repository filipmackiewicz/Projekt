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
$id= $_SESSION['id'];
$sql = "SELECT * FROM uzytkownik WHERE id_uzytkownika=$id";
	$stmt = $db->prepare($sql);
    $stmt->execute();
	
    if ($data = $stmt->fetch()) {
				$_SESSION['id'] = $data['id_uzytkownika'];
				$_SESSION['login'] = $data['login'];
				$_SESSION['haslo'] = $data['haslo'];
				$_SESSION['imie'] = $data['imie'];
				$_SESSION['nazwisko'] = $data['nazwisko'];
				$_SESSION['numer_tel'] = $data['numer_tel'];
				$_SESSION['adres'] = $data['adres'];
				$_SESSION['kod_pocztowy'] = $data['kod_pocztowy'];
    } else {
        echo 'Empty Query';
    }
?>

	<header>
		<h1 class="logo">Bukink kom najlepsza strona z noclegami!</h1>
		<nav id="topnav">
			<ul class="menu">
				<li><a href="buking.php">Strona główna</a></li>
				<li><a href="uaktualnij.php">Uaktualnij dane</a></li>
				<li><a href="historia.php">Historia zamówień</a></li>
				<li><a href="wyloguj.php">Wyloguj się</a></li>
			</ul>	
		</nav>
	</header> 
	<main>
		<article>
			<section>
			<div class="categories">
				<header>
					<h1>Twoje konto</h1>
					<p> Jeżeli Twoje dane osobowe są nieaktualne przejdź do zakładki "Uaktualnij dane".</p>
				</header>
			<form action="#" method="post">
				<div class="row">
					<div class="przyklad1">
					<fieldset>
						<legend>Dane osobowe</legend>
						<div><label>Imie: <?php echo $_SESSION['imie']; ?></label></div>
						<div><label>Nazwisko: <?php echo $_SESSION['nazwisko']; ?></label></div>
						<div><label>Adres Zamieszkaia: <?php echo $_SESSION['adres']; ?></label></div>
						<div><label>Kod-pocztowy:  <?php echo $_SESSION['kod_pocztowy']; ?></label></div>
						<div><label>Numer telefonu: <?php echo $_SESSION['numer_tel']; ?></label></div>
					</fieldset>
				</div>
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