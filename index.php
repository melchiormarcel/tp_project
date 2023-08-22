<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <style>
        .active {
            border-bottom: 4px solid #55595c;
        }

        .bw-green {
            color: rgba(8, 171, 128, 0.497);
        }

        .footer-title {
            font-size: 20px;
            font-weight: 600;
        }

        #dev {
            text-align: center;
            color: rgba(3, 106, 79, 0.962);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md bg-black text-light" id="navbg" data-bs-theme="dark">
        <div class="container-fluid">
            <div>
                <a class="navbar-brand" href="">
                    <span class="p-2 rounded-3 text-light">
                        <img src="https://bewinner.africa/wp-content/uploads/2021/03/Be-winner-lineaire.png" width="23%"
                            height="23%"></span>
                </a>
            </div>
            <div class="collapse navbar-collapse justify-content-end px-4 mx-auto text-light">
                <ul class="navbar-nav text-white " id="navcolor">
                    <li class="nav-item">
                        <a class="nav-link active" href="" id="navcolor">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" id="navcolor">Filière</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" id="navcolor">Bonus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" id="navcolor">S'inscrire</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- section hero -->
    <section>
        <h6 id="dev">Developpement Web & Mobile</h6>
        <img class="img-fluid rounded mx-auto d-block"
            src="https://bewinner.africa/wp-content/uploads/2023/01/S3-768x512.jpg">
        
    </section>
    <!-- section hero end -->

    <!-- footer -->
    <footer>
        <div id="pied" class="bg-black">
            <div class="row m-4">
                <div class="col-4 p-5">
                    <h2>Informations</h2>
                    <h4 class="bw-green text-capitalize footer-title">whatsApp</h4>
                    <a href="#" id="piedlien"><b>+229-54-15-59-34</b></a><br><br>
                    <h4 class="bw-green text-capitalize">Email</h4>
                    <a href="" id="piedlien"><b>chadrakzondoga2003@gmail.com</b></a><br><br>
                    <h4 class="bw-green text-capitalize">Adresse</h4>
                    <a href="" id="piedlien"><b>Aibatin 2 Cotonou, BENIN</b></a>
                </div>

                <div class="col-8 p-5">
                    <b id="reso">Contact</b><br>
                    <b id="piedlien">Avez vous des questions ? Posez-les</b><br><br>
                    <form action="">
                        <input type="text" id="champcont" placeholder="Nom et Prenom" size="40"><br><br>
                        <input type="text" class="form-control" id="champcont" placeholder="Email" size="40"><br><br>
                        <input type="text" placeholder="Objet" id="champcont" size="40"><br><br>
                        <textarea name="" id="champcont2" cols="" rows="5" class="form-control"
                            placeholder="Message"></textarea><br><br>
                        <input type="checkbox"> En cochant cette case, vous acceptez nos <span id="pp">Condition</span>
                        et
                        notre <span id="pp">Politique de confidentialité</span> <br><br>

                        <button type="submit" id="bton">Envoyer</button><br><br>

                    </form>

                </div>

            </div>
        </div>
    </footer>
    <!-- footer end -->
    <script src="./assets/js/bootstrap.js"></script>
</body>

</html>