<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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
  <body>
    <div class="entet">
        <header> 
      <nav class="navbar navbar-expand-md " >
          <a class="navbar-brand" href=""> <img src="logo.png" alt="" style="width:60px"></a>
        <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" >
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
              </svg>
          </button>
          <div class="collapse navbar-collapse justify-content-between" id="nav">
          <ul class="navbar-nav">
         <li class="navbar-item"> <a class="nav-link px-3" href="index.php">Accueil</a></li>
         <li class="navbar-item" id="forma"> <a class="nav-link px-3" href="#formation">Formations</a></li>
         <li class="navbar-item" id="forma"> <a class="nav-link px-3" href="#For">Actualité</a></li>

         <li class="navbar-item dropdown"> <a class="nav-link dropdown-toggle px-3" href="" data-toggle="dropdown">Presentation</a>
         <div class="dropdown-menu">
             <a class="dropdown-item" href="#mdd">Mots du Directeur</a>
             <a class="dropdown-item" href="#orga">Organigramme</a>
             <a class="dropdown-item" href="#mem">Membres</a>
         </div>
        </li>
        <li class="navbar-item"> <a class="nav-link px-3" href="#fm">Conditions d'admissions</a></li>
         <li class="navbar-item dropdown"> <a class="nav-link dropdown-toggle px-3" href="" data-toggle="dropdown">Recherche Scientifique</a>
         <div class="dropdown-menu">
             <a class="dropdown-item" href="">Mémoires Licence3</a>
             <a class="dropdown-item" href="">Mémoire Master</a>
             <a class="dropdown-item" href=""></a>
         </div>
        </li>
         <li class="navbar-item dropdown"> <a class="nav-link dropdown-toggle px-3" href="" data-toggle="dropdown">Production Scientifique</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="">Projets terminés</a>
            <a class="dropdown-item" href="projetst.php">Projets en cours</a>
            

        </div>
    </li>
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
        <p class="bn" style="text-align:center;">2LIA : Laboratoire d’Intelligence Artificielle et Applications en Ingénierie.
        <a href="https://codepen.io/grohit/"></a>
        </p>
      </div>
    </div>
    <div class="carousel-item" >
      <img src="slide2.jpg" class="d-block w-100" alt="..." style="height:500px">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p class="bn" style="text-align:center;">2LIA : Laboratoire d’Intelligence Artificielle et Applications en Ingénierie
        <a href="https://codepen.io/grohit/"></a>
        </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="slide3.jpg" class="d-block w-100" alt="..." style="height:500px">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p class="bn" style="text-align:center;">2LIA : Laboratoire d’Intelligence Artificielle et Applications en Ingénierie
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
    <h3 class="bien"  style="padding:40px" >Présentation</h3>
    <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col" id="mdd">
    <div class="card" style="height:680px">
      <div class="card-body" style="background-color:#EEE8AA">
        <h5 class="card-title bn" style="text-align:center;">Mots du Directeur
        <a href="https://codepen.io/grohit/"></a></h5>
        <p class="card-text">
      Le laboratoire d’intelligence artificielle et applications en ingénierie <br>
       (2LIA) a été créé par des jeunes chercheurs des ingénieurs et entrepreneurs. <br>
      Il a pour objectif principal d’exécuter des activités de recherche scientifique <br>
       et de développement technologique inscrites dans le projet de développement <br>
        des entreprises et établissements de rattachement. <br>
      Le laboratoire a aussi pour rôle de : <br>
      1. Contribuer à la formation, à l'acquisition, à la maîtrise et au développement 
      de nouvelles connaissances scientifiques et technologiques ; <br>
      2. Réaliser des études et des travaux de recherche et d’assurer la promotion <br>
      et la diffusion des résultats de sa recherche ; <br>
      3. Répondre à des besoins socio-économiques en relation avec son objet. <br>
      4. Valoriser et promouvoir les résultats du typha . <br>
      Le laboratoire se compose de quatre (04) équipes au minimum, chaque équipe <br>
      comprend au moins (03) enseignants-chercheurs au minimum. Cette composante <br>
      est considérée comme le noyau du démarrage du laboratoire, il est attendu <br>
      que l’effectif évolue après sa création pour englober le plus grand nombre <br>
      de chercheurs de doctorants et d’étudiants possible pour que le laboratoire <br>
      puisse exécuter plusieurs activités de recherche horizontales et <br>
      multidisciplinaires définies dans le programme et répondant aux objectifs <br>
      attendus de l’institut polytechnique des métiers (IPM) et les entreprises <br>
      de rattachement. Il est à souligner que chaque étudiant est membre du <br>
      laboratoire durant toute la durée de la formation. Après avoir soutenu son <br>
      mémoire , il peut être intégré comme membre afin d’exercer ses activités <br>
      de recherche à temps plein ou partiel.</p>
      </div>
    </div>
  </div>
  <div class="col" id="orga" >
    <div class="card" style="height:680px">
    
      <div class="card-body" style="background-color:#EEE8AA">
      <h5 class="card-title bn" style="text-align:center;">Organigramme
      <a href="https://codepen.io/grohit/"></a></h5>
      <img src="orga.png" class="card-img-top" alt="..." style="height:200px;width:610px;margin-top:100px;">

      </div>
    </div>
  </div>

