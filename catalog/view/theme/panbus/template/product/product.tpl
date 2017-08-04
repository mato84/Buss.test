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
      <div class="row">
        <?php if ($column_left || $column_right) { ?>
        <?php $class = 'col-sm-6'; ?>
        <?php } else { ?>
        <?php $class = 'col-sm-8'; ?>
        <?php } ?>
        <div class="product-cart">
          <div class="product-details">
            <div class="details-caption-left">
              <div class="product-img">
                <?php if ($thumb || $images) { ?>
                  <?php if ($thumb) { ?>
                  <img src="<?php echo $thumb; ?>" title="<?php echo $heading_title; ?>" alt="<?php echo $heading_title; ?>" />
                  <?php } ?>
                <?php } ?>
              </div>
              <div class="product-manufacturer">
              <ul class="list-unstyled">
                <?php if ($manufacturer) { ?>
                <li><?php echo $text_manufacturer; ?> <a href="<?php echo $manufacturers; ?>"><?php echo $manufacturer; ?></a></li>
                <?php } ?>
              </ul>
              </div>
            </div>
            <div class="details-caption-right">
              <div class="product-title">
                <h1><?php echo $heading_title; ?></h1>
              </div>
              <div class="product-options" id="product">
                <?php if ($options) { ?>
                <?php foreach ($options as $option) { ?>

                <?php if ($option['type'] == 'select') { ?>
                <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                  <label class="control-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?></label>
                  <select name="option[<?php echo $option['product_option_id']; ?>]" id="input-option<?php echo $option['product_option_id']; ?>" class="form-control">
                    <option value=""><?php echo $text_select; ?></option>
                    <?php foreach ($option['product_option_value'] as $option_value) { ?>
                    <option value="<?php echo $option_value['product_option_value_id']; ?>"><?php echo $option_value['name']; ?>
                    <?php if ($option_value['price']) { ?>
                    (<?php echo $option_value['price_prefix']; ?><?php echo $option_value['price']; ?>)
                    <?php } ?>
                    </option>
                    <?php } ?>
                  </select>
                </div>
                <?php } ?>

                <?php if ($option['type'] == 'radio') { ?>
                <div class="option-time form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                  <label class="control-label"><?php echo $option['name']; ?></label>
                  <div id="input-option<?php echo $option['product_option_id']; ?>">
                    <?php foreach ($option['product_option_value'] as $option_value) { ?>
                    <div class="radio">
                      <label>
                        <input type="radio" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option_value['product_option_value_id']; ?>" />
                        <?php if ($option_value['image']) { ?>
                        <img src="<?php echo $option_value['image']; ?>" alt="<?php echo $option_value['name'] . ($option_value['price'] ? ' ' . $option_value['price_prefix'] . $option_value['price'] : ''); ?>" class="img-thumbnail" />
                        <?php } ?>
                        <?php echo $option_value['name']; ?>
                        <?php if ($option_value['price']) { ?>
                        (<?php echo $option_value['price_prefix']; ?><?php echo $option_value['price']; ?>)
                        <?php } ?>
                      </label>
                    </div>
                    <?php } ?>
                  </div>
                </div>
                <?php } ?>

                <?php if ($option['type'] == 'checkbox') { ?>
                <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                  <label class="control-label"><?php echo $option['name']; ?></label>
                  <div id="input-option<?php echo $option['product_option_id']; ?>">
                    <?php foreach ($option['product_option_value'] as $option_value) { ?>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="option[<?php echo $option['product_option_id']; ?>][]" value="<?php echo $option_value['product_option_value_id']; ?>" />
                        <?php if ($option_value['image']) { ?>
                        <img src="<?php echo $option_value['image']; ?>" alt="<?php echo $option_value['name'] . ($option_value['price'] ? ' ' . $option_value['price_prefix'] . $option_value['price'] : ''); ?>" class="img-thumbnail" />
                        <?php } ?>
                        <?php echo $option_value['name']; ?>
                        <?php if ($option_value['price']) { ?>
                        (<?php echo $option_value['price_prefix']; ?><?php echo $option_value['price']; ?>)
                        <?php } ?>
                      </label>
                    </div>
                    <?php } ?>
                  </div>
                </div>
                <?php } ?>

                <?php if ($option['type'] == 'date') { ?>
                <div class="option-data form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                  <label class="control-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?></label>
                  <div class="input-group date">
                    <input type="text" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option['value']; ?>" data-date-format="DD.MM.YYYY" id="input-option<?php echo $option['product_option_id']; ?>" class="form-control" />
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                    </span></div>
                </div>
                <?php } ?>

                <?php if ($option['type'] == 'datetime') { ?>
                <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                  <label class="control-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?></label>
                  <div class="input-group datetime">
                    <input type="text" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option['value']; ?>" data-date-format="YYYY-MM-DD HH:mm" id="input-option<?php echo $option['product_option_id']; ?>" class="form-control" />
                    <span class="input-group-btn">
                    <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                    </span></div>
                </div>
                <?php } ?>

                <?php if ($option['type'] == 'time') { ?>
                <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                  <label class="control-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?></label>
                  <div class="input-group time">
                    <input type="text" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option['value']; ?>" data-date-format="HH:mm" id="input-option<?php echo $option['product_option_id']; ?>" class="form-control" />
                    <span class="input-group-btn">
                    <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                    </span></div>
                </div>
                <?php } ?>
                <?php } ?>
                <?php } ?>

                <div>
                <?php if ($attribute_groups) { ?>
                <div class="option-timeinroad form-group">
                    <?php foreach ($attribute_groups as $attribute_group) { ?>
                        <div class="timeinroad-text form-group"><?php echo $attribute_group['name']; ?></div>
                      <?php foreach ($attribute_group['attribute'] as $attribute) { ?>
                        <div class="timeinroad-value form-group"><?php echo $attribute['name']; ?></div>
                      <?php } ?>
                    <?php } ?>
                </div>
                <?php } ?>

                <div class="option-quattity form-group">
                  <label class="control-label" for="input-quantity"><?php echo $entry_qty; ?></label>
                  <input type="number" autocomplete = "off" min = "1" max="999" name="quantity" value="<?php echo $minimum; ?>" size="2" id="input-quantity" class="form-control" />
                  <input type="hidden" name="product_id" value="<?php echo $product_id; ?>" />
                </div>
                <!-- <div class="loading">

                </div> -->
                <?php if ($minimum > 1) { ?>
                <div class="alert alert-info"><i class="fa fa-info-circle"></i> <?php echo $text_minimum; ?></div>
                <?php } ?>
                <div class="price-block form-group">
                  <div class="pruduct-price">
                    <?php if ($price) { ?>
                    <ul class="list-unstyled">
                      <?php if (!$special) { ?>
                      <li>
                        <h2><?php echo $price; ?></h2>
                      </li>
                      <?php } else { ?>
                      <li><span class="price-old"><?php echo $price; ?></span></li>
                      <li>
                        <h2><?php echo $special; ?></h2>
                      </li>
                      <?php } ?>
                      <?php if ($tax) { ?>
                      <li><?php echo $text_tax; ?> <?php echo $tax; ?></li>
                      <?php } ?>
                      <?php if ($points) { ?>
                      <li><?php echo $text_points; ?> <?php echo $points; ?></li>
                      <?php } ?>
                      <?php if ($discounts) { ?>
                      <li>
                        <hr>
                      </li>
                      <?php foreach ($discounts as $discount) { ?>
                      <li><?php echo $discount['quantity']; ?><?php echo $text_discount; ?><?php echo $discount['price']; ?></li>
                      <?php } ?>
                      <?php } ?>
                    </ul>
                    <?php } ?>
                  </div>
                </div>

                <div class="pruduct-buttons form-group">
                  <button type="button" id="button-cart" data-loading-text="<?php echo $text_loading; ?>" class="btn btn-default btn-block"><?php echo $button_tobook; ?>
                  </button>
                </div>
              </div>
              </div>

            </div>
          </div>

          <div class="product-description">

            <div class="product-rating">
              <?php if ($review_status) { ?>
                <div class="rating">
                  <p>
                <?php for ($i = 1; $i <= 5; $i++) { ?>
                <?php if ($rating < $i) { ?>
                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                <?php } else { ?>
                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                <?php } ?>
                <?php } ?>
                <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;"><?php echo $reviews; ?></a> / <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;"><?php echo $text_write; ?></a></p>
                  <hr>
                </div>
              <?php } ?>
            </div>

            <div class="product-additional-images">
              <?php if ($thumb || $images) { ?>
              <ul class="thumbnails">
                <?php if ($images) { ?>
                <?php foreach ($images as $image) { ?>
                <li class="image-additional"><a class="thumbnail" href="<?php echo $image['popup']; ?>" title="<?php echo $heading_title; ?>"> <img src="<?php echo $image['thumb']; ?>" title="<?php echo $heading_title; ?>" alt="<?php echo $heading_title; ?>" /></a></li>
                <?php } ?>
                <?php } ?>
              </ul>
              <?php } ?>
            </div>

            <div class="product-tabs">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#tab-description" data-toggle="tab"><?php echo $tab_description; ?></a></li>
                <?php if ($review_status) { ?>
                <li><a href="#tab-review" data-toggle="tab"><?php echo $tab_review; ?></a></li>
                <?php } ?>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tab-description"><?php echo $description; ?></div>
                <?php if ($review_status) { ?>
                <div class="tab-pane" id="tab-review">
                  <form class="form-horizontal" id="form-review">
                    <div id="review" class="rating table-responsive"></div>
                    <h3><?php echo $text_write; ?></h3>
                    <?php if ($review_guest) { ?>
                    <div class="form-group required">
                      <div class="col-sm-12">
                        <label class="control-label" for="input-name"><?php echo $entry_name; ?></label>
                        <input style=" width: 100%" type="text" name="name" value="<?php echo $customer_name; ?>" id="input-name" class="form-control" />
                      </div>
                    </div>
                    <div class="form-group required">
                      <div class="col-sm-12">
                        <label class="control-label" for="input-review"><?php echo $entry_review; ?></label>
                        <textarea style="height: auto; width: 100%" name="text" rows="5" id="input-review" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="form-group required">
                      <div class="col-sm-12">
                        <label class="control-label"><?php echo $entry_rating; ?></label><br>
                        &nbsp;&nbsp;&nbsp; <?php echo $entry_bad; ?>&nbsp;
                        <input type="radio" name="rating" value="1" />
                        &nbsp;
                        <input type="radio" name="rating" value="2" />
                        &nbsp;
                        <input type="radio" name="rating" value="3" />
                        &nbsp;
                        <input type="radio" name="rating" value="4" />
                        &nbsp;
                        <input type="radio" name="rating" value="5" />
                        &nbsp;<?php echo $entry_good; ?></div>
                    </div>
                    <?php echo $captcha; ?>
                    <div class="buttons clearfix">
                      <div class="pull-right">
                        <button type="button" id="button-review" data-loading-text="<?php echo $text_loading; ?>" class="btn btn-primary"><?php echo $button_continue; ?></button>
                      </div>
                    </div>
                    <?php } else { ?>
                    <?php echo $text_login; ?>
                    <?php } ?>
                  </form>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php echo $content_bottom; ?></div>
    <?php echo $column_right; ?></div>
</div>
<script type="text/javascript"><!--

$('#input-quantity').on('change', function(){

  $.ajax({
    url:'index.php?route=product/product/changePrice',
    data: {quantity: $('input[name=\'quantity\']').val(),
           product_id: $('input[name=\'product_id\']').val()
         },
    beforeSend:function(){
     $('#product > div:nth-child(3) > div.price-block.form-group > div > ul > li > h2').text('loading');
    },
    success: function(json){
      if(json['special']){
      $('#product > div:nth-child(3) > div.price-block.form-group > div > ul > li > h2').text(json['special']);
      $('.price-old').text(json['price']);

      }
      else {
        $('#product > div:nth-child(3) > div.price-block.form-group > div > ul > li > h2').text(json['price']);
      }

    }

  });
})

$('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){
	$.ajax({
		url: 'index.php?route=product/product/getRecurringDescription',
		type: 'post',
		data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),
		dataType: 'json',
		beforeSend: function() {
			$('#recurring-description').html('');
		},
		success: function(json) {
			$('.alert, .text-danger').remove();

			if (json['success']) {
				$('#recurring-description').html(json['success']);
			}
		}
	});
});
//--></script>
<script type="text/javascript"><!--
$('#button-cart').on('click', function() {
	$.ajax({
		url: 'index.php?route=checkout/cart/add',
		type: 'post',
		data: $('#product input[type=\'text\'], #product input[type=\'hidden\'],input[type=\'number\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),
		dataType: 'json',
		beforeSend: function() {
			$('#button-cart').button('loading');
		},
		complete: function() {
			$('#button-cart').button('reset');
		},
		success: function(json) {
			$('.alert, .text-danger').remove();
			$('.form-group').removeClass('has-error');

			if (json['error']) {
				if (json['error']['option']) {
					for (i in json['error']['option']) {
						var element = $('#input-option' + i.replace('_', '-'));

						if (element.parent().hasClass('input-group')) {
							element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
						} else {
							element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
						}
					}
				}

				if (json['error']['recurring']) {
					$('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');
				}

				// Highlight any found errors
				$('.text-danger').parent().addClass('has-error');
			}

			if (json['success']) {
        location = '/index.php?route=checkout/checkout'
				// $('.breadcrumb').after('<div class="alert alert-success">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
        //
				// $('#cart > button').html('<span id="cart-total"><i class="fa fa-shopping-cart"></i> ' + json['total'] + '</span>');
        //
				// $('html, body').animate({ scrollTop: 0 }, 'slow');
        //
				// $('#cart > ul').load('index.php?route=common/cart/info ul li');
			}
		},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
	});
});
//--></script>
<script type="text/javascript"><!--
$('.date').datetimepicker({
	pickTime: false
});

$('.datetime').datetimepicker({
	pickDate: true,
	pickTime: true
});

$('.time').datetimepicker({
	pickDate: false
});

$('button[id^=\'button-upload\']').on('click', function() {
	var node = this;

	$('#form-upload').remove();

	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

	$('#form-upload input[name=\'file\']').trigger('click');

	if (typeof timer != 'undefined') {
    	clearInterval(timer);
	}

	timer = setInterval(function() {
		if ($('#form-upload input[name=\'file\']').val() != '') {
			clearInterval(timer);

			$.ajax({
				url: 'index.php?route=tool/upload',
				type: 'post',
				dataType: 'json',
				data: new FormData($('#form-upload')[0]),
				cache: false,
				contentType: false,
				processData: false,
				beforeSend: function() {
					$(node).button('loading');
				},
				complete: function() {
					$(node).button('reset');
				},
				success: function(json) {
					$('.text-danger').remove();

					if (json['error']) {
						$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
					}

					if (json['success']) {
						alert(json['success']);

						$(node).parent().find('input').val(json['code']);
					}
				},
				error: function(xhr, ajaxOptions, thrownError) {
					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
				}
			});
		}
	}, 500);
});
//--></script>
<script type="text/javascript"><!--
$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    $('#review').fadeOut('slow');

    $('#review').load(this.href);

    $('#review').fadeIn('slow');
});

