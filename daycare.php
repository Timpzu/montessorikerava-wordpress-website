<?php /* Template Name: Päivähoito */ ?>
<?php get_header(); ?>
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
<header class="page-header" style="background-image:url('<?php echo $backgroundImg[0]; ?>');">
  <div class="container-fluid header-heading">
    <div class="row align-items-center">
      <div class="col-md-5 offset-md-3">
        <h2><?php the_title()?></h2>
      </div>
    </div>
  </div>
  <div class="placeholder-page"></div>
</header>
<main class="container-fluid">
  <div class="row">
    <section class="col-md-6 offset-md-3">
      <?php
        if (have_posts()) :
          while (have_posts()) : the_post(); ?>
          <p><?php the_content() ?></p>
       <?php endwhile;
       else :
         echo "<p>Sisältö ei löytyny.</p>";
       endif;
       ?>
    </section>
  </div>
  <div class="row">
    <section class="col-md-6 offset-md-3">
      <?php if (is_active_sidebar('daycare_widget_1')) : ?>
        <div class="widget_container">
          <?php dynamic_sidebar('daycare_widget_1'); ?>
        </div>
      <?php endif; ?>
    </section>
  </div>
</main>
<?php get_footer(); ?>