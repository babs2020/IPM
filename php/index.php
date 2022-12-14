<!doctype html>
<html lang="en">
  <head>


    <link rel="stylesheet" href="caroussel.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <link href="http://fonts.cdnfonts.com/css/Camellio " rel="stylesheet">         
    <link rel= "stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css ">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="styles.css">
     <script src="https://kit.fontawesome.com/7b4b0f92fb.js" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
     <title>IPM</title>
  </head>
  <body style="overflow-x:hidden">
    <div class="entet" id="menu" >
        <header > 
      <nav class="navbar navbar-expand-md "  >
        <a class="navbar-brand" href=""> <img src="logo.jpeg" alt="" style="width:60px;border-radius:20%"></a>
        <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" >
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
              </svg>
          </button>
          <div class="collapse navbar-collapse justify-content-between" id="nav">
          <ul class="navbar-nav">
         <li class="navbar-item"> <a class="nav-link px-3" href="index.php" style=" font-family:Camellio ;font-size:20px;">Accueil</a></li>
         <li class="navbar-item" id="forma"> <a class="nav-link px-3" href="#for" style=" font-family:Camellio ;font-size:20px;">Formations</a></li>
         <li class="navbar-item" id="forma"> <a class="nav-link px-3" href="actu.php" style=" color:white;font-family:Camellio ;font-size:20px;">Actualit??</a></li>

         <li class="navbar-item dropdown"> <a class="nav-link dropdown-toggle px-3" href="" data-toggle="dropdown" style=" font-family:Camellio ;font-size:20px;">Presentation</a>
         <div class="dropdown-menu">
             <a class="dropdown-item" href="#mdd">Mots du Directeur</a>
             <a class="dropdown-item" href="#orga">Organigramme</a>
             <a class="dropdown-item" href="#mem">Membres</a>
         </div>
        </li>
        <li class="navbar-item"> <a class="nav-link px-3" href="#fm" style=" font-family:Camellio ;font-size:20px;">Conditions d'admissions</a></li>
        <li class="navbar-item"> <a class="nav-link px-3" href="memoire.php" style=" font-family:Camellio ;font-size:20px;">Recherche Scientifique</a></li>
        <li class="navbar-item dropdown"> <a class="nav-link dropdown-toggle px-3" href="" data-toggle="dropdown" style=" font-family:Camellio ;font-size:20px;" >Production Scientifique</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="">Projets termin??s</a>
            <a class="dropdown-item" href="projetst.php">Projets en cours</a>
          </div>
        </li>      
        <li class="navbar-item" id="con"> <a class="nav-link px-3" href="#connex" style="color:#fff; font-family:Camellio ;font-size:20px;">Espace Admin</a></li>

        </ul>
            </div>
      </nav>
    
      <section>
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img src="slide1.jpg" class="d-block w-100" alt="..." style="height:500px">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p class="bn" style="text-align:center;">2LIA : Laboratoire d???Intelligence Artificielle et Applications en Ing??nierie.
        <a href="https://codepen.io/grohit/"></a>
        </p>
      </div>
    </div>
    <div class="carousel-item" >
      <img src="slide2.jpg" class="d-block w-100" alt="..." style="height:500px">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p class="bn" style="text-align:center;">2LIA : Laboratoire d???Intelligence Artificielle et Applications en Ing??nierie
        <a href="https://codepen.io/grohit/"></a>
        </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="slide3.jpg" class="d-block w-100" alt="..." style="height:500px">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p class="bn" style="text-align:center;">2LIA : Laboratoire d???Intelligence Artificielle et Applications en Ing??nierie
        <a href="https://codepen.io/grohit/"></a>
        </p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        
      </section>
      </header>
      </div>
    </div>
    <h3 class="bien"  style="padding:40px" >Pr??sentation</h3>
    <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col" id="mdd">
    <div class="card" style="height:680px">
      <div class="card-body" style="background-color:#EEE8AA">
        <h5 class="card-title bn" style="text-align:center;">Mots du Directeur
        <a href="https://codepen.io/grohit/"></a></h5>
        <p class="card-text">
      Le laboratoire d???intelligence artificielle et applications en ing??nierie <br>
       (2LIA) a ??t?? cr???? par des jeunes chercheurs des ing??nieurs et entrepreneurs. <br>
      Il a pour objectif principal d???ex??cuter des activit??s de recherche scientifique <br>
       et de d??veloppement technologique inscrites dans le projet de d??veloppement <br>
        des entreprises et ??tablissements de rattachement. <br>
      Le laboratoire a aussi pour r??le de : <br>
      1. Contribuer ?? la formation, ?? l'acquisition, ?? la ma??trise et au d??veloppement 
      de nouvelles connaissances scientifiques et technologiques ; <br>
      2. R??aliser des ??tudes et des travaux de recherche et d???assurer la promotion <br>
      et la diffusion des r??sultats de sa recherche ; <br>
      3. R??pondre ?? des besoins socio-??conomiques en relation avec son objet. <br>
      4. Valoriser et promouvoir les r??sultats du typha . <br>
      Le laboratoire se compose de quatre (04) ??quipes au minimum, chaque ??quipe <br>
      comprend au moins (03) enseignants-chercheurs au minimum. Cette composante <br>
      est consid??r??e comme le noyau du d??marrage du laboratoire, il est attendu <br>
      que l???effectif ??volue apr??s sa cr??ation pour englober le plus grand nombre <br>
      de chercheurs de doctorants et d?????tudiants possible pour que le laboratoire <br>
      puisse ex??cuter plusieurs activit??s de recherche horizontales et <br>
      multidisciplinaires d??finies dans le programme et r??pondant aux objectifs <br>
      attendus de l???institut polytechnique des m??tiers (IPM) et les entreprises <br>
      de rattachement. Il est ?? souligner que chaque ??tudiant est membre du <br>
      laboratoire durant toute la dur??e de la formation. Apr??s avoir soutenu son <br>
      m??moire , il peut ??tre int??gr?? comme membre afin d???exercer ses activit??s <br>
      de recherche ?? temps plein ou partiel.</p>
      </div>
    </div>
  </div>
  <div class="col" id="orga" >
    <div class="card" style="height:680px">
    
      <div class="card-body" style="background-color:#EEE8AA">
      <h5 class="card-title bn" style="text-align:center;">Organigramme
      <a href="https://codepen.io/grohit/"></a></h5>
      
      <img id="" src="orga.png" width="100%" height="auto">
      </div>
    </div>
  </div>

