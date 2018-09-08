<div class="widget-connect">
  <a class="widget-connect__button widget-connect__button-telegram button-slide-out " href="https://t.me/PAN_BUS" target="_blank" title="Написати у Telegram" ></a>
  <a class="widget-connect__button widget-connect__button-whatsapp button-slide-out " href="https://api.whatsapp.com/send?phone=380677661876"  target="_blank" title="Написати у WhatsApp" ></a>
  <a class="widget-connect__button widget-connect__button-viber button-slide-out mobile-device" href="viber://chat?number=380677661876"  title="Написати у Viber" ></a>
  <a class="widget-connect__button widget-connect__button-viber button-slide-out desktop-device" href="viber://chat?number=+380677661876"  title="Написати у Viber" ></a>
  <div class="widget-connect__button widget-connect__button-activator" title="Написати у месенджер"></div> 
</div>
<script type="text/javascript">
      $(".widget-connect__button-activator").click(function () {
        $(this).toggleClass("active");
        $(".widget-connect").toggleClass("active");
        $("a.widget-connect__button").toggleClass("button-slide-out button-slide");        
    });
</script>
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
    <a id="coreit" href="https://coreit.com.ua" target="_blank">
      <span>made by</span><img src="image/catalog/other/coreit.svg" alt="">
    </a> 
  </div>
</footer>
</body></html>
