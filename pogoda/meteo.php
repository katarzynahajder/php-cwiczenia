<!DOCTYPE HTML>
<html>
<head>
	<title>Prognoza pogody Poznań</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styl4.css">
</head>
<body>
	<div id="baner_lewy">
		<p>maj, 2019 r.</p>
	</div>
	<div id="baner_srodkowy">
		<h2>Prognoza dla Poznania</h2>
	</div>
	<div id="baner_prawy">
		<img src="logo.png" alt="prognoza">
	</div>
	<div id="lewy">
		<a href="kwerendy.txt">Kwerendy</a>
	</div>
	<div id="prawy">
		<img src="obraz.jpg" alt="Polska, Poznań">
	</div>	
	<div id="glowny">
    <table>
    <?php
    $con=mysqli_connect("localhost", "root", "", "prognoza");
	$zapytanie1=mysqli_query($con, "SELECT * FROM pogoda WHERE miasta_id=2 ORDER BY data_prognozy DESC");
    if(mysqli_num_rows($zapytanie1)>0)
    {
        echo "<td class='naglowek'>Lp.</td>";
        echo "<td class='naglowek'>DATA</td>";
        echo "<td class='naglowek'>NOC- TEMPERATURA</td>";
        echo "<td class='naglowek'>DZIEŃ - TEMPERATURA</td>";
        echo "<td class='naglowek'>OPADY [mm/h]</td>";
        echo "<td class='naglowek'>CIŚNIENIE [hPa]</td>";
        while($r=mysqli_fetch_array($zapytanie1))
        {
            echo "<tr>";
            echo "<td>".$r['id']."</td>";
            echo "<td>".$r['data_prognozy']."</td>";
            echo "<td>".$r['temperatura_noc']."</td>";
            echo "<td>".$r['temperatura_dzien']."</td>";
            echo "<td>".$r['opady']."</td>";
            echo "<td>".$r['cisnienie']."</td>";
            echo "</tr>";
        }
    }
    mysqli_close ($con);
    ?>
    </table>
	</div>
	<div id="stopka">
		<p>Stronę wykonał: Malwina Hajder</p>
	</div>
</body>
</html>