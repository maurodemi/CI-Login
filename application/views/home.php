
<!--Created by PhpStorm.-->
<!--User: mdemichelis-->
<!--Date: 29/05/2018-->
<!--Time: 14:17-->

<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>

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
        <a href="<?php echo site_url('welcome/logout'); ?>"><button class="btnLogout">Logout</button></a>
<!--        <br><br><br>-->
    </header>
    <div> <!--Home Page-->
        <h1>Home page</h1>
        <p>Benvenuto!</p>

    </div>
    <footer> <!--Footer-->
        <p></p>
    </footer>
</body>
</html>

