<?php
    session_start();
    session_destroy();
    setcookie('login', "", time() - 3600);
    setcookie('haslo', "", time() - 3600);
    setcookie('powtorne_haslo',"", time() - 3600);
    setcookie('nazwisko',"", time() - 3600);
    setcookie('imie',"", time() - 3600);
    setcookie('telefon', "", time() - 3600);
    setcookie('email', "", time() - 3600);

    echo('<a href="index.php">Strona Główna</a><br>');
    echo('<a href="sesja.php">Sesja</a><br>');
?>