<?php require_once _ROOTPATH_.'/templates/Admin/Partial/_header.php'?>

<h1>show</h1>

<a href="index.php?controller=animals&action=read" class="btn btn-success">retour</a>
<div class="show">

<p><strong>Prenom:  </strong><?= $animals->getName_animals();?></p>
<p><strong>Race:  </strong><?= $animals->getRace();?></p>

</div>



<?php
require_once _ROOTPATH_.'/templates/Admin/Partial/_footer.php';

?>