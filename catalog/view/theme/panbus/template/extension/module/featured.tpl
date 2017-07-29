<h3><?php echo $heading_title; ?></h3>
<div class="row">
  <?php foreach ($products as $product) { ?>
        <div class="product-layout product-list">
          <div class="product-thumb">
            <div class="image"><a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive" /></a></div>
              <div class="caption">
                <h3><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h3>
                <div class="description-group">
                  <p><?php echo $product['description']; ?></p>
                </div>
                <?php if ($product['price']) { ?>
                <div class="price-group">
                  <p class="price">
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
                <div class="rating">
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
