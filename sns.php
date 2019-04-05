<!--snsシャアボタン-->
<div class="snsShareArea container">
  <div class="row">
    <!-- Twitter -->
    <div class="col-md-4 col-xs-12 bg-twitter">
      <a class="btn-twitter" target="_blank" href="http://twitter.com/share?url=<?php the_permalink();?>&text=<?php echo get_the_title(); ?>">
        <i class="fab fa-twitter"></i>
        Twitter
      </a>
    </div>
    <!-- Facebook -->
    <div class="col-md-4 col-xs-12 bg-facebook">
      <a class="btn-facebook" target="_blank" href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&t=<?php echo get_the_title(); ?>">
        <i class="fab fa-facebook"></i>
        Facebook
      </a>
    </div>
    <div class="col-md-4 col-xs-12 bg-light good">
      <!-- Facebook いいね-->
      <iframe class="center_iframe py-3" src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&width=72&layout=button&action=like&size=small&show_faces=false&share=false&height=65&appId" width="72" height="65" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
    </div>
  </div>
</div>
