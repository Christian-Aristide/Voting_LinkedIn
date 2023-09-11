<?php

try {
    // Connexion à la base de données (à adapter avec vos paramètres)
    // include "../data/database.php";
    include "../../data/database.php";

    // Requête SQL pour récupérer tous les candidats
    $requete = $connexion->query("SELECT * FROM candidat WHERE nomine = 'contenu_rh'");


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
                      <form action="../function/includes/vote.php" method="POST">
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
