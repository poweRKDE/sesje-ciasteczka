<?php
    session_start();

    if(!isset($_SESSION['test']))
    {
        echo('<br>Brak sesji lub plików cookie<br>');
    }
    else
    {
        echo('<br>Zapisana sesja:<br>');
        echo('Nazwisko: ');
        echo($_SESSION['nazwisko']);
        echo("<br>");
        echo('Imię: ');
        echo($_SESSION['imie']);
        echo("<br>");
        echo('Numer telefonu: ');
        echo($_SESSION['telefon']);
        echo("<br>");
        echo('E-mail: ');
        echo($_SESSION['mail']);
        echo("<br>");
        echo('Treść kontaktu: ');
        echo($_SESSION['tresc']);
        echo("<br>");
        echo('ID sesji: ');
        echo(session_id()); 
        echo('<br><br><br><br>');
        echo('Zapisane cookie<br>');
        echo('Login: ');
        echo($_COOKIE['login']);
        echo("<br>");
        echo('Hasło: ');
        echo($_COOKIE['haslo']);
        echo("<br>");
        echo('Nazwisko: ');
        echo($_COOKIE['nazwisko']);
        echo("<br>");
        echo('Imie: ');
        echo($_COOKIE['imie']);
        echo("<br>");
        echo('Telefon: ');
        echo($_COOKIE['telefon']);
        echo("<br>");
        echo('Adres e-mail: ');
        echo($_COOKIE['email']);
        echo("<br>");
    }
    echo('<br><a href="wylogowanie.php">Wyloguj</a>');
    echo('<br><a href="index.php">strona główna</a>');
?>