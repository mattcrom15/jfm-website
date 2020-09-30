<?php
/*
Template Name: shop
*/
?>

<?php get_header('Shop');?>
<div class="shop-grid">
      
<?php 

        $pt = get_posts(array(
            'post_type'   => 'collection',
            'hide_empty' => false,
            'posts_per_page'=>-1,
        ));

        foreach ($pt as $p):
            
            ?>
            <div class="shop-item">
            <?php if (has_post_thumbnail( $p->ID ) ): ?>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $p->ID), 'product-thumbnails' ); ?>
            <div class="container">
            <a  href="<?php echo esc_html( $p->guid ); ?>">
              <img src="<?php echo $image[0]; ?>" class="product-image-shop" alt="" srcset="">
            </a>
            <div class="overlay"></div>
            </div>
        <?php endif; ?>
                  <h3 class="project-title"><?php echo $p->post_title?></h3>
                  <p>£<?php echo $p->product_price?></p>
            </div>
        <?php endforeach;?>
        

        </div>

<?php get_footer();?>