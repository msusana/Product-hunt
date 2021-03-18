<?php
session_start();
require_once("../connexion/bdd.php");

if(isset($_SESSION['id']) && isset($_POST['id'])) {
    $iduser = intval($_SESSION['id']);
    $idproduct = intval($_POST['id']);
    up($iduser, $idproduct, $pdo);
}
     
    function up($iduser, $idproduct, $pdo) {
    $req = $pdo->prepare('SELECT id FROM likes WHERE id_product = ? AND id_user = ?');
    $req->execute([
        $idproduct, $iduser]);
      
    $resultat = $req->fetch();
      
    if ($resultat) {
              
        $req3 = $pdo->prepare('DELETE FROM likes WHERE id_product = ? AND id_user = ?');
        $req3->execute([
            $idproduct,
            $iduser
            
        ]);
  
    } else {
          
        $req2 = $pdo->prepare('INSERT INTO likes(id_product, id_user) VALUES (?, ?)');
        // $req2->bindValue(":id_product", $idproduct, PDO::PARAM_INT);
        // $req2->bindValue(":id_user", $iduser, PDO::PARAM_INT);
        $req2->execute([
            $idproduct,
            $iduser
        ]);
          
    }
}