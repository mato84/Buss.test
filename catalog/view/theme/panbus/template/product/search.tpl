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
    <div id="content"><?php echo $content_top; ?>
      <?php if ($products) { ?>
        <h1><?php echo $text_search; ?> <span class="search-result"><?php echo $entry_search; ?></span></h1>
        <div class="row">
          <div class="col-md-4 col-xs-12 sort-group ">
            <div class="form-group input-group input-group-sm">
              <label class="input-group-addon" for="input-sort"><?php echo $text_sort; ?></label>
              <select id="input-sort" class="form-control" onchange="location = this.value;">
                <?php foreach ($sorts as $sorts) { ?>
                <?php if ($sorts['value'] == $sort . '-' . $order) { ?>
                <option value="<?php echo $sorts['href']; ?>" selected="selected"><?php echo $sorts['text']; ?></option>
                <?php } else { ?>
                <option value="<?php echo $sorts['href']; ?>"><?php echo $sorts['text']; ?></option>
                <?php } ?>
                <?php } ?>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <?php foreach ($products as $product) { ?>
        <div class="product-layout product-list">
          <div itemtype="http://schema.org/Product" itemscope class="product-thumb">
            <div class="product-thumb__caption-left">
              <div class="image"><a href="<?php echo $product['href']; ?>"><img itemprop="image" src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive" /></a>
              </div>
              <div class="product-thumb__manufacturer">
                <ul class="list-unstyled">
                  <li><?php echo $text_manufacturer; ?><br> <a><span itemprop="brand"><?php echo $product['manufacturer']; ?></span></a></li>
                </ul>
              </div>
              <div class="product-thumb__category">
                <ul class="list-unstyled">
                  <li><?php echo $text_bus; ?><br> <a><span><?php echo $product['main_сategory']; ?></span></a></li>
                </ul>
              </div>
            </div>
            <div class="caption">
                <h3 itemprop="name"><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h3>
                <div class="description-group" itemprop="description">
                  <div class="form-group_margin">
                    <label class="control-label"><?php echo $product['from_name']?></label>
                    <div class="form-group_bg">
                      <div class="form-group__value_time"><?php echo $product['departure_time']; ?></div>
                      <div class="form-group__value"><?php echo $product['departure_from']; ?></div>
                    </div>
                  </div>
                  <div class="form-group_margin">
                    <label class="control-label"><?php echo $product['to_name']?></label>
                    <div class="form-group_bg">
                      <div class="form-group__value_time"><?php echo $product['arrival_time']; ?></div>
                      <div class="form-group__value"><?php echo $product['departure_to']; ?></div>
                    </div>
                  </div>
                  <div class="form-group_margin">
                    <label><?php echo $text_time_road; ?></label>
                    <div class="form-group_bg">
                      <div class="form-group__value form-group__value_time form-group__value_timeinroad"><?php echo $product['time_road']; ?></div>
                    </div>
                  </div>
                </div>
                <?php if ($product['price']) { ?>
                <div class="price-group">
                  <p class="price" itemscope itemprop="offers" itemtype="http://schema.org/Offer">
                    <meta itemprop="price" content="<?php echo rtrim(preg_replace("/[^0-9\.]/", "", ($product['special'] ? $product['special'] : $product['price'])), '.'); ?>">
                    <meta itemprop="priceCurrency" content="<?php echo $product['currency'] ?>">
                    <link itemprop="availability" href="http://schema.org/<?php echo ($product['availability'] ? "InStock" : "OutOfStock") ?>" />
                    <?php if (!$product['special']) { ?>
                    <?php echo $product['price']; ?>
                    <?php } else { ?>
                    <span class="price-old"><?php echo $product['price']; ?></span>
                    <span class="price-new"><?php echo $product['special']; ?></span>
                    <?php } ?>
                  </p>
                <div class="button-group">
                  <a class="btn btn-default" href="<?php echo $product['href']; ?>"><?php echo $button_cart; ?></a>
                </div>
                </div>
                <?php } ?>
                <?php if ($product['rating']) { ?>
                <div class="rating" itemscope itemprop="aggregateRating" itemtype="http://schema.org/AggregateRating">
                  <meta itemprop="reviewCount" content="<?php echo preg_replace("/[^0-9]/", "", $product['reviews']); ?>">
                  <meta itemprop="ratingValue" content="<?php echo $product['rating']; ?>">
                  <meta itemprop="bestRating" content="5"><meta itemprop="worstRating" content="1">
                  <?php for ($i = 1; $i <= 5; $i++) { ?>
                  <?php if ($product['rating'] < $i) { ?>
                  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                  <?php } else { ?>
                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                  <?php } ?>
                  <?php } ?>
                </div>
                <?php } ?>
              </div>
          </div>
        </div>
          <?php } ?>
        </div>
        <div class="row">
          <div class="col-sm-6 text-left"><?php echo $pagination; ?></div>
          <div class="col-sm-6 text-right"><?php echo $results; ?></div>
        </div>
      <?php } else { ?>
      <div class="well">
      <p><?php echo $text_empty; ?></p>
      <?php } ?>
      <?php echo $content_bottom; ?>
      </div>
    </div>
    <?php echo $column_right; ?></div>
</div>
<?php echo $footer; ?>
