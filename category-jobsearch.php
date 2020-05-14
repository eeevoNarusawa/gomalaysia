<?php get_header(); ?>
<!--Main-->

<!-- Body Start -->
<div id="content">
  <div class="mainContent">
    <div class="content-latestNew">
      <div class="jobsearch-main-title">
        <div class="title">最新の求人情報</div>
        <div class="content-division"></div>
      </div>

    <?php
      if ( is_category() ) {
        $cat = get_query_var( 'cat' );
        $paged = get_query_var( 'paged' );
        query_posts( array( 'category__and' => array( $cat ), 'paged' => $paged ) );
      }

      if (have_posts()) :
        while (have_posts()) :
      the_post();
    ?>
    <div class="jobsearch-cont">
      <div class="jobsearch-date"><p><?php the_time('Y/m/d'); ?></p></div>
      <div class="jobsearch-title"><a href="<?php the_permalink(); ?>"><?php the_content(); ?></a></div>
    </div>
    <?php
      endwhile;

    else:
    ?>
    <p>記事はありません</p>
    <?php
      endif;
    ?>

    <?php if (function_exists("pagination")) {
      pagination($additional_loop->max_num_pages);
    } ?>

    <div class="jobsearch-relation"><!-- 求人関連記事 -->
      <?php
         $posts = get_posts( array(
          //  ここに取得条件を記入
          'category' => 82, //77 82
          'posts_per_page' => 5
         ));
         foreach( $posts as $post ):
         setup_postdata( $post );
      ?>
      <div class="jobsearch-relation-cont">
        <a href="<?php the_permalink(); ?>">
      		<?php the_post_thumbnail('archive_thumbnail', array('alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0'))); ?>
      	</a>
      	<div class="entry-header">
      		<h3 class="entry-title">
      			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      		</h3>
      		<div class="excerpt-part-area"><?php the_field('archive_explain'); ?></div>
      	</div>
      </div>
      <?php
        endforeach;
        wp_reset_postdata();
      ?>
    </div>

    </div><!-- content-latestNew -->

  </div><!-- mainContent -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
