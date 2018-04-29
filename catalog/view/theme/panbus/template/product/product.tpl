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
    <div id="content" itemscope itemtype="http://schema.org/Product">
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
                  <img src="<?php echo $thumb; ?>" itemprop="image" title="<?php echo $heading_title; ?>" alt="<?php echo $heading_title; ?>" />
                  <?php } ?>
                <?php } ?>
              </div>
              <div class="product-manufacturer">
              <ul class="list-unstyled">
                <?php if ($manufacturer) { ?>
                <li><?php echo $text_manufacturer; ?><br> <a href="<?php echo $manufacturers; ?>"><span itemprop="brand"><?php echo $manufacturer; ?></span></a></li>
                <?php } ?>
              </ul>
              </div>
              <div class="product-category">
                <ul class="list-unstyled">
                  <li><?php echo $text_bus; ?><br> <a><span ><?php echo $main_catagory; ?></span></a></li>
                </ul>
              </div>
            </div>
            <div class="details-caption-right">
              <div class="product-title">
                <h1 itemprop="name"><?php echo $heading_title; ?></h1>
              </div>
              <div class="product-options" id="product">
                  <div class="form-group_margin">
                    <label class="control-label"><?php echo $from_name?></label>
                    <div class="form-group form-group_bg">
                      <div class="form-group__value form-group__value_time"><?php echo $departure_time; ?></div>
                    </div>
                    <div class="form-group__value"><?php echo $departure_from; ?></div>
                  </div>
                  <div class="form-group_margin">
                    <label class="control-label"><?php echo $to_name?></label>
                    <div class="form-group form-group_bg">
                      <div class="form-group__value form-group__value_time"><?php echo $arrival_time; ?></div>
                    </div>
                    <div class="form-group__value"><?php echo $departure_to; ?></div>
                  </div>
                  <div class="timeinroad-data form-group">
                    <label><?php echo $text_time_road; ?></label>
                    <div class="form-group form-group_bg">
                      <div class="form-group__value form-group__value_time"><?php echo $time_road; ?></div>
                    </div>
                  </div>

                <!--   <script type="text/javascript">
                  var map;
                  var image = '../image/catalog/other/marker.png';
                  $(document).ready(function(){
                    map = new GMaps({
                      el: '#map',
                      lat:50.833368,
                      lng: 25.462079,
                      zoom:5
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

                    map.addMarkers([
                      {
                        lat: 49.9935,
                        lng: 36.230383000000074,
                        title: 'Харків',
                        icon: image,},
                    ]);

                  });
                </script>-->

                <div class="route">
                <div class=route__bottons>
                  <a class="btn btn-link" data-toggle="collapse" href="#collapse0"><?php echo $button_route; ?></a>
                </div>

<!--                 <div id="map"></div>  -->

                <div id="collapse0" class="route__way panel-collapse collapse" style="height: 0px;">
                  <?php if ($waypoint_related) { ?>
                    <?php foreach ($waypoint_related as $waypoint) { ?>
                      <div class="route__waypoint">
                        <div class="datetime"><b><?php echo $waypoint['time']; ?></b></div>
                        <div class="info"><b><?php echo $waypoint['city']?></b><?php echo $waypoint['place']; ?></div>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                      </div>
                    <?php } ?>
                  <?php } ?>
                </div>

                </div>
                <div class="product-options__add-block">
                <?php if ($options) { ?>
                <?php foreach ($options as $option) { ?>
                <?php if ($option['type'] == 'date') { ?>
                <div class="option-data form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                  <label for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $text_data_choice; ?></label>
                  <div class="input-group date">
                    <input type="text" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option['value']; ?>" data-date-format="DD.MM.YYYY" id="input-option<?php echo $option['product_option_id']; ?>" class="form-control" />
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                    </span></div>
                </div>
                <?php } ?>
                <?php } ?>
                <?php } ?>

                  <div class="option-quattity form-group">
                    <label for="input-quantity"><?php echo $entry_qty; ?></label>
                    <input type="number" autocomplete = "off" min = "1" max="999" name="quantity" value="<?php echo $minimum; ?>" size="2" id="input-quantity" class="form-control" />
                    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>" />
                  </div>

                  <?php if ($minimum > 1) { ?>
                  <div class="alert alert-info"><i class="fa fa-info-circle"></i> <?php echo $text_minimum; ?></div>
                  <?php } ?>
                  <div class="price-block form-group">
                    <div class="pruduct-price">
                      <?php if ($price) { ?>
                      <span itemscope itemprop="offers" itemtype="http://schema.org/Offer">
                        <meta itemprop="price" content="<?php echo rtrim(preg_replace("/[^0-9\.]/", "", ($special ? $special : $price)), '.'); ?>">
                        <meta itemprop="priceCurrency" content="<?php echo $currency; ?>">
                        <link itemprop="availability" href="http://schema.org/<?php echo (($availability) ? 'InStock' : 'OutOfStock') ?>" />
                      </span>
                      <ul class="list-unstyled">
                        <?php if (!$special) { ?>
                        <li>
                          <h2 class="price"><?php echo $price; ?></h2>
                        </li>
                        <?php } else { ?>
                        <li><span class="price-old"><?php echo $price; ?></span></li>
                        <li>
                          <h2 class="price-new"><?php echo $special; ?></h2>
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
                  <div class="product-options__button-buy form-group">
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
                  <?php if ($rating) { ?>
                    <span itemscope itemprop="aggregateRating" itemtype="http://schema.org/AggregateRating">
                      <meta itemprop="reviewCount" content="<?php echo $reviewCount; ?>">
                      <meta itemprop="ratingValue" content="<?php echo $ratingValue; ?>">
                      <meta itemprop="bestRating" content="5"><meta itemprop="worstRating" content="1">
                    </span>
                  <?php } ?>
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
              <ul class="nav nav-tabs" style="display:none;">
                <li class="active"><a href="#tab-description" data-toggle="tab"><?php echo $tab_description; ?></a></li>
                <?php if ($review_status) { ?>
                <li><a href="#tab-review" data-toggle="tab" "><?php echo $tab_review; ?></a></li>
                <?php } ?>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tab-description" itemprop="description"><?php echo $description; ?></div>
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
<script type="text/javascript">

$('#input-quantity').on('change', function(){

  $.ajax({
    url:'index.php?route=product/product/changePrice',
    data: {
        quantity: $('input[name=\'quantity\']').val(),
        product_id: $('input[name=\'product_id\']').val()
         },
    beforeSend:function(){
     $('#product .price').text('loading');
    },
    success: function(json){
      if(json['special']){
      $('#product price-new').text(json['special']);
      $('.price-old').text(json['price']);

      }
      else {
        $('#product .price').text(json['price']);
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
</script>
<script type="text/javascript">
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
				if (json['error']['only_one']) {
                    location = '/index.php?route=checkout/checkout&one=false'
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
</script>

<script type="text/javascript">
var dateToday = new Date();
$('.date').datetimepicker({
	pickTime: false,
  minDate:dateToday
});

// $('.datetime').datetimepicker({
// 	pickDate: true,
// 	pickTime: true
// });

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
</script>
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
