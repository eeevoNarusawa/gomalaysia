<?php get_header(); ?>
<!--Main-->

<!-- Body Start -->
        <div id="content">
            <div class="mainContent">
                <?php
if (have_posts()) :
	while (have_posts()) :
		the_post();
		get_template_part('content-page');
	endwhile;
endif;
?>
            </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
