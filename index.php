<?php
session_start(); // Démarrer la session

if (isset($_SESSION['id'])) {
    // L'utilisateur est connecté, redirigez-le vers le tableau de bord
    header("Location: ./view/section.php");
    exit(); // Assurez-vous de sortir du script après la redirection
} else {
    // L'utilisateur n'est pas connecté, redirigez-le vers la page de connexion
    header("Location: ./view/login.php");
    exit(); // Assurez-vous de sortir du script après la redirection
}
?>