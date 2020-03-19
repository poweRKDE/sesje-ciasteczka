
<nav id='formularz_kontaktowy'>
<form action='' method='POST'>
<input class='login' type='text' name='login' placeholder='Podaj login'><br>
<input class='haslo' type='password' name='haslo' placeholder='Podaj haslo'><br>
<input class='haslo' type='password' name='haslo1' placeholder='Powtórz haslo'><br>
<input class='nazwisko1' type='text' name='nazwisko' placeholder='Podaj Nazwisko'><br>
<input class='imie' type='text' name='imie' placeholder='Podaj Imię'><br>
<input class='telefon' type='number' name='telefon' placeholder='Podaj Telefon Kontaktowy' ><br>
<input class='mail' type='text' name='mail' placeholder='Podaj Adres email' ><br><br>
<input type='submit' name='submit' value='Wyślij'>
</form>
</nav>
<?php
    $login = isset($_POST['login']) ? $_POST['login'] : 'Nie podano loginu';
    $haslo = isset($_POST['haslo']) ? $_POST['haslo'] : 'Nie podano hasła';
    $haslo1 = isset($_POST['haslo1']) ? $_POST['haslo1'] : 'Nie podano powtórnego hasła';
    $nazwisko = isset($_POST['nazwisko']) ? $_POST['nazwisko'] : 'Nie podano nazwiska';
    $imie = isset($_POST['imie']) ? $_POST['imie'] : 'Nie podano imienia';
    $telefon = isset($_POST['telefon']) ? $_POST['telefon'] : 'Nie podano numeru telefonu';
    $mail = isset($_POST['mail']) ? $_POST['mail'] : 'Nie podano adresu e-mail';

    setcookie('login', $login, time() + (86400 * 30), "/");
    setcookie('haslo', $haslo, time() + (86400 * 30), "/");
    setcookie('powtorne_haslo', $haslo1, time() + (86400 * 30), "/");
    setcookie('nazwisko', $nazwisko, time() + (86400 * 30), "/");
    setcookie('imie', $imie, time() + (86400 * 30), "/");
    setcookie('telefon', $telefon, time() + (86400 * 30), "/");
    setcookie('email', $mail, time() + (86400 * 30), "/");

?>