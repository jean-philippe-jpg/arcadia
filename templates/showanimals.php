<?php

require_once _ROOTPATH_.'\templates\partial\_header.php';
?>

<h1>show animals hab</h1>


<?php if(isset($_GET['id'])) { ?>
<a href="?controller=habitats&action=read" class="btn btn-success">retour</a>
<div class="show">

<p><strong>habitat:  </strong><?= $habitat->getName();?></p>
<p><strong>description:  </strong><?= $habitat->getDescription();?></p>

<?php foreach($animals as $animal) { ?>
<a href="?controller=habitats&action=show&detailAnimal=<?= $animal->getId(); ?>"><?= $animal->getName();?></a>
<?php } ?>
</div>  
     

<?php } 
 elseif(isset($_GET['detailAnimal'])) { ?>


<div class="show">
    
      
    <p><strong>Prenom:  </strong><?= $animal->getName(); ?></p>
<p><strong>Race:  </strong><?= $animal->getRace(); ?></p>
<p><strong>etat:  </strong><?= $animal->getState(); ?></p>
<p><strong>detail:  </strong><?= $animal->getDetail(); ?></p>

<?php } ?>

</div>

<?php

require_once _ROOTPATH_.'\templates\partial\_footer.php';

?>