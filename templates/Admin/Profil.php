
<h3>page profil</h3>

<?php 

if(!isset($_GET['deconnexion'])){
   
session_start();

$username = $_SESSION['username'];

require_once _ROOTPATH_.'/templates/Admin/Partial/_header.php';
?>
   
      <?php if(isset($_SESSION['username']) AND $_SESSION['gégé'] == true ) { ?>
    <h4><?= $username ?></h4>
    
            <a class="btn" href="?controller=veto&action=read">rapport animaux</a>  
            <a href="?controller=profil&action=user&deconnexion"><i class="btn fa fa-power-off mt-2 fa-2x">deconnexion</i></a>
       
<?php } if (isset($_SESSION['username']) AND $_SESSION['romain'] == true ) { ?>
    <h4><?= $username ?></h4>

    <a href="#"><i class="btn fa fa-power-off mt-2 fa-2x">horaires</i></a>
    <a href="?controller=services&action=read"><i class="btn fa fa-power-off mt-2 fa-2x">services</i></a>
    <a href="?controller=habitats&action=read"><i class="btn fa fa-power-off mt-2 fa-2x">habitats</i></a>
    <a href="?controller=animals&action=read"><i class="btn fa fa-power-off mt-2 fa-2x">animaux</i></a>
    <a href="?controller=profil&action=user&deconnexion"><i class="btn fa fa-power-off mt-2 fa-2x">deconnexion</i></a>
        
<?php } if (isset($_SESSION['username']) && $_SESSION['jeanjean'] == true){ ?>
    <h4><?= $username ?></h4>
    <a href="?controller=comments&action=read"><i class="btn fa fa-power-off mt-2 fa-2x">commentaire</i></a>
    <a href="?controller=services&action=read"><i class="btn fa fa-power-off mt-2 fa-2x">services</i></a>
    <a href="?controller=rapportsoignant&action=soins"><i class="btn fa fa-power-off mt-2 fa-2x">soins</i></a>
<a href="?controller=profil&action=user&deconnexion"><i class="btn fa fa-power-off mt-2 fa-2x">deconnexion</i></a>
<?php }

require_once _ROOTPATH_.'/templates/Admin/Partial/_footer.php';
}
else {

    session_start();
    $_SESSION = array();
    session_destroy();
    header('location:index.php');
    echo 'deconnecter';
}
