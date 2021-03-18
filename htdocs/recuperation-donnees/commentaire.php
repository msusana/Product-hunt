<?php

if (isset($_POST['user_id']) && isset($_POST['product_id'])&& isset($_POST['message'])){
    require_once("../connexion/bdd.php");
    $idproduct=$_POST['product_id'];
    $commentaire = $_POST['message']; 
    $iduser = $_POST['user_id'];
    
 
    $stmt = $pdo->prepare(
            'INSERT INTO commentaires
            (user_id, product_id, text_commentaire)
            VALUES
            (?, ?, ?);
            ');
            
            $stmt->execute([ 
            $iduser,
            $idproduct,
            $commentaire
            ]);
    }; 