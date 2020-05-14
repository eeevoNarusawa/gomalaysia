<?php get_header(); ?>

<!-- Body Start -->
  <div id="content">
    <div class="mainContent">
      <?php
        if (have_posts()) :
        	while (have_posts()) :
        		the_post();
        		get_template_part('content-single');
        	endwhile;
        endif;
      ?>
    </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
