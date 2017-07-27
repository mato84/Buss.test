<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>">
<!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $title;  ?></title>
<base href="<?php echo $base; ?>" />
<?php if ($description) { ?>
<meta name="description" content="<?php echo $description; ?>" />
<?php } ?>
<?php if ($keywords) { ?>
<meta name="keywords" content= "<?php echo $keywords; ?>" />
<?php } ?>
<meta property="og:title" content="<?php echo $title; ?>" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo $og_url; ?>" />
<?php if ($og_image) { ?>
<meta property="og:image" content="<?php echo $og_image; ?>" />
<?php } else { ?>
<meta property="og:image" content="<?php echo $logo; ?>" />
<?php } ?>
<meta property="og:site_name" content="<?php echo $name; ?>" />
<script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="catalog/view/javascript/jquery/jquery.easy-autocomplete.min.js"></script>

<link href="catalog/view/javascript/jquery/easy-autocomplete.css" type="text/css" rel="stylesheet" />
<link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
<script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i&amp;subset=cyrillic" rel="stylesheet">
<link href="catalog/view/theme/panbus/stylesheet/stylesheet.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<?php foreach ($styles as $style) { ?>
<link href="<?php echo $style['href']; ?>" type="text/css" rel="<?php echo $style['rel']; ?>" media="<?php echo $style['media']; ?>" />
<?php } ?>
<script src="catalog/view/javascript/common.js" type="text/javascript"></script>
<?php foreach ($links as $link) { ?>
<link href="<?php echo $link['href']; ?>" rel="<?php echo $link['rel']; ?>" />
<?php } ?>
<?php foreach ($scripts as $script) { ?>
<script src="<?php echo $script; ?>" type="text/javascript"></script>
<?php } ?>
<?php foreach ($analytics as $analytic) { ?>
<?php echo $analytic; ?>
<?php } ?>
</head>
<body class="<?php echo $class; ?>">
<header>
  <div class="block-bg-overlay"></div>
  <div class="header-content">
    <div class="header-content-inner">
      <img src="../image/catalog/logo-b.png" title="<?php echo $name; ?>" alt="<?php echo $name; ?>"/>
      <h1><span>Автобусні міжнародні перевезення</span><br>в потрібний вам пункт призначення</h1>
    </div>  
    <div class="header-search">
      <div class="search-item ">
        <i class="fa fa-map-marker" aria-hidden="true"></i>
        <input type="text" id="wherefrom" placeholder="<?php echo $text_wherefrom; ?>">
        <div class="error-wherefrom"><?php echo $text_choise_wherefrom; ?></div>
      </div>
      <div class="search-item">
        <i class="fa fa-map-marker" aria-hidden="true"></i>
        <input type="text" id="where" placeholder="<?php echo $text_from; ?>">
        <div class="error-where"><?php echo $text_choise_from; ?></div>
      </div>
      <div class="search-item">
        <button class="btn btn-primary"><?php echo $text_search; ?></button>
      </div>
    </div>
  </div>
  <div class="header-scroll">
    <a href="#content" class="page-scroll"><?php echo $text_beast_deals; ?><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
  </div>
</header>
<?php if ($categories) { ?>
  <nav id="menu" class="navbar navbar-fixed-top affix-top">
    <div class="navbar-header">
      <div id="logo"><a href="<?php echo $home; ?>"><img src="<?php echo $logo; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" class="img-responsive" /></a>
      </div>
      <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
    </div>  
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav corner-border">
        <?php foreach ($categories as $category) { ?>
        <?php if ($category['children']) { ?>
        <li class="dropdown"><a href="<?php echo $category['href']; ?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo $category['name']; ?></a>
          <div class="dropdown-menu">
            <div class="dropdown-inner">
              <?php foreach (array_chunk($category['children'], ceil(count($category['children']) / $category['column'])) as $children) { ?>
              <ul class="list-unstyled">
                <?php foreach ($children as $child) { ?>
                <li><a href="<?php echo $child['href']; ?>"><?php echo $child['name']; ?></a></li>
                <?php } ?>
              </ul>
              <?php } ?>
            </div>
            <a href="<?php echo $category['href']; ?>" class="see-all"><?php echo $text_all; ?> <?php echo $category['name']; ?></a> </div>
        </li>
        <?php } else { ?>
        <li><a href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?></a></li>
        <?php } ?>
        <?php } ?>
        <li><a href=""><?php echo $text_gallery; ?></a></li>
        <li><a href="<?php echo $contact; ?>"><?php echo $text_contact; ?></a></li>
          <?php if ($logged) { ?>
            <li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
            <?php } else { ?>
            <li><a href="<?php echo $login; ?>"><?php echo $text_login; ?></a></li>
          <?php } ?>
      </ul>
    </div>
  </nav>
<?php } ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="catalog/view/javascript/panbus.js"></script>

<script type="text/javascript">
var options = {

url: function() {

  return "index.php?route=common/search/autocomplete&field_id="+ document.activeElement.id;
},
list: {
  // maxNumberOfElements: 10,
  // onChooseEvent:function(){
  //
  // },
  match: {
    enabled: true
  }
},
template: {
      type: "description",
      fields: {
          description: "contry_iso"
      }
  },

  adjustWidth: false,
  getValue: "name"

};
  $('#wherefrom').easyAutocomplete(options);
  $('#where').easyAutocomplete(options);
</script>
