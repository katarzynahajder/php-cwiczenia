<?php
	session_start();
	$con=mysqli_connect("localhost", "root", "", "baza")or die("Nie połączono z serwerem.");
	$login=$_POST['login'];
	$haslo=$_POST['haslo'];
	$dodaj_dane=mysqli_query($con, "INSERT INTO konta (login, haslo) VALUES ('$login', '$haslo')");
	if($dodaj_dane)
		header("Location: uzytkownik.php");
	else
		echo "Błąd rejestracji.";
?>