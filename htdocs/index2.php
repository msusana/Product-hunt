<?php
session_start();
var_dump($_SESSION['id']);
include 'structure-page/head.php'; ?>
<body>
<?php if (!empty($_GET["message"])) : ?>
        <div style="padding: 10px;background:gray;color:#fff;">
            <?=$_GET["message"]?>
        </div>
<?php endif;?>
<div id='result'></div>
<div id='techs'><?php include 'categories/home.php'; ?> </div>
<div class='container'>
    <div id='affichage'>
        <?php include 'recuperation-donnees/affichage.php'; ?>
    </div>
</div>
</body>


<?php include 'structure-page/footer.php'; ?>
</html>