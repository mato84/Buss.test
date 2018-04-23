<?php echo $header; ?>
<div class="container">

  <div class="row"><?php echo $column_left; ?>
    <?php if ($column_left && $column_right) { ?>
    <?php $class = 'col-sm-6'; ?>
    <?php } elseif ($column_left || $column_right) { ?>
    <?php $class = 'col-sm-9'; ?>
    <?php } else { ?>
    <?php $class = 'col-sm-12'; ?>
    <?php } ?>
    <div id="content"><?php echo $content_top; ?>
      <h1><?php echo $heading_title; ?></h1>
      <div class="well">

          <div class="row">

            <div class="contact-block col-sm-3 telephone">
              <h4><?php echo $text_telephone; ?> <i class="fa fa-mobile" aria-hidden="true"></i></h4>
              <a href="tel:+380677661876">+38(067)766-18-76</a>
              <a href="tel:+380637661876">+38(063)766-18-76</a>              
              <a href="tel:+380509833358">+38(050)983-33-58</a>
              <a href="tel:+48223079083">+48(22)307-90-83</a>           
            </div>

            <div class="contact-block col-sm-3">
              <h4>VIBER <img src="../image/catalog/other/viber.png"></h4>
              <a href="tel:+380677661876">+38(067)766-18-76</a>
            </div>

            <div class="contact-block col-sm-3">
              <h4>SKYPE <i class="fa fa-skype" aria-hidden="true"></i></h4> 
               <a href="callto:panbus">PanBus.com.ua</a>
            </div>            

            <div class="contact-block col-sm-3">
              <h4><?php echo $entry_email; ?> <i class="fa fa-envelope" aria-hidden="true"></i></h4>
              <a href="mailto:info@panbus.com.ua">pan_bus@ukr.net</a>
            </div>

          </div>
          <div class="row">
            <?php if ($address) { ?>
            <div class="contact-block col-sm-3">
              <h4><?php echo $text_address; ?></h4>
              <?php echo $address; ?>
            </div>
            <?php } ?>
            
            <?php if ($open) { ?>
            <div class="contact-block col-sm-4">
              <h4><?php echo $text_open; ?></h4>
              <?php echo $open; ?>
            </div>
            <?php } ?>

            <?php if ($comment) { ?>
            <div class="contact-block col-sm-12">
              <h4><?php echo $text_comment; ?></h4>
              <?php echo $comment; ?>
            </div>
            <?php } ?>
          </div>
          
          <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d769.6607011211225!2d25.59646964205896!3d49.54455496600791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473036afd1e00c41%3A0xb92615f1fbdbdf22!2z0J_QkNCd0JHQo9Ch!5e0!3m2!1suk!2sua!4v1524500406468" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <div class="contact-foto">
            <img src="../image/catalog/other/office.jpg" alt="">
          </div>


      </div>


      <?php echo $content_bottom; ?></div>
    <?php echo $column_right; ?></div>
</div>
<?php echo $footer; ?>
