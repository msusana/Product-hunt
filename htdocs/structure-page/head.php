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
    <form class="d-flex form" method="POST">
        <input class="form-control me-2" type="search" name="search" placeholder="Search" id="search" aria-label="Search">
      </form>
  
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