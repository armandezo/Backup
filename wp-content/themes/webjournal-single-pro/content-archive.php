<div class="post-wrapper-archive">
  <div class="bottom-recentpost-wrapper-cat">

    <div class="bottom-archive">
      <div class="bottom-recentpost-image-0">
        <a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_post_thumbnail( 'contentsmall' ); ?> </a>
      </div>

      <div class="post-content-holder">
        <div class="bottom-content-heading-0">
          <h2><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></h2> 
        </div>
        <div class="post-content">  <?php the_content_limit('370'); ?></div>
      </div>
    </div>

    </div> 
</div>
