<?php 
 /*$stmt = $pdo->prepare("SELECT COUNT(*) AS like_nb FROM likes WHERE id_product = ?");
 $stmt->execute([intval($idproduct)]); 
 $result = $stmt->fetch(PDO::FETCH_ASSOC);
 echo '<p>'.$result['like_nb']. '</p>';  */
 
 if (isset($_POST['product_id'])) {
    require_once("connexion/bdd.php");

 $idproduct=intval($_POST['product_id']);
 $stmt = $pdo->prepare("SELECT COUNT(*) AS like_nb FROM likes WHERE id_product = ?");
 $stmt->execute([($idproduct)]); 
 $result = $stmt->fetch(PDO::FETCH_ASSOC);
 echo '<p>'.$result['like_nb']. '</p>';
 } 

 ?>