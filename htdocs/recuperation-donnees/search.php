<?php
require_once("../connexion/bdd.php");
$search=$_POST['search'];
$stmt2 = $pdo->prepare("SELECT * FROM product WHERE categories OR `name-product` LIKE :search");
$search="%".$search."%";
$stmt2->bindParam(":search", $search, PDO::PARAM_STR);
$stmt2->execute(); 
$result2 = $stmt2->fetchAll();
foreach($result2 as $product) 
{ ?>
<div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-md-1">
      <img src="<?=$product['logo']?>" class="card-img" alt="...">
    </div>
    <div class="col-md-11">
      <div class="card-body">
  <div class="card-body">
    <h5 class="card-title">"<?=$product['name-product']?>"</h5>
    <p class="card-text"><?=$product['descriptif']?> </p>
    </div>
    </div>
  </div>
</div>
</div>
<?php }