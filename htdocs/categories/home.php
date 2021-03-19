<?php
if (isset($_POST['categorie'])) : 

require_once(__DIR__."/../connexion/bdd.php");
$techStatement = $pdo->prepare("SELECT * FROM product WHERE categories LIKE ?");
$techStatement->execute([$_POST['categorie']]);
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
                <?php 
                $stmt = $pdo->prepare("SELECT COUNT(*) AS like_nb FROM likes WHERE id_product = ?");
                $stmt->execute([($tech['id'])]); 
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                echo '<p>'.$result['like_nb']. '</p>';?>
            </div>
        </div>
    </div>
</div>
<?php endforeach;?>
<?php endif;?>