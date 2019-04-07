<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
  <aside class="d-none d-lg-inline-block">
    <div class="container">
      <?php dynamic_sidebar( 'sidebar' ); ?>
    </div>
  </aside>
<?php endif; ?>
