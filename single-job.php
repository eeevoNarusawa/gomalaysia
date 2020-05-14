<?php get_header(); ?>

<!-- Body Start -->
<div id="content">
    <div class="mainContent">
      <article>
      	<div class="page-header">
      	<h1 class="page-title-single">
          <?php while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
      	</h1>
      	</div>
      	<?php get_template_part('social-button'); ?>
      	<section class="entry-content">
          <?php the_field('job_details'); ?>
          <?php /*while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; */?>
      	</section>
        <a href="https://lin.ee/4i1d4Vi" target="_blank">
          <img class="p-job-single--banner" src="<?php bloginfo('template_url'); ?>/images/line_new.jpg" alt="友だち追加して簡単お問い合わせ">
        </a>
        <section class="p-job-single--contact">
          <?php echo do_shortcode('[contact-form-7 id="13693" title="求人情報問い合わせ"]'); ?>
        </section>
      </article>

      <?php /*
      <div class="single-jobsearch-link-eyecatch">
        <a href="/jobsearch">
          <img alt="マレーシアで働こう" src="<?php bloginfo('template_url'); ?>/images/jobsearch-relation.jpg"/>
        </a>
      </div>

      <div class="jobsearch-link-cont">
        <a href="/jobsearch">
          <p class="single-jobsearch-link">テストマレーシア求人情報の一覧はこちらから</p>
        </a>
      </div>

      <p class="single-jobsearch-recommend-comment"><?php the_field('jobsearch_relation'); ?></p>
      */ ?>

      <div class="social-blank"></div>
      <div class="social-button-left">
      <?php get_template_part('social-button'); ?>
      </div>

    </div><!-- mainContent -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
