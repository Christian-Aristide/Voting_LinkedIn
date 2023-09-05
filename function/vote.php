<?php
// Connexion à la base de données avec PDO
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "candidat_vote";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connexion échouée : " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["vote"])) {
    $id_candidat = $_POST['id'];
    $points = 1; // Changer la valeur si nécessaire 
    
    // Vérifier si l'utilisateur a déjà voté
    $user_ip = $_SERVER['REMOTE_ADDR'];
    $sql_check_vote = "SELECT * FROM vote WHERE ip = :user_ip";
    $stmt_check_vote = $conn->prepare($sql_check_vote);
    $stmt_check_vote->bindParam(':user_ip', $user_ip, PDO::PARAM_STR);
    $stmt_check_vote->execute();
    
    if ($stmt_check_vote->rowCount() > 0) {
        $row = $stmt_check_vote->fetch(PDO::FETCH_ASSOC);
        $last_vote_date = strtotime($row['vote_date']);
        $current_time = time();
        $time_diff = $current_time - $last_vote_date;
        
        if ($time_diff < 86400) { // 24 heures en secondes
            $message = "Vous avez déjà voté dans les dernières 24 heures. Veuillez attendre.";
        } else {
            // Mettre à jour le vote dans la table "vote"
            $sql_update_vote = "UPDATE vote SET candidat_id = :id_candidat, points = points + :points, vote_date = NOW() WHERE ip = :user_ip";
            $stmt_update_vote = $conn->prepare($sql_update_vote);
            $stmt_update_vote->bindParam(':id_candidat', $id_candidat, PDO::PARAM_INT);
            $stmt_update_vote->bindParam(':points', $points, PDO::PARAM_INT);
            $stmt_update_vote->bindParam(':user_ip', $user_ip, PDO::PARAM_STR);
            
            if ($stmt_update_vote->execute()) {
                $message = "Votre vote a été mis à jour avec succès!";
            } else {
                $message = "Erreur lors de la mise à jour du vote : " . $stmt_update_vote->errorInfo()[2];
            }
        }
    } else {
        // Insérer un nouveau vote dans la table "vote"
        $sql_insert_vote = "INSERT INTO vote (ip, candidat_id, points, vote_date) VALUES (:user_ip, :id_candidat, :points, NOW())";
        $stmt_insert_vote = $conn->prepare($sql_insert_vote);
        $stmt_insert_vote->bindParam(':user_ip', $user_ip, PDO::PARAM_STR);
        $stmt_insert_vote->bindParam(':id_candidat', $id_candidat, PDO::PARAM_INT);
        $stmt_insert_vote->bindParam(':points', $points, PDO::PARAM_INT);

        if ($stmt_insert_vote->execute()) {
            $message = "Votre vote a été enregistré avec succès!";
        } else {
            $message = "Erreur lors de l'enregistrement du vote : " . $stmt_insert_vote->errorInfo()[2];
        }
    }
}
?>
