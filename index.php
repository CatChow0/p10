<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>GC News</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!--------------------------------- Token pour l'authentification google --------------------------------------->
      <meta name="google-signin-client_id" content="184341005227-3gk41qqd3inmpehb5qc1qp43t03q51fp.apps.googleusercontent.com">
      <!----------------------------------- POLICES UTILISEES -------------------------------------------------------->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Red+Rose&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
      <!------------------------------------------CSS/JS LINK---------------------------------------------------------->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/index.css"/>
      <link rel="stylesheet" href="css/login.css"/>
      <link rel="script" href="js/index.js"/>
    </head>

  <body>

   <!--------------------------------------------------------------------->
    <?php
    // ------------------------- Affiche l'acceuil si l'utilisateur est connecter ------------------------------->
    if (isset($_SESSION['email'])) 
    {
      ?>
    <div class="navbar">
      <nav class="navbar navbar-expand-lg navbar-light">
        <img class="imglogogc" src="assets/logogamingcampus.png" alt="Logo Gaming Campus" >
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <h1 class="nav-link" href="#">GC NEWS<br><span>Toute l'actualité du jeu vidéo et du Gaming Campus à votre portée !</span><span class="sr-only"></span></h1>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                ACTUALITÉS
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">TENDANCES</a>
                <a class="dropdown-item" href="#">JEU VIDÉO</a>
                <a class="dropdown-item" href="#">ESPORT</a>
                <a class="dropdown-item" href="#">POLITIQUE</a>
                <a class="dropdown-item tendance" href="#">DESIGN</a>
                <a class="dropdown-item" href="#">BUSINESS</a>

                <ul class="navbar-nav mr-auto">
                  <li class="nav-item dropdown">
                    <div class="submenu">
                      <a class="dropdown-item" href="#">SPÉCIAL GBUSINESS</a>
                      <a class="dropdown-item" href="#">SPÉCIAL GART</a>
                      <a class="dropdown-item" href="#">SPÉCIAL GTECH</a>
                      <a class="dropdown-item" href="#">RECENTS</a>
                      <a class="dropdown-item" href="#">NON RECENTS</a>
                      <a class="dropdown-item" href="#">ARCHIVES</a>
                    </div>
                  </li>
                </ul>

              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                CAMPUS
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">PROJET EN COURS</a>
                <a class="dropdown-item" href="#">CONCOURS</a>
                <a class="dropdown-item" href="#">OBJETS PERDUS/TROUVÉS</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                VIE ASSOCIATIVE
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">KATOCHI</a>
                <a class="dropdown-item" href="#">BDE</a>
                <a class="dropdown-item" href="#">GENIUS</a>
                <a class="dropdown-item" href="#">2RIVALS</a>
                <a class="dropdown-item" href="#">WEB FACTORY</a>
              </div>
            </li>


            <!--------------------SEARCH--------------------------------->
            <div class="search-box">
              <button class="btn-search"><i class="fa fa-search"></i></button>
              <input type="text" class="input-search" placeholder="Que cherchez-vous ?">
            </div>


            <!--------------------PROFILE--------------------------------->
            <div class="profile-btn">
              <a href="#" title="Profil">
                <img class="iconprofil" src="assets/iconprofile.png" alt="Profil" width="32px" 
                height="32px">
              </a>
            </div>

          </ul>
        </div>
      </nav>
    </div>
    <?php
    if (isset($_SESSION['email'])) 
    {
      ?>
    <div class="profile-sidebar on">
      <div class="btn-logout">
        <a class="text-animated" href="logout.php">
          D
        </a>
        <a class="text-animated" href="logout.php">
          É
        </a>
        <a class="text-animated" href="logout.php">
          C
        </a>
        <a class="text-animated" href="logout.php">
          O
        </a>
        <a class="text-animated" href="logout.php">
          N
        </a>
        <a class="text-animated" href="logout.php">
          N
        </a>
        <a class="text-animated" href="logout.php">
          E
        </a>
        <a class="text-animated" href="logout.php">
          X
        </a>
        <a class="text-animated" href="logout.php">
          I
        </a>
        <a class="text-animated" href="logout.php">
          O
        </a>
        <a class="text-animated" href="logout.php">
          N
        </a>
      </div>
    </div>
    <?php
    }
    else 
    {

    }
    
    ?>
    


  <!-----------------------------FOOTER---------------------------------------->
  <footer>

    <!-- Bande d'information du footer -->
    <div class="content">

      <!-- Section A propos -->
      <div class="about communStyle">
          <ul>
              <li class="communFooterTitle">A propos</li>
              <li>Qui sommes-nous?</li>
              <li>Mentions légales</li>
              <li>Politiques de données personnelles</li>
              <li>Cookies</li>
          </ul>
      </div>

      <!-- Section Contact -->
      <div class="contact communStyle">
          <ul>
              <li class="communFooterTitle">Contact</li>
              <li>GCnews@gamingcampus.fr</li>
              <li>+337 08 09 10 11</li>
              <li>
                  <address>Rue de Marseille, 69007, Lyon</address>
              </li>
          </ul>
      </div>

      <!-- Section Reseaux -->
      <div class="social-net communStyle">
          <ul>
            <li>
              <a href="https://www.facebook.com/GamingCampus" title="Facebook" target="_blank">
                <img class="logo-social" src="assets/facebook.png" alt="logo-facebook">
              </a>
            </li>
            <li>
              <a href="https://twitter.com/GamingCampus" title="Twitter" target="_blank">
                <img class="logo-social" src="assets/twitter.png" alt="logo-twitter">
              </a>
            </li>

            <li>
              <a href="https://www.instagram.com/gamingcampus/" title="Instagram" target="_blank">
                <img class="logo-social" src="assets/insta.png" alt="logo-insta">
              </a>
            </li>

          </ul>
      </div>
    </div>

    <div class="copyright">
      <h3>
        Copyright 2022 GC NEWS
      </h3>
    </div>
  </footer>

    <?php


    }
    // ------------------------------------ Affiche formulaire de connexion ----------------------------------->
    else 
    {
      ?>
      <div class="navbar">
        <nav class="navbar navbar-expand-lg navbar-light">
          <img class="imglogogc" src="assets/logogamingcampus.png" alt="Logo Gaming Campus" >
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"   aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <h1 class="nav-link" href="#">GC NEWS<br><span>Toute l'actualité du jeu vidéo et du Gaming Campus à   votre portée !</span><span class="sr-only"></span></h1>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                  ACTUALITÉS
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">TENDANCES</a>
                  <a class="dropdown-item" href="#">JEU VIDÉO</a>
                  <a class="dropdown-item" href="#">ESPORT</a>
                  <a class="dropdown-item" href="#">POLITIQUE</a>
                  <a class="dropdown-item tendance" href="#">DESIGN</a>
                  <a class="dropdown-item" href="#">BUSINESS</a>

                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                      <div class="submenu">
                        <a class="dropdown-item" href="#">SPÉCIAL GBUSINESS</a>
                        <a class="dropdown-item" href="#">SPÉCIAL GART</a>
                        <a class="dropdown-item" href="#">SPÉCIAL GTECH</a>
                        <a class="dropdown-item" href="#">RECENTS</a>
                        <a class="dropdown-item" href="#">NON RECENTS</a>
                        <a class="dropdown-item" href="#">ARCHIVES</a>
                      </div>
                    </li>
                  </ul>

                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                  CAMPUS
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">PROJET EN COURS</a>
                  <a class="dropdown-item" href="#">CONCOURS</a>
                  <a class="dropdown-item" href="#">OBJETS PERDUS/TROUVÉS</a>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                  VIE ASSOCIATIVE
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">KATOCHI</a>
                  <a class="dropdown-item" href="#">BDE</a>
                  <a class="dropdown-item" href="#">GENIUS</a>
                  <a class="dropdown-item" href="#">2RIVALS</a>
                  <a class="dropdown-item" href="#">WEB FACTORY</a>
                </div>
              </li>


              <!--------------------------------- SEARCH --------------------------------->
              <div class="search-box">
                <button class="btn-search"><i class="fa fa-search"></i></button>
                <input type="text" class="input-search" placeholder="Que cherchez-vous ?">
              </div>


              <!-------------------------------- PROFILE ---------------------------------->
              <div class="profile-btn">
                <a href="#" title="Profil">
                  <img class="iconprofil" src="assets/iconprofile.png" alt="Profil" width="32px" 
                  height="32px">
                </a>
              </div>

            </ul>
          </div>
        </nav>
      </div>

      <!---------------------------------------------- CONNEXION --------------------------------------------------->
      <div class="container">
        <img src="assets/loginphoto.png" class="img-login" alt="Gaming Campus Photo" /><span></span>
        <form class="form-info" method="POST" action="login.php">
            <h5 class="connexion-title">CONNEXION</h5>
            <div class="form-input">
                <!------------------------------------------- Email --------------------------------------------->
                <div class="mb-3">
                    <img src="assets/envelope-fill.svg" class="input-icon" alt="logo-mail">
                    <input type="email"	class="form-email form-control" id="InputEmail" name="email"      placeholder="AdresseMail"/>
                </div>
                <!---------------------------------------- Mot de Passe ----------------------------------------->
                <div class="mb-3">
                    <input type="password" name="pass" placeholder="Mot de Passe" class="form-control" id="InputPassword"/>
                </div>
                <!------------------------------------------- Code ---------------------------------------------->
                <div class="mb-3">
                    <input type="text" placeholder="Code" class="form-control" id="InputPassword1" name="code"/>
                </div>
            </div>
            <div class="form-option">
              <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="Check" />
                  <label class="form-check-label" for="Check">Restez connecté</label>
              </div>
              <div class="forgotten-password">
                <a class="forgotten-btn" href="#">Mot de passe oublié?</a>
              </div>
            </div>
            <button name="submit" class="btn btn-primary">Me connecter</button>
        </form>
      </div>
      <!----------------------------------------------- FOOTER ---------------------------------------------------->
      <footer>
      
        <!-- Bande d'information du footer -->
        <div class="content">
      
          <!-- Section A propos -->
          <div class="about communStyle">
              <ul>
                  <li class="communFooterTitle">A propos</li>
                  <li>Qui sommes-nous?</li>
                  <li>Mentions légales</li>
                  <li>Politiques de données personnelles</li>
                  <li>Cookies</li>
              </ul>
          </div>
      
          <!-- Section Contact -->
          <div class="contact communStyle">
              <ul>
                  <li class="communFooterTitle">Contact</li>
                  <li>GCnews@gamingcampus.fr</li>
                  <li>+337 08 09 10 11</li>
                  <li>
                      <address>Rue de Marseille, 69007, Lyon</address>
                  </li>
              </ul>
          </div>
      
          <!-- Section Reseaux -->
          <div class="social-net communStyle">
              <ul>
                <li>
                  <a href="https://www.facebook.com/GamingCampus" title="Facebook" target="_blank">
                    <img class="logo-social" src="assets/facebook.png" alt="logo-facebook">
                  </a>
                </li>
                <li>
                  <a href="https://twitter.com/GamingCampus" title="Twitter" target="_blank">
                    <img class="logo-social" src="assets/twitter.png" alt="logo-twitter">
                  </a>
                </li>
      
                <li>
                  <a href="https://www.instagram.com/gamingcampus/" title="Instagram" target="_blank">
                    <img class="logo-social" src="assets/insta.png" alt="logo-insta">
                  </a>
                </li>
      
              </ul>
          </div>
        </div>
      
        <div class="copyright">
          <h3>
            Copyright 2022 GC NEWS
          </h3>
        </div>
      </footer>

      <?php
    }
    ?>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X  +965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2  +9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3 +MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
  </body>
</html>
