<?php

	require_once "baza.php";
	$db = new PDO($dsn, $db_user, $db_password);
	$login = $_POST['login'];
	$haslo = $_POST['haslo'];
	
	if(isset($login) && isset($haslo) && $login!="" && $haslo!="")
	{
		$sql = "SELECT * FROM uzytkownik WHERE login='$login' AND haslo = '$haslo'";
		$db->query("SET NAMES 'utf8'");
		$stmt = $db->prepare($sql);
		$stmt->execute();
		
		if ($data = $stmt->fetch()) {
				session_start();
				$_SESSION['id'] = $data['id_uzytkownika'];
				$_SESSION['login'] = $data['login'];
				$_SESSION['haslo'] = $data['haslo'];
				$_SESSION['imie'] = $data['imie'];
				$_SESSION['nazwisko'] = $data['nazwisko'];
				$_SESSION['numer_tel'] = $data['numer_tel'];
				$_SESSION['adres'] = $data['adres'];
				$_SESSION['kod_pocztowy'] = $data['kod_pocztowy'];		
				$_SESSION['zalogowany']=true;
				header('Location: konto.php');
		} else {
			$_SESSION['zalogowany']=false;
				echo 'Brak Takiego Uzytkownika';
			}
			
	}
?>