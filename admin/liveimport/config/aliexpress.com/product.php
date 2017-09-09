<?php
$name = tag_text(' .product-name ');
find_manufacturer();
$price = tag_text(' [itemprop=price], [itemprop=lowPrice] ');
$sku = rev_inside('/', '.html', $url);
$weight = tag_text(' #product-desc .pnl-packaging-weight ');
$main_image = tag_image(' #magnifier img ');
$images = replace('.jpg_*.jpg', '.jpg', tags_image(' .img-thumb-item img '));
$attr_names = tags_text(' .product-params dt ');
$attr_values = tags_text(' .product-params dd ');
$attributes = shred_arrays($attr_names, $attr_values);
$opts_names = tags_html(' .sku-title ');
$opts_values = tags_html(' #product-info-sku span ');
$options = pgroup($opts_names, $opts_values, '', 'Select');

if (!new_product() and !$update_description) return true;
if (strlen($loc = inside('//', '.', $url)) == 2)
    http_get("http://$loc.aliexpress.com/getDescModuleAjax.htm?productId=$sku");
    else http_get("http://desc.aliexpress.com/getDescModuleAjax.htm?productId=$sku");

$description = rev_inside("Description='", "';");
$description = replace(array('<a*>', '</a>'), '', $description);

