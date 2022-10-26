<!DOCTYPE html>
<html>
<head>
    <title>Sklep Janka</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>Części samochodowe Janka</h1>
    <h2>Zamówienia klientów</h2>
<?php
    $plik=fopen("zamowienia.txt", 'rb');
    if(!$plik)
    {
        echo "<p><strong>Brak zamówień.
              Proszę spróbować późńiej.</strong></p>";
        exit;
    }
    while(!feof($plik))
    {
        $zamowienie=fgets($plik, 999);
        echo $zamowienie."<br>";
    }
    fclose($plik);
?>
</body>
</html>