<!-- Routeur Agence -->
<?php require './frontendController.php';
?>

<?php
session_start();
$title = 'Agence ' . $_SESSION['login'] . ' - Air Azur';
?>

<?php require '../view/frontend//navigation.php'; ?>

<?php
if (!isset($_REQUEST['action']))
    $action = 'accueil';
else
    $action = htmlspecialchars($_REQUEST['action']);


if (isset($_SESSION['login']) && $_SESSION['uStatus'] == 'agence') {
    switch ($action) {
        case 'accueil':
            require '../view/frontend/homeView.php';
            break;
        case 'vol':
            $arpts = findArpts();
            $vols = findVols();
            $clients = findClients();

            require('../view/frontend/volView.php');
            break;
        case 'reservation':
            $reservations = findReservations($_SESSION['idUsers']);
            require('../view/frontend/reservAllView.php');
            break;
        case 'pdf':
            header('Location: reservation.php$id=');
            break;
        case 'client':
            $clients = findClients();
            require('../view/frontend/clientView.php');
            break;
        case 'deconnexion':
            session_unset();
            session_destroy();
            $_SESSION = array();
            header('Location: http://localhost/Air_Azur/index.php');
            break;
    }
} else
    echo'erreur';

if (isset($_REQUEST['sendReserv'])) {
    sendReserver();
    header('Location: http://localhost/Air_Azur/controller/agence.php?action=reservation');
}
?>

<?php
require(dirname(__DIR__) . './view/_layout.php');
