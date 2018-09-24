<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="submit" id="button-shipping" form="form-order" formaction="<?php echo $shipping; ?>" formtarget="_blank" data-toggle="tooltip" title="<?php echo $button_shipping_print; ?>" class="btn btn-info"><i class="fa fa-truck"></i></button>
        <button type="submit" id="button-invoice" form="form-order" formaction="<?php echo $invoice; ?>" formtarget="_blank" data-toggle="tooltip" title="<?php echo $button_invoice_print; ?>" class="btn btn-info"><i class="fa fa-print"></i></button>
        <a href="<?php echo $add; ?>" data-toggle="tooltip" title="<?php echo $button_add; ?>" class="btn btn-primary"><i class="fa fa-plus"></i></a>
        <button type="button" id="button-delete" form="form-order" formaction="<?php echo $delete; ?>" data-toggle="tooltip" title="<?php echo $button_delete; ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
      </div>
      <h1><?php echo $heading_title; ?></h1>
      <ul class="breadcrumb">
        <?php foreach ($breadcrumbs as $breadcrumb) { ?>
        <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <?php if ($error_warning) { ?>
    <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <?php if ($success) { ?>
    <div class="alert alert-success"><i class="fa fa-check-circle"></i> <?php echo $success; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-list"></i> <?php echo $text_list; ?></h3>
      </div>
      <div class="panel-body">
        <div class="well">
          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <label class="control-label" for="input-date-modified"><?php echo $entry_departure_data; ?></label>
                    <div class="input-group date">
                        <input type="text" name="filter_date_departure" value="<?php echo $filter_date_departure; ?>" placeholder="<?php echo $entry_departure_data; ?>" data-date-format="YYYY-MM-DD" id="input-date-departure" class="form-control" />
                  <span class="input-group-btn">
                  <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                  </span>
                    </div>
              </div>
              <div class="form-group">
                <label class="control-label" for="input-date-added"><?php echo $entry_date_added; ?></label>
                <div class="input-group date">
                  <input type="text" name="filter_date_added" value="<?php echo $filter_date_added; ?>" placeholder="<?php echo $entry_date_added; ?>" data-date-format="YYYY-MM-DD" id="input-date-added" class="form-control" />
                  <span class="input-group-btn">
                  <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                  </span></div>
              </div>
              <div class="form-group">
                <label class="control-label"></label>
                <div style="margin-top: 5px;">
                <button type="button" id="button-reset-filter" class="btn btn-info pull-right"><i class="fa fa-filter"></i> <?php echo $button_reset_filter; ?></button>
                <button type="button" id="button-filter" class="btn btn-primary"><i class="fa fa-filter"></i> <?php echo $button_filter; ?></button>                
                </div>               
              </div>                                                                   
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label class="control-label" for="input-ticket"><?php echo $entry_ticket; ?></label>
                <select name="" id="input-ticket" class="form-control" disabled="disabled">
                  <option value="*"></option>
                </select>
              </div>            
              <div class="form-group">
                <label class="control-label" for="input-tour"><?php echo $entry_tour; ?></label>
                <select name="filter_bus_ride_id" id="input-tour" class="form-control">
                  <option value="*"></option>
                  <?php foreach ($bus_rides as $bus_ride) { ?>
                  <?php if ($bus_ride['category_id'] == $filter_bus_ride_id) { ?>
                  <option value="<?php echo $bus_ride['category_id']; ?>" selected="selected"><?php echo $bus_ride['name']; ?></option>
                  <?php } else { ?>
                  <option value="<?php echo $bus_ride['category_id']; ?>"><?php echo $bus_ride['name']; ?></option>
                  <?php } ?>
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label class="control-label" for="input-carrier"><?php echo $entry_carrier; ?></label>
                <select name="filter_carrier_id" id="input-carrier" class="form-control">
                  <option value="*"></option>
                  <?php foreach ($carriers as $carrier) { ?>
                  <?php if ($carrier['manufacturer_id'] == $filter_carrier_id) { ?>
                  <option value="<?php echo $carrier['manufacturer_id']; ?>" selected="selected"><?php echo $carrier['name']; ?></option>
                  <?php } else { ?>
                  <option value="<?php echo $carrier['manufacturer_id']; ?>"><?php echo $carrier['name']; ?></option>
                  <?php } ?>
                  <?php } ?>
                </select>
              </div>                           
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label class="control-label" for="input-passenger"><?php echo $entry_passenger; ?></label>
                <input type="text" name="filter_passenger" value="" placeholder="<?php echo $entry_passenger; ?>" id="input-passenger" class="form-control" disabled="disabled"/>
              </div>
              <div class="form-group">
                  <label class="control-label" for="input-passenger-phone"><?php echo $entry_passenger_phone; ?></label>
                  <input type="number" name="filter_passenger_phone" value="<?php echo $filter_passenger_phone; ?>" placeholder="<?php echo $entry_passenger_phone; ?>" id="input-passenger-phone" class="form-control" />
              </div>
              <div class="form-group">
                  <label class="control-label" for="input-passenger-viber"><?php echo $entry_passenger_viber; ?></label>
                  <input type="number" name="filter_passenger_viber" value="" placeholder="<?php echo $entry_passenger_viber; ?>" id="input-passenger-viber" class="form-control" disabled="disabled"/>
              </div>                               
            </div>
          </div>
          <div class="row">
            <div class="additional-filters">
              <div class="additional-filters__show">
                <div class="additional-filters__show-text"><?php echo $text_show_more; ?></div>
                <script type="text/javascript">
                  $(".additional-filters__show-text").click(function () {
                    $(".additional-filters__more").toggleClass("active");    
                  });
                </script>               
              </div>
              <div class="additional-filters__more">
              <div class="col-sm-4">
                <div class="form-group">
                  <label class="control-label" for="input-date-modified"><?php echo $entry_departure_data; ?></label>
                      <div class="input-group date">
                          <input type="text" name="filter_date_departure" value="<?php echo $filter_date_departure; ?>" placeholder="<?php echo $entry_departure_data; ?>" data-date-format="YYYY-MM-DD" id="input-date-departure" class="form-control" disabled="disabled"/>
                    <span class="input-group-btn">
                    <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                    </span>
                      </div>
                </div>            
                <div class="form-group">
                  <label class="control-label" for="input-date-modified"><?php echo $entry_date_modified; ?></label>
                  <div class="input-group date">
                    <input type="text" name="filter_date_modified" value="<?php echo $filter_date_modified; ?>" placeholder="<?php echo $entry_date_modified; ?>" data-date-format="YYYY-MM-DD" id="input-date-departure" class="form-control" />
                    <span class="input-group-btn">
                    <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label class="control-label" for="input-order-id"><?php echo $entry_order_id; ?></label>
                  <input type="text" name="filter_order_id" value="<?php echo $filter_order_id; ?>" placeholder="<?php echo $entry_order_id; ?>" id="input-order-id" class="form-control" />
                </div> 
                <div class="form-group">
                  <label class="control-label" for="input-order-status"><?php echo $entry_order_status; ?></label>
                  <select name="filter_order_status" id="input-order-status" class="form-control">
                    <option value="*"></option>
                    <?php if ($filter_order_status == '0') { ?>
                    <option value="0" selected="selected"><?php echo $text_missing; ?></option>
                    <?php } else { ?>
                    <option value="0"><?php echo $text_missing; ?></option>
                    <?php } ?>
                    <?php foreach ($order_statuses as $order_status) { ?>
                    <?php if ($order_status['order_status_id'] == $filter_order_status) { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>" selected="selected"><?php echo $order_status['name']; ?></option>
                    <?php } else { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>"><?php echo $order_status['name']; ?></option>
                    <?php } ?>
                    <?php } ?>
                  </select>
                </div>                            
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label class="control-label" for="input-customer"><?php echo $entry_customer; ?></label>
                  <input type="text" name="filter_customer" value="<?php echo $filter_customer; ?>" placeholder="<?php echo $entry_customer; ?>" id="input-customer" class="form-control" />
                </div>
                <div class="form-group">
                      <label class="control-label" for="input-customer"><?php echo $entry_assigned_user; ?></label>
                      <select name="filter_assigned_user" id="input-assigned_user" class="form-control">
                          <option value="*"></option>
                          <?php foreach ($assigned_users as $assigned_user) { ?>
                          <?php if ($assigned_user['user_id'] === $filtered_assigned_user_id) { ?>
                          <option value="<?php echo $assigned_user['user_id']; ?>"
                                  selected="selected"><?php echo sprintf('%s %s', $assigned_user['firstname'], $assigned_user['lastname']); ?>
                          </option>
                          <?php } else { ?>
                          <option value="<?php echo $assigned_user['user_id']; ?>">
                              <?php echo sprintf('%s %s', $assigned_user['firstname'], $assigned_user['lastname']); ?>
                          </option>
                          <?php } ?>
                          <?php } ?>
                      </select>
                </div>              
              </div>
              </div>            
            </div>
          </div>
          <div class="row">
          <div class="col-sm-12">
              <div class="form-group pull-right">
                <div class="passengers-count"><?php echo $entry_all_qtx_passengers; ?><span><?php echo $allPassengers; ?></span> </div>
              </div>             
          </div>
           
          </div>
        </div>
        <form method="post" action="" enctype="multipart/form-data" id="form-order">
          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" />
                  </td>
                  <td class="text-left">
                      <?php echo $column_departure_date; ?>
                  </td>
                  <td class="text-left">
                      <?php echo $column_ticket; ?>
                  </td> 
                  <td class="text-left">
                      <?php echo $column_qtx_passengers; ?>
                  </td>
                  <td class="text-left">
                      <?php echo $column_passenger_telephone; ?>
                  </td>
                  <td class="text-left">
                      <?php echo $column_total; ?></a>
                  </td>
                  <td class="text-left">
                      <?php echo $column_passenger_viber; ?>
                  </td>                                                                                                                       
                  <td class="text-left">
                      <?php echo $column_carrier; ?>
                  </td>
                  <td class="text-left">
                      <?php echo $column_tour; ?>
                  </td>
                  <td class="text-left">
                      <?php echo $column_customer; ?>                   
                  </td>
<!--                   <td class="text-left"><?php if ($sort == 'o.date_added') { ?>
                    <a href="<?php echo $sort_date_added; ?>" class="<?php echo strtolower($order); ?>"><?php echo $column_date_added; ?></a>
                    <?php } else { ?>
                    <a href="<?php echo $sort_date_added; ?>"><?php echo $column_date_added; ?></a>
                    <?php } ?>
                  </td> -->
                  <td class="text-left">
                      <?php echo $column_status; ?>                    
                  </td>
                  <td class="text-left"><?php if ($sort == 'o.order_id') { ?>
                    <a href="<?php echo $sort_order; ?>" class="<?php echo strtolower($order); ?>"><?php echo $column_order_id; ?></a>
                    <?php } else { ?>
                    <a href="<?php echo $sort_order; ?>"><?php echo $column_order_id; ?></a>
                    <?php } ?>
                  </td>                   
                  <td class="text-right"><?php echo $column_action; ?></td>

                </tr>
              </thead>
              <tbody>
                <?php if ($orders) { ?>
                <?php foreach ($orders as $order) { ?>
                <tr>
                  <td class="text-center"><?php if (in_array($order['order_id'], $selected)) { ?>
                    <input type="checkbox" name="selected[]" value="<?php echo $order['order_id']; ?>" checked="checked" />
                    <?php } else { ?>
                    <input type="checkbox" name="selected[]" value="<?php echo $order['order_id']; ?>" />
                    <?php } ?>
                    <input type="hidden" name="shipping_code[]" value="<?php echo $order['shipping_code']; ?>" />
                  </td>
                  <td class="text-left"><?php echo $order['departure_data']; ?></td>
                  <td class="text-left"><?php echo $order['ticket']; ?></td>
                  <td class="text-left">
                      <?php foreach ($order['passengers'] as $key => $passenger) { ?>
                      <div class="passenger-info">
                          <div class="passenger-name">
                              <?php $key++;  echo $key.': '.$passenger['surname'].' '.$passenger['name']; ?>
                          </div>
                      </div>
                      <?php } ?>
                  </td>
                  <td class="text-left"></td>
                  <td class="text-left"><?php echo $order['total']; ?></td>
                  <td class="text-left"></td>                                                                          
                  <td class="text-left"><?php echo $order['carrier']; ?></td>
                  <td class="text-left"><?php echo $order['tour']; ?></td>
                  <td class="text-left"><?php  echo $order['customer']; ?></td>
<!--                   <td class="text-left"><?php  echo $order['date_added']; ?></td> -->
                  <td class="text-left"><?php  echo $order['order_status']; ?></td>
                  <td class="text-left"><?php echo $order['order_id']; ?></td>                  
                  <td class="text-right">
                    <a href="<?php echo $order['edit']; ?>" data-toggle="tooltip" title="<?php echo $button_edit; ?>" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                    <a href="<?php echo $order['view']; ?>" data-toggle="tooltip" title="<?php echo $button_view; ?>" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                  </td>
                </tr>
                <?php } ?>
                <?php } else { ?>
                <tr>
                  <td class="text-center" colspan="8"><?php echo $text_no_results; ?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </form>
        <div class="row">
          <div class="col-sm-6 text-left"><?php echo $pagination; ?></div>
          <div class="col-sm-6 text-right"><?php echo $results; ?></div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript"><!--
      $('#button-reset-filter').on('click', function () {
        location = 'index.php?route=sale/order&token=<?php echo $token; ?>';
    });
$('#button-filter').on('click', function() {
	url = 'index.php?route=sale/order&token=<?php echo $token; ?>';

	var filter_order_id = $('input[name=\'filter_order_id\']').val();

	if (filter_order_id) {
		url += '&filter_order_id=' + encodeURIComponent(filter_order_id);
	}
	var filter_bus_ride_id = $('select[name=\'filter_bus_ride_id\']').val();

	if (filter_bus_ride_id !== '*') {
		url += '&filter_bus_ride_id=' + encodeURIComponent(filter_bus_ride_id);
	}
    var filter_assigned_user = $('select[name=\'filter_assigned_user\']').val();

	if (filter_assigned_user !== '*') {
		url += '&filter_assigned_user=' + encodeURIComponent(filter_assigned_user);
	}
	var filter_carrier_id = $('select[name=\'filter_carrier_id\']').val();

	if (filter_carrier_id !== '*') {
		url += '&filter_carrier_id=' + encodeURIComponent(filter_carrier_id);
	}

	var filter_customer = $('input[name=\'filter_customer\']').val();

	if (filter_customer) {
		url += '&filter_customer=' + encodeURIComponent(filter_customer);
	}

	var filter_order_status = $('select[name=\'filter_order_status\']').val();

	if (filter_order_status != '*') {
		url += '&filter_order_status=' + encodeURIComponent(filter_order_status);
	}

	var filter_total = $('input[name=\'filter_total\']').val();

	if (filter_total) {
		url += '&filter_total=' + encodeURIComponent(filter_total);
	}

	var filter_date_added = $('input[name=\'filter_date_added\']').val();

	if (filter_date_added) {
		url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
	}

	var filter_date_modified = $('input[name=\'filter_date_modified\']').val();

	if (filter_date_modified) {
		url += '&filter_date_modified=' + encodeURIComponent(filter_date_modified);
	}
    var filter_date_departure = $('input[name=\'filter_date_departure\']').val();

	if (filter_date_departure) {
		url += '&filter_date_departure=' + encodeURIComponent(filter_date_departure);
	}
    var filter_passenger_phone = $('input[name=\'filter_passenger_phone\']').val();

	if (filter_passenger_phone) {
		url += '&filter_passenger_phone=' + encodeURIComponent(filter_passenger_phone);
	}

	location = url;
});
//--></script>
  <script type="text/javascript"><!--
$('input[name=\'filter_customer\']').autocomplete({
	'source': function(request, response) {
		$.ajax({
			url: 'index.php?route=customer/customer/autocomplete&token=<?php echo $token; ?>&filter_name=' +  encodeURIComponent(request),
			dataType: 'json',
			success: function(json) {
				response($.map(json, function(item) {
					return {
						label: item['name'],
						value: item['customer_id']
					}
				}));
			}
		});
	},
	'select': function(item) {
		$('input[name=\'filter_customer\']').val(item['label']);
	}
});
//--></script>
  <script type="text/javascript"><!--
$('input[name^=\'selected\']').on('change', function() {
	$('#button-shipping, #button-invoice').prop('disabled', true);

	var selected = $('input[name^=\'selected\']:checked');

	if (selected.length) {
		$('#button-invoice').prop('disabled', false);
	}

	for (i = 0; i < selected.length; i++) {
		if ($(selected[i]).parent().find('input[name^=\'shipping_code\']').val()) {
			$('#button-shipping').prop('disabled', false);

			break;
		}
	}
});

$('#button-shipping, #button-invoice').prop('disabled', true);

$('input[name^=\'selected\']:first').trigger('change');

// IE and Edge fix!
$('#button-shipping, #button-invoice').on('click', function(e) {
	$('#form-order').attr('action', this.getAttribute('formAction'));
});

$('#button-delete').on('click', function(e) {
	$('#form-order').attr('action', this.getAttribute('formAction'));

	if (confirm('<?php echo $text_confirm; ?>')) {
		$('#form-order').submit();
	} else {
		return false;
	}
});
//--></script> 
  <script src="view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
  <link href="view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet" media="screen" />
  <script type="text/javascript"><!--
$('.date').datetimepicker({
	pickTime: false
});
//--></script></div>
<?php echo $footer; ?>