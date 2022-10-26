<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <style>
        #wprowadz, #usun, #wyswietl
        {
            float: left;
            width: 300px;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div id="wprowadz">
        <form action="wprowadzanie_rekordu.php" method="POST">
            <h2>Wprowadź rekord</h2>
            Imię:<br><input type="text" name="imie"><br>
            Nazwisko:<br><input type="text" name="nazwisko"><br>
            Klasa:<br><input type="text" name="klasa"><br>
            Średnia:<br><input type="text" name="srednia"><br>
            ID:<br><input type="text" name="id"><br><br>
            <input type="submit" value="Wyślij do bazy">
        </form>
    </div>
    <div id="usun">
        <form action="usuwanie_rekordu.php" method="POST">
            <h2>Usuń rekord</h2>
            ID:<br><input type="text" name="id"><br><br>
            <input type="submit" value="Wyślij do bazy">
        </form>
    </div>
    <div id="wyswietl">
        <form action="usuwanie_wybranych.php" method="POST">
            <h2>Zawartość bazy danych</h2>
            <?php
            $con=mysqli_connect("localhost", "root", "", "uczen")or die("Nie połączono z serwerem.");
            $wynik=mysqli_query($con, "SELECT * FROM dane");
            if(mysqli_num_rows($wynik)>0)
            {
                echo "<table cellpadding=\"6\" border=0>";
                echo "<td bgcolor=lightgray>Imię</td>";
                echo "<td bgcolor=lightgray>Nazwisko</td>";
                echo "<td bgcolor=lightgray>Klasa</td>";
                echo "<td bgcolor=lightgray>Średnia</td>";
                echo "<td bgcolor=lightgray>ID</td>";
                while($r=mysqli_fetch_array($wynik))
                {
                    echo "<tr bgcolor=#ebebeb>";
                    echo "<td>".$r['imie']."</td>";
                    echo "<td>".$r['nazwisko']."</td>";
                    echo "<td>".$r['klasa']."</td>";
                    echo "<td>".$r['srednia']."</td>";
                    echo "<td>".$r['id']."</td><td bgcolor=#ffffff><input type='checkbox' name='checkbox[]' value='".$r['id']."'></td>";
                }
            }
            ?>
            <input type="submit" name="delete" value="Usuń wybrane"><br><br>
        </form>
    </div>
</body>
</html>