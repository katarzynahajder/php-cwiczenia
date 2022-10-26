<?php
$a=$_POST['liczba1'];
$b=$_POST['liczba2'];
if(($a+$b)>10)echo "Wynik nie może być większy niż 10.";
else if($a<0||$b<0)echo "Liczby nie mogą mieć wartości ujemnych.";
else echo "Wynik dzielenia: ", $a/$b;
?>