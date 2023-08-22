<?php
// Inclure les fichiers de configuration et de connexion à la base de données
require_once "../eleves/includes/config.php"; // Inclut les configurations générales de l'application
require_once "../eleves/includes/db_connect.php"; // Établit une connexion à la base de données

// Vérifier si l'ID de l'élève est défini dans l'URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $email = $_POST["email"];
        $sexe = $_POST["sexe"];
        $nationalite = $_POST["nationalite"];
        $dateNaissance = $_POST["dateNaissance"];
        $contact = $_POST["contact"];
        
        // Préparer la requête SQL de mise à jour
        $sql = "UPDATE eleves SET Nom=?, Prenoms=?, email=?, Sexe=?, Nationalite=?, DateNaissance=?, Contact=? WHERE id=?";
        $stmt = $pdo->prepare($sql);
        
        // Exécuter la requête de mise à jour
        if ($stmt->execute([$nom, $prenom, $email, $sexe, $nationalite, $dateNaissance, $contact, $id])) {
            header("Location: index.php");
            exit();
        } else {
            echo "Erreur lors de la mise à jour : " . $stmt->errorInfo()[2];
        }
    }
    
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
    <title>Modifier un Élève</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Modifier les informations d'un Élève</h2>
        <form action="<?php echo $_SERVER["PHP_SELF"] . '?id=' . $id; ?>" method="post">
            <div class="mb-3">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $row['Nom']; ?>">
            </div>
            <div class="mb-3">
                <label for="prenom">Prénom :</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo $row['Prenoms']; ?>">
            </div>
            <div class="mb-3">
                <label for="email">E-mail :</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>">
            </div>
            <div class="mb-3">
                <label for="sexe">Sexe :</label>
                <select class="form-select" id="sexe" name="sexe">
                    <option value="Homme" <?php if ($row['Sexe'] == "Homme") echo "selected"; ?>>Homme</option>
                    <option value="Femme" <?php if ($row['Sexe'] == "Femme") echo "selected"; ?>>Femme</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="nationalite">Nationalité :</label>
                <input type="text" class="form-control" id="nationalite" name="nationalite" value="<?php echo $row['Nationalite']; ?>">
            </div>
            <div class="mb-3">
                <label for="dateNaissance">Date de Naissance :</label>
                <input type="date" class="form-control" id="dateNaissance" name="dateNaissance" value="<?php echo $row['DateNaissance']; ?>">
            </div>
            <div class="mb-3">
                <label for="contact">Contact :</label>
                <input type="text" class="form-control" id="contact" name="contact" value="<?php echo $row['Contact']; ?>">
            </div>
            
            <button type="submit" class="btn btn-primary">Mettre à Jour</button>
            <a href="index.php" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
</body>
</html>


