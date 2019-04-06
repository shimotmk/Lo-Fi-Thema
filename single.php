<?php get_header(); ?>
<!--個別ページの設定-->
<main class="container pt-3">
  <article class="col-md-8 col-xs-12">

    <!--パンくず表示-->
    <div class="breadcrumb">
    	<span class="" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
    		<a href="<?php echo home_url(); ?>" itemprop="url">
    			<span itemprop="title">HOME</span>
    		</a>&gt;&nbsp;
    	</span>
    	<?php if ( is_single() ) { ?>
    		<span class="breadcrumbs" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
    			<a href="<?php $cat = get_the_category(); echo get_category_link($cat[0]->cat_ID); ?>" itemprop="url">
    				<span itemprop="title"><?php echo $cat[0]->name; ?></span>
    			</a>&gt;&nbsp;
    		</span>
    	<?php } else { ?>
    	<?php } ?>
    	<strong style="color: #7B7B7B;font-size: 14px;font-weight: 300;"><?php the_title(); ?></strong>
    </div>

    <!--本文-->
    <section>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-xs-12">
          <div class="title">
            <h2><?php the_title(); ?></h2>
          </div>
          <div class="post-image">
            <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
            <?php else: ?>
              <img src="<?php echo get_template_directory_uri();?>/no-image.jpg" width="100%">
            <?php endif; ?>
          </div>
          <?php the_content(); ?>
        </div>

        <!--snsシャアボタン-->
        <?php require("sns.php"); ?>


      <?php endwhile; else : ?>
        <p>記事がありません</p>
      <?php endif; ?>
      <!--次・前のページ 個別ページ用-->
      <div class="navigation container" style="margin-top:100px;;">
      <?php if (get_previous_post()):?>
      <div class="prev"><?php previous_post_link('%link','<i class="fas fa-angle-double-left"></i>前のページ'); ?></div>
      <?php endif; ?>
      <?php if (get_next_post()):?>
      <div class="next"><?php next_post_link('%link', '次のページ<i class="fas fa-angle-double-right"></i>'); ?></div>
      <?php endif; ?>
    </div>

    </section>


    <!--関連記事-->
    <div class="relatedkiji" style="margin-top:100px;">
      <h4>関連記事</h4>
      <ul>
        <?php if(has_category() ) {
          $cats =get_the_category();
          $catkwds = array();
          foreach($cats as $cat){
            $catkwds[] = $cat->term_id;
          }
        }?>
        <?php $args = array(
          'post_type' => 'post',
          'posts_per_page' => '8',
          'post__not_in' =>array( $post->ID ),
          'category__in' => $catkwds,
          'orderby' => 'rand'
        );
        $my_query = new WP_Query( $args );?>
        <div class="row">
          <?php if ( $my_query->have_posts() ) : while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

            <div class="col-md-3 col-6 p-1">
              <a href="<?php the_permalink();?>">
                <div class="card">
                  <div class="thumbnail-image">
                    <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('', array('class' => 'card-img-top') ); ?>
                    <?php else: ?>
                      <img class="card-img-top" src="<?php echo get_template_directory_uri();?>/no-image.jpg">
                    <?php endif; ?>
                  </div>
                  <div class="card-body">
                    <h5><?php the_title(); ?></h5>
                    <p class="card-text">
                      <?php echo get_the_date(); ?>
                      <?php the_excerpt(); ?>
                    </p>
                  </div>
                </div>
              </a>
            </div>

          <?php endwhile; else : ?>
            <p>関連記事がありません。</p>
          <?php endif; ?>
        </div>
        <?php wp_reset_postdata(); ?>
      </ul>
    </div>

  </article>


  <!--サイドバー-->
  <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>
