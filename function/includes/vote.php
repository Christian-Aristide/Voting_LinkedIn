<?php
session_start(); // Démarrer la session

    include "../../data/database.php";

    if (isset($_POST['vote'])) {
        $idCandidat = $_POST['id'];
        $idUtilisateur = $_SESSION['id']; // Assurez-vous d'avoir l'ID de l'utilisateur
        
        // Vérification si l'utilisateur a déjà voté dans les 24 dernières heures pour cette candidat et cette IP
        $requeteVerifVote = $connexion->prepare("SELECT MAX(date_vote) AS derniere_vote FROM votes WHERE utilisateur_id = ? AND ip_user = ?");
        $requeteVerifVote->execute([$idUtilisateur, $_SERVER['REMOTE_ADDR']]);
        $resultatVerifVote = $requeteVerifVote->fetch();
        
        if ($resultatVerifVote) {
            $derniereVote = strtotime($resultatVerifVote['derniere_vote']);
            $maintenant = time();
            $delai = 24 * 3600; // 24 heures en secondes
            
            if (($maintenant - $derniereVote) < $delai) {
                // L'utilisateur a déjà voté pour ce candidat dans les 24 dernières heures avec la même IP, afficher un message d'erreur
                ?>
                    <!DOCTYPE html>
                    <html lang="fr">

                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

                    </head>

                    <body>

                        <script>
                            Swal.fire({
                                title: 'Erreur!',
                                text: 'Vous avez déjà voté pour ce candidat dans les 24 dernières heures. Vous ne pouvez pas voter à nouveau pour le moment.',
                                icon: 'error',
                                confirmButtonText: 'OK'
                            }).then(() => {
                                // Rediriger l'utilisateur vers une page de confirmation ou de remerciement
                                window.location.href = '../../redirection.php';
                            });
                        </script>

                    </body>

                    </html>
                <?php
                exit(); // Assurez-vous de sortir du script
            }
        }
    
        // Requête SQL pour insérer le vote dans la table "votes"
        $requeteInsererVote = $connexion->prepare("INSERT INTO votes (utilisateur_id, ip_user, candidat_id, date_vote) VALUES (?, ?, ?, NOW())");
        if ($requeteInsererVote->execute([$idUtilisateur, $_SERVER['REMOTE_ADDR'], $idCandidat])) {
            // Enregistrement du vote réussi, vous pouvez également mettre à jour les points du candidat ici si nécessaire
            $requeteIncrementPoints = $connexion->prepare("UPDATE candidat SET point = point + 1 WHERE id = ?");
            
            // Afficher un pop-up de succès
            if ($requeteIncrementPoints->execute([$idCandidat])) {
                // Le vote s'est bien passé, afficher un pop-up personnalisé
                ?>
                <!DOCTYPE html>
                <html lang="fr">

                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

                </head>

                <body>

                <script>
                    Swal.fire({
                        title: 'Succès!',
                        text: 'Votre vote a été enregistré avec succès!',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        // Rediriger l'utilisateur vers une page de confirmation ou de remerciement
                        window.location.href = '../../redirection.php';
                    });
                </script>

                </body>
                </html>
            <?php
                echo "";
                exit(); // Assurez-vous de sortir du script après l'affichage du pop-up
            }else {
                // En cas d'erreur de requête, afficher un pop-up d'erreur
                echo "<script>
                    Swal.fire({
                        title: 'Erreur!',
                        text: 'Une erreur est survenue lors de l'enregistrement de votre vote.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                </script>";
            }
        } else {
            // En cas d'erreur de requête, afficher un pop-up d'erreur
            echo "<script>
                Swal.fire({
                    title: 'Erreur!',
                    text: 'Une erreur est survenue lors de l'enregistrement de votre vote.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            </script>";
        }
    }
?>