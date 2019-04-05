<?php get_header(); ?>
<!--固定ページの設定-->
<main>
  <div class="container">
    <section>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <div class="post-image">
          <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail(array(100, 100)); ?>
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri();?>/no-image.png" width="100" height="100">
          <?php endif; ?>
        </div>
        <?php the_content(); ?>
      <?php endwhile; else : ?>
        <p>記事がありません</p>
      <?php endif; ?>
    </section>
  </div>
</main>
<?php get_footer(); ?>