</div>

<h3 class="bien"  style="padding:40px" >Membres</h3>
<div class="row row-cols-1 row-cols-md-3 g-4" style="margin:2px">
  <div class="col" >
    <div class="card">
      <img src="pp.jpg" class="card-img-top" style="width:100%;height:300px;" alt="...">
      <div class="card-body">
        <h5 class="card-title">Partie Professorale</h5>
        <a href="membre1.php" class="btn btn-primary" target="_blank">Voir Page</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="pe.jpg" class="card-img-top" alt="..." style="width:400px;height: 300px;">
      <div class="card-body">
        <h5 class="card-title">Partie Etudiante</h5>
        <a href="membre2.php" class="btn btn-primary" target="_blank">Voir Page</a>
      </div>
    </div>
  </div>

</div>

<h3 class="bien"  style="padding:40px" >Formations</h3>
<div class="row row-cols-1 row-cols-md-3 g-4" style="margin:2px;background-color:#FF7E00;">
  <div class="col">
    <div class="card h-100">
      <img src="gei.jpg" class="card-img-top" alt="..." style="width:100%;height: 200px;">
      <div class="card-body">
        <h5 class="card-title">Génie Informatique et sécurité</h5>
        <a href="https://ipm-ipsa.com/genie-informatique/" target="_blank" class="btn btn-primary">Voir Page</a>

      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="gem.jpg" class="card-img-top" alt="..." style="width:100%;height: 200px;">
      <div class="card-body">
        <h5 class="card-title">Génie Electromécanique</h5>
        <a href="https://ipm-ipsa.com/genie-electromecanique/" target="_blank" class="btn btn-primary">Voir Page</a>

      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="gc.jpg" class="card-img-top" alt="..." style="width:100%;height: 200px;">
      <div class="card-body">
        <h5 class="card-title">Génie Civil</h5>
        <a href="https://ipm-ipsa.com/genie-civil/" target="_blank" class="btn btn-primary">Voir Page</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="gdp.jpg" class="card-img-top" alt="..." style="width:100%;height: 200px;">
      <div class="card-body">
        <h5 class="card-title">Génie des procédés</h5>
        <a href="https://ipm-ipsa.com/genie-des-procedes/" target="_blank" class="btn btn-primary">Voir Page</a>
      </div>
    </div>
  </div>
</div>

