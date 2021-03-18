<?php
    require_once(__DIR__."/../connexion/bdd.php");
?>


<!DOCTYPE html>
<html lang="fr">
<?php include 'head.php'; ?>
<body>
<br><br><br>

<h4>Please sign up</h4>

<?php if (!empty($_GET["message"])) : ?>
        <div style="padding: 10px;background:gray;color:#fff;">
            <?=$_GET["message"]?>
        </div>
<?php endif;?>

<form method="POST" action="/recuperation-donnees/insert_signup.php">
        <div class="mb-3">
            <label for="inputNickname" class="form-label">Nickname</label>
            <input type="text" class="form-control" name="nickname">
            <div class="form-text">Please enter a nickname to register.</div>
        </div>
            <button type="submit" class="btn btn-danger">SIGN UP</button>
</form>
    
</body>
</html>