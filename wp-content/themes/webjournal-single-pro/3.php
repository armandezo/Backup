<?php
$b3_cat = get_option('block3_cat');
?> 
<?php /* Category credentials */
$category_id = $b3_cat;
$category_link = get_category_link( $category_id );
$category_name = get_cat_name($category_id);
?>

<section class="right-column">
    <?php $recent = new WP_Query('showposts=1&cat=' . $category_id.'&offset=0'); while($recent->have_posts()) : $recent->the_post();?>
    <div class="titel"><a href="<?php echo ($category_link); ?>" title="<?php echo $category[0]->category_nicename; ?>"> <?php echo ($category_name); ?></a></div>
    <article class="box">
        <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
        <div class="box-photo">
            <a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_post_thumbnail( 'block3img' ); ?></a>
            </div>
            <div class="description">
                <?php the_content_limit(118); ?>
            </div>
        </article>
    <?php endwhile; ?> 

    <?php $recent = new WP_Query('showposts=2&cat=' . $category_id.'&offset=1'); while($recent->have_posts()) : $recent->the_post();?>     
        <article class="box">
            <h3><a href="<?php the_permalink()?>"><?php the_title()?></a></h3>
            <div class="box-photo">
                <a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_post_thumbnail( 'block3img' ); ?></a>
            </div>
            <div class="description">
                <?php the_content_limit(118); ?>
            </div>
        </article>
    <?php endwhile; ?>  <?php wp_reset_query(); ?> 
    </section>