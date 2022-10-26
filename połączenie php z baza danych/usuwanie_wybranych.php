<?php
$con=mysqli_connect("localhost", "root", "", "uczen")or die("Nie połączono z serwerem.");
if(isset($_POST['delete']))
{
    $wybrane=$_POST['checkbox'];
    foreach($wybrane as $id)mysqli_query($con, "DELETE FROM dane WHERE dane.id='$id'");
}
header("Location: index.php");
?>