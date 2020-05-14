<?php get_header(); ?>
<!--Main-->

<!-- Body Start -->
  <div id="content">
    <div class="mainContent">
      <div class="title"><img src="<?php bloginfo('template_url'); ?>/images/nav-icons/jobsearch 2.png" width="30px" height="30px" />マレーシア求人情報</div>
      <img class="categorytop-img" src="<?php bloginfo('template_url'); ?>/images/jobsearch-top.jpg" width="660px" height="200px" alt="Go Malaysia 「トラベル」カテゴリートップ" />

      <div class="jobsearch-eyecatch-comment">
        <h1>マレーシアの求人情報に加え、マレーシア就職＆転職の心構えや準備、現地採用スタッフによる生活事情など役立つ情報が満載。</h1>
      </div>

      <div class="title page-jobsearch-title">おすすめの日本人求人情報</div>
      <div class="content-division"></div>

 		<?php
		$posts=query_posts( array(
  		'post_type' => 'post' ,
      'cat' => 81 , //76 81
		  'posts_per_page' => 5 ,
  		'paged' => get_query_var( 'paged' ),
  		'meta_query' => array(
   		array( 'key'=>'is_jobsearch_feature_content',
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
      <div class="jobsearch-cont">
        <div class="jobsearch-date"><p><?php the_time('Y/m/d'); ?></p></div>
        <div class="jobsearch-title"><a href="<?php the_permalink(); ?>"><?php the_content(); ?></a></div>
      </div>
  	 <?php if (($count % 2) == 0) : ?>

  	 <?php endif; ?>
     <?php
  		endforeach;
  			endif;
  		else :
			     echo "No data";
		  endif;
      ?>

      <?php query_posts($query_string); ?>

      <div class="jobsearch-more"><a href="<?php echo home_url('/category/jobsearch/') ?>">全ての求人情報を見る</a></div>
      <div class="jobsearch-more"><a href="<?php echo home_url('/inquiry/') ?>">求人情報についてお問い合わせ</a></div>

      <div class="jobsearch-recommend">
        <div class="title">求人お役立ち情報</div>
        <div class="content-division"></div>

        <?php
        $posts=query_posts( array(
          'post_type' => 'post' ,
          'cat' => 82 , //77 82
          'posts_per_page' => 1 ,
          'paged' => get_query_var( 'paged' ),
          'meta_query' => array(
          array( 'key'=>'is_jobsearch_content',
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
          <div class="jobsearch-relation"><!-- 求人関連記事 -->
            <?php
               $posts = get_posts( array(
                //  ここに取得条件を記入
                'category' => 82,  //77 82
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
                <div class="entry-title">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>
                <div class="excerpt-part-area"><?php the_field('archive_explain'); ?></div>
              </div>
            </div>
            <?php
              endforeach;
              wp_reset_postdata();
            ?>
          </div>

          <!-- <div  class="content-pickup-left">
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
          </div> -->

         <?php if (($count % 2) == 0) : ?>

         <?php endif; ?>
         <?php
          endforeach;
            endif;
          else :
               echo "No data";
          endif;
          ?>

          <?php query_posts($query_string); ?>
      </div><!-- jobseaech-recommend -->
    </div><!-- mainContent -->

<?php get_sidebar(); ?>

<div class="jobsearch-description-comment">
  <div class="c-seo-text">
    <div class="c-seo-text--ttl">人気のマレーシア就職/転職 - マレーシアが住みやすい8つの理由とは？</div>
    <div class="c-seo-text--desc">
      <p>
        日本テレビの「幸せ！ボンビーガール」でたびたび取り上げられ、注目を集めているマレーシア就職/転職。マレーシアは住みやすい国として日本だけでなく海外でも人気が高いのですが、その理由は以下の８つ。
        英語が通じる/気候がいい/治安がいい/物価が低い/フレンドリーな国民性/食べ物がおいしい/多民族国家なので多様な文化に触れられる/東南アジア各国へアクセスしやすい
        その他、日本人にとっては、親日的な国民性であること、東京から飛行時間が約7時間と遠すぎない距離であること、中華系がいるので日本料理に似た中華料理店が多いことなども人気が高い理由と言えます。
        海外で働くうえで「住みやすさ」は最重要ポイントです。マレーシア就職/転職を目指す方は、働き始める前にぜひ一度マレーシアを訪れてみることをおすすめします。
      </p>
    </div>
  </div>
  <div class="c-seo-text">
    <div class="c-seo-text--ttl">マレーシア就職/転職が可能な年齢は？</div>
    <div class="c-seo-text--desc">
      マレーシアは、比較的労働ビザが発給されやすい国です。
      就業経験が少ないとビザが発給されない場合がありますが、新卒から40代までマレーシア就職は可能ですし、求人もあります。
      経験がない新卒の場合でも、BPOなら求人が多く、仕事も見つかりやすいでしょう。
      海外で働いてみたい！という方にはマレーシア就職がおすすめです。
    </div>
    <div class="c-seo-text--desc"><a href="https://www.go-malaysia.info/category/jobsearch">マレーシア求人の最新情報はこちら</a></div>
  </div>
  <div class="c-seo-text">
    <div class="c-seo-text--ttl">マレーシア就職/転職に必要な英語力とは</div>
    <div class="c-seo-text--desc">
      マレーシアで働くにあたって必要な英語力は、仕事によってまったく異なります。
      日本人を顧客とするカスタマーサービスなど、英語がほぼ不要な求人もありますし、交渉も含め高いビジネスレベルの英語が必要とされる仕事ももちろんあります。
      とはいえ日本語は通じないので、仕事で高い英語力が必要でなかったとしても、生活ではある程度の英語力が必要です。しかし、マレーシアはアメリカやイギリスといった英語圏とは異なり、もともと多言語な文化で、マレーシア人でも英語のレベルはさまざま。そのため、英語ができない人に対しても寛容で「何とか理解してあげよう」という雰囲気があります。流暢な英語を話せる必要はありませんが、言いたいことをある程度は表現できるレベルの英語力があると、ストレスが少ないでしょう。
    </div>
    <div class="c-seo-text--desc">
      <p>その他、マレーシア就職についての情報はこちら</p>
      <p><a href="https://www.go-malaysia.info/category/jobsearch/jobsearch-relation">【マレーシアで働こう】</a></p>
    </div>
  </div>
</div>

<?php get_footer(); ?>
