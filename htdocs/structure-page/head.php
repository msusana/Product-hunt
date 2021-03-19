<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css?v=<?php echo time(); ?>">
    <title>Product hunt</title>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="/index2.php" style="color: white">P</a>
    <form class="d-flex" method="POST">
        <input class="form-control me-2" type="search" name="search" placeholder="Search" id="search" aria-label="Search">
      </form>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">discussions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Deals</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Jobs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ships</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ...
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/index2.php">Toutes les catégories</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#" onclick="tech();" >TECH</a></li>
            <li><a class="dropdown-item tech" onclick="tech();" id='tech'>HOME</a></li>
            <li><a class="dropdown-item" href="/categories/comics.php">COMICS & GRAPHI</a></li>
            <li><a class="dropdown-item" href="/categories/web.php">WEB APP</a></li>
          </ul>
        </li>
      </ul>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">

      <?php if (isset($_SESSION['id'])){ ?>
        <a href="/recuperation-donnees/deco_login.php"><button class="btn btn-secondary me-md-2" type="button">LOG OUT</button></a>
      <?php }else{ ?>
        <a href="/structure-page/login.php"><button class="btn btn-secondary me-md-2" type="button">LOG IN</button></a>
        <a href="/structure-page/signup.php"><button class="btn btn-danger" type="button" >SIGN UP</button></a>
      <?php } ?>
      </div>
    </div>
  </div>
</nav>
</head>