</div>

<h3 class="bien"  style="padding:40px" id="mem">Membres</h3>
<div class="row row-cols-1 row-cols-md-3 g-4" style="margin:2px">
  <div class="col" >
    <div class="card">
    <img src="pp.jpeg" class="card-img-top" style="width:100%;" alt="...">
    <div class="card-body">
      <h5 class="card-title">Partie Professorale</h5>
      <a href="membre1.php" class="btn btn-primary" target="_blank">Voir Page</a>
    </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="pe.jpeg" class="card-img-top" alt="..." style="width:100%;">
      <div class="card-body">
        <h5 class="card-title">Partie Etudiante</h5>
        <a href="membre2.php" class="btn btn-primary" target="_blank">Voir Page</a>
      </div>
    </div>
  </div>

</div>

<h3 class="bien"  style="padding:40px" >Formations</h3>
<div class="row row-cols-1 row-cols-md-3 g-4" id="for" style="padding-bottom:50px;margin-bottom:40px;background-color:#FF7E00;width:100%">
  <div class="col" style="margin:10px;min-width:200px ; min-height:250px">
    <div class="card h-100">
      <img src="gei.jpg" class="card-img-top" alt="..." style="width:100%;height: 200px;">
      <div class="card-body">
        <h5 class="card-title">G??nie Informatique et s??curit??</h5>
        <a href="https://ipm-ipsa.com/genie-informatique/" target="_blank" class="btn btn-primary">Voir Page</a>

      </div>
    </div>
  </div>
  <div class="col" style="margin:10px;min-width:200px ; min-height:250px">
    <div class="card h-100">
      <img src="gem.jpg" class="card-img-top" alt="..." style="width:100%;height: 200px;">
      <div class="card-body">
        <h5 class="card-title">G??nie Electrom??canique</h5>
        <a href="https://ipm-ipsa.com/genie-electromecanique/" target="_blank" class="btn btn-primary">Voir Page</a>

      </div>
    </div>
  </div>
  <div class="col" style="margin:10px;min-width:200px ; min-height:250px">
    <div class="card h-100">
      <img src="gc.jpg" class="card-img-top" alt="..." style="width:100%;height: 200px;">
      <div class="card-body">
        <h5 class="card-title">G??nie Civil</h5>
        <a href="https://ipm-ipsa.com/genie-civil/" target="_blank" class="btn btn-primary">Voir Page</a>
      </div>
    </div>
  </div>
  <div class="col" style="margin:10px;min-width:200px ; min-height:250px">
    <div class="card h-100">
      <img src="gdp.jpg" class="card-img-top" alt="..." style="width:100%;height: 200px;">
      <div class="card-body">
        <h5 class="card-title">G??nie des proc??d??s</h5>
        <a href="https://ipm-ipsa.com/genie-des-procedes/" target="_blank" class="btn btn-primary">Voir Page</a>
      </div>
    </div>
  </div>
