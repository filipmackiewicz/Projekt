<?php  
$imie=$_POST['imie'];
$nazwisko=$_POST['nazwisko'];
$haslo=$_POST['haslo'];
$login=$_POST['login'];
$kod_pocztowy=$_POST['kod_pocztowy'];
$adres=$_POST['adres'];
$numer_tel=$_POST['numer_tel'];
require_once "baza.php";
$db = new PDO($dsn, $db_user, $db_password);
$db->query("SET NAMES 'utf8'");
$sql = "INSERT INTO uzytkownik(id_uzytkownika, login, haslo, imie, nazwisko, numer_tel, adres, kod_pocztowy)
VALUES (NULL, '$login','$haslo','$imie','$nazwisko','$numer_tel','$adres','$kod_pocztowy')";
$db->exec($sql);
header('Location: konto_zalozone.php');
?>