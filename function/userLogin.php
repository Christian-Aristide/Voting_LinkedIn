<?php
session_start(); // Démarrer la session

// Vérifier si l'utilisateur est déjà connecté, rediriger vers le tableau de bord si c'est le cas
if (isset($_SESSION['id']) && isset($_SESSION['nom_utilisateur'])) {
    // L'utilisateur est connecté, redirigez-le vers le tableau de bord
    header("Location: page.php");
    exit(); // Assurez-vous de sortir du script après la redirection
}

// Inclure le code de connexion à la base de données (connexion.php) ici
include "../data/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');
    $motDePasse = $_POST["password"];

    try {
        // Récupérer l'utilisateur avec l'adresse e-mail spécifiée
        $selectRequestUser = $connexion->prepare("SELECT * FROM utilisateurs WHERE email = ?");
        $selectRequestUser->execute([$email]);
        $user = $selectRequestUser->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($motDePasse, $user["mot_de_passe"])) {
            // L'utilisateur est authentifié avec succès, enregistrez les informations de session
            $_SESSION['id'] = $user['id'];
            $_SESSION['nom_utilisateur'] = $user['nom_utilisateur'];

            // Rediriger l'utilisateur vers le tableau de bord après la connexion
            header("Location: section.php");
            exit();
        } else {
            $message = "Adresse e-mail ou mot de passe incorrect.";
            // echo $message;
        }
    } catch (PDOException $e) {
        header("Location: ../redirection.php");
        die("Erreur lors de la connexion de l'utilisateur : " . $e->getMessage());
    }
}
?>
