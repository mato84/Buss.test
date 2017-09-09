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
    <div id="content">
    <div class="choice-block-inmain">
      <div class="choice-block-inmain__title">Чому варто обрати саме нас:</div>
      <div class="choice-block-inmain__box">
        <a class="choice-block-inmain__text" href="">Жодної<br> націнки<br> на квитки</a>
      </div>
      <div class="choice-block-inmain__box">
        <a class="choice-block-inmain__text" href="">Безкоштовне<br> швидке<br> бронювання</a>
      </div>
      <div class="choice-block-inmain__box">
        <a class="choice-block-inmain__text" href="">Знижка 60%<br> на кожну 6-ту<br> поїздку</a>
      </div>
    </div>
    <?php echo $content_top; ?><?php echo $content_bottom; ?></div>
    <?php echo $column_right; ?></div>
</div>
<?php echo $footer; ?>