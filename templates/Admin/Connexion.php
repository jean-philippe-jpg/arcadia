<?php
/*if (!isset( $_SESSION['roles'] )) { 

	echo '<h1 style="color:purple;  text-align: center; margin-top: 30vh;">vous n\'avez pas l\'acces à cette page  :/</h1>';
  
  
 } else { */


require_once _ROOTPATH_.'/templates/Admin/Partial/_header.php';

?>
  

<h1>Connexion</h1>
<a href="?controller=users&action=connect" class="btn btn-danger">profil</a>
<a href="index.php" class="btn btn-danger">home</a>

<a href="https://front.codes/" class="logo" target="_blank">
		<img src="https://assets.codepen.io/1462889/fcy.png" alt="">
	</a>

	<form action="" method="post">
  <ul>
    
    <li>
      <label for="email">E-mail&nbsp;:</label>
      <input type="email" id="email" name="email" />
    </li>
    <li>
      <label for="password">Password&nbsp;:</label>
      <input id="text" name="password"></input>
    </li>
  </ul>

    <input type="submit" value="Envoyer" />
</form>

<?php
require_once _ROOTPATH_.'/templates/Admin/Partial/_acces.php';

?>



