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
                $resultat = $req->fetch();?>
               <div class=" 
<?php if (!$resultat){
    echo 'up';
}else{
    echo 'liked';
}}?>">