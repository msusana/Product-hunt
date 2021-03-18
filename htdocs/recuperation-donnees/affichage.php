<?php 
require_once(__DIR__."/../connexion/bdd.php");
$stmt1 = $pdo->prepare("SELECT * FROM product");
$stmt1->execute(); 
$result1 = $stmt1->fetchAll();

foreach($result1 as $product){ 
  $idproduct=$product['id'];
?>
<div class="card mb-3 produit">
  <div class="row no-gutters">  
    
  
          <div class="col-md-2">
            <img src="<?=$product['logo']?>" class="card-img" alt="...">
          </div>

          <div class="col-md-7 box-product" data-popup-ref="monPopup" id='<?=$product['id']?>'>
            <div class="card-body">
          <h5 class="card-title">"<?=$product['name-product']?>"</h5>
          <p class="card-text"><?=$product['descriptif']?> </p>
          <p class="card-text"><?=$product['categories']?> </p>
            </div>
          </div>

      
          <div class="col-md-3" id="like">
            <div class='like' id='<?=$product['id']?>'>
            <div class= 'up' id='up'>
            <ion-icon name="caret-up-outline"></ion-icon>
            <?php
            $req = $pdo->prepare('SELECT * FROM likes WHERE id_product = ? AND id_user = ?');
            $req->execute([
              $idproduct, 
              $_SESSION['id']
              ]);
            $resultat = $req->fetch();
               
             if ($resultat) {
              echo '<script>
              function up(){
                let ups = document.querySelectorAll("#up");
                
                ups.forEach(up => { 
                up.addEventListener("click" ,function(){
                   up.classList.remove("up");
                   up.classList.add("liked");
                    })
                })
                }
                up();
              </script>';
                     
             } else{
              echo '<script>
              function like(){
                let ups = document.querySelectorAll("#up");
                
                ups.forEach(up => { 
                up.addEventListener("click" ,function(){
                   up.classList.remove("liked");
                   up.classList.add("up");
                    })
                })
                }
                like();
              </script>';
             };
            /*include 'count_up.php';*/ ?>
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
