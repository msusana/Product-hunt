<?php 
require_once("connexion/bdd.php");

$stmt = $pdo->prepare("SELECT * FROM product");
$stmt->execute(); 
$result1 = $stmt->fetchAll();

if ($stmt->rowCount() == 0) { ?>
    <script src=
    <?php }