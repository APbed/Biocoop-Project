<?php 
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
        <title>BIOCOOP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="vue/style.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
   </head>
   <body class="d-flex flex-column min-vh-100">

    <header>
        <div class="px-3 py-2 bg-dark text-white">
          <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              <a href="/" class="d-flex align-items-start my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                <img src="vue/bio1.png" alt="Photo de montagne" width="50" height="58" /><h1 class="fst-italic"> BIOCOOP</h1>
              </a>
              <?php if (isset($_SESSION['auth'])):?>


       
            
              <a href="./donnees/logout.php" class="btn btn-primary text-light me-2" >Déconnexion</a>
              <button type="button" class="btn btn-primary">Mon compte</button>
            
        
              <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                <li>
                  <a href="#" class="nav-link text-secondary">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"/></svg>
                    LOTS DE PRODUITS
                  </a>
                </li>
         
                <li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"/></svg>
                    ALIMENTAIRES
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#table"/></svg>
                    NON ALIMENTAIRES
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"/></svg>
                    ASSOCIATIONS
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#people-circle"/></svg>
                    BILLAN 
                  </a>
                </li>
              </ul>
             
                
            </div>
          </div>
        </div>
        <div class="px-3 py-2 border-bottom mb-3">
          <div class="container d-flex flex-wrap justify-content-center">
            <form class="offset-10 col-2 col-lg-auto mb-2 mb-lg-0 me-lg-auto">
              <input type="search" class="form-control" placeholder="Rechercher..." aria-label="Recherche">
            </form>
    
            
              <?php else: ?>
                <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                <li>
                  <a href="#" class="nav-link text-secondary">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"/></svg>
                    Home
                  </a>
                </li>
                </ul>
              <?php endif;?>
            
          </div>
        </div>
      </header>
     
      <?php if (isset($_SESSION['auth'])):?>
        <?php include 'vue/tab.php';?>

       <?php else: ?>

  <div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Authentification</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Inscription</label>
    <div class="login-form">
      <form class="sign-in-htm" action="./donnees/log.php" method="post">
        <div class="group">
          <label for="user" class="label">EMAIL :</label>
          <input id="username" name="username" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">MOT DE PASSE :</label>
          <input id="password" name="password" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Se sevenir de moi</label>
        </div>
        <div class="group">
          <input type="submit" class="button" value="S'identifier">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="#forgot">Mot de passe oublié?</a>
        </div>
      </form>
      <form class="sign-up-htm" action="./donnees/signup.php" method="POST">
        <div class="group">
          <label for="user" class="label">EMAIL</label>
          <input id="username" name="username" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">MOT DE PASSE</label>
          <input id="password" name="password" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <label for="pass" class="label">CONFIRMER MOT DE PASSE</label>
          <input id="pass" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <input type="submit" class="button" value="S'inscrire">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <label for="tab-1">Already Member?</a>
        </div>
      </form>
    </div>
  </div>
</div>
<?php endif;?>
  <br />
  <br />

  <br />

        <footer class="mt-auto bg-dark" >
         <div class="foot">
           <p></p>
            <p class="fw-bolder text-white"> — © 2021, BIOCOOP - Tous droits réservés —  <a href="confidentialite/">Mentions Légales</a> — Web site by Messai & Arnaud & Darouèche —<p>
        
        </div>  
        </footer>


    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
-->
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    
  </body>
</html>