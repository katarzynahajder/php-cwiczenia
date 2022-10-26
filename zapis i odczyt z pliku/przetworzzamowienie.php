<?php
    $iloscopon=$_POST['opony'];
    $iloscoleju=$_POST['olej'];
    $iloscswiec=$_POST['swiece'];
    $adres=$_POST['adres'];
    $data=date('H:i, jS F Y');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sklep Janka</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>Części samochodowe Janka</h1>
    <h2>Wyniki zamówienia</h2>
<?php
    echo "<p>Zamówienie przyjęte o ".$data."</p>";
    echo "<p>Zamówienie Państwa wygląda następująco: </p>";
    $ilosc=0;
    $ilosc=$iloscopon+$iloscoleju+$iloscswiec;
    echo "Zamówionych części: ".$ilosc."<br>";
    if($ilosc==0)echo "Na poprzedniej stronie nie zostało złożone zamówienie!<br>";
    else
    {
        if($iloscopon>0)echo $iloscopon." opon<br>";
        if($iloscoleju>0)echo $iloscoleju." butelek oleju<br>";
        if($iloscswiec>0)echo $iloscswiec." świec zapłonowych<br>";
    }
    $wartosc=0.00;
    define('CENAOPON', 100);
    define('CENAOLEJU', 10);
    define('CENASWIEC', 4);
    $wartosc=$iloscopon*CENAOPON+$iloscoleju*CENAOLEJU+$iloscswiec*CENASWIEC;
    $wartosc=number_format($wartosc, 2, '.', '');
    echo "<p>Wartość zamówienia wynosi ".$wartosc."</p>";
    echo "<p>Adres wysyłki to ".$adres."</p>";
    $ciagwyjsciowy=$data."\t".$iloscopon." opon\t".$iloscoleju." butelek oleju\t".$iloscswiec." świec zapłonowych\t".$wartosc." PLN\t".$adres."\n";
    $plik=fopen("zamowienia.txt", 'ab');
    flock($plik, LOCK_EX);
    if(!$plik)
    {
        echo "<p><strong>Zamówienie Państwa nie może zostać przyjęte w tej chwili.
              Proszę spróbować późńiej.</strong></p></body></html>";
        exit;
    }
    fwrite($plik, $ciagwyjsciowy, strlen($ciagwyjsciowy));
    flock($plik, LOCK_UN);
    fclose($plik);
    echo "<p>Zamówienie zapisane.</p>";
?>
<body>
</html>