<?php echo $header; ?>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyB79WRG7sgoNE4ksW8S4vw6NOsx20H77_o"></script>
  <script type="text/javascript" src="catalog/view/javascript/gmaps.js"></script>
    <script type="text/javascript">
    var map;
    $(document).ready(function(){
      map = new GMaps({
        el: '#map',
        lat:49.233368,
        lng: 28.462079,
        zoom:6
      });
      map.drawRoute({
        origin: [49.988358, 36.232845],
        waypoints: [
          { location: {lat: 47.837250, lng: 35.145111},
            stopover:true
          }
         ],
        strokeColor: '#cd4e37',
        strokeWeight: 5,
        destination: [50.448944, 30.516177],
        travelMode: 'driving',

      });
    });
  </script>
    <div id="map"></div>
<div class="container">
  <div class="row">
    <div id="content">
    <div class="choice-block-inmain">
      <div class="choice-block-inmain__title">Чому варто обрати саме нас:</div>
      <div class="choice-block-inmain__box">
        <a class="choice-block-inmain__text" href="/жодної-націнки-на-квитки">Жодної<br> націнки<br> на квитки</a>
      </div>
      <div class="choice-block-inmain__box">
        <a class="choice-block-inmain__text" href="/безкоштовне-швидке-бронювання">Безкоштовне<br> швидке<br> бронювання</a>
      </div>
      <div class="choice-block-inmain__box">
        <a class="choice-block-inmain__text" href="/щоденні-регулярні-рейси">Щоденні<br> регулярні<br> рейси</a>
      </div>      
      <div class="choice-block-inmain__box">
        <a class="choice-block-inmain__text" href="/знижка-50-відсотків-на-кожну-6-ту-поїздку">Знижка 50%<br> на кожну 6-ту<br> поїздку</a>
      </div>
    </div>
    <?php echo $content_top; ?><?php echo $content_bottom; ?></div>
    <?php echo $column_right; ?></div>
</div>
<?php echo $footer; ?>