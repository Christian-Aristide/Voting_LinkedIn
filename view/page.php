<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Candidats</title>
    <!-- Inclure SweetAlert via un lien CDN (recommandé) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<style>
    .container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(20%, 1fr)); /* Divise en 4 colonnes et ajuste automatiquement */
        gap: 10px; /* Espacement entre les éléments */
    }

    .content {
        text-align: center;
        overflow: hidden; /* Empêche les images de déborder */
    }

    .content img {
        max-width: 100%; /* Assurez-vous que les images ne dépassent pas la largeur de leur conteneur */
    }
</style>
<body>
    <div class="container">
        <?php include "../function/script.php"; ?>
    </div>

</body>
</html>
