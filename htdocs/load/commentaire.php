<?php
if (isset($_POST['product_id'])) : 
    require_once(__DIR__."/../connexion/bdd.php");
    $commentaireStatement = $pdo->prepare('SELECT * FROM commentaires 
    JOIN user ON commentaires.user_id = user.id WHERE product_id = ?');
    $commentaireStatement->execute([$_POST['product_id']]);
    $result = $commentaireStatement->fetchAll();?>


                <?php foreach($result as $commentaire) :?>
                    <div class="commentaires" >
                            <?php 
                            $timeparts= explode(":", $commentaire["created_at"]);
                            $timeFormatted =$timeparts[0]. "h" .$timeparts[1];?>
                        <p class="nickname"> <b> <?=$commentaire['nickname']?> </b> </br><b>Post :</b> <?= $timeFormatted ?></p>
                        <p class="commentaire"> <?=$commentaire['text_commentaire']?></p>
                    </div>
                <?php  endforeach;?><?php  endif;?>