<?php
//require_once './bdd/connexion.php';
require_once './templates/partial/_header.php';
?>
<h3>Affichage des services</h3>
<div class="view_services">
<?php foreach($service as $services) { ?>
    
    <div>
    <b class="irish-grover-regular" style="font-size:1.5em; color:brown;"><?=$services->getName();?></b>
    <p><?=$services->getDescription();?></p> 

    </div>
    
<?php }?>
</div>
<?php
require_once './templates/partial/_footer.php';
?>