<?php
/*
Template Name: about
*/
?>

<?php get_header('About');?>

<div class="about-content">
      <img src="<?php the_field('about_image')?>" alt="" srcset="" class="about-image">
      <div class="dotted-line"></div>
      <div class="about-info-page">
        <h3 style="margin-bottom: 0.7rem">About</h3>
        <p>
          <?php the_field('about_information')?>
        </p>
      </div>
    </div>

<?php get_footer();?>