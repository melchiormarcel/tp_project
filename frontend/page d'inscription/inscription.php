<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire d'Inscription</title>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap/css/all.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>

<body class="bg-success">


  <div class="container mt-4">
    <div class="row justify-content-center">
      <div class="col-md-6 ">
        <form action="../../backend/eleves/create.php" method="post" class="border p-4 bg-light">
          <?php if (isset($_SESSION['success_message']) && isset($_SESSION['type'])) {

            echo '<div class="alert alert-'.$_SESSION['type'].'" role="alert">
            '.$_SESSION['success_message'].'
          </div>' ;
            ?> 
          <?php } ?>
          
          <h1 class="col-md-3 mx-auto">Inscription</h1>
          <div class="mb-3">
            <label for="nom" class="form-label"> Nom
              <img src="icone/file-person.svg" />:
            </label>
            <input type="text" class="form-control" id="nom" name="nom" required>
          </div>
          <div class="mb-3">
            <label for="prenom" class="form-label">Prénoms
              <img src="icone/file-person.svg" />:
            </label>
            <input type="text" class="form-control" id="prenom" name="prenom" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Sexe</label>

            <div class="mb-3">
              <input class="form-check-input" type="radio" name="sexe" id="sexeHomme" value="Homme " required>
              <label class="form-check-label" for="sexeHomme"> M
              </label>
            </div>
            <div class="mb-3">
              <input class="form-check-input" type="radio" name="sexe" id="sexeFemme" value="Femme" required>
              <label class="form-check-label" for="sexeFemme">
                F
              </label>
            </div>
          </div>
          <div class="mb-3">
            <label for="nationalite" class="form-label">Nationalité <img src="icone/map.svg" />:</label>
            <input type="text" class="form-control" id="nationalite" name="nationalite" required>
          </div>
          <div class="mb-3">
            <label for="dateNaissance" class="form-label">Date de Naissance:</label>
            <input type="date" class="form-control" id="dateNaissance" name="dateNaissance" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">E-mail <img src="icone/envelope.svg"></label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="contact" class="form-label">Contact <img src="icone/telephone.svg" />:</label>
            <input type="tel" class="form-control" id="contact" name="contact" required>
          </div>
          <div class="col-md-3 mx-auto">
            <button type="submit" class="btn btn-primary ">Envoyer</button>
          </div>

        </form>
      </div>
    </div>
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  <script>

    toastr.options = {
      "closeButton": true,
      "positionClass": "toast-top-right",
      "timeOut": 10000
    };



  </script>



</body>

</html>