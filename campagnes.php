<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <title>Campagnes</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

  <div class="container-fluid">
   <header class="col-lg-12 col-md-12 col-12">
    <div class="top-bar col-lg-12 col-md-12 col-12">
      <a class="logo-bar" href="campagnes.php">Sitoupouri</a>
      <button onclick="window.location.href = 'index.php'" type="button" class="btn col-lg-1 col-md-2 col-2 offset-lg-9 btn-danger">Deconnexion</button>
    </div>

    <div class="nav color border col-md-12 col-12 col-lg-12">
     <div class="logo">
      <img src="logo.png">
      <h3>Sitoupouri</h3>
    </div>
    
  </div>
</header>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inscription / Connexion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form>
          <div class="form-group">
            <h3>Bienvenue chez (Owl Art) inscrivez vous ou bien connectez vous !</h3>
            <label for="exampleInputEmail1">Adresse email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre email">
            <small id="emailHelp" class="form-text text-muted">Nous n'echangerons pas vos email</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Mot de passe</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
          </div>
          <button type="submit" class="btn btn-primary">Se connecter</button>
          <button type="submit" class="btn btn-warning">Mot de passe perdu</button>
        </form>

        
      </div>
    </div>
  </div>
</div>


<!--  partie catégorie -->




<!-- fin catégorie -->

<main>

  <div class="enorme col-lg-12 col-md-12 col-12">
    <H1>EN COURS</H1>
  </div>

  <div class="container">


    <div class="card-columns">

      <?php

    $host = 'localhost';
      $dbname = 'projetBackEnd';
      $username = 'root';
      $password = 'Dta2018!';

    $bdd = new PDO('mysql:host=localhost;dbname=projetBackEnd',$username,$password); 

    $enCours = $bdd->query("SELECT Nom FROM Campagnes WHERE DateFin>'".date('Ymd')."'");
    $finies = $bdd->query("SELECT Nom FROM Campagnes WHERE DateFin<'".date('Ymd')."'");

    $enCours->setFetchMode(PDO::FETCH_BOTH);
    $finies->setFetchMode(PDO::FETCH_BOTH);

    $i = 0;

    while($campagneEnCours = $enCours->fetch()){
      $var[$i] = $campagneEnCours[0];
      echo "<br><br>";
      $i++;
    }

  

    ?>


      <div class="card move">
        <img class="card-img-top" src="logoP.png" alt="Card image cap">
        <div class="card-body cat">
          <h5 class="card-title"><?php echo $var[0]; ?> Edition</h5>
          <p class="card-text">Retrouvez tout les mangas de <?php echo $var[0]; ?> edition et des versions collector</p>
          <a class="btn btn-outline-primary" href="mangasPika.html" role="button">Entrer</a>
        </div>
      </div>

      <div class="card move">
        <img class="card-img-top" src="logoK.jpg" alt="Card image cap">
        <div class="card-body cat">
          <h5 class="card-title"><?php echo $var[1]; ?> Edition</h5>
          <p class="card-text">Retrouvez tout les mangas de <?php echo $var[1]; ?> edition et des versions collector</p>
          <a class="btn btn-outline-primary" href="mangasKana.html" role="button">Entrer</a>
        </div>
      </div>

      <div class="card move">
        <img class="card-img-top" src="logoKi.png" alt="Card image cap">
        <div class="card-body cat">
          <h5 class="card-title"><?php echo $var[2]; ?> Edition</h5>
          <p class="card-text">Retrouvez tout les mangas de <?php echo $var[2]; ?> edition et des versions collector</p>
          <a class="btn btn-outline-primary" href="mangasKi.html" role="button">Entrer</a>
        </div>
      </div>


      <div class="card p-3">
        <blockquote class="blockquote mb-0 card-body">
          <p>"It's over 9000 !"</p>
          <footer class="blockquote-footer">
            <small class="text-muted">
              Végéta, Sayian
            </small>
          </footer>
        </blockquote>
      </div>









  </div>

