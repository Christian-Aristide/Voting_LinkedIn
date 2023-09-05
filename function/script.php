<?php
try {
    // Connexion à la base de données (à adapter avec vos paramètres)
    include "../data/database.php";

    // Vérifier si le formulaire de vote a été soumis
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

    // Requête SQL pour récupérer tous les candidats
    $requete = $connexion->query("SELECT * FROM candidat");

    // Récupérer les résultats de la requête sous forme d'un tableau associatif
    $candidats = $requete->fetchAll(PDO::FETCH_ASSOC);

    // Afficher les candidats dans une liste
    foreach ($candidats as $candidat) {
        ?>
        <div class="content">
            <img src="../<?=$candidat['photo']?>" alt="">
            <h3><?=$candidat['nom_prenom']?> :  <?=$candidat['point']?></h3>
            <form  method="POST">
                <input type="hidden" name="id" value="<?=$candidat['id']?>">
                <button class="btn" style="background: blue; color: white" name="vote">Voter</button>
            </form>
        </div>
        <?php
        // echo "<li>Nom : " . $candidat['nom_prenom'] . " - Points : " . $candidat['point'] . "</li>";
    }
} catch (PDOException $e) {
    // En cas d'erreur de connexion à la base de données, afficher un pop-up d'erreur
    echo "<script>
        Swal.fire({
            title: 'Erreur!',
            text: 'Une erreur est survenue lors de la connexion à la base de données.',
            icon: 'error',
            confirmButtonText: 'OK'
        });
    </script>";
}
?>
