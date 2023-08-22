<?php
// Inclure les fichiers de configuration et de connexion à la base de données
require_once "../eleves/includes/config.php"; // Inclut les configurations générales de l'application
require_once "../eleves/includes/db_connect.php"; // Établit une connexion à la base de données

// Vérifier si l'ID de l'élève est défini dans l'URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    
    // Sélectionner les détails de l'élève en fonction de son ID
    $sql = "SELECT * FROM eleves WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
    // Rediriger en cas d'ID non spécifié
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Détails de l'élève</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Détails de l'élève</h2>
    <ul class="list-group">
        <li class="list-group-item"><strong>Nom:</strong> <?php echo $row['Nom']; ?></li>
        <li class="list-group-item"><strong>Prénoms:</strong> <?php echo $row['Prenoms']; ?></li>
        <li class="list-group-item"><strong>Email:</strong> <?php echo $row['email']; ?></li>
        <li class="list-group-item"><strong>Sexe:</strong> <?php echo $row['Sexe']; ?></li>
        <li class="list-group-item"><strong>Nationalité:</strong> <?php echo $row['Nationalite']; ?></li>
        <li class="list-group-item"><strong>Date de Naissance:</strong> <?php echo $row['DateNaissance']; ?></li>
        <li class="list-group-item"><strong>Contact:</strong> <?php echo $row['Contact']; ?></li>
    </ul>
    <a href="index.php" class="btn btn-primary mt-3">Retour</a>
</div>

</body>
</html>
