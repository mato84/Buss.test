<?php echo $header; ?>
<div class="container">
  <?php if ($error_warning) { ?>
  <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
  </div>
  <?php } ?>
  <?php if ($not_only_one) { ?>
  <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i><?php echo $notice_only_one; ?> 
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
          <?php if ($customer_group_short_name === $entry_agent) { ?>
          <div class="tech-block">
            <div class="agent">
              <div class="agent__data">
                <h4><?php echo $text_agent ?></h4>
                <div class="agent__data-name"><?php echo $lastname; ?> <?php echo $firstname; ?></div>
              </div>
              <div class="control-number">
                  <div class="required input-phone-group">
                    <input type="text" name="control_number" placeholder="<?php echo $text_agent_number ?>"  id="agent-number" class="form-control" />
                </div>
              </div>
            </div>
          </div>
          <div class="passengers">   
            <?php } else { ?>
          <div class="passengers">            
            <div id="guest-data" class="passenger-data">
              <h4><?php echo $entry_passengers ?></h4>
              <div class="form-group required">
                <label class="control-label" for="input-payment-lastname"><?php echo $entry_lastname; ?></label>
                <input type="text" name="lastname" value="<?php echo $lastname; ?>" placeholder="" id="input-payment-lastname" class="form-control" />
              </div>
              <div class="form-group required">
                <label class="control-label" for="input-payment-firstname"><?php echo $entry_firstname; ?></label>
                <input type="text" name="firstname" value="<?php echo $firstname; ?>" placeholder="" id="input-payment-firstname" class="form-control" />
              </div>
              <div class="form-group required input-phone-group">
                <label class="control-label" for="input-payment-telephone"><?php echo $entry_telephone; ?></label>
                    <div class="region-selector">
                      <select class="select-box"><option value="UA">UA</option><option value="PL">PL</option></select>
                    </div>
                <input type="text" name="telephone" value="<?php echo $telephone; ?>" placeholder="" id="input-payment-telephone" class="form-control input-phone" />
              </div>
              <div class="form-group">
                <label class="control-label" for="input-payment-email"><?php echo $entry_email_address; ?></label>
                <input type="text" name="email" value="<?php echo $email; ?>" placeholder="" id="input-payment-email" class="form-control" />
              </div>
            </div>
            <?php } ?>
            <?php for ($i = $multiply_passages; $i <= $qtyPassengers; $i++): ?>
            <div id="passengers-data" class="passenger-data">
              <h4><?php echo $entry_passengers.' '.$i; ?></h4>
              <div class="passenger-data__remove" data-toggle="tooltip" title="<?php echo $button_remove; ?>"><i class="fa fa-times" aria-hidden="true"></i></div>
              <div class="form-group required">
                <label class="control-label" for="input-payment-lastname"><?php echo $entry_lastname; ?></label>
                <input type="text" name="passenger_lastname[]" placeholder=""  class="form-control" />
              </div>
              <div class="form-group required">
                <label class="control-label" for="input-payment-firstname"><?php echo $entry_firstname; ?></label>
                <input type="text" name="passenger_firstname[]"  placeholder=""  class="form-control" />
              </div>
              <div class="form-group required input-phone-group">
                <label class="control-label" for="input-payment-telephone"><?php echo $entry_telephone; ?></label>
                  <div class="region-selector">
                    <select class="select-box"><option value="UA">UA</option><option value="PL">PL</option></select>
                  </div>
                <input type="text" name="passenger_telephone[]" placeholder=""  id="phone" class="form-control  input-phone" />
              </div>
              <div class="form-group">
                <label class="control-label" for="input-payment-email"><?php echo $entry_email_address; ?></label>
                <input type="text" name="passenger_email[]"  placeholder=""  class="form-control" />
              </div>
            </div>
              <?php endfor; ?>
            <div class="passengers__add buttons buttons-right">
                <div class="btn btn-inverse" data-toggle="tooltip" title="<?php echo $button_add; ?>"><i class="fa fa-plus"></i></div>
            </div>
          </div>

        <div class="table-responsive table-checkout">
          <table class="table table-hover">
            <thead>
              <tr>
                <td class="text-left"><?php echo $column_name; ?></td>
                <td class="text-center"><?php echo $column_quantity; ?></td>
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
                  <div class="ticket-info">
                    <a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a>
                    <?php foreach ($product['option'] as $option) { ?>
                    <br />
                    <small><?php echo $option['name']; ?> <b><?php echo $option['value']; ?></b></small>
                    <?php } ?><br>
                    <small><?php echo $text_category; ?> <b> <?php echo $product['main_category_name']; ?></b></small><br>
                    <small><?php echo $text_manufacturer; ?> <b> <?php echo $product['manufacturer_name']; ?></b></small><br>
                    <small><?php echo $text_departure; ?> <b><?php echo $product['departure_time']; ?></b> <?php echo $product['departure_from']; ?></small><br>
                    <small><?php echo $text_arrival;  ?> <b><?php echo $product['arrival_time']; ?></b> <?php  echo $product['departure_to'];  ?></small><br>
                    <small><?php echo $text_time_road; ?> <b> <?php echo $product['time_road']; ?></b></small><br>

                    <?php if($product['recurring']) { ?>
                    <br />
                    <span class="label label-info"><?php echo $text_recurring_item; ?></span> <small><?php echo $product['recurring']; ?></small>
                    <?php } ?>
                  </div>
                </div>
                </td>
                <td class="text-center"><div style="display: inline-block; padding: 5px 10px; color: #cd4e37; border: 2px solid #cd4e37;"><?php echo $product['quantity']; ?></div></td>
                <td class="text-right"><?php echo $product['price']; ?></td>
                <td class="text-right"><?php echo $product['total']; ?></td>
                <td class="text-center">
                  <a class="btn btn-default" data-toggle="tooltip" name = "remove" id="<?php echo $product['cart_id']; ?>" href="#" title="<?php echo $button_remove; ?>" style="display: inherit;"><i class="fa fa-times-circle"></i></a>
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

        <div class="table-checkout mobile">
          <?php foreach ($products as $product) { ?>
          <div class="table-checkout__column">
            <div class="table-checkout__head"><?php echo $column_name; ?></div>
            <div class="table-checkout__body">
                <div class="ticket">
                  <div class="ticket-info">
                    <a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a>
                    <?php foreach ($product['option'] as $option) { ?>
                    <br />
                    <small><?php echo $option['name']; ?> <b><?php echo $option['value']; ?></b></small>
                    <?php } ?><br>
                    <small><?php echo $text_category; ?> <b> <?php echo $product['main_category_name']; ?></b></small><br>
                    <small><?php echo $text_manufacturer; ?> <b> <?php echo $product['manufacturer_name']; ?></b></small><br>
                    <small><?php echo $text_departure; ?> <b><?php echo $product['departure_time']; ?></b> <?php echo $product['departure_from']; ?></small><br>
                    <small><?php echo $text_arrival;  ?> <b><?php echo $product['arrival_time']; ?></b> <?php  echo $product['departure_to'];  ?></small><br>
                    <small><?php echo $text_time_road; ?> <b> <?php echo $product['time_road']; ?></b></small>

                    <?php if($product['recurring']) { ?>
                    <br />
                    <span class="label label-info"><?php echo $text_recurring_item; ?></span> <small><?php echo $product['recurring']; ?></small>
                    <?php } ?>
                  </div>
              </div>
            </div>
          </div>
          <div class="table-checkout__column">
            <div class="table-checkout__head"><?php echo $column_quantity; ?></div>
            <div class="table-checkout__body">
              <div class="table-checkout__body-quantity"><?php echo $product['quantity']; ?></div>
            </div>        
          </div>
          <div class="table-checkout__column">
            <div class="table-checkout__head"><?php echo $column_price; ?></div>
            <div class="table-checkout__body"><?php echo $product['price']; ?></div>          
          </div>
          <div class="table-checkout__column">
            <div class="table-checkout__head"><?php echo $column_total; ?></div>
            <div class="table-checkout__body table-checkout__body-total">            
              <?php foreach ($totals as $total) { ?>
                <strong><?php echo $total['text']; ?></strong>
              <?php } ?>
              <a class="btn btn-default" data-toggle="tooltip" name = "remove" id="<?php echo $product['cart_id']; ?>" href="#" title="<?php echo $button_remove; ?>"><i class="fa fa-times-circle"></i></a>
            </div>
          </div>
          <?php } ?>
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

  <div class="spinner">
    <div class="spinner-overlay"></div>   
    <div class="sk-cube-grid">
      <div class="sk-cube sk-cube1"></div>
      <div class="sk-cube sk-cube2"></div>
      <div class="sk-cube sk-cube3"></div>
      <div class="sk-cube sk-cube4"></div>
      <div class="sk-cube sk-cube5"></div>
      <div class="sk-cube sk-cube6"></div>
      <div class="sk-cube sk-cube7"></div>
      <div class="sk-cube sk-cube8"></div>
      <div class="sk-cube sk-cube9"></div>
    </div>
  </div>

</div>
<?php echo $footer; ?>
<script type="text/javascript">

    $(function() {
        $('.spinner-overlay').animate({opacity: 0.9});

        changeCountryPhone($("input[name = 'passenger_telephone[]'], input[name = 'telephone']"));

        $('a[name=\'remove\']').on('click',function(event){
            event.preventDefault();
            passenger.remove(this.id);
        });

        $('.passenger-data__remove').on('click', function () {
           passenger.update($("a[name = 'remove']").attr('id'), true);
        })
        $('.passengers__add').on('click', function () {
            passenger.update($("a[name = 'remove']").attr('id'), false);
        })

    });

</script>
 