</div>

</div>
</div>

  <div id="connex" class="modal1">
    <div class="modal_content1">
        <div class="login-form">
      <form action="connexion.php" method="post">
        <a href="#" class="modal_close1">&times;</a>
        <h3>Connexion</h3>
        <div class="inputBox1">
            <span>Email</span>
            <div class="box">
                <div class="icon"><ion-icon name="people"></ion-icon>
                    </div>
                <input type="text" name="email" class="form-control" Required  autocomplete="off">
            </div>
        </div>
        <div class="inputBox1">
            <span>Mot de passe</span>
            <div class="box">
                <div class="icon"><ion-icon name="lock"></ion-icon>
                    </div>
                <input type="password" name="password" class="form-control" Required  autocomplete="off">
            </div>
            <div class="inputBox1">
                <div class="box">
                   <input type="submit"style="margin-top:70px" value="Se connecter">
                </div>
            </div>
        </div>
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    </form>
    </div>
    </div>
  </div>
  <nav>

    <style>
    .login-form {
        width: 100%;
        margin: 50px auto;
    }
    </style>
  <footer id="footer"  style="background-color:#0f1a33;width:100%">

    <div class="row row-cols-1 row-cols-md-3 g-4" id="for">
      <div class="col" style="margin:10px ;height:300px">
        <div class="card h-100" style="width:250px">
          <div class="card-body">
            <h5 class="card-title">Menu</h5>
            <ul>
              <li><a class="active" href="index.php">Accueil</a></li>
              <li><a href="#for">Formations</a></li>
              <li><a href="actu.php">Actualit??s</a></li>
              <li><a href="#mdd">Pr??sentation</a></li>
              <li><a href="#about">Conditions d'admissions</a></li>
              <li><a href="#about">Recherche Scientifique</a></li>
              <li><a href="projetst.php">Production Scientique</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col" style="margin:10px;height:150px">
        <div class="card h-100" style="width:250px">
          <div class="card-body" style="display:inline-block">
            <h5 class="card-title">Contacts</h5>
            <a href="tel:+221772303092" target="_blank" class="btn btn-primary">Orange</a>
            <a href="tel:+22176 332 05 02" target="_blank" class="btn btn-primary">Tigo</a>
          </div>
        </div>
      </div>
      <div class="col" style="margin:10px; height:150px">
        <div class="card h-100" style="width:250px">
          <div class="card-body" style="display:inline-block">
            <h5 class="card-title">R??seaux Sociaux</h5>
            <a href="#" class="fa fa-facebook" style="margin: 8px;"></a>
            <a href="#" class="fa fa-whatsapp" style="margin: 8px;"></a>
            <a href="#" class="fa fa-instagram" style="margin: 8px;"></a>
            <a href="#" class="fa fa-twitter" style="margin: 8px;"></a>
          </div>
        </div>
      </div>
      <div class="col" style="margin:10px;height:150px">
        <div class="card h-100" style="width:250px">
          <div class="card-body">
            <h5 class="card-title">Actualit??s R??centes</h5>
            <a href="actu.php" target="_blank" class="btn btn-primary">Voir Page</a>
          </div>
        </div>
      </div>

    </div>
    <div class="foot" style="background-color:#0f1a33;width:100%">
      <h3>2LIA : Laboratoire d???Intelligence Artificielle et Applications en Ing??nierie</h3>
      <p style="padding-bottom:10px;">GALAXY EDU S. A. R. L</p>
    </div> 
  </footer>  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>