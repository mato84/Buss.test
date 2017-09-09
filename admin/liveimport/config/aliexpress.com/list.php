<?php
$products = tags_link(' .product ');
$page = rev_inside("/", ".html", $url);
if ($page != $max_pages)
    $nextpage = tag_link(' .page-next ');

