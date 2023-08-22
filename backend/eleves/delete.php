<?php
require_once "../eleves/includes/config.php";
require_once "../eleves/includes/db_connect.php";

if (isset($_GET["id"]) && !empty($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "DELETE FROM eleves WHERE id = ?";
    $stmt = $pdo->prepare($sql);

    if ($stmt->execute([$id])) {
        header("location: index.php");
        exit();
    } else {
        echo "Une erreur est survenue lors de la suppression.";
    }
} else {
    echo "ID d'élève non spécifié.";
}
?>
