




<div class="table_habitats">
<?php foreach($habitat as $habitats){ ?>
  
       <div style="display: block;">
       <div class="cards_habitats">
        
        
        </div>
       <div >
       <a style="text-decoration-line: none;" href="?controller=habitats&action=show&id=<?= $habitats->getId_hab();?>"><h2 class="irish-grover-regular title-habitats"><?=$habitats->getName();?></h2></a>
       </div>
       </div>
        
    

    
    
<?php } ?>
</div>
