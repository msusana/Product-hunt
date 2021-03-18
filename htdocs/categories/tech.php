<?php
session_start();
require_once(__DIR__."/../connexion/bdd.php");?>
<head>
<link rel="stylesheet" href="../style.css">
</head>
<?php
include '../structure-page/head.php'; ?>
<body>

<div id='result'></div>
<div class='container'>
<?php
$techStatement = $pdo->prepare("SELECT * FROM product WHERE categories LIKE 'tech'");
$techStatement->execute();
$result = $techStatement->fetchAll();
foreach ($result as $tech): ?>
<div class="card mb-3" >
  <div class="row no-gutters">
    <div class="col-md-1">
      <img src="/<?=$tech['logo']?>" class="card-img" alt="...">
    </div>

        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">"<?=$tech['name-product']?>"</h5>
                    <p class="card-text"><?=$tech['descriptif']?> </p>
                    <p class="card-text"><?=$tech['categories']?> </p>
            </div>
        </div>

        <div class="col-md-3" id="like">
            <div class='up' id='<?=$tech['id']?>'>
                <ion-icon name="caret-up-outline"></ion-icon>
                    <?php /*include '../count_up.php'; */?>
            </div>
        </div>
    </div>
</div>
<?php endforeach;?>
</body>

<?php include '../structure-page/footer.php'; ?>
</html>