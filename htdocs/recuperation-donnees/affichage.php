<?php 
require_once("connexion/bdd.php");

$stmt1 = $pdo->prepare("SELECT * FROM product");
$stmt1->execute(); 
$result1 = $stmt1->fetchAll();
foreach($result1 as $product) 
{ ?>
<div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-md-1">
      <img src="<?=$product['logo']?>" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
    <h5 class="card-title">"<?=$product['name-product']?>"</h5>
    <p class="card-text"><?=$product['descriptif']?> </p>
    <p class="card-text"><?=$product['categories']?> </p>
    </div>
</div>
    <div class="col-md-3">
    <div class='like' id='<?=$product['id']?>'><span class='like'id='likes<?=$product['id']?>'>
    <button><ion-icon name="caret-up-outline"></ion-icon></button></span></div>
    </div>
  </div>

</div>
<?php }