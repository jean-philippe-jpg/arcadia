<?php

require_once _ROOTPATH_.'/templates/Admin/Partial/_header.php';
?>
<h1>create</h1>
<a href="?controller=habitats&action=read" class="btn btn-success">retour</a>

<div class="form-create">
<form action="" method="post">

    <div class="create">
    <label for="name"><strong>nom: </strong></label>
    <input name="name" id="name" type="text">
    </div>
    
    <div class="create">
    <label for="description"><strong>description:</strong> </label>
    <input name="description" id="description" type="text">
    </div>

    <div class="create">
    <label for="animaux"><strong>animaux:</strong> </label>
    <input name="animals_list" id="animaux" type="text">
    </div>
    <div class="create">
    <label for="state"><strong>état:</strong> </label>
    <input name="state" id="state" type="number">
    </div>

    <input type="submit" name="insert" value="create">

    <div style="margin-top:10px;">
        <form enctype="multipart/form-data" action="#" method="post">
                         <input type="hidden" name="MAX_FILE_SIZE" value="250000" />
                         <input type="file" name="fic" size=50 />
                         <input type="submit" value="Envoyer" />
                      </form></div>
    
</div>

               
<?php
require_once _ROOTPATH_.'/templates/Admin/Partial/_footer.php';
?>




