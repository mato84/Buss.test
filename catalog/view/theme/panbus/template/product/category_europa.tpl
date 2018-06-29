<?php echo $header; ?>
<div class="container category-europa">
  <div class="row">
    <div id="content">
    <?php echo $content_top; ?>
<!--       <h1><?php echo $heading_title; ?></h1> -->
<!--       <div class="well"> -->
      <div class="desktop-device">
        <iframe src='https://ws.bussystem.eu/booking?lang=ua&theme=excite-bike&partner=2055&no_akce=1' frameborder='0' marginwidth='0' marginheight='0' width='750px' height='2000px'></iframe>
      </div>
      <div class="search-module mobile-device">
        <script src='https://ws.bussystem.eu/viev/frame/find/external/jquery/jquery.js'></script> 
        <script src='https://ws.bussystem.eu/viev/frame/find/jquery-ui.js'></script> 
        <script src='https://ws.bussystem.eu/viev/frame/find/?lang=ua&fv=6&partner=2055&no_akce=1&only=bus'></script> 
        <div id='infobus'></div>    
      </div>

    
<!--       </div> -->
      <?php echo $content_bottom; ?>
    </div>
  </div>
</div>
<?php echo $footer; ?>
