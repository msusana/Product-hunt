<?php
session_start();
require_once("../connexion/bdd.php");
$id=$_POST['id'];
$user=$_SESSION["id"];
$stmt2 = $pdo->prepare("SELECT * FROM product WHERE categories OR `name-product` LIKE :search");
$search="%".$search."%";
$stmt2->bindParam(":search", $search, PDO::PARAM_STR);
$stmt2->execute(); 
$result2 = $stmt2->fetchAll();