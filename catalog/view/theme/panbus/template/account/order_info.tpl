<?php echo $header; ?>
<div class="container">
  <?php if ($success) { ?>
  <div class="alert alert-success"><i class="fa fa-check-circle"></i> <?php echo $success; ?>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
  </div>
  <?php } ?>
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
      <h2><?php echo $heading_title; ?></h2>
      <div class="well">
        <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <td class="text-left" colspan="2"><?php echo $text_order_detail; ?></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-left" style="width: 50%;"><?php if ($invoice_no) { ?>
                  <b><?php echo $text_invoice_no; ?></b> <?php echo $invoice_no; ?><br />
                  <?php } ?>
                  <b><?php echo $text_order_id; ?></b> #<?php echo $order_id; ?><br />
                  <b><?php echo $text_date_added; ?></b> <?php echo $date_added; ?></td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <td class="text-left"><?php echo $column_name; ?></td>
                <td class="text-right"><?php echo $column_quantity; ?></td>
                <td class="text-right"><?php echo $column_price; ?></td>
                <td class="text-right"><?php echo $column_total; ?></td>
                <?php if ($products) { ?>
                <?php } ?>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($products as $product) { ?>
              <tr>
                <td class="text-left"><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a>
                  <?php foreach ($product['option'] as $option) { ?>
                  <br />
                  &nbsp;<small>  <?php echo $option['name']; ?> <?php echo $option['value']; ?></small>
                  <?php } ?><br>
                  &nbsp;<small>  <?php echo $text_departure; ?> <?php echo $product['departure_time']; ?> <?php echo $product['departure_from']; ?></small><br>                 
                  &nbsp;<small>  <?php echo $text_arrival; ?> <?php echo $product['arrival_time']; ?> <?php echo $product['departure_to']; ?></small><br>
                  &nbsp;<small>  <?php echo $text_time_road; ?> <?php echo $product['time_road']; ?></small><br>
                </td>
                <td class="text-right"><?php echo $product['quantity']; ?></td>
                <td class="text-right"><?php echo $product['price']; ?></td>
                <td class="text-right"><?php echo $product['total']; ?></td>
              </tr>
              <?php } ?>
              <?php foreach ($vouchers as $voucher) { ?>
              <tr>
                <td class="text-left"><?php echo $voucher['description']; ?></td>
                <td class="text-left"></td>
                <td class="text-right">1</td>
                <td class="text-right"><?php echo $voucher['amount']; ?></td>
                <td class="text-right"><?php echo $voucher['amount']; ?></td>
                <?php if ($products) { ?>
                <td></td>
                <?php } ?>
              </tr>
              <?php } ?>
            </tbody>
            <tfoot>
              <?php foreach ($totals as $total) { ?>
              <tr>
                <td colspan="3"></td>
                <td class="text-right"><b><?php echo $total['title']; ?> <?php echo $total['text']; ?></b></td>
                <?php if ($products) { ?>
                <?php } ?>
              </tr>
              <?php } ?>
            </tfoot>
          </table>
        </div>
      <?php if ($comment) { ?>
      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <td class="text-left"><?php echo $text_comment; ?></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-left"><?php echo $comment; ?></td>
            </tr>
          </tbody>
        </table>
      </div>

      <?php } ?>
      <?php if ($histories) { ?>
      <h3><?php echo $text_history; ?></h3>
      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <td class="text-left"><?php echo $column_date_added; ?></td>
              <td class="text-left"><?php echo $column_status; ?></td>
              <td class="text-left"><?php echo $column_comment; ?></td>
            </tr>
          </thead>
          <tbody>
            <?php if ($histories) { ?>
            <?php foreach ($histories as $history) { ?>
            <tr>
              <td class="text-left"><?php echo $history['date_added']; ?></td>
              <td class="text-left"><?php echo $history['status']; ?></td>
              <td class="text-left"><?php echo $history['comment']; ?></td>
            </tr>
            <?php } ?>
            <?php } else { ?>
            <tr>
              <td colspan="3" class="text-center"><?php echo $text_no_results; ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <?php } ?>
      <div class="buttons buttons-right">
        <a href="<?php echo $continue; ?>" class="btn btn-default"><?php echo $button_continue; ?></a>
      </div>
    </div>
      <?php echo $content_bottom; ?></div>
    <?php echo $column_right; ?></div>
</div>
<?php echo $footer; ?>
