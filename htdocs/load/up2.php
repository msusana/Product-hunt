<?php
session_start();
require_once(__DIR__."/../connexion/bdd.php");
if (isset($_POST['product_id'])){
    $idproduct = $_POST['product_id'];
 

    $req = $pdo->prepare('SELECT * FROM likes WHERE id_product = ? AND id_user = ?');
    $req->execute([
        $idproduct, 
        $_SESSION['id']
    ]);
    $resultat = $req->fetch();


    $stmt = $pdo->prepare("SELECT COUNT(*) AS like_nb FROM likes WHERE id_product = ?");
    $stmt->execute([($idproduct)]); 
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>


<?php if (!$resultat){ ?>
    <div class="uplike ups" ><ion-icon name="caret-up-outline"></ion-icon> <p><?=$result['like_nb'] ?></p></div>
<?php }else{ ?>
    <div class="uplike liked"> <ion-icon  name="caret-up-outline"></ion-icon> <p><?=$result['like_nb'] ?></p></div>
<?php } ?>

