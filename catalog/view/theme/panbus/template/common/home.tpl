<?php echo $header; ?>
    <script type="text/javascript">
    var map;
    var image = '../image/catalog/other/marker.png';
    $(document).ready(function(){
      map = new GMaps({
        el: '#map',
        lat:50.533368,
        lng: 25.462079,
        zoom:6
      });

      map.drawRoute({
        origin: [46.635417, 32.61686699999996],
        waypoints: [
          { location: {lat: 46.975033, lng: 31.994582899999955 },
            stopover:true
          },
          { location: {lat: 46.975033, lng: 31.994582899999955 },
            stopover:true
          },
          { location: {lat: 47.5605, lng: 31.33611700000006 },
            stopover:true
          },
          { location: {lat: 47.8227621, lng: 31.18408260000001 },
            stopover:true
          },
          { location: {lat: 48.04512510000001, lng: 30.888431500000024 },
            stopover:true
          },          
          { location: {lat: 48.7699292, lng: 30.215440599999965 },
            stopover:true
          },
          { location: {lat: 49.233083, lng: 28.468216900000016 },
            stopover:true
          },
          { location: {lat: 49.422983, lng: 26.987133099999937 },
            stopover:true
          },
          { location: {lat: 49.553517, lng: 25.594767000000047 },
            stopover:true
          },
          { location: {lat: 49.839683, lng: 24.029717000000005 },
            stopover:true
          },
          { location: {lat: 50.0411867, lng: 21.999119599999972 },
            stopover:true
          },
          { location: {lat: 50.06465009999999, lng: 19.94497990000002 },
            stopover:true
          },
          { location: {lat: 50.26489189999999, lng: 19.02378150000004 },
            stopover:true
          },
          { location: {lat: 50.6751067, lng: 17.921297600000003 },
            stopover:true
          },
          { location: {lat: 51.1078852, lng: 17.03853760000004
          // title: 'Вроцлав',
          },
            stopover:true
          },         

          { location: {lat: 51.2070067, lng: 16.155323100000032 },
            stopover:true
          },
          { location: {lat: 51.39772199999999, lng: 16.20957880000003 },
            stopover:true
          },
          { location: {lat: 51.80344, lng: 15.717070000000035 },
            stopover:true
          },
          { location: {lat: 51.9356214, lng: 15.506186200000002 },
            stopover:true
          },
          { location: {lat: 52.2472962, lng: 15.53357219999998 },
            stopover:true
          },
          { location: {lat: 52.7325285, lng: 15.236930499999971 },
            stopover:true
          },          

         ],
        strokeColor: '#cd4e37',
        strokeWeight: 3,
        destination: [53.428428, 14.546820],
        travelMode: 'driving',

      });


      map.drawRoute({
        origin: [51.1078852, 17.03853760000004],
        waypoints: [

          { location: {lat: 51.8419861, lng: 16.593754499999932 },
            stopover:true
          },

          { location: {lat: 52.406374, lng: 16.925168100000064 },
            stopover:true
          },          

         ],
        strokeColor: '#cd4e37',
        strokeWeight: 3,
        destination: [52.2472962, 15.53357219999998],
        travelMode: 'driving',

      });

      map.drawRoute({
        origin: [49.839683, 24.029717000000005],
        waypoints: [

          { location: {lat: 50.7230879, lng: 23.251968499999975 },
            stopover:true
          },
          { location: {lat: 51.2464536, lng: 22.568446300000005 },
            stopover:true
          },
          { location: {lat: 52.0811536, lng: 21.023860199999945 },
            stopover:true
          },
          { location: {lat: 52.2296756, lng: 21.012228700000037 },
            stopover:true
          },
          { location: {lat: 51.7592485, lng: 19.45598330000007 },
            stopover:true
          },
          { location: {lat: 52.230618, lng: 19.364278000000013 },
            stopover:true
          },
          { location: {lat: 52.6483303, lng: 19.067735699999957 },
            stopover:true
          },
          { location: {lat: 53.0137902, lng: 18.59844369999996 },
            stopover:true
          },
          { location: {lat: 53.12348040000001, lng: 18.008437800000024 },
            stopover:true
          },
          { location: {lat: 53.4837486, lng: 18.753564900000015 },
            stopover:true
          },
          { location: {lat: 54.35202520000001, lng: 18.64663840000003 },
            stopover:true
          },
          { location: {lat: 54.5188898, lng: 18.530540900000005 },
            stopover:true
          },

         ],
        strokeColor: '#cd4e37',
        strokeWeight: 3,
        destination: [54.46414799999999, 17.02848240000003],
        travelMode: 'driving',

      });

      // map.drawRoute({
      //   origin: [49.9935, 36.230383000000074],
      //   waypoints: [

      //     { location: {lat: 49.58826699999999, lng: 34.55141690000005 },
      //       stopover:true
      //     },
      //     { location: {lat: 50.4501, lng: 30.523400000000038 },
      //       stopover:true
      //     },
      //     { location: {lat: 50.25465, lng: 28.65866690000007 },
      //       stopover:true
      //     },
      //     { location: {lat: 50.6199, lng: 26.25161700000001 },
      //       stopover:true
      //     },
      //     { location: {lat: 50.74723299999999, lng: 25.325382999999988 },
      //       stopover:true
      //     },
      //     { location: {lat: 51.2464536, lng: 22.568446300000005 },
      //       stopover:true
      //     },
      //     { location: {lat: 52.2296756, lng: 21.012228700000037 },
      //       stopover:true
      //     },
      //     { location: {lat: 52.6230132, lng: 20.375358900000037 },
      //       stopover:true
      //     },
      //     { location: {lat: 53.69630069999999, lng: 19.964795200000026 },
      //       stopover:true
      //     },
      //     { location: {lat: 54.1560613, lng: 19.4044897 },
      //       stopover:true
      //     },
      //     { location: {lat: 54.35202520000001, lng: 18.64663840000003 },
      //       stopover:true
      //     },

      //    ],
      //   strokeColor: '#cd4e37',
      //   strokeWeight: 3,
      //   destination: [54.35202520000001, 18.64663840000003,],
      //   travelMode: 'driving',

      // });


      map.addMarkers([
        // {
        //   lat: 49.9935,
        //   lng: 36.230383000000074,
        //   title: 'Харків',
        //   icon: image,},
        // {
        //   lat: 49.58826699999999,
        //   lng: 34.55141690000005,
        //   title: 'Полтава',
        //   icon: image,},
        // {
        //   lat: 50.4501,
        //   lng: 30.523400000000038,
        //   title: 'Київ',
        //   icon: image,},
        // {
        //   lat: 50.25465,
        //   lng: 28.65866690000007,
        //   title: 'Житомир',
        //   icon: image,},
        // {
        //   lat: 50.6199,
        //   lng: 26.25161700000001,
        //   title: 'Рівне',
        //   icon: image,},
        // {
        //   lat: 50.74723299999999,
        //   lng: 25.325382999999988,
        //   title: 'Луцьк',
        //   icon: image,},
        {
          lat: 46.635417,
          lng: 32.61686699999996,
          title: 'Херсон',
          icon: image,},
        {
          lat: 46.975033,
          lng: 31.994582899999955,
          title: 'Миколаїв',
          icon: image,},
        {
          lat: 47.5605,
          lng: 31.33611700000006,
          title: 'Вознесенськ',
          icon: image,},
        {
          lat: 47.8227621,
          lng: 31.18408260000001,
          title: 'Южноукраїнськ',
          icon: image,},
        {
          lat: 48.04512510000001,
          lng: 30.888431500000024,
          title: 'Первомайськ',
          icon: image,},
        {
          lat: 48.7699292,
          lng: 30.215440599999965,
          title: 'Умань',
          icon: image,},
        {
          lat: 49.233083,
          lng: 28.468216900000016,
          title: 'Вінниця',
          icon: image,},
        {
          lat: 49.422983,
          lng: 26.987133099999937,
          title: 'Хмельницький',
          icon: image,},          
        {
          lat: 49.553517,
          lng: 25.594767000000047,
          title: 'Тернопіль',
          icon: image,},
        {
          lat: 49.839683,
          lng: 24.029717000000005,
          title: 'Львів',
          icon: image,},        
        // {
        //   lat: 52.6230132,
        //   lng: 20.375358900000037,
        //   title: 'Плонськ',
        //   icon: image,},
        // {
        //   lat: 53.69630069999999,
        //   lng: 19.964795200000026,
        //   title: 'Оструда',
        //   icon: image,},
        // {
        //   lat: 54.1560613,
        //   lng: 19.4044897,
        //   title: 'Ельблонг',
        //   icon: image,},       
        {
          lat: 50.0411867,
          lng: 21.999119599999972,
          title: 'Жешув',
          icon: image,},
        {
          lat: 50.06465009999999,
          lng: 19.94497990000002,
          title: 'Краків',
          icon: image,},
        {
          lat: 50.26489189999999,
          lng: 19.02378150000004,
          title: 'Катовіце',
          icon: image,},
        {
          lat: 50.6751067,
          lng: 17.921297600000003,
          title: 'Ополе',
          icon: image,},
        {
          lat: 51.1078852,
          lng: 17.03853760000004,
          title: 'Вроцлав',
          icon: image,},
        {
          lat: 51.2070067,
          lng: 16.155323100000032,
          title: 'Легниця',
          icon: image,},          
        {
          lat: 51.8419861,
          lng: 16.593754499999932,
          title: 'Лешно',
          icon: image,},
        {
          lat: 52.406374,
          lng: 16.925168100000064,
          title: 'Познань',
          icon: image,},
        {
          lat: 51.39772199999999,
          lng: 16.20957880000003,
          title: 'Любін',
          icon: image,},
        {
          lat: 51.80344,
          lng: 15.717070000000035,
          title: 'Нова Суль',
          icon: image,},
        {
          lat: 51.9356214,
          lng: 15.506186200000002,
          title: 'Зелена Гура',
          icon: image,},
        {
          lat: 52.2472962,
          lng: 15.53357219999998,
          title: 'Свебодзін',
          icon: image,},
        {
          lat: 52.7325285,
          lng: 15.236930499999971,
          title: 'Гожув-Велькопольський',
          icon: image,},
        {
          lat: 53.4285438,
          lng: 14.552811600000041,
          title: 'Щецин',
          icon: image,},
        {
          lat: 50.7230879,
          lng: 23.251968499999975,
          title: 'Замосць',
          icon: image,},
        {
          lat: 51.2464536,
          lng: 22.568446300000005,
          title: 'Люблін',
          icon: image,},          
        {
          lat: 52.0811536,
          lng: 21.023860199999945,
          title: 'Пясочне',
          icon: image,},
        {
          lat: 52.2296756,
          lng: 21.012228700000037,
          title: 'Варшава',
          icon: image,},
        {
          lat: 51.7592485,
          lng: 19.45598330000007,
          title: 'Лодзь',
          icon: image,},
        {
          lat: 52.230618,
          lng: 19.364278000000013,
          title: 'Кутно',
          icon: image,},          
        {
          lat: 52.6483303,
          lng: 19.067735699999957,
          title: 'Вроцлавек',
          icon: image,},
        {
          lat: 53.0137902,
          lng: 18.59844369999996,
          title: 'Торунь',
          icon: image,},          
        {
          lat: 53.12348040000001,
          lng: 18.008437800000024,
          title: 'Бидгощ',
          icon: image,},
        {
          lat: 53.4837486,
          lng: 18.753564900000015,
          title: 'Грудзендз',
          icon: image,},          
        {
          lat: 54.35202520000001,
          lng: 18.64663840000003,
          title: 'Гданськ',
          icon: image,},
        {
          lat: 54.5188898,
          lng: 18.530540900000005,
          title: 'Гдиня',
          icon: image,},          
        {
          lat: 54.46414799999999,
          lng: 17.02848240000003,
          title: 'Слупськ',
          icon: image,},

      ]);

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
        <a class="choice-block-inmain__text" href="/постійна-система-знижок">Постійна<br> система<br> знижок</a>
      </div>
    </div>
    <?php echo $content_top; ?><?php echo $content_bottom; ?></div>
    <?php echo $column_right; ?></div>
</div>
<?php echo $footer; ?>