<?php views('partials/header.php'); ?>

<?php


 foreach($users as $user){
  

?>



<li><?php echo $user['user_name'] ?></li>




<?php } ?>


<?php views('partials/footer.php'); ?>