<?php 
require_once(__DIR__."/../connexion/bdd.php");
$stmt1 = $pdo->prepare("SELECT * FROM product");
$stmt1->execute(); 
$result1 = $stmt1->fetchAll();

foreach($result1 as $product){ 
  $idproduct=$product['id'];
?>
<div class="card mb-3 produit">
  <div class="row">  
    
  
          <div class="col-md-2 col-sm-12 align-self-center">
            <img src="<?=$product['logo']?>" class="card-img" alt="...">
          </div>

          <div class="col-md-7 col-sm-12 align-self-center box-product" data-popup-ref="monPopup" id='<?=$product['id']?>'>
            <div class="card-body">
          <h5 class="card-title">"<?=$product['name-product']?>"</h5>
          <p class="card-text"><?=$product['descriptif']?> </p>
          <p class="card-text"><?=$product['categories']?> </p>
            </div>
          </div>

      
          <div class="col-md-3 col-sm-12 align-self-center" id="like">
            <div class='like' id='<?=$product['id']?>'>
                <?php include 'load/up.php' ?>
               <ion-icon name="caret-up-outline"></ion-icon>
                <?php include 'recuperation-donnees/count_up.php' ?>

            
           </div>
            </div>
          </div>
          </div>
   </div>
  
  <?php } ?>
<div class="popup" data-popup-id="monPopup">
  <div class="popup-content">
    <?php include 'content_modal.php'?>
  </div>
</div>
