<div class="buttons">
  <div class="pull-right">
    <input type="button" value="<?php echo $button_confirm; ?>" id="button-confirm" class="btn btn-primary" data-loading-text="<?php echo $text_loading; ?>" />
  </div>
</div>
<!-- extension/payment/cod/confirm -->
<script type="text/javascript"><!--
$('#button-confirm').on('click', function() {
	$.ajax({
		type: 'post',
		url: 'index.php?route=checkout/confirm',
		data: $('#guest-data input[type=\'text\'], #passengers textarea'),
    dataType: 'json',
		beforeSend: function() {
			$('#button-confirm').button('loading');
		},
		complete: function() {
			$('#button-confirm').button('reset');
		},
    error: function(s){
      var x =s;
    },
		success: function(json) {
      $('.alert, .text-danger').remove();
      if(json['error']){
        for (i in json['error']) {
					var element = $('#input-payment-' + i.replace('_', '-'));

					if ($(element).parent().hasClass('input-group')) {
						$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');
					} else {
						$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');
					}
				}

      
				// Highlight any found errors
				$('.text-danger').parent().addClass('has-error');
      }
      else if(json['redirect']){
        $.ajax({
		type: 'get',
		url: 'index.php?route=extension/payment/cod/confirm',
		cache: false,
		beforeSend: function() {
			$('#button-confirm').button('loading');
		},
		complete: function() {
			$('#button-confirm').button('reset');
		},
		success: function() {
			location = '<?php echo $continue; ?>';
		}
	});
      }

		}
	});
});
//--></script>
