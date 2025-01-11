<?php
require_once _ROOTPATH_.'/templates/Admin/Partial/_header.php';
?>

<h1>show avis habitat</h1>


<?php if(!isset($_GET['create']) && !isset($_GET['avis'])) { 
 require_once _ROOTPATH_.'/templates/Admin/Partial/_dropdownHabitats.php';

  } elseif (!isset($_GET['avis']))  { ?>
        <h3>create avis home</h3>

       
      <form action="" method="post">
        <div>
        <label for="avis">Avis</label>
        <input type="text" name="avis" id="avis">
        </div>
        <div>
        <label for="etat">Etat</label>
        <input type="text" name="etat" id="etat">
        </div>
        <div>
        <label for="habitat_id">Habitat</label>
        <input type="number"  name="habitat_id" id="habitat_id">
        </div>
        
        <button type="submit">envoyer</button>
 <?php } ?>

    <?php if(isset($_GET['avis'])) { ?>
 <h1>vue des avis</h1>
    

 <?php foreach($avishabitat as $avis) { ?>

  <div class="avis">
  
          <td><?= $avis->getAvis_id();?></td>
          <td><?= $avis->getAvis_hab();?></td>
          <td><?= $avis->getEtat();?></td>
          <td><?= $avis->getName();?></td>
    
  </div>

  <?php } ?>

<?php } ?>
<?php
require_once _ROOTPATH_.'/templates/Admin/Partial/_footer.php';
?>




