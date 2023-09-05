<?php
    if (isset($_POST['vote'])) {
        $idCandidat = $_POST['id'];

        // Requête SQL pour incrémenter les points du candidat
        $requeteIncrementPoints = $connexion->prepare("UPDATE candidat SET point = point + 1 WHERE id = ?");
        if ($requeteIncrementPoints->execute([$idCandidat])) {
            // Le vote s'est bien passé, afficher un pop-up personnalisé
            echo "<script>
                Swal.fire({
                    title: 'Succès!',
                    text: 'Votre vote a été enregistré avec succès!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(() => {
                    // Rediriger l'utilisateur vers une page de confirmation ou de remerciement
                    window.location.href = '../redirection.php';
                });
            </script>";
            exit(); // Assurez-vous de sortir du script après l'affichage du pop-up
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