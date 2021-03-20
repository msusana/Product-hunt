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
<div class="container search">
  <div class="row">
    <div class="col-4">
          <img src="/<?=$product['logo']?>" class="card-img-top" alt="...">
    </div>
        <div class="col-6">
      <p class="title">"<?=$product['name-product']?>"</p>
    </div>
      
    </div>
    <p class="descriptif"><?=$product['descriptif']?> </p>
</div>
<?php }