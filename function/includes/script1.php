<?php
try {
    // Connexion à la base de données (à adapter avec vos paramètres)
    include "../data/database.php";

    // Vérifier si le formulaire de vote a été soumis
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
                echo "<script>
                    Swal.fire({
                        title: 'Erreur!',
                        text: 'Vous avez déjà voté pour ce candidat dans les 24 dernières heures. Vous ne pouvez pas voter à nouveau pour le moment.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        // Rediriger l'utilisateur vers une page de confirmation ou de remerciement
                        window.location.href = '../redirection.php';
                    });
                </script>";
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

    // Requête SQL pour récupérer tous les candidats
    $requete = $connexion->query("SELECT * FROM candidat WHERE nomine = 'producteur_contenu'");


    // Récupérer les résultats de la requête sous forme d'un tableau associatif
    $candidats = $requete->fetchAll(PDO::FETCH_ASSOC);

    // Afficher les candidats dans une liste
    foreach ($candidats as $candidat) {
        ?>
                  <div class="candidate">
                    <div class="candPic">
                      <div class="smcandPic"></div>
                    </div>
                    <div class="candiInfos">
                      <h2><?=$candidat['nom_prenom']?></h2>
                      <div class="count"><?=$candidat['point']?></div>
                      <form method="POST">
                        <input type="hidden" name="id" value="<?=$candidat['id']?>">
                        <button class="candBtn" name="vote">VOTEZ ICI</button>
                      </form>
                      <!-- <button class="candBtn">VOTEZ ICI</button> -->
                    </div>
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