</div>
</div>
        <div id="fm" class="modal">
          <div class="modal_content">
          <div class="login-form"> 
            <form action="preinscription.php" method="post">
            <a href="#" class="modal_close">&times;</a>
        <div class="wrapper">
          <div class="title">
              Préinscription
          </div>
          <div class="form">
              <div class="input_field">
                  <label for="">Nom</label>
                  <input type="text" class="input" name="nom" class="form-control" Required  autocomplete="off">
              </div>
              <div class="input_field">
                  <label for="">Prenom(s)</label>
                  <input type="text" class="input" name="prenom" class="form-control" Required  autocomplete="off">
              </div>
              <div class="input_field">
                  <label for="">Email</label>
                  <input type="email" class="input" name="email" class="form-control" Required  autocomplete="off">
              </div>
              <div class="input_field">
                  <label for="">Numéro de téléphone</label>
                  <input type="tel" class="input" name="numero" class="form-control" Required  autocomplete="off">
              </div>
              <div class="input_field">
                  <label for="">Genre</label>
                  <div class="custom_select">
                      <select  name="genre" class="form-control" Required  autocomplete="off">
                          <option value="select">Select</option>
                          <option value="femme">Femme</option>
                          <option value="homme">Homme</option>
                      </select>
                  </div>
              </div>
              <div class="input_field">
                  <label for="">Formations</label>
                  <div class="custom_select">
                      <select id="" name="formation" class="form-control" Required  autocomplete="off">
                          <option value="">Select</option>
                          <option value="Génie Informatique" >Génie Informatique</option>
                          <option value="Génie Electrique">Génie Electrique</option>
                          <option value="Génie Civil">Génie Civil</option>
                          <option value="Génie des procédés">Génie des procédés</option>
                      </select>
                  </div>
              </div>
              <div class="input_field">
                  <label for="">Niveau</label>
                  <div class="custom_select">
                      <select id="" name="niveau"  class="form-control" Required  autocomplete="off">
                          <option value="">Select</option>
                          <option value="Licence1">Licence1</option>
                          <option value="Licence2">Licence2</option>
                          <option value="Licence3">Licence3</option>
                          <option value="Master1">Master1</option>
                          <option value="Master2">Master2</option>
                      </select>
                  </div>
              </div>
              <div class="input_field">
                  <label for="">Motivation</label>
                  <textarea class="textarea" name="motivation" class="form-control" Required  autocomplete="off"></textarea>
              </div>
              <div class="input_field">
              <input type="submit" value="Envoyer" class="btn-">
              </div>
          </div>
      </div>
      </form>
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
            <label> <input type="checkbox">Se souvenir de moi</label>
            <div class="inputBox1">
                <div class="box">
                   <input type="submit" value="Se connecter">
                </div>
            </div>
            <a href="#" class="Forgot">Mot de passe oublié ?</a>
        </div>
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    </form>
    </div>
    </div>
  </div>
  <nav>

  <div id="am" class="modal2">  
    <div class="modal_content2">  
    <div class="login-form">
    <form action="inscription_traitement.php" method="post">
    <a href="#" class="modal_close2">&times;</a>
    <div class="wrapper">
      <div class="title">
         Inscription
      </div>
      <div class="form">
          <div class="input_field">
              <label for="">Nom</label>
              <input type="text" class="input" name="nom" class="form-control" Required autocomplete="off">
          </div>
          <div class="input_field">
              <label for="">Prenom(s)</label>
              <input type="text" class="input" name="prenom" class="form-control" Required autocomplete="off">
          </div>
          <div class="input_field">
              <label for="">Email</label>
              <input type="email" class="input" name="email" class="form-control" Required autocomplete="off">
          </div>
          <div class="input_field">
              <label for="">Numéro de téléphone</label>
              <input type="tel" class="input" name="numero" class="form-control" Required autocomplete="off">
          </div>
          <div class="input_field">
            <label for="">Mot de pass</label>
            <input type="password" class="input" name="password" class="form-control" Required autocomplete="off">
        </div>
        <div class="input_field">
          <label for="">Retapez le mot de pass</label>
          <input type="password" class="input" name="password_retype" class="form-control" Required autocomplete="off">
      </div>
          <div class="input_field">
              <label for="">Formations</label>
              <div class="custom_select">
                  <select name="formation" id="" class="form-control" Required  autocomplete="off">
                      <option value="">Select</option>
                      <option value="Génie Informatique">Génie Informatique</option>
                      <option value="Génie Electrique">Génie Electrique</option>
                      <option value="Génie Civil">Génie Civil</option>
                      <option value="Génie des procédés">Génie des procédés</option>
                  </select>
              </div>
          </div>
          <div class="input_field">
              <label for="">Niveau</label>
              <div class="custom_select">
                  <select name="niveau" id="" class="form-control" Required autocomplete="off">
                      <option value="">Select</option>
                      <option value="Licence1">Licence1</option>
                      <option value="Licence2">Licence2</option>
                      <option value="Licence3">Licence3</option>
                      <option value="Master1">Master1</option>
                      <option value="Master2">Master2</option>
                  </select>
              </div>
          </div>
          <div class="input_field">
              <input type="submit" value="S'inscrire" class="btn-">
          </div>
      </div>
      </div>
  </form>
    </div>
    </div>
    </div>
    <style>
    .login-form {
        width: 100%;
        margin: 50px auto;
    }
    </style>
  <footer id="footer">
     <div class="foot">
    <h3>2LIA : Laboratoire d’Intelligence Artificielle et Applications en Ingénierie</h3>
                    <p>GALAXY EDU S. A. R. L</br>
                    Tél: 77 230 30 92 / 76 332 05 02 </p>
  </div>
    </footer>  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>