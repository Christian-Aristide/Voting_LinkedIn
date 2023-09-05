<?php
session_start(); // Démarrer la session

// Vérifier si l'utilisateur est déjà connecté, rediriger vers le tableau de bord si c'est le cas
if (isset($_SESSION['utilisateur_id']) && isset($_SESSION['name'])) {
    // L'utilisateur est connecté, redirigez-le vers le tableau de bord
    header("Location: ./view/page.php");
    exit(); // Assurez-vous de sortir du script après la redirection
}

// Inclure le code de connexion à la base de données (connexion.php) ici

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "../data/database.php"; // Inclure le fichier de connexion

    $nom = htmlspecialchars($_POST["nom"], ENT_QUOTES, 'UTF-8');
    $prenom = htmlspecialchars($_POST["prenom"], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');
    $motDePasse = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hasher le mot de passe

    try {
        // Vérifier si l'adresse e-mail est déjà utilisée
        $requete_email_existe = $connexion->prepare("SELECT * FROM utilisateurs WHERE email = ?");
        $requete_email_existe->execute([$email]);

        if ($requete_email_existe->rowCount() > 0) {
            $message = "L'adresse e-mail est déjà utilisée. Veuillez en choisir une autre.";
        } else {
            // Insérer un nouvel utilisateur dans la base de données
            $requete_insert_utilisateur = $connexion->prepare("INSERT INTO utilisateurs (nom, prenom, email, mot_de_passe) VALUES (?, ?, ?, ?)");
            $requete_insert_utilisateur->execute([$nom, $prenom, $email, $motDePasse]);

            // Rediriger l'utilisateur vers la page de connexion après l'inscription
            header("Location: login.php");
            exit();
        }
    } catch (PDOException $e) {
        header("Location: ../redirection.php");
        die("Erreur lors de l'inscription de l'utilisateur : " . $e->getMessage());
    }
}
?>