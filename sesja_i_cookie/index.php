<?php
    session_start();
?>
<!DOCTYPE HTML>
<html lang='pl'>
    <head>
        <meta charset='UTF-8' />
        <title>Strona www</title>
        <link rel='StyleSheet' href='style/style.css' type="text/css">

    </head>
    <body>

        <header>
            <?php
                include('includes/menu.php');
            ?>  
        </header>
        
        <main>
            <?php
                switch(isset($_GET['id']) ? $_GET['id'] : '')
                {
                    case 'zgloszenie': 
                        include("includes/zgloszenie.php"); 
                        break;
                    case 'formularz':
                        include('includes/formularz.php');
                        break;
                    case 'rejestracja':
                        include('includes/rejestracja.php');
                        break;
                }
            ?>
        </main>
        
        <footer>
            <?php
                $_SESSION['test'] = time();
                $_SESSION['a'] = "test";
                
                echo "<a href=\"sesja.php\">Sesja</a>";
            ?>
        </footer>                
    </body>

</html>