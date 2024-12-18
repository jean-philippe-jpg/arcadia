<?php

require_once _ROOTPATH_.'\templates\partial\_header.php';
?>

<h1>show animals hab</h1>


<?php if(isset($_GET['id'])) { ?>
<a href="?controller=habitats&action=read" class="btn btn-success">retour</a>
<div class="show">

<p  style=" font-size:2em; color:brown;" class="irish-grover-regular"><?=  $logement->getName();?></p>
<p style="font-size: 1.3em;"><?= $logement->getDescription();?></p>


<?php foreach($animals as $animal) { ?>
<a class="irish-grover-regular animals-habitat" href="?controller=habitats&action=show&detailAnimal=<?= $animal->getId(); ?>"><strong><?= $animal->getFirstName();?></strong></a>
<?php } ?>
</div>  
     

<?php } 
 elseif(isset($_GET['detailAnimal'])) { ?>


<div class="show">
    


      <img src="/templates/uploads/<?= $logement->getImg()?>" alt="img" >
        <?php  var_dump($logement->getImg())?>
    <p><strong>Prenom:  </strong><?= $logement->getFirstName(); ?></p>
<p><strong>Race:  </strong><?= $logement->getNameRace(); ?></p>
<p><strong>etat:  </strong><?= $logement->getState(); ?></p>
<p><strong>detail:  </strong><?= $logement->getDetail(); ?></p>

<?php } ?>

</div>

<?php

require_once _ROOTPATH_.'\templates\partial\_footer.php';

?>