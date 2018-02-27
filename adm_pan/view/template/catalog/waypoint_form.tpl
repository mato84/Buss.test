<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="button" name="button" id="get_geocode" class="btn btn-primary"><?php echo $button_get_geo; ?></button>
        <button type="submit" form="form-waypoint" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
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
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $text_form; ?></h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-waypoint" class="form-horizontal">
          <div class="tab-content">
            <div class="form-group required">
              <label class="col-sm-2 control-label" for="input-city"><?php echo $entry_city; ?></label>
              <div class="col-sm-10">
                <input type="text" name="city" value="<?php echo $city; ?>" placeholder="<?php echo $entry_city; ?>" id="input-city" class="form-control" />

                <?php if ($error_city_id != "") { ?>
                <div class="text-danger"><?php echo $error_city_id; ?></div>
                <?php } ?>
              </div>
            </div>
            <div class="form-group required">
              <label class="col-sm-2 control-label" for="input-time"><?php echo $entry_time; ?></label>
              <div class="col-sm-3">
                <div class="input-group time">
                  <input type="text" name="time" value="<?php echo $time; ?>"  placeholder="<?php echo $entry_time; ?>" data-date-format="HH:mm" id="input-time" class="form-control" />
                  <span class="input-group-btn">
                  <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                  </span></div>
                  <?php if ($error_time != "") { ?>
                  <div class="text-danger"><?php echo $error_time; ?></div>
                  <?php } ?>
              </div>
            </div>
            <div class="form-group ">
              <label class="col-sm-2 control-label " for="input-place"><?php echo $entry_place; ?></label>
              <div class="col-sm-10">
                <input type="text" name="place" value="<?php echo $place; ?>" placeholder="<?php echo $entry_place; ?>" id="input-place" class="form-control" />
                <?php if ($error_place != '') { ?>
                <div class="text-danger"><?php echo $error_place; ?></div>
                <?php } ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="input-manufacturer"><?php echo $entry_manufacturer; ?></label>
              <div class="col-sm-10">
                <select name="manufacturer_id" id="input-manufacturer_id" class="form-control">
                  <?php foreach ($manufacturers as $manufacturer) { ?>
                  <?php if ($manufacturer['manufacturer_id'] == $manufacturer_id) { ?>
                  <option value="<?php echo $manufacturer['manufacturer_id']; ?>" selected="selected"><?php echo $manufacturer['name']; ?></option>
                  <?php } else { ?>
                  <option value="<?php echo $manufacturer['manufacturer_id']; ?>"><?php echo $manufacturer['name']; ?></option>
                  <?php } ?>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label " for="input-name"><?php echo $entry_name; ?></label>
              <div class="col-sm-10">
                <input type="text" name="name" value="<?php echo $name; ?>" placeholder="<?php echo $entry_name; ?>" id="input-name" class="form-control" />
                <?php if ($error_name != '') { ?>
                <div class="text-danger"><?php echo $error_name; ?></div>
                <?php } ?>
              </div>
            </div>
            <div class="form-group">
              <div class="form-inline">
                <label class="col-sm-2 control-label " for="input-latitude"><?php echo $entry_latitude; ?></label>
                <div class="col-sm-4">
                  <input type="text" name="latitude" value="<?php echo $latitude; ?>" placeholder="" id="input-latitude" class="form-control" />
                </div>
                <label class="col-sm-2 control-label " for="input-longitude"><?php echo $entry_longitude; ?></label>
                <div class="col-sm-4">
                  <input type="text" name="longitude" value="<?php echo $longitude; ?>" placeholder="" id="input-longitude" class="form-control" />
                </div>
              </div>
            </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-sort-order"><?php echo $entry_sort_order; ?></label>
            <div class="col-sm-10">
              <input type="text" name="sort_order" value="<?php echo $sort_order; ?>" placeholder="<?php echo $entry_sort_order; ?>" id="input-sort-order" class="form-control" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript"><!--
$('#input-city').on('change', function(){
  $('#input-name').val('');
})
var options = {

url: function() {
  return 'index.php?route=catalog/city/autocomplete&token=<?php echo $token; ?>';
},
list: {
    match: {
    enabled: true
  }
},
  adjustWidth: false,
  getValue: "name"

};
  $('#input-city').easyAutocomplete(options);
  $('.time').datetimepicker({
     pickDate: false
  });
$('#get_geocode').on('click', function(){
  GMaps.geocode({
          address: $('#input-city').val().trim(),
          callback: function(results, status){
            if(status=='OK'){
              var latlng = results[0].geometry.location;
              const test = latlng.lat();
              $('#input-latitude').val(latlng.lat());
              $('#input-longitude').val(latlng.lng());        
            }
            else {
              alert(`Для "${$('#input-city').val()}" невдалося завантажити координати !!!!!`);
            }
          }
        });
})
//--></script>
<?php echo $footer; ?>
