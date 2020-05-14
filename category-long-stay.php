<?php get_header(); ?>
<!--Main-->

<!-- Body Start -->
<div id="content">
  <div class="mainContent">
    <div class="title"><img src="<?php bloginfo('template_url'); ?>/images/longstay-title.png" width="36px" height="36px" />ロングステイ</div>
    <img class="categorytop-img" src="<?php bloginfo('template_url'); ?>/images/long-stay-top.jpg" width="660px" height="200px" alt="Go Malaysia 「ロングステイ」カテゴリートップ" />

    <div class="content-latestNew">
      <div class="title">特集&lt;Pick Up&gt;</div>
      <div class="content-division"></div>

      <?php
        $posts=query_posts( array(
          'post_type' => 'post' ,
          'cat' => 6 ,
          'posts_per_page' => 4 ,
          'paged' => get_query_var( 'paged' ),
          'meta_query' => array(
          array( 'key'=>'is_feature_content',
          'value'=>'yes',
          ),
        'relation'=>'AND'
        ))
      );?>
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
    </div>

    <div class="content-latestNew">
      <div class="title">カテゴリーから記事を探す</div>
      <div class="content-division"></div>
      <!-- 1st -->
      <div  class="content-pickup-left">
        <div class="content-pickup-left-picture">
          <a href="<?php echo home_url('/category/long-stay/hair-salon/') ?>"><img src="<?php bloginfo('template_url'); ?>/images/hair-salon.png" width="310px" height="200px" alt="おすすめ日系ヘアサロン in マレーシア"></a>
        </div>
        <div class="content-pickup-left-text"><a href="<?php echo home_url('/category/long-stay/hair-salon/') ?>">おすすめ日系ヘアサロン in マレーシア</a></div>
      </div>
      <!-- 2nd -->
      <div  class="content-pickup-left">
        <div class="content-pickup-left-picture">
          <a href="<?php echo home_url('/category/long-stay/ls-health-beauty/') ?>"><img src="<?php bloginfo('template_url'); ?>/images/ls-health-beauty.png" width="310px" height="200px" alt="美容・健康"></a>
        </div>
        <div class="content-pickup-left-text"><a href="<?php echo home_url('/category/long-stay/ls-health-beauty/') ?>">健康・美容</a></div>
      </div>
      <!-- 3rd -->
      <div  class="content-pickup-left">
        <div class="content-pickup-left-picture">
          <a href="<?php echo home_url('/category/long-stay/malaysia-life/') ?>"><img src="<?php bloginfo('template_url'); ?>/images/malaysia-life.png" width="310px" height="200px" alt="くらしのヒント"></a>
        </div>
        <div class="content-pickup-left-text"><a href="<?php echo home_url('/category/long-stay/malaysia-life/') ?>">くらしのヒント</a></div>
      </div>
      <!-- 4th -->
      <div  class="content-pickup-left">
        <div class="content-pickup-left-picture">
          <a href="<?php echo home_url('/category/long-stay/investment/') ?>"><img src="<?php bloginfo('template_url'); ?>/images/investment.png" width="310px" height="200px" alt="マレーシア資産運用ガイド"></a>
        </div>
        <div class="content-pickup-left-text"><a href="<?php echo home_url('/category/long-stay/investment/') ?>">マレーシア資産運用ガイド</a></div>
      </div>
      <!-- 5th -->
      <div  class="content-pickup-left">
        <div class="content-pickup-left-picture">
          <a href="<?php echo home_url('/category/long-stay/ls-column/') ?>"><img src="<?php bloginfo('template_url'); ?>/images/longstay-guide.png" width="310px" height="200px" alt="コラム/ガイド"></a>
        </div>
        <div class="content-pickup-left-text"><a href="<?php echo home_url('/category/long-stay/ls-column/') ?>">マレーシア移住情報</a></div>
      </div>

    </div>

  </div><!-- mainContent -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
