<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste</title>
    <link rel="stylesheet" href="assets/datatables/datatables.min.css">
    <link rel="stylesheet" href="styletableau.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
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
    
    <style>

    #calendar {
    width: 1300px;
  }

    .active {
      border-bottom: 4px solid #55595c;
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
        .rom{ 
            max-width: 1000px;
            background-color: white;
        }
        .ro{
            text-align: center;
        }

        .footer-title {
            font-size: 20px;
            font-weight: 600;
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
            font-size: 20px;
            font-weight: 600;
            transition: 0.9s;
        }
         
        .couleurcontact{
            font-size:30px;
            font-weight: bold;
        }
    </style>
    <script src="assets/datatables/jquery-3.7.0.min.js"></script>
    <script src="assets/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/datatables/datatable_french.json"></script>
</head>
<body >
    <nav class="navbar navbar-expand-md bg-black text-light w-150%" id="navbg" data-bs-theme="dark">
        <div class="container-fluid">
            <div>
                <a class="navbar-brand" href="">
                    <span class="p-2 rounded-3 text-light">
                    <img src="./assets/img/logo.png" width="23%" height="33%"></span>
                </a>
                <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
            </div>
            <div class="collapse navbar-collapse justify-content-end px-4 mx-auto text-light " id="navbarNav">
                <ul class="navbar-nav text-white " id="navcolor">
                    <li class="nav-item">
                        <a class="nav-link " href="Accueil.php" id="navcolor">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="presence.php" id="navcolor">Présence</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link active" href="#Fillière" id="navcolor">liste</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link " href="#S'inscrire" id="navcolor">S'inscrire</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br><br>
   

    <div class="calendarbloc">
      <div class="calbloc" style="width: 400px; height:400px padding=65px">
        <div id="calendar"></div>
      </div>
    </div>

    
    <h5 id="pre">Liste de présence </h5>
    <div class="float-end"> 
          <h5>DATE : <strong id="date" ></strong></h5>
    </div>
    <table id="tablepresence"  class="rom"class=" order-column btn-hover-light cell-border row-border display dataTables_wrapper dataTables_filter dataTables_length dataTables_info dataTables_length  rounded   " 
    style=" background-color: white; width: 100%; border-width: 5px;">
        <thead>
            <tr>
                <th class="c0">N°</th>
                <th>Nom et Prénoms </th>
            </tr>
        </thead>
        <tbody>
           
        </tbody>

        </thead>
    </table>
    <br><br>
    
    <h6 class="ro">INSRITS/PRESENT/ABSENT</h6>    

    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-sm-3">
            <div class="card bg-success text-white text-center w-100 h-80">
                <div class="card-body">
                    <h5 class="card-title">Nombre inscrits</h5>
                    <div class="card-text" id="nombreInscrits">0</div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card bg-success text-white text-center h-100">
                <div class="card-body">
                    <h5 class="card-title">Nombre présents</h5>
                    <div class="card-text" id="nombrePresents">0</div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card bg-success text-white text-center">
                <div class="card-body">
                    <h5 class="card-title">Nombre absents</h5>
                    <div class="card-text" id="nombreAbsents">0</div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>

    document.getElementById('nombreInscrits').innerText = "60";
    document.getElementById('nombrePresents').innerText = "35";
    document.getElementById('nombreAbsents').innerText = "25";
</script>


<footer class="bg-black text-start pad">
     
    <div class="container">
   
          <div class="row justify-content-center " style="box-sizing: border-box;">
               <div class="col-lg-4 col-md-12 " style="padding: 0px 15px;position: relative;padding-right: 15px;padding-left: 15px">
               <h2 class="titreinf">Informations</h2>
                    <p><div><span class="bg-green text-capitalize footer-title">WhatsApp:</span><br><a href="" style="text-decoration:none;"><b class="goat" >+229-54-15-59-34</b></a></div></p><br>
                    <p><div><span class="bg-green text-capitalize footer-title">Email:</span><br> <a href=""style="text-decoration:none;"><b class="goat">contact@gmail.com</b></a></div></p><br>
                    <p><div><span class="bg-green text-capitalize footer-title">Adresse:</span><br><b style="color: white;">Aibatin 2 Cotonou, BENIN</b></div></p><br>

          </div>
               
               <div class="col-lg-8 col-md-12 " >
                    <div class=" part2"> 
                         <p class="line" ></p>
                    

                         
                         <div class="contact">
                              <span class="couleurcontact">Contact</span> 
                              <h3 class="quest">Avez vous des questions ? Posez-les</h3>  
                         </div>
                    
                         
                         <form>
                              <div style="box-sizing: border-box">
                                   <div class="row col-lg-12 col-md-12 bordure"> 
                       <!--Champ nom et prenom-->
                       <div class="col-lg-12 col-md-12">
                         
                         <label for="name" class="fw-bold"></label>
                         <input type="text" class="champs" id="name" class="bg-dark" nom="name" placeholder="Nom et prenom">
                       </div>

                       <div class="col-lg-12 col-md-12">
                         <label for="email" class="fw-bold"></label>
                         <input type="email" class="champs" id="email" class="bg-dark" name="email" placeholder="Email">
                       </div>
                      <div class="col-lg-12 col-md-12">
                         <label for="objet" class="fw-bold"></label>
                         <input type="text"  class="champs" id="objet" class="bg-dark" nom="objet" placeholder="Objet">
                         
                      </div>
                       <div class="col-lg-12 col-md-12">
                         <label for="message"></label>
                         <textarea cols="40" rows="10" name="message" id="message"  class=" area" placeholder="Message"  ></textarea>
                         
                       </div>
                       
                       <div class="case">
                     <input type="checkbox" name="cocher" value="cocher"> &nbsp;En cochant cette case, vous acceptez notre <a href="">Condition</a> et nos <a href="">Politiques de confidentialité</a>
                    </div>
                    

                    <div class=""><button class="btn btn-primary main-color-btn" id="button">Envoyez</button></div> 
                      
                      
                                   </div>
                              </div>
                         </form>
                              
                    </div>
               </div>
          </div>
     
     </div>
</footer>


   
  <script>
     document.addEventListener('DOMContentLoaded', function() {
     const inputField = document.getElementById('name');
   
     inputField.addEventListener('focus', function() {
       inputField.classList.add('placeholder-hidden'); // Ajoute la classe pour masquer le placeholder
     });
   
     inputField.addEventListener('blur', function() {
       if (!inputField.value) {
         inputField.classList.remove('placeholder-hidden'); // Retire la classe si le champ est vide
       }
     });
   });


   document.addEventListener('DOMContentLoaded', function() {
     const inputField = document.getElementById('email');
   
     inputField.addEventListener('focus', function() {
       inputField.classList.add('placeholder-hidden'); // Ajoute la classe pour masquer le placeholder
     });
   
     inputField.addEventListener('blur', function() {
       if (!inputField.value) {
         inputField.classList.remove('placeholder-hidden'); // Retire la classe si le champ est vide
       }
     });
   });


   document.addEventListener('DOMContentLoaded', function() {
     const inputField = document.getElementById('objet');
   
     inputField.addEventListener('focus', function() {
       inputField.classList.add('placeholder-hidden'); // Ajoute la classe pour masquer le placeholder
     });
   
     inputField.addEventListener('blur', function() {
       if (!inputField.value) {
         inputField.classList.remove('placeholder-hidden'); // Retire la classe si le champ est vide
       }
     });
   });


   document.addEventListener('DOMContentLoaded', function() {
     const inputField = document.getElementById('message');
   
     inputField.addEventListener('focus', function() {
       inputField.classList.add('placeholder-hidden'); // Ajoute la classe pour masquer le placeholder
     });
   
     inputField.addEventListener('blur', function() {
       if (!inputField.value) {
         inputField.classList.remove('placeholder-hidden'); // Retire la classe si le champ est vide.3333..333
       }
     });
   });
  </script> 
   <script src="./assets/js/bootstrap.min.js" ></script>
   


<script>
 $(document).ready(function(){
        let donnees = [ 
            [1, "BADOU Melchior"],
            [2, "TCHEVOEDE Fréjus"],
            [3, "BIAOU Fréjus"],
            [4, "Prof Thuret"],
            [5, "justin clark "],
            [6, "kylian mbappe"],
            [7, "erling haaland "],
            [8, " OUSMANE DEMBOUZ"],
            [9, "kingsley coman "],
            [10, "csmith Rowe"],
            [11, "Cristiano Ronaldo"],
            [12, "riyad marhez"],
            [13, "lionel Messi "],
             ];


        $('#tablepresence').DataTable({
            data: donnees,
            "lenghtMenu": [10],
            "order": [[0,"asc"] ],
           
        });
        
        
    })



    document.getElementById('date').innerHTML = new Date().toLocaleDateString('fr-FR');

    
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Récupérer la date à partir du paramètre d'URL
        let urlParams = new URLSearchParams(window.location.search);
        let dateParam = urlParams.get('date');

       
        $(document).ready(function() {
            $('#tableau').DataTable({
                ajax: {
                    url: 'get_data.php?date=' + dateParam, // Le fichier PHP qui récupère les données de présence depuis la base de données pour la date spécifiée
                    dataSrc: '' // Pour indiquer que les données renvoyées par le serveur sont directement un tableau
                },
                columns: [
                    { data: 'id' },
                    { data: 'nom_prenoms' }
                ]
            });
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