</div>


  <div class="enorme col-lg-12 col-md-12 col-12">
    <H1>A VENIR</H1>
  </div>
  <div class="container">


    <div class="card-columns">

        <?php

        $j = 0;

      while($campagneFinies = $finies->fetch()){
      $var2[$j] = $campagneFinies[0];
      echo "<br><br>";
      $j++;
    }

    ?>


      <div class="card move">
        <img class="card-img-top" src="logoG.jpg" alt="Card image cap">
        <div class="card-body cat">
          <h5 class="card-title"><?php echo $var2[0]; ?> Edition</h5>
          <p class="card-text">Retrouvez tout les mangas de <?php echo $var2[0]; ?> edition et des versions collector</p>
          <p class="card-text bag-marge"><small class="text-muted">Bientôt ouverte</small></p>
        </div>
      </div>

            <div class="card p-3">
        <blockquote class="blockquote mb-0 card-body">
          <p>"Plus ultra !"</p>
          <footer class="blockquote-footer">
            <small class="text-muted">
              All Might, héros
            </small>
          </footer>
        </blockquote>
      </div>



    </div>
  </div>

</main>


<section>
  <div class="container-fluid">
    <div class="row modalite col-lg-12">

      <div class="mod bord col-lg-3">
        <img src="box-4.png">
        <p>Livraison soigné</p>
      </div>

      <div class="mod bord col-lg-3">
        <img src="truck.png">
        <p>Livraison 24Hr</p>
      </div>

      <div class="mod bord col-lg-3">
        <img src="credit-card.png">
        <p>Paiment sécurisé</p>
      </div>

      <div class="mod col-lg-3">
        <img src="conversation.png">
        <p>Service Client</p>
      </div>
      
    </div>
  </div>
</section>



<!-- Footer -->
<footer class="page-footer font-small unique-color-dark">

  <div class="fond">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">RESTEZ CONNECTE AVEC NOUS SUR LES RESEAUX SOCIAUX !</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="ic">
            <img src="facebook.png">
          </a>
          <!-- Twitter -->
          <a class="ic">
            <img src="twitter.png">
          </a>
          <!-- Google +-->
          <a class="ic">
            <img src="pinterest.png">
          </a>
          <!--Linkedin -->
          <a class="ic">
            <img src="deviantart.png">
          </a>
          <!--Instagram-->
          <a class="ic">
            <img src="flickr.png">
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container fond2 text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">Sitoupouri</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p style="justify-content: center;">À travers notre plateforme, nous vous donnons accès au plus vaste catalogue d’oeuvres <strong>Sitoupouri</strong> rassemble des oeuvres d’artistes mondialement reconnus et de jeunes talents.</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Catégories</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!">Campagne en cours</a>
        </p>
        <p>
          <a href="#!">Campagne à venir</a>
        </p>
        <p>
          <a href="#!">Toutes les campagnes</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Mon compte</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!">Mes commandes</a>
        </p>
        <p>
          <a href="#!">Mes informations</a>
        </p>
        <p>
          <a href="#!">Mes réductions</a>
        </p>
        <p>
          <a href="#!">Mes adresses</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fa fa-home mr-3"></i>Saint-Etienne 42, Telecom, FR</p>
          <p>
            <i class="fa fa-envelope mr-3"></i> Sitoupouri@entreprise.com</p>
            <p>
              <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
              <p>
                <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>

              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

          </div>
          <!-- Footer Links -->

          <!-- Copyright -->
          <div class="footer-copyright text-center py-3">© 2019 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> Design Tech Academy</a>
          </div>
          <!-- Copyright -->

        </footer>

        <div class="container logo-pied">
          <div class="row">
            <img src="logo.png">
          </div>
        </div>
        <!-- Footer -->


      </div>

    </body>

    <script type="text/javascript" src="main.js"></script>

    </html>