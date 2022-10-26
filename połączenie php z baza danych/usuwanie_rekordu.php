<?php
$con=mysqli_connect("localhost", "root", "", "uczen")or die("Nie połączono z serwerem.");
$id=$_POST['id'];
mysqli_query($con, "DELETE FROM dane WHERE dane.id='$id'");
header("Location: index.php");
?>