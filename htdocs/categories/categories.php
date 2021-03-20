<?php
if (isset($_POST['categorie'])) : 
$categorie=(string)$_POST['categorie'];
require_once(__DIR__."/../connexion/bdd.php");
$categorieStatement = $pdo->prepare('SELECT * FROM product 
JOIN images ON product.id = images.product_id WHERE categories = ?');
$categorieStatement->execute([$categorie]);
$result = $categorieStatement->fetchAll();
foreach ($result as $categorie): ?>


<div class="card mb-3 produit" >
    <div class="row">
        <div class="col-sm-12">
        <img src="/<?=$categorie['logo']?>" class="img-logo " alt="...">
        </div>
    </div>

    <div class="row">
    <div class="col-sm-12 align-self-center box-product" id='product'>
            <div class="card-body">
                <h5 class="card-title">"<?=$categorie['name-product']?>"</h5>
                    <p class="card-text"><?=$categorie['descriptif']?> </p>
                    <p class="card-text"><?=$categorie['categories']?> </p>
            </div>
        </div> 
    </div>

    <div class="row images">
        <div class="img1">
            <img src="<?=$categorie["img_1"]?>" class="d-block w-100">
        </div>                            
        <div class="img2">                          
            <img src="<?=$categorie["img_2"]?>" class="d-block w-100">
        </div>     
        <div class="img3">                      
            <img src="<?=$categorie["img_3"]?>" class="d-block w-100">
        </div>                              
    </div>
</div>
<?php endforeach;?>

<?php endif;?>
