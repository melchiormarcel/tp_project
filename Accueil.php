<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil</title>
  <link rel="stylesheet" href="assets/datatables/datatables.min.css">
  <link rel="stylesheet" href="styletableau.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/bootstrap.css">

  <style>
    .active {
      border-bottom: 4px solid #55595c;
    }


    .footer-title {
      font-size: 20px;
      font-weight: 600;
    }

    #dev {
      text-align: center;
      color: rgba(3, 106, 79, 0.962);
      font-size:21px;
      font-weight: bold;
    }

    #pre {
      text-align: center;
      font-weight: bold;
      margin-top: 18px;
      margin-bottom: 18px;

    }
    .fc-day-number{
    color: rgb(248, 33, 44);

}

    .bg-green {
            color: #2C9B90; 
            font-size:25px; 
        }

        .goat{
            color: white;
            font-size:15px;
            
        }

        .goat:hover{
            color: rgb(50, 145, 64);
            font-size: 23px;
            font-weight: 600;
            transition: 0.9s;
        }
         
        .couleurcontact{
            font-size:30px;
            font-weight: bold;
        }

        
  </style>
  <link href="style.css" rel="stylesheet">
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudfare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css">
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth'
      });
      calendar.render();
    });
    </style>
    <script src="assets/datatables/jquery-3.7.0.min.js"></script>
    <script src="assets/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/datatables/datatable_french.json"></script>
</head>
<body >
    <nav class="navbar navbar-expand-md bg-black text-light" id="navbg" data-bs-theme="dark">
        <div class="container-fluid">
            <div>
                <a class="navbar-brand w-100" href="">
                    <span class="p-2 rounded-3 text-light">
                    <img src="./assets/img/logo.png" width="23%" height="33%"></span>
                </a>
                <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
            </div>
            <div class="collapse navbar-collapse justify-content-end px-4 mx-auto text-light" id="navbarNav">
                <ul class="navbar-nav text-white " id="navcolor">
                    <li class="nav-item">
                        <a class="nav-link active" href="#Accueil" id="navcolor">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="presence.php" id="navcolor">Présence</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="liste.php" id="navcolor">liste</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="#S'inscrire" id="navcolor">S'inscrire</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br><br>
    
    <section>
        <h5 id="dev">Developpement Web & Mobile</h5><br>
        <img class="img-fluid rounded mx-auto d-block w-100"
            src="./assets/img/image.png">
        
    </section>

  </section>
  <section class="secondsec">
    <div class="blocpresence">
      <div class="presence">
        <h2>Marquer sa présence</h2>
          <h5 style="font-size: 10px">cliquez sur une date dans le calendrier</h5> 
      </div>
    </div>
    <div class="calendarbloc">
      <div class="calbloc" style="width: 400px; height:400px padding=65px">
        <div id="calendar"></div>
      </div>
    </div>

  </section>

  <!--section calendrier end-->
 
  <footer class="bg-black pad">

    <div class="container">

      <div class="row justify-content-center " style="box-sizing: border-box;">
        <div class="col-lg-4 col-md-12 "
          style="padding: 0px 15px;position: relative;padding-right: 15px;padding-left: 15px">
          <h2 class="titreinf">Informations</h2><br>
             <div><span class="bg-green text-capitalize footer-title">WhatsApp:</span><br>
             <a href="" style="text-decoration:none;"><b class="goat" >+229-54-15-59-34</b></a><br>  <br> 
             </div><br>

                    <div><span class="bg-green text-capitalize footer-title">Email:</span><br> 
                    <a href=""style="text-decoration:none;"><b class="goat">contact@gmail.com</b></a></div>  <br> <br>
                    
                    <div><span class="bg-green text-capitalize footer-title">Adresse:</span><br><b style="color: white;">Aibatin 2 Cotonou, BENIN</b>
                    </div><br> <br> <br> <br> 



        
        </div>

        <div class="col-lg-8 col-md-12 ">
          <div class=" part2">
            <p class="line"></p>



            <div class="contact">
              <span class="couleurcontact">Contact</span>
              <h3 class="quest">Avez vous des questions ? Posez-les</h3>
            </div>


            <form>
              <div style="box-sizing: border-box">
                <div class="row col-lg-12 col-md-12 bordure">
                  <!--Champ nom et prenom-->
                  <div class="col-lg-12 col-md-12">

                    <form action=""method="post">

                    <label for="name" class="fw-bold"></label>
                    <input type="text" class="champs" id="name" class="bg-dark" name="name" placeholder="Nom et prenom">
                  </div>

                  <div class="col-lg-12 col-md-12">
                    <label for="email" class="fw-bold"></label>
                    <input type="email" class="champs" id="email" class="bg-dark" name="email" placeholder="Email">
                  </div>
                  <div class="col-lg-12 col-md-12">
                    <label for="objet" class="fw-bold"></label>
                    <input type="text" class="champs" id="objet" class="bg-dark" name="objet" placeholder>

                  </div>
                  <div class="col-lg-12 col-md-12">
                    <label for="message"></label>
                    <textarea cols="40" rows="10" name="message" id="message" class=" area"
                      placeholder="Message"></textarea>

                  </div>

                  <div class="case">
                    <input type="checkbox" name="cocher" value="cocher"> &nbsp;En cochant cette case, vous acceptez
                    notre <a href="">Condition</a> et nos <a href="">Politiques de confidentialité</a>
                  </div>


                  <div class=""><button class="btn btn-primary main-color-btn" id="button">Envoyez</button></div>

                  </form>
                  <?php if (!empty( $erreur))b{ ?>
                  <div id="erreur">
                        <?=$erreur?>
                  </div>
                <?php }?>
                
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>

    </div>
  </footer>

  <body>

    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const inputField = document.getElementById('name');

        inputField.addEventListener('focus', function () {
          inputField.classList.add('placeholder-hidden'); // Ajoute la classe pour masquer le placeholder
        });

        inputField.addEventListener('blur', function () {
          if (!inputField.value) {
            inputField.classList.remove('placeholder-hidden'); // Retire la classe si le champ est vide
          }
        });
      });


      document.addEventListener('DOMContentLoaded', function () {
        const inputField = document.getElementById('email');

        inputField.addEventListener('focus', function () {
          inputField.classList.add('placeholder-hidden'); // Ajoute la classe pour masquer le placeholder
        });

        inputField.addEventListener('blur', function () {
          if (!inputField.value) {
            inputField.classList.remove('placeholder-hidden'); // Retire la classe si le champ est vide
          }
        });
      });


      document.addEventListener('DOMContentLoaded', function () {
        const inputField = document.getElementById('objet');

        inputField.addEventListener('focus', function () {
          inputField.classList.add('placeholder-hidden'); // Ajoute la classe pour masquer le placeholder
        });

        inputField.addEventListener('blur', function () {
          if (!inputField.value) {
            inputField.classList.remove('placeholder-hidden'); // Retire la classe si le champ est vide
          }
        });
      });


      document.addEventListener('DOMContentLoaded', function () {
        const inputField = document.getElementById('message');

        inputField.addEventListener('focus', function () {
          inputField.classList.add('placeholder-hidden'); // Ajoute la classe pour masquer le placeholder
        });

        inputField.addEventListener('blur', function () {
          if (!inputField.value) {
            inputField.classList.remove('placeholder-hidden'); // Retire la classe si le champ est vide
          }
        });
      });
    </script>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialview: 'daysGridMonth',
          dayHeaderFormat:{ weekday: 'long'},// utiliser long pour afficher le nom complet du jour 
          locale: 'fr',// definir la localisation enfrancais pour afficher lesnoms en francais 

          // Configurations de votre calendrier ici
          // ...
          // Gestionnaire d'événement pour le clic sur une date
          dateClick: function (info) {
            // Rediriger vers la page de la table de présence avec la date en paramètre d'URL
            window.location.href = 'presence.php?date=' + info.dateStr;
          }
         /* eventDidMount; function (info){
            info.el.querySelector('.fc-day-number').classList.add('white-date');
          }*/
          
        });
        calendar.render();
      });
    </script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/datatables/datatables.min.js"></script>


  </body>

</html>