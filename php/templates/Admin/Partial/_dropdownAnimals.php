

            <?php if(isset($_GET['soignant'])) {?>

                <div class="container">
     <nav>
      <input id="toggle" type="checkbox" checked>
     <h2>Animals Soignant</h2>
   <ul>

     <?php foreach($animals as $animal){?>
     <li><a href="?controller=rapportsoignant&action=soins&id=<?= $animal->getId_animals() ?>"><?= $animal->getName_animals();?></a></li>
     <?php } ?>
   </ul>
</nav>
</div>
            <?php } else { ?>
                <h3>hello</h3>

<div class="show">

<p><strong>Prenom:  </strong><?= $animals->getName_animals()?></p>
<p><strong>Race:  </strong><?= $animals->getRace()?></p>
<p><strong>Habitat:  </strong><?= $animals->getName()?></p>
<p><strong>Etat:  </strong><?= $animals->getState()?></p>
<?php foreach($details as $detail) { ?>
<p><strong>Nourriture:  </strong><?= $detail->getNourriture()?></p>
<p><strong>Quantitee:  </strong><?= $detail->getQuantitee()?></p>
<p><strong>Date:  </strong><?= $detail->getDate_heure()?></p>
</div>
           <?php } ?>
<?php } ?>
