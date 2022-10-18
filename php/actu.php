<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/7b4b0f92fb.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header> 
      <nav class="navbar navbar-expand-md " >
          <a class="navbar-brand" href=""> <img src="logo.png" alt="" style="border-radius:90%;width:50px"></a>
        <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" >
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
              </svg>
          </button>
      <div class="collapse navbar-collapse justify-content-between" id="nav">
        <ul class="navbar-nav">
         <li class="navbar-item"> <a class="nav-link px-3" href="index.php">Accueil</a></li>
         <li class="navbar-item" id="forma"> <a class="nav-link px-3" href="index.php">Formations</a></li>
         <li class="navbar-item" id="forma"> <a class="nav-link px-3" href="index.php">Actualité</a></li>

         <li class="navbar-item dropdown"> <a class="nav-link dropdown-toggle px-3" href="" data-toggle="dropdown">Presentation</a>
          <div class="dropdown-menu">
             <a class="dropdown-item" href="index.php">Mots du Directeur</a>
             <a class="dropdown-item" href="index.php">Organigramme</a>
             <a class="dropdown-item" href="index.php">Membres</a>
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
            <a class="dropdown-item" href="projetst">Projets terminés</a>
            <a class="dropdown-item" href="#am">Projets en cours</a>
            

          </div>
         </li>
         <li class="navbar-item" id="con"> <a class="nav-link px-3" href="#connex" style="color:#fff">Espace Admin</a></li>

        </ul>
      </div>
      </nav>
    </header>
    <div class="row row-cols-1 row-cols-md-3 g-4" id="for" style="margin-bottom:50px;margin-top:100px;">
  <div class="col" style="margin:10px;min-width:200px ; min-height:250px">
    <div class="card h-100">
      <img src="gei.jpg" class="card-img-top" alt="..." style="width:100%;height: 200px;">
      <div class="card-body">
        <h5 class="card-title">Séminaires</h5>
        <a href="" target="_blank" class="btn btn-primary" style="background-color:#293245">Voir Page</a>

      </div>
    </div>
  </div>
  <div class="col" style="margin:10px;min-width:200px ; min-height:250px">
    <div class="card h-100">
      <img src="gem.jpg" class="card-img-top" alt="..." style="width:100%;height: 200px;">
      <div class="card-body">
        <h5 class="card-title">Soutenances</h5>
        <a href="" target="_blank" class="btn btn-primary" style="background-color:#293245">Voir Page</a>

      </div>
    </div>
  </div>
  <div class="col" style="margin:10px;min-width:200px ; min-height:250px">
    <div class="card h-100">
      <img src="gc.jpg" class="card-img-top" alt="..." style="width:100%;height: 200px;">
      <div class="card-body">
        <h5 class="card-title">Concours</h5>
        <a href="" target="_blank" class="btn btn-primary" style="background-color:#293245">Voir Page</a>
      </div>
    </div>
  </div>
  <div class="col" style="margin:10px;min-width:200px ; min-height:250px">
    <div class="card h-100">
      <img src="gdp.jpg" class="card-img-top" alt="..." style="width:100%;height: 200px;">
      <div class="card-body">
        <h5 class="card-title">Recrutements</h5>
        <a href="" target="_blank" class="btn btn-primary" style="background-color:#293245">Voir Page</a>
      </div>
    </div>
  </div>
</div>

</body>
</html>