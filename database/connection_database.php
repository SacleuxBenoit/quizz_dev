<?php
include('../pass.php');
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=randomQuotes;charset=utf8', $_SESSION['user'], $_SESSION['pass']);
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage());
        }
?>