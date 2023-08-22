<?php
session_start(); 


require_once "../eleves/includes/config.php";
require_once "../eleves/includes/db_connect.php";


$nom = $prenom = $email = $sexe = $nationalite = $dateNaissance = $contact = "";
$name_err = $prenom_err = $email_err = $sexe_err = $nationalite_err = $dateNaissance_err = $contact_err = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {


   $input_nom = trim($_POST["nom"]);
   if (empty($input_nom)) {
       $name_err = "Veuillez entrer un nom.";
   } else {
       $nom = $input_nom;
   }
     
     $input_prenom = trim($_POST["prenom"]);
     if (empty($input_prenom)) {
         $prenom_err = "Veuillez entrer un prenom.";
     } else {
         $prenom = $input_prenom;
     }

   
   $input_email = trim($_POST["email"]);
   if (empty($input_email)) {
       $email_err = "Veuillez entrer un e-mail.";
   } elseif (!filter_var($input_email, FILTER_VALIDATE_EMAIL)) {
       $email_err = "Veuillez entrer un e-mail valide.";
   } else {
       $email = $input_email;
   }

   
   $input_sexe = $_POST["sexe"];
   if (empty($input_sexe)) {
       $sexe_err = "Veuillez sélectionner un sexe.";
   } else {
       $sexe = $input_sexe;
   }

   
   $input_nationalite = trim($_POST["nationalite"]);
   if (empty($input_nationalite)) {
       $nationalite_err = "Veuillez entrer une nationalité.";
   } else {
       $nationalite = $input_nationalite;
   }


   $input_dateNaissance = trim($_POST["dateNaissance"]);
   if (empty($input_dateNaissance)) {
       $dateNaissance_err = "Veuillez entrer une date de naissance.";
   } else {
       $dateNaissance = $input_dateNaissance;
   }

   
   $input_contact = trim($_POST["contact"]);
   if (empty($input_contact)) {
       $contact_err = "Veuillez entrer un contact.";
   } else {
       $contact = $input_contact;
   }


    if (empty($name_err) && empty($prenom_err) && empty($email_err) && empty($sexe_err) && empty($nationalite_err) && empty($dateNaissance_err) && empty($contact_err)) {
        $sql = "INSERT INTO eleves (Nom, Prenoms, email, Sexe, Nationalite, DateNaissance, Contact) VALUES (?, ?, ?, ?, ?, ?, ?)";

        if ($stmt = $pdo->prepare($sql)) {
            $stmt->bindParam(1, $param_nom);
            $stmt->bindParam(2, $param_prenom);
            $stmt->bindParam(3, $param_email);
            $stmt->bindParam(4, $param_sexe);
            $stmt->bindParam(5, $param_nationalite);
            $stmt->bindParam(6, $param_dateNaissance);
            $stmt->bindParam(7, $param_contact);

    
             $param_nom = $nom;
             $param_prenom= $prenom;
             $param_email = $email;
             $param_sexe = $sexe;
             $param_nationalite = $nationalite;
             $param_dateNaissance = $dateNaissance;
             $param_contact = $contact;

             if ($stmt->execute()) {
                
                $_SESSION['success_message'] = "Opération réussie : vous avez été bien enregistré !";
                $_SESSION['type'] = "success";

                header("location: ../../frontend/page d'inscription/inscription.php");
                exit();
            } else {
                echo "Oops! Une erreur est survenue.";
                $_SESSION['success_message'] = "Oops! Une erreur est survenue.";
                $_SESSION['type'] = "danger";

                header("location: ../../frontend/page d'inscription/inscription.php");
            }
            
        }

        
        unset($stmt);
    }

    
    unset($pdo);
   /* header("location: ../../frontend/page d'inscription/inscription.php");
    exit();*/
}
?>


