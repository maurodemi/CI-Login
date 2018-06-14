
<!--Created by PhpStorm.-->
<!--User: mdemichelis-->
<!--Date: 06/06/2018-->
<!--Time: 12:32-->

<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign in</title>

    <meta charset="utf-8">
    <!--Descrizione del sito-->
    <meta name="description" content="E' una applicazione per la gestione di iscrizione e accesso a un portale">
    <!--Parole chiave che servono per la ricerca degli utenti-->
    <meta name="keywords" content="iscriviti, accedi">
    <!--Serve per rendere il sito responsive-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Serve per mettere una icona vicino al titolo della scheda-->
    <link rel="icon" href="">

    <!--Link al cdn di bootstrap-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <!--Link al foglio di stile css-->
    <link rel="stylesheet" href="<?php echo $this->config->item('resources')['css']?>/style.css">
</head>

<body>
    <header> <!--Header-->
        <h1></h1>
    </header>
    <div class="login"> <!--Registrazione-->
        <h1>Sign in</h1>
        <form action="<?php echo site_url('welcome/access'); ?>" method="post">
            <table>
                <tr>
                    <td><label for="name">Name:</label></td>
                    <td><input type="text" name="name" placeholder="es: Mario" required> <br></td>
                </tr>
                <tr>
                    <td><label for="surname">Surname:</label></td>
                    <td><input type="text" name="surname" placeholder="es: Rossi" required> <br></td>
                </tr>
                <tr>
                    <td><label for="date">Date of birth:</label></td>
                    <td><input type="date" name="date" required> <br></td>
                </tr>
                <tr>
                    <td><label for="sex">Sesso:</label></td>
                    <td>
                        <label for="sex">Maschio:</label>
                        <input type="radio" name="sex" value="male" checked>
                        <br>
                        <label for="sex">Femmina:</label>
                        <input type="radio" name="sex" value="female">
                    </td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" name="email" placeholder="" required> <br></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" name="password" placeholder="" required> <br></td>
                </tr>
                <tr>
                    <td><input class="btn" type="reset" value="Reset"></td>
                    <td><input class="btn" type="submit" value="Conferma"></td>
                </tr>
            </table>
        </form>
        <br>
        <a href="<?php echo site_url('welcome/login'); ?>"><button class="btn">Login</button></a>
    </div>
    <footer> <!--Footer-->
        <p></p>
    </footer>
</body>
</html>
