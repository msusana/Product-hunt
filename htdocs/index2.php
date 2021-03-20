<?php
session_start();
include 'structure-page/head.php'; ?>
<body>
<?php if (!empty($_GET["message"])) : ?>
        <div style="padding: 10px;background:gray;color:#fff;">
            <?=$_GET["message"]?>
        </div>
<?php endif;?>

<div class='selection'>
<button class='tech' id='tech' onclick="tech();">Tech</button>
<button class='home' id='home' onclick="home();">HOME</button>
<button class='web' id='WEB APP' onclick="web();">WEB APP</button>
<button class='comics' id='COMICS AND GRAPHI' onclick="comics();">COMICS</button>
</div>

<div id='techs'></div>
<div class='container'>
    <div class='row'>
        <div class='col-sm-3 col-md-10 '>
            <div id='affichage'>
                <?php include 'recuperation-donnees/affichage.php'; ?>
            </div>
        </div>
        <div class='col-sm-2 col-md-2 '>
            <div id='result'></div>   
        </div>
    </div>
</div>
</body>


<?php include 'structure-page/footer.php'; ?>
</html>