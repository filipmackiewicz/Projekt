<?php 
session_start();

$wyposazenie=$_POST['decyzja'];
$platnosc=$_POST['decyzja2'];
$nazwa = $_POST['nazwa'];
echo $nazwa;
$id=$_SESSION['id'];




$id_apart=$_POST['idapart'];





require_once "baza.php";
$db = new PDO($dsn, $db_user, $db_password);
$db->query("SET NAMES 'utf8'");

$sql = "INSERT INTO zamowienie(id_uzytkownika,wyposazenie,platnosc,id_pokoju)
VALUES ('$id','$wyposazenie','$platnosc','$id_apart')";
$db->exec($sql);
header('Location: historia.php');


?>