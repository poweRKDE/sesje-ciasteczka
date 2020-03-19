
<nav id='formularz_kontaktowy'>
<form action='' method='POST'>
<input class='nazwisko' type='text' name='nazwisko' placeholder='Podaj Nazwisko'><br>
<input class='imie' type='text' name='imie' placeholder='Podaj Imię'><br>
<input class='telefon' type='number' name='telefon' placeholder='Podaj Telefon Kontaktowy' ><br>
<input class='mail' type='text' name='mail' placeholder='Podaj Adres email' ><br><br>
<textarea name='tresc' cols="65px" rows="10px">Podaj treść kontaktu</textarea><br>
<input type='submit' name='submit' value='Wyślij'>
</form>
</nav>






<?php
    $_SESSION['nazwisko'] = isset($_POST['nazwisko']) ? $_POST['nazwisko'] : 'Nie podano nazwiska';
    $_SESSION['imie'] = isset($_POST['imie']) ? $_POST['imie'] : 'Nie podano imienia'; 
    $_SESSION['telefon'] = isset($_POST['telefon']) ? $_POST['telefon'] : 'Nie podano numeru telefonu';
    $_SESSION['mail'] = isset($_POST['mail']) ? $_POST['mail'] : 'Nie podano adresu e-mail';
    $_SESSION['tresc'] = isset($_POST['tresc']) ? $_POST['tresc'] : 'Nie podano treści kontaktu';
?>
