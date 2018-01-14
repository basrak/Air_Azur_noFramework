<!-- Routeur -->
<?php
session_start();

require 'controller/connexionController.php';

$msgConnexion = "";

if (isset($_POST['Connexion'])) {
    $login = htmlspecialchars($_POST['login']);
    $mdp = htmlspecialchars($_POST['mdp']);
    if (Connecter($login, $mdp) == true) {
        if (isset($_SESSION['login'])) {
            if ($_SESSION['uStatus'] == 'admin')
                header('Location: ./controller/admin.php');
            else if ($_SESSION['uStatus'] == 'agence')
                header('Location: ./controller/agence.php');
        }
    }
} else
    require('view/indexView.php');



