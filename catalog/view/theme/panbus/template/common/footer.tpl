<footer>
  <div class="block-bg-overlay"></div>
  <div class="container">
    <div class="row">
      <?php if ($informations) { ?>
      <div class="col-sm-3">
        <ul class="list-unstyled">
          <?php foreach ($informations as $information) { ?>
          <li><a href="<?php echo $information['href']; ?>"><?php echo $information['title']; ?></a></li>
          <?php } ?>
        </ul>
      </div>
      <?php } ?>
      <div class="col-sm-3">
        <ul class="list-unstyled">
          <li><a href="<?php echo $special; ?>"><?php echo $text_special; ?></a></li>
        </ul>
      </div>
      <div class="col-sm-3">
        <ul class="list-unstyled">
          <li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
        </ul>
      </div>
      <div class="col-sm-3">
        <ul class="list-unstyled">
          <li><a href="<?php echo $contact; ?>"><?php echo $text_contact; ?></a></li>
        </ul>
      </div>
    </div>
    <hr>
    <p class="powered"><?php echo $powered; ?></p>
  </div>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyB79WRG7sgoNE4ksW8S4vw6NOsx20H77_o"></script>
  <script type="text/javascript" src="catalog/view/javascript/gmaps.js"></script>
</footer>

</body></html>