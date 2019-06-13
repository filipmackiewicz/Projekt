<?php 
session_start();
$adres = $_POST['nowyadres'];
$kod_pocztowy = $_POST['nowykod'];
$numer_tel = $_POST['nowynumer'];
$imie = $_POST['noweimie'];
$nazwisko = $_POST['nazwisko'];

$id= $_SESSION['id'];
				

if(isset($adres) && isset($kod_pocztowy) && isset($numer_tel) && isset($imie)&& isset($nazwisko) )
{
require_once "baza.php";
$db = new PDO($dsn, $db_user, $db_password);
		$db->query("SET NAMES 'utf8'");

		
		$db->exec("update uzytkownik set imie='$imie', nazwisko='$nazwisko',numer_tel='$numer_tel', 
		kod_pocztowy='$kod_pocztowy', adres='$adres' where id_uzytkownika='$id'");
		
		echo "dane zmienione";
		
		
		
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
    }
		
		
		
		
		header('Location: konto.php');
}
else echo "za malo danych";
?>