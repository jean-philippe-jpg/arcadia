<?php 
session_start();
//$username = $_SESSION['username'];

require_once _ROOTPATH_.'/templates/Admin/Partial/_header.php' ?>

<h1>soins animals</h1>

<?php if(isset($_GET['soignant'])){ 

    echo '<h3 style="color: red;">dropdown animals soignant</h3>';
        require_once _ROOTPATH_.'/templates/Admin/Partial/_dropdownAnimals.php';

} else { ?>
<a href="index.php?controller=animals&action=read" class="btn btn-success">retour</a>
<div class="show">

<p><strong>Prenom:  </strong><?= $soin->getFirstName()?></p>
<p><strong>Race:  </strong><?= $soin->getNameRace()?></p>
<p><strong>Habitat:  </strong><?= $soin->getHabitat()?></p>


</div>

<div class="form-create">
<form action="" method="post">

    <div class="create">
    <label for="nourriture"><strong>Nourriture: </strong></label>
    <input name="nourriture" id="nourriture" type="text">
    </div>
    <div class="create">
    <label for="quantitee"><strong>Quantitée:</strong> </label>
    <input name="quantitee" id="quantitee" type="number">
    </div>
    <div class="create">
    <label for="date_heure"><strong>Date et Heure:</strong> </label>
    <input name="date_heure" value="2024-06-25"  id="date_heure" type="datetime">
    </div>
   

    <div class="create">
    
    <input style="visibility: hidden;" name="animal" value="<?= $soin->getId();?>"  id="animal" type="number">
    </div>

    <input type="submit"  value="create">

   

    
</form>
  

</div>

<?php 

 /*echo $username ;
        if(isset($_SESSION['username']) && $_SESSION['romain'] == true) { ?>

                <a class="btn" href="?controller=users&action=profil">mon compte</a>
            



       <?php } else {

echo '<br>';
echo 'fonction non autorisé';
       }?>



<?php }*/
}
?>
