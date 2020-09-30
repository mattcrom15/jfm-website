<?php
/*
Template Name: Contact
*/
?>

<?php get_header('Contact');?>
<div class="contact-info">
      <div>
        <h3>Contact</h3>
        <p><strong>Phone: </strong><?php the_field('contact_number')?></p>
        <p><strong>Email: </strong><?php the_field('contact_email')?></p>
      </div>
    </div>


<?php get_footer();?>