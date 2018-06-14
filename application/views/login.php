
<!--Created by PhpStorm.-->
<!--User: mdemichelis-->
<!--Date: 29/05/2018-->
<!--Time: 12:39-->

<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>

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
    <div class="login"> <!--Form del Login-->
        <form action="<?php echo site_url('welcome/login'); ?>" method="post">
            <label for="email">Email:</label> <br>
            <input type="email" name="email" placeholder="Email" required> <br>
            <label for="password">Password:</label> <br>
            <input type="password" name="password" placeholder="Password" required> <br>
            <button type="submit" class="btn">Login</button>
        </form>
        <!--Permette di far comparire un scritta di errore se i dati non vengono inseriti-->
        <!--<?php //if(function_exists('validation_errors')) {echo validation_errors();} ?>-->
    </div>
    <div class="login"> <!--Login Free/Sign in-->
        <label for="">Accedi:</label>
        <a href="<?php echo site_url('welcome/loginFree'); ?>"><button class="btn">Login free</button></a>
        <br><br>
        <label for="">Iscriviti:</label>
        <a href="<?php echo site_url('welcome/signin'); ?>"><button class="btn">Sign in</button></a>
    </div>
    <footer> <!--Footer-->
        <p></p>
    </footer>
</body>
</html>