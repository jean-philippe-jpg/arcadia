<div class="container">
<nav>
<input id="toggle" type="checkbox" checked>
<h2>Animals</h2>
<ul>

<?php foreach($animal as $animals){?>
<li><a href="?controller=admin&action=readadmin&vue=<?= $animals->getId_animals(); ?>"><?= $animals->getName_animals();?></a></li>
<?php } ?>

   
</ul>
</nav>
</div>
