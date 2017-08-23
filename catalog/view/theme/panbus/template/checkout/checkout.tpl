<?php echo $header; ?>
<div class="container">
  <?php if ($error_warning) { ?>
  <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
  </div>
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
      <h1><?php echo $heading_title; ?></h1>
      <div class="well">
      <?php if (!isset($redirect)) { ?>
        <div id="guest-data">
          <div class="form-group required">
            <label class="control-label" for="input-payment-lastname"><?php echo $entry_lastname; ?></label>
            <input type="text" name="lastname" value="<?php echo $lastname; ?>" placeholder="<?php echo $entry_lastname; ?>" id="input-payment-lastname" class="form-control" />
          </div>
          <div class="form-group required">
            <label class="control-label" for="input-payment-firstname"><?php echo $entry_firstname; ?></label>
            <input type="text" name="firstname" value="<?php echo $firstname; ?>" placeholder="<?php echo $entry_firstname; ?>" id="input-payment-firstname" class="form-control" />
          </div>
          <div class="form-group required">
            <label class="control-label" for="input-payment-email"><?php echo $entry_email; ?></label>
            <input type="text" name="email" value="<?php echo $email; ?>" placeholder="<?php echo $entry_email; ?>" id="input-payment-email" class="form-control" />
          </div>
          <div class="form-group required">
            <label class="control-label" for="input-payment-telephone"><?php echo $entry_telephone; ?></label>
            <input type="text" name="telephone" value="<?php echo $telephone; ?>" placeholder="<?php echo $entry_telephone; ?>" id="input-payment-telephone" class="form-control" />
          </div>
        </div>
        <?php if ($logged) { ?>
           <div id="passengers">
            <label class="control-label" for="passengers-list"><?php echo $entry_passengers; ?></label>
            <textarea name="comment" rows="8" id="passengers-list" class="form-control"><?php echo $comment; ?></textarea>
          </div>
        <?php } ?>
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <td class="text-left"><?php echo $column_name; ?></td>
              <td class="text-right"><?php echo $column_quantity; ?></td>
              <td class="text-right"><?php echo $column_price; ?></td>
              <td class="text-right"><?php echo $column_total; ?></td>
              <td class="text-right"></td>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($products as $product) { ?>
            <tr>
              <td class="text-left">
              <div class="ticket">
                <a class="ticket-img" href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php  echo strip_tags($product['name']); ?>" title="<?php echo strip_tags($product['name']); ?>" /></a>
                <div class="ticket-info">
                  <a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a>
                  <?php foreach ($product['option'] as $option) { ?>
                  <br />
                  &nbsp;<small> - <?php echo $option['name']; ?> <b><?php echo $option['value']; ?></b></small>
                  <?php } ?><br>
                  &nbsp;<small> - <?php echo $column_departure_time; ?> <b><?php echo $product['departure_time']; ?></b></small><br>
                  &nbsp;<small> - <?php echo $column_departure_from; ?> <b><?php echo $product['departure_from']; ?></b></small><br>
                  &nbsp;<small> - <?php echo $column_arrival_time; ?> <b><?php echo $product['arrival_time']; ?></b></small><br>                  
                  &nbsp;<small> - <?php echo $column_departure_to; ?> <b><?php echo $product['departure_to']; ?></b></small>
                  <?php if($product['recurring']) { ?>
                  <br />
                  <span class="label label-info"><?php echo $text_recurring_item; ?></span> <small><?php echo $product['recurring']; ?></small>
                  <?php } ?>
                </div>
              </div>
              </td>
              <td class="text-right"><?php echo $product['quantity']; ?></td>
              <td class="text-right"><?php echo $product['price']; ?></td>
              <td class="text-right"><?php echo $product['total']; ?></td>
              <td class="text-center">
                <a class="btn btn-default" data-toggle="tooltip" name = "remove" id="<?php echo $product['cart_id']; ?>" href="#" title="<?php echo $button_remove; ?>"><i class="fa fa-times-circle"></i></a>
              </td>
            </tr>
            <?php } ?>
            <?php foreach ($vouchers as $voucher) { ?>
            <tr>
              <td class="text-left"><?php echo $voucher['description']; ?></td>
              <td class="text-left"></td>
              <td class="text-right">1</td>
              <td class="text-right"><?php echo $voucher['amount']; ?></td>
              <td class="text-right"><?php echo $voucher['amount']; ?></td>
            </tr>
            <?php } ?>
          </tbody>
          <tfoot>
            <?php foreach ($totals as $total) { ?>
            <tr>
              <td colspan="3" class="text-right"></td>
              <td colspan="2"class="text-right"><strong><?php echo $total['title']; ?>: <?php echo $total['text']; ?></strong></td>
            </tr>
            <?php } ?>
          </tfoot>
        </table>
      </div>
      <?php echo $payment; ?>
      <?php } else { ?>
      <script type="text/javascript"><!--
      location = '<?php echo $redirect; ?>';
      //--></script>
      <?php } ?>
      <?php echo $content_bottom; ?>
        </div>
      </div>
    <?php echo $column_right; ?>
    </div>
</div>
<?php echo $footer; ?>
<script type="text/javascript">
$('a[name=\'remove\']').on('click',function(event){
  event.preventDefault();
  $.ajax({
    url: 'index.php?route=checkout/cart/remove',
    type: 'post',
    data: 'key=' + this.id,
    dataType: 'json',
    success: function(json) {
      location = 'index.php?route=checkout/checkout';
    },
    error: function(xhr, ajaxOptions, thrownError) {
      alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
    }
  })
})
</script>
