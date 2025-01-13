<?php 

require_once _ROOTPATH_. '/templates/partial/_header-contact.php';?>

<h1>contact</h1>

<div class="form_contact">
<form action="" method="post">

        
        <input type="text" id="email" name="email" placeholder="Votre email">
       
    
       
        <input type="text" id="objet" name="objet" placeholder="Objet">
        
        
      
        <textarea name="message" id="message" placeholder="Votre Message ..."></textarea>
        
        <input class="brn btn-submit" type="submit" value="Envoyer">
</form>
</div>

 


<?php require_once _ROOTPATH_. '/templates/partial/_footer.php';?>