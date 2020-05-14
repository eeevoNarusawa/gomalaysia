<?php get_header(); ?>

<!-- Body Start -->
<div id="content">
    <div class="mainContent">
      <article>
      	<div class="page-header">
      	<h1 class="page-title-single">
      		<?php the_title(); ?>
      		<?php single_cat_title(); ?>
      	</h1>
      	</div>
      	<?php get_template_part('social-button'); ?>
      	<section class="entry-content">
          <?php while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
      	</section>
      </article>

      <div class="single-jobsearch-link-eyecatch">
        <a href="/jobsearch">
          <img alt="マレーシアで働こう" src="<?php bloginfo('template_url'); ?>/images/jobsearch-relation.jpg"/>
        </a>
      </div>

      <div class="jobsearch-link-cont">
        <a href="/jobsearch">
          <p class="single-jobsearch-link">マレーシア求人情報の一覧はこちらから</p>
        </a>
      </div>

      <p class="single-jobsearch-recommend-comment"><?php the_field('jobsearch_relation'); ?></p>

      <div class="social-blank"></div>
      <div class="social-button-left">
      <?php get_template_part('social-button'); ?>
      </div>

    </div><!-- mainContent -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
