<?php
/*
Template Name: Product
*/
?>



<?php get_header('Product');?>

<div style="display: flex; padding: 5rem; padding-top: 2rem">
      <div style="width: 450rem; height: auto">
      <?php $product = get_post() ?>  
      <?php if (has_post_thumbnail( $product->ID ) ): ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product->ID ),'large' ); ?>
              <img src="<?php echo $image[0]; ?>" alt="" srcset="" id="product-hero-image">
        <?php endif; ?>
        <div class="product-thumbnails">
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product->ID ),'thumbnail' ); ?>
              <div class="container">
                <img src="<?php echo $image[0]; ?>" alt="" srcset="" class="product-page-thumbnail">
                <div class="overlay"></div>
              </div>
          <?php $thumbs = get_field('thumbnails');?>
          <?php if($thumbs):
              foreach($thumbs as $thumb):?>
              <div class="container">
                  <img src="<?php echo esc_url($thumb['sizes']['thumbnail']); ?>" class="product-page-thumbnail">
                  <div class="overlay"></div>
              </div>
              <?php endforeach;
            endif;?>
        </div>
      </div>
      <div class="dotted-line"></div>
      <div class="about-info">
        <h3 class="product-page-title"><?php the_title();?></h3>
        <p class="product-info">
          <?php the_field("product_information");?>
        </p>
        <h2 class="price">£<?php the_field("product_price");?></h2>
        <p style="font-style: italic;">For purchasing options, please contact me below.</p>
        <div class="btns">
          <button class="btn-primary">Purchase</button>
        </div>
      </div>
    </div>
    <section style="padding-left: 3rem; display: flex;
     justify-content: center;
     align-items: center;">
     <?php $product_cat =  get_the_terms( $product->ID, 'Product types' )[0]->name;


        $pt = get_posts(array(
          'post_type'   => 'collection',
          'hide_empty' => false,
          ));
        
          foreach ($pt as $p):

              $cat = get_the_terms( $p->ID, 'Product types' )[0]->name;
              if ($cat == $product_cat):
                  if($p->ID!=$product->ID):
                    ?>
                   <div class="project-item-product">
                   <?php if (has_post_thumbnail( $p->ID ) ): ?>
                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $p->ID), 'thumbnail' ); ?>
                        <div class="container">
                          <a  href="<?php echo esc_html( $p->guid ); ?>">
                          <img src="<?php echo $image[0]; ?>" class="product-image-shop" alt="" srcset="">
                          </a>
                          <div class="overlay"></div>
                        </div>
                   <?php endif; ?>
                      <h3><?php echo $p->post_title;?></h3>
                      <p>£<?php echo $p->product_price;?></p>
                    </div>
                    <?php
                     endif;
              endif;
          endforeach;
      ?>
    </section>

<?php get_footer();?>