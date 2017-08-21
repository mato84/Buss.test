<?php echo $header; ?>
<div class="container">
  <?php if ($success) { ?>
  <div class="alert alert-success"><i class="fa fa-check-circle"></i> <?php echo $success; ?></div>
  <?php } ?>
  <div class="row"><?php echo $column_left; ?>
    <?php if ($column_left && $column_right) { ?>
    <?php $class = 'col-sm-6'; ?>
    <?php } elseif ($column_left || $column_right) { ?>
    <?php $class = 'col-sm-9'; ?>
    <?php } else { ?>
    <?php $class = 'col-sm-12'; ?>
    <?php } ?>
    <div id="content"><?php echo $content_top; ?>
        <h1><?php echo $text_my_account; ?></h1>
      <div class="well">
        <ul class="list-unstyled">
          <li><a class="btn btn-default" href="<?php echo $edit; ?>"><?php echo $text_edit; ?></a></li>
          <li><a class="btn btn-default" href="<?php echo $password; ?>"><?php echo $text_password; ?></a></li>
          <li><a class="btn btn-default" href="<?php echo $order; ?>"><?php echo $text_order; ?></a></li>
          <li><a class="btn btn-default" href="<?php echo $checkout; ?>"><?php echo $text_unfinished_order; ?></a></li>
          <li><a class="btn btn-default" href="<?php echo $logout; ?>"><?php echo $text_logout; ?></a></li>
        </ul>
      </div>
      <?php echo $content_bottom; ?></div>
    <?php echo $column_right; ?></div>
</div>
<?php echo $footer; ?> 