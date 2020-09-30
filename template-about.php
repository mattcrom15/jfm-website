<?php
/*
Template Name: about
*/
?>

<?php get_header('About');?>

<div style="display: flex; padding: 5rem">
      <img src="<?php the_field('about_image')?>" alt="" srcset="">
      <div class="dotted-line"></div>
      <div class="about-info">
        <h3 style="margin-bottom: 0.7rem">About</h3>
        <p>
          <?php the_field('about_information')?>
        </p>
      </div>
    </div>

<?php get_footer();?>