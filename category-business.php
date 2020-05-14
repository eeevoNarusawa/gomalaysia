<?php get_header(); ?>
<!--Main-->

<!-- Body Start -->
<div id="content">
  <div class="mainContent">
    <div class="title"><img src="<?php bloginfo('template_url'); ?>/images/business-title.png" width="36px" height="36px" />ビジネス</div>
    <img class="categorytop-img" src="<?php bloginfo('template_url'); ?>/images/business-top.jpg" width="660px" height="200px" alt="Go Malaysia 「ビジネス」カテゴリートップ" />

    <div class="content-latestNew">
      <div class="title">特集&lt;Pick Up&gt;</div>
      <div class="content-division"></div>

      <?php
      $posts=query_posts( array(
      'post_type' => 'post' ,
      'cat' => 7 ,
      'posts_per_page' => 4 ,
      'paged' => get_query_var( 'paged' ),
      'meta_query' => array(
      array( 'key'=>'is_feature_content',
      'value'=>'yes',
      ),
      'relation'=>'AND'
      )
      )
      );
      ?>
      <?php
      if ($posts) :
      ?>
      <!-- wp_loop -->
      <?php
      global $post;
      if($posts):
      $count = 0;
      foreach($posts as $post):
      setup_postdata($post);
      $count = $count + 1;
      ?>
      <div  class="content-pickup-left">
        <div class="content-pickup-left-picture">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('front-page-pick-up-thumbnail', array('alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0'))); ?>
          </a>
        </div>
        <?php
        $title = the_title( '' , '' , false );
        if (mb_strlen($title,"UTF-8")  <= 19) {
        $addstyle = "style='text-align:center;'";
        } else {
        $addstyle = "style='text-align:left;'";
        }
        ?>
        <div class="content-pickup-left-text"  <?php echo $addstyle; ?>>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </div>
      </div>
      <?php if (($count % 2) == 0) : ?>
      <div class="single-content-blank"></div>
      <?php endif; ?>
      <?php
      endforeach;
      endif;
      else :
      echo "No data";
      endif;
      ?>
      <?php wp_reset_query(); ?>
    </div><!-- content-latestNew -->

    <div class="content-latestNew">
      <div class="title">カテゴリーから記事を探す</div>
      <div class="content-division"></div>

      <div  class="content-pickup-left">
        <div class="content-pickup-left-picture">
          <a href="<?php echo home_url('/category/business/business-insurance/') ?>"><img src="<?php bloginfo('template_url'); ?>/images/business-insurance.png" width="310px" height="200px" alt="企業保険"></a>
        </div>
        <div class="content-pickup-left-text"><a href="<?php echo home_url('/category/business/business-insurance/') ?>">企業保険</a></div>
      </div>

      <div  class="content-pickup-left">
        <div class="content-pickup-left-picture">
          <a href="<?php echo home_url('/category/business/interviews/') ?>"><img src="<?php bloginfo('template_url'); ?>/images/interviews.png" width="310px" height="200px" alt="マレーシアインタビューシリーズ"></a>
        </div>
        <div class="content-pickup-left-text"><a href="<?php echo home_url('/category/business/interviews/') ?>">マレーシアインタビューシリーズ</a></div>
      </div>

      <div  class="content-pickup-left">
        <div class="content-pickup-left-picture">
          <a href="<?php echo home_url('/category/business/bz-column/') ?>"><img src="<?php bloginfo('template_url'); ?>/images/bz-column.png" width="310px" height="200px" alt="コラム/ガイド"></a>
        </div>
        <div class="content-pickup-left-text"><a href="<?php echo home_url('/category/business/bz-column/') ?>">コラム/ガイド</a></div>
      </div>

      <div  class="content-pickup-left">
        <div class="content-pickup-left-picture">
          <a href="<?php echo home_url('/category/business/coworking-space/') ?>"><img src="<?php bloginfo('template_url'); ?>/images/coworking-space.png" width="310px" height="200px" alt="オフィススペース"></a>
        </div>
        <div class="content-pickup-left-text"><a href="<?php echo home_url('/category/business/coworking-space/') ?>">オフィススペース</a></div>
      </div>
    </div>

    <div class="content-latestNew">
      <div class="title">マレーシアで働こう！</div>
      <div class="content-division"></div>
      <!-- 1st -->
      <div  class="content-pickup-left">
        <div class="content-pickup-left-picture">
          <a href="<?php echo home_url('/jobsearch/'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/jobsearch-eyecatch.jpg" width="310px" height="200px" alt="マレーシア求人リスト" /></a>
        </div>
        <div class="content-pickup-left-text"><a href="<?php echo home_url('/jobsearch/'); ?>">マレーシア求人リスト</a></div>
      </div>
    </div>

  </div><!-- mainContent -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
