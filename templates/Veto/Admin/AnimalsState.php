<?php
require_once _ROOTPATH_.'/templates/Admin/Partial/_header.php';
?>
<h3 style="color: red; margin-top:200px;">vue globals des state</h3>
<?php
if(isset($_GET['filtres']) && !isset($_GET['vue'])){

 
  ?>
  <div style="margin-left: 60vw;">
  <?php require_once _ROOTPATH_.'/templates/Partial/_filtername.php'; ?>
  </div>
  <?php

  require_once _ROOTPATH_.'/templates/Partial/_filterdate.php';
  
} else { ?>

  <h3>show rapprt de santé</h3>

<a href="?controller=veto&action=read" class="btn btn-success">retour</a>


   <?php foreach($vue as $vues) { ?>
    <div class="show">
    <h4 style="color: red;"> <?= $vues->getName_animals();?> </h4>
    <p> <?= $vues->getNourriture();?> </p>
    <p> <?= $vues->getQuantitee();?> </p>
    <p> <?= $vues->getState();?> </p>
    <p> <?= $vues->getDetail();?> </p>
    <p> <?= $vues->getDate();?> </p>
   
    </div>

   <?php } ?>

<?php }



require_once _ROOTPATH_.'/templates/Admin/Partial/_footer.php';
?>




