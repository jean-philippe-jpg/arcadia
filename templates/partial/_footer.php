<ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
    </ul>

    
<?php foreach($horaires as $horaire) { ?>

          <ul style="list-style: none;">
            <li ><?= $horaire->getJour() ?></li>
            <li><?= $horaire->getOuverture() ?></li>
            <li><?= $horaire->getFermeture() ?></li>
          </ul>

        <?php } ?>

    <script src="/assets/script.js"></script>
</body>
</html>