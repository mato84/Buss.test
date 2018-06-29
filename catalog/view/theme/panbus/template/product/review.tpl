<?php if ($reviews) { ?>
<?php foreach ($reviews as $review) { ?>
<div class="review-item" itemprop="review" itemscope itemtype="http://schema.org/Review">
  <div class="review-item__author" itemprop="author"><?php echo $review['author']; ?></div>
  <div class="review-item__date" itemprop="datePublished"><?php echo $review['date_added']; ?></div>
  <div class="review-item__rating rating" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
      <span itemprop="ratingValue" style="display: none;">5</span>      
      <?php for ($i = 1; $i <= 5; $i++) { ?>
      <?php if ($review['rating'] < $i) { ?>
      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
      <?php } else { ?>
      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
      <?php } ?>
      <?php } ?>
  </div>      
  <div class="review-item__text" itemprop="description"><?php echo $review['text']; ?></div>  
</div>
<?php } ?>
<div class="text-right"><?php echo $pagination; ?></div>
<?php } else { ?>
<?php } ?>
