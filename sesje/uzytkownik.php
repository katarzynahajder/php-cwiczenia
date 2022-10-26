<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sklep muzyczny</title>
	<link rel="stylesheet" type="text/css" href="muzyka.css">
</head>
<body>
	<header>
		<h1>SKLEP MUZYCZNY</h1>
	</header>
	<nav>
		<h2>NASZA OFERTA</h2>
		<ol>
			<li>Instrumenty muzyczne</li>
			<li>Sprzęt audio</li>
			<li>Płyty CD</li>
		</ol>
    </nav>
    <main>
        <h2>KONTO UŻYTKOWNIKA</h2>
        <?php
            echo "<button onclick='session_destroy();' style='margin: 20px'>WYLOGUJ</button>";
        ?>
	</main>
</body>
</html>