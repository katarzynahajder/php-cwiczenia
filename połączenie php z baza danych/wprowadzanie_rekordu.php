<?php
$con=mysqli_connect("localhost", "root", "", "uczen")or die("Nie połączono z serwerem.");
$imie=$_POST['imie'];
$nazwisko=$_POST['nazwisko'];
$klasa=$_POST['klasa'];
$srednia=$_POST['srednia'];
$id=$_POST['id'];
mysqli_query($con, "INSERT INTO dane (imie, nazwisko, klasa, srednia, id) VALUES ('$imie', '$nazwisko', '$klasa', '$srednia', '$id')");
header("Location: index.php");
?>