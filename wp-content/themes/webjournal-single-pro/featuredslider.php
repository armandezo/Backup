<div id="featuredo"> 
    <!-- slideshow -->
    <section class="slideshow">       
        <div id="slider" class="flexslider">
            <ul class="slides"> 
            <?php $query = new WP_Query();
            $query->query( 'cat='.get_option('slider_cats_area').'&ignore_sticky_posts=1&posts_per_page=3');
            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>     
                <li> 
                    <section id="tab1">
                        <div class="box-img">  
                            <a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_post_thumbnail( 'sliderimg' ); ?> </a>
                        </div>

                        <div class="box-img-white">  
                        <span><?php _e("POR", "mm"); ?> <?php the_author(); ?></span>  
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> 
                        <?php the_content_limit('130'); ?>
                        </div>

                    </section>
                </li> 
            <?php endwhile; else: ?><?php endif; ?><?php wp_reset_query(); ?>
            </ul>
        </div>

        <div id="carousel" class="flexslider slider_sidebar"> 
        
            <!-- pagination -->
          

            <ul class="slides">      
                <?php $query = new WP_Query();
                $query->query('cat='.get_option('slider_cats_area').'&ignore_sticky_posts=1&posts_per_page=3');
                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?> 

                    <li><a href="#"><span><?php the_title(); ?></span></a></li>

                <?php endwhile; else: ?><?php endif; ?><?php wp_reset_query(); ?>
            </ul>       
        </div>
    </section>
</div> 