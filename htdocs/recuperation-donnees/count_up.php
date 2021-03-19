<?php 
 $stmt = $pdo->prepare("SELECT COUNT(*) AS like_nb FROM likes WHERE id_product = ?");
 $stmt->execute([($idproduct)]); 
 $result = $stmt->fetch(PDO::FETCH_ASSOC);
 echo '<p>'.$result['like_nb']. '</p>';
 ?>