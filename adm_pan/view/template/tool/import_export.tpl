<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">

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
  <div class="panel-body">
    <form action="<?php echo $link_import; ?>" method="post" enctype="multipart/form-data" id="form-restore" class="form-horizontal">
      <div class="form-group">
          <input type="file" name="import" id="input-import" />
          <br>
          <input type="submit" class="btn btn-primary" name="" value="Завантажити">
      </div>
    </form>
  </div>
  </div>
</div>
<?php echo $footer; ?>