$('#review').load('index.php?route=product/product/review&product_id=<?php echo $product_id; ?>');

$('#button-review').on('click', function() {
	$.ajax({
		url: 'index.php?route=product/product/write&product_id=<?php echo $product_id; ?>',
		type: 'post',
		dataType: 'json',
		data: $("#form-review").serialize(),
		beforeSend: function() {
			$('#button-review').button('loading');
		},
		complete: function() {
			$('#button-review').button('reset');
		},
		success: function(json) {
			$('.alert-success, .alert-danger').remove();

			if (json['error']) {
				$('#review').after('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');
			}

			if (json['success']) {
				$('#review').after('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');

				$('input[name=\'name\']').val('');
				$('textarea[name=\'text\']').val('');
				$('input[name=\'rating\']:checked').prop('checked', false);
			}
		}
	});
    grecaptcha.reset();
});

$(document).ready(function() {
	$('.thumbnails').magnificPopup({
		type:'image',
		delegate: 'a',
		gallery: {
			enabled:true
		}
	});
});

$(document).ready(function() {
	var hash = window.location.hash;
	if (hash) {
		var hashpart = hash.split('#');
		var  vals = hashpart[1].split('-');
		for (i=0; i<vals.length; i++) {
			$('div.options').find('select option[value="'+vals[i]+'"]').attr('selected', true).trigger('select');
			$('div.options').find('input[type="radio"][value="'+vals[i]+'"]').attr('checked', true).trigger('click');
		}
	}
})
//--></script>
<?php echo $footer; ?>
