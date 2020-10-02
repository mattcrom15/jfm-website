<?php
/*
Template Name: Home
*/
?>

<?php get_header('Home');?>


<img src="<?php echo the_field('hero_image')?>" class="hero-image" alt="">
    <div class="home-project-items">
    <?php

$i=1;
// Check rows exists.
if( have_rows('product_feed') ):
  // Loop through rows.
  while( have_rows('product_feed') ) : $row = the_row();

  if($i%3){
    // Load sub field value.
    $sub_value = get_sub_field('product_item');
    ?><div class="home-project-item-small">
        <?php if (has_post_thumbnail( $sub_value->ID ) ): ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $sub_value->ID ),'medium' ); ?>
            <div class="container">
              <a class="home-project-image" href="<?php echo esc_html( $sub_value->guid ); ?>">
                <img src="<?php echo $image[0]; ?>" alt="" srcset="">
              </a>
              <div class="overlay"></div>
            </div>
        <?php endif; ?>
        <h3 class="project-title"><?php echo esc_html( $sub_value->post_title ); ?></h3>
        <p class="project-subtitle">£<?php echo esc_html( $sub_value->product_price ); ?></p>
      </div>
      <?php
  }else{
    // Load sub field value.
    $sub_value = get_sub_field('product_item');
    ?><div class="home-project-item-large">
        <?php if (has_post_thumbnail( $sub_value->ID ) ): ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $sub_value->ID ),'medium' ); ?>
            <div class="container">
              <a class="home-project-image" href="<?php echo esc_html( $sub_value->guid ); ?>">
                <img src="<?php echo $image[0]; ?>" alt="" srcset="">
              </a>
              <div class="overlay"></div>
            </div>
        <?php endif; ?>
        <h3 class="project-title"><?php echo esc_html( $sub_value->post_title ); ?></h3>
        <p class="project-subtitle">£<?php echo esc_html( $sub_value->product_price ); ?></p>
      </div>
      <?php
  }
      $i++;
      
  // End loop.
  endwhile;

// No value.
else :
  // Do something...
endif;
?>
    </div>


<?php get_footer();?>