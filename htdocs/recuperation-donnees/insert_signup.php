<?php 

require_once(__DIR__."/../connexion/bdd.php");


if (empty($_POST["nickname"])){
    die("Paramètre manquant.");
}


$nickname = $_POST["nickname"];

if (isset($nickname)){
    $insertStatement = $pdo->prepare("SELECT * FROM user WHERE nickname=:nickname");
    $insertStatement->bindParam("nickname", $nickname, PDO::PARAM_STR);
    $insertStatement->execute(); 

        if ($insertStatement->rowCount() > 0) {
             header('Location: ../structure-page/login.php?message=you are register');
        }
        else{
            
            $insertStatement =$pdo->prepare(
            "INSERT INTO user
            (nickname)
            VALUE
            (?)
            ");

            $insertStatement->execute([

            $nickname
            ]);
            
            header('Location: ../structure-page/login.php?message=you are register');
        }
            
}