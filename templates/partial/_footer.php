<ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
    </ul>

    <?php foreach ($horaires as $horaire) { ?>

          <ul class="horaires" >

          <li><strong><?=$horaire->getdate();?></strong></li>
          <?php if($horaire->getHoraires() == '00:00:00' && $horaire->getClose() == '00:00:00') { ?>

            <p style="color:black;"><strong>fermer</strong></p>
          <?php } else { ?>
            <li style="color: black;"><strong>ouvre à</strong></li>
          <li><?=$horaire->getHoraires();?></li>
          <li style="color: black;"><strong>ferme à</strong></li>
          <li><?=$horaire->getClose();?></li>
          <?php } ?>

    </ul>

    <?php }?>
    <script src="/assets/script.js"></script>
</body>
</html>