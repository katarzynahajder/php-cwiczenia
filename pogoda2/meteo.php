<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link href="styl4.css" rel="stylesheet" type="text/css">
	<title>Prognoza pogody Poznań</title>
</head>
<body>
	<div id="baner_lewy">
		<p>maj, 2019r.</p>
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
			<td class="naglowek">Lp</td>
			<td class="naglowek">DATA</td>
			<td class="naglowek">NOC - TEMPERATURA</td>
			<td class="naglowek">DZIEŃ - TEMPERATURA</td>
			<td class="naglowek">OPADY[mm/h]</td>
			<td class="naglowek">CIŚNIENIE[hPa]</td>
			<?php
            $con=mysqli_connect("localhost", "root", "", "prognoza");
            $wynik=mysqli_query($con, "SELECT * FROM pogoda WHERE miasta_id=2 ORDER BY data_prognozy DESC");
			if(mysqli_num_rows($wynik)>0)
			{
                while($r=mysqli_fetch_array($wynik))
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
            mysqli_close($con);
			?>
		</table>
	</div>
	<div id="stopka">
		<p>Stronę wykonał: Malwina Hajder</p>
	</div>
</body>
</html>