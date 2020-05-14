<?php get_header(); ?>
<!--Main-->

<!-- Body Start -->
        <div id="content">
            <div class="mainContent">
            	<div class="title"><img src="<?php bloginfo('template_url'); ?>/images/travel-title.png" width="36px" height="36px" />トラベル</div>
                <img class="categorytop-img" src="<?php bloginfo('template_url'); ?>/images/travel-top.jpg" width="660px" height="200px" alt="Go Malaysia 「トラベル」カテゴリートップ" />

                <div class="content-latestNew">
                    <div class="title">特集&lt;Pick Up&gt;</div>
                    <div class="content-division"></div>

 		<?php
		$posts=query_posts( array(
  		'post_type' => 'post' ,
  		'cat' => 1 ,
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
                </div>

<div class="content-latestNew">
  <div class="title">トラベルお役立ち情報</div>
  <div class="content-division"></div>
  <div  class="content-pickup-left">
    <div class="content-pickup-left-picture">
      <a href="<?php echo home_url('/category/travel/tr-information/before-info/'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/before-trip.png" width="310px" height="200px" alt="旅行前のお役立ち情報" /></a>
    </div>
    <div class="content-pickup-left-text"><a href="<?php echo home_url('/category/travel/tr-information/before-info/'); ?>">旅行前のお役立ち情報</a></div>
  </div>

  <div  class="content-pickup-left">
    <div class="content-pickup-left-picture">
      <a href="<?php echo home_url('/category/travel/tr-information/now-info/'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/during-trip.png" width="310px" height="200px" alt="旅行中のお役立ち情報" /></a>
    </div>
    <div class="content-pickup-left-text"><a href="<?php echo home_url('/category/travel/tr-information/now-info/'); ?>">旅行中のお役立ち情報</a></div>
  </div>
</div>

<div class="content-latestNew">
  <div class="title">マレーシアのどこに行く？</div>
  <div class="content-division"></div>

<!--TRAVEL KUALA LUMPUR-->
  <div  class="content-pickup-left">
    <div class="content-pickup-left-picture">
      <a href="<?php echo home_url('/category/travel/tr-kl/'); ?>">
        <img src="<?php bloginfo('template_url'); ?>/images/travel-kualalumpur-area.png" width="310px" height="200px" alt="クアラルンプールエリア" title="クアラルンプールエリア" />
      </a>
    </div>

    <div class="content-pickup-left-text" style='text-align:center;'>
      <a href="<?php echo home_url('/category/travel/tr-kl/'); ?>">クアラルンプールエリア</a>
    </div>
  </div>

<!--TRAVEL ペナン島-->
  <div  class="content-pickup-left">
    <div class="content-pickup-left-picture">
      <a href="<?php echo home_url('/category/travel/tr-penang/'); ?>">
        <img src="<?php bloginfo('template_url'); ?>/images/travel-penang.png" width="310px" height="200px" alt="ペナン島" title="ペナン島" />
      </a>
    </div>

    <div class="content-pickup-left-text" style='text-align:center;'>
      <a href="<?php echo home_url('/category/travel/tr-penang/'); ?>">ペナン島</a>
    </div>
  </div>

<!--TRAVEL マラッカ-->
  <div  class="content-pickup-left">
    <div class="content-pickup-left-picture">
      <a href="<?php echo home_url('/category/travel/tr-melaka/'); ?>">
        <img src="<?php bloginfo('template_url'); ?>/images/travel-melaka.png" width="310px" height="200px" alt="マラッカ" title="マラッカ" />
      </a>
    </div>

    <div class="content-pickup-left-text" style='text-align:center;'>
      <a href="<?php echo home_url('/category/travel/tr-melaka/'); ?>">マラッカ</a>
    </div>
  </div>

<!--TRAVEL リゾート-->
  <div  class="content-pickup-left">
    <div class="content-pickup-left-picture">
      <a href="<?php echo home_url('/category/travel/tr-resort/'); ?>">
        <img src="<?php bloginfo('template_url'); ?>/images/travel-resort-area.png" width="310px" height="200px" alt="魅惑のビーチリゾート" title="魅惑のビーチリゾート" />
      </a>
    </div>

    <div class="content-pickup-left-text" style='text-align:center;'>
      <a href="<?php echo home_url('/category/travel/tr-resort/'); ?>">魅惑のビーチリゾート</a>
    </div>
  </div>
</div><!-- content-latestNew -->


<!-- 20190531 -->
<div class="content-latestNew">
  <div class="title">カテゴリーから記事を探す</div>
  <div class="content-division"></div>

  <div  class="content-pickup-left">
    <div class="content-pickup-left-picture">
      <a href="<?php echo home_url('/category/travel/tr-kids/'); ?>">
        <img src="<?php bloginfo('template_url'); ?>/images/tr-kids.png" width="310px" height="200px" alt="子ども向け" title="子ども向け">
      </a>
    </div>

    <div class="content-pickup-left-text" style='text-align:center;'>
      <a href="<?php echo home_url('/category/travel/tr-kids/'); ?>">子ども向け</a>
    </div>
  </div>

  <div  class="content-pickup-left">
    <div class="content-pickup-left-picture">
      <a href="<?php echo home_url('/category/travel/public-transport/'); ?>">
        <img src="<?php bloginfo('template_url'); ?>/images/tr-access.png" width="310px" height="200px" alt="公共交通機関" title="公共交通機関">
      </a>
    </div>

    <div class="content-pickup-left-text" style='text-align:center;'>
      <a href="<?php echo home_url('/category/travel/public-transport/'); ?>">公共交通機関</a>
    </div>
  </div>

</div>

      </div><!-- mainContent -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
