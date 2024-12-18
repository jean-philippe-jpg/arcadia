<?php
require_once _ROOTPATH_.'/templates/Admin/Partial/_header.php';
?>

<h1>Horaires</h1>

<?php if(!isset($_GET['modify']) ) {  ?>

<table class="table">
<a href="?controller=horaires&action=create" class="btn ">ajouter</a>
<?php
require_once _ROOTPATH_.'/templates/Admin/Partial/_btnadmin.php';
?>

    <thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">date</th>
    <th scope="col">ouverture</th>
    <th scope="col">fermeture</th>
   
    </tr>
    </thead>

    <tbody>
   
      <?php
      

      foreach($read as $reads) { ?>
        
      <tr>
          <td><?= $reads->getId(); ?></td>
          <td><?= $reads->getDate();?></td>
          <td><?= $reads->getHoraires();?></td>
          <td><?= $reads->getClose();?></td>
          
          <td><a href="?controller=horaires&action=update&modify=<?= $reads->getId(); ?>" class="btn ">update</a></td>
          
          <td><a href="?controller=horaires&action=delete&id=<?= $reads->getId(); ?>" class="btn ">delete</a></td>
      </tr>
        <?php } ?>
        <a href="index.php" class="btn btn-danger">home</a>
        <?php } else { ?>


            <h4>hello gégé</h4>
        <form action="" method="post">
            
            <label for="ouverture">ouverture</label>
            <input type="time" name="ouverture" id="ouverture"  />
            <label for="fermeture">ouverture</label>
            <input type="time" name="fermeture" id="fermeture" />
            
            <input type="submit" class="btn "  />

            <a href="?controller=horaires&action=read" class="btn ">annuler</a>
        </form>
        
        <?php } ?>
        
    </tbody>
    
</table>


<?php
require_once _ROOTPATH_.'/templates/Admin/Partial/_footer.php';
?>




