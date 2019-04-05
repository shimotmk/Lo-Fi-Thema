<?php get_header(); ?>
  <main class="container">
    <article>

      <section>
        <div class="row">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <div class="col-lg-6 col-sm-12 p-3">
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
                  <h2><?php the_title(); ?></h2>
                  <p class="card-text">
                    <?php echo get_the_date(); ?>
                    <?php the_excerpt(); ?>
                  </p>
                </div>
              </div>
            </a>
          </div>

          <?php endwhile; else : ?>
            <p>記事がありません。</p>
          <?php endif; ?>
        </div>
      </section>

      <!--次・前のページ 一覧ページ用-->
      <div class="navigation container">
        <div class="prev"><?php previous_posts_link('前のページ'); ?></div>
        <div class="next"><?php next_posts_link('次のページ'); ?></div>
      </div>

    </article>
    <?php get_sidebar(); ?>
  </main>
<?php get_footer(); ?>
