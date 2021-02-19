<section class="box-news">
    <!--Horizontal Tab ******************************* -->
    <div id="horizontalTab">
            <ul class="resp-tabs-list tab-category">

<?php if ( get_option_mmtheme('tab1') == 'true' ) { ;?>  
<?php $tab1cat = get_option('tab1cat'); ?> 
<?php /* Category credentials */
$category_id = $tab1cat;
$category_link = get_category_link( $category_id );
$category_name = get_cat_name($category_id);
?>
                        <li><a href="#one" class="one"><?php echo ($category_name); ?></a></li> 
<?php wp_reset_query(); ?><?php } ?>
<?php if ( get_option_mmtheme('tab2') == 'true' ) { ;?>  
<?php $tab2cat = get_option('tab2cat'); ?> 
<?php /* Category credentials */
$category_id = $tab2cat;
$category_link = get_category_link( $category_id );
$category_name = get_cat_name($category_id);
?>              
                        <li><a href="#two" class="two"><?php echo ($category_name); ?></a></li>
<?php wp_reset_query(); ?><?php } ?> 

<?php if ( get_option_mmtheme('tab3') == 'true' ) { ;?>  
<?php $tab3cat = get_option('tab3cat'); ?> 
<?php /* Category credentials */
$category_id = $tab3cat;
$category_link = get_category_link( $category_id );
$category_name = get_cat_name($category_id);
?>
                        <li><a href="#three" class="three"><?php echo ($category_name); ?></a></li>
<?php wp_reset_query(); ?><?php } ?>

<?php if ( get_option_mmtheme('tab4') == 'true' ) { ;?>  
<?php $tab4cat = get_option('tab4cat'); ?> 
<?php /* Category credentials */
$category_id = $tab4cat;
$category_link = get_category_link( $category_id );
$category_name = get_cat_name($category_id);
?>                        
                        <li><a href="#four" class="four"><?php echo ($category_name); ?></a></li>
<?php wp_reset_query(); ?><?php } ?>

<?php if ( get_option_mmtheme('tab5') == 'true' ) { ;?>  
<?php $tab5cat = get_option('tab5cat'); ?> 
<?php /* Category credentials */
$category_id = $tab5cat;
$category_link = get_category_link( $category_id );
$category_name = get_cat_name($category_id);
?>  

                        <li><a href="#five" class="five"><?php echo ($category_name); ?></a></li>
<?php wp_reset_query(); ?><?php } ?>

<?php if ( get_option_mmtheme('tab6') == 'true' ) { ;?>  
<?php $tab6cat = get_option('tab6cat'); ?> 
<?php /* Category credentials */
$category_id = $tab6cat;
$category_link = get_category_link( $category_id );
$category_name = get_cat_name($category_id);
?>                       
                        <li><a href="#six" class="six"><?php echo ($category_name); ?></a></li>
<?php wp_reset_query(); ?><?php } ?>

<?php if ( get_option_mmtheme('tab7') == 'true' ) { ;?>  
<?php $tab7cat = get_option('tab7cat'); ?> 
<?php /* Category credentials */
$category_id = $tab7cat;
$category_link = get_category_link( $category_id );
$category_name = get_cat_name($category_id);
?> 

                        <li><a href="#seven" class="seven"><?php echo ($category_name); ?></a></li>
<?php wp_reset_query(); ?><?php } ?>

<?php if ( get_option_mmtheme('tab8') == 'true' ) { ;?>  
<?php $tab8cat = get_option('tab8cat'); ?> 
<?php /* Category credentials */
$category_id = $tab8cat;
$category_link = get_category_link( $category_id );
$category_name = get_cat_name($category_id);
?>

                        <li><a href="#eight" class="eight"><?php echo ($category_name); ?></a></li>
<?php wp_reset_query(); ?><?php } ?>

<?php if ( get_option_mmtheme('tab9') == 'true' ) { ;?>  
<?php $tab9cat = get_option('tab9cat'); ?> 
<?php /* Category credentials */
$category_id = $tab9cat;
$category_link = get_category_link( $category_id );
$category_name = get_cat_name($category_id);
?>
                        <li><a href="#nine" class="nine"><?php echo ($category_name); ?></a></li>
<?php wp_reset_query(); ?><?php } ?>                        
            </ul>

        <div class="resp-tabs-container">
            
            <?php if ( get_option_mmtheme('tab1') == 'true' ) { ;?>                   
                <div>   
                <?php
$tab1cat = get_option('tab1cat');
?> 
<?php /* Category credentials */
$category_id = $tab1cat;
$category_link = get_category_link( $category_id );
$category_name = get_cat_name($category_id);
?>                
                    <div class="tab-category-content">
                         
                            <div class="news">
<?php $recent = new WP_Query('showposts=1&cat=' . $category_id.'&offset=0'); while($recent->have_posts()) : $recent->the_post();?>    
                                <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
                                <article class="top-box">
                                    <div class="box-img">
                                        <a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_post_thumbnail( 'tabbig' ); ?></a>
                                    </div>
                                    <div class="description">
                                        <?php the_content_limit(285); ?>
                                    </div>
                                </article>
<?php endwhile; ?>                             
                                <ul class="ithem-list">
<?php $recent = new WP_Query('showposts=4&cat=' . $category_id.'&offset=1'); while($recent->have_posts()) : $recent->the_post();?>     
                                    <li>
                                        <div class="box-photo">
                                           <a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_post_thumbnail( 'tabsmall' ); ?></a>
                                        </div>
                                        <a href="<?php the_permalink()?>"><?php the_title()?></a>
                                    </li>
<?php endwhile; ?> 
                                </ul>
                            </div>
                            <div class="more-news tab1-more-news">
                                <div class="titel">MÁS <?php echo ($category_name); ?> NOTICIAS </div>
                                <ul class="list-news">
<?php $recent = new WP_Query('showposts=6&cat=' . $category_id.'&offset=5'); while($recent->have_posts()) : $recent->the_post();?> 
                                <li><a href="<?php the_permalink()?>"><?php the_title()?></a></li>
<?php endwhile; ?>
                                </ul>
                                <span class="more"><a href="<?php echo ($category_link); ?>" title="<?php echo $category[0]->category_nicename; ?>"> LEA MÁS NOTICIAS</a></span>
                            </div>
                         
                    </div>
<?php wp_reset_query(); ?>
                </div>    

            <?php } ?>  



            <?php if ( get_option_mmtheme('tab2') == 'true' ) { ;?>                   
                <div>   
                <?php
$tab2cat = get_option('tab2cat');
?> 
<?php /* Category credentials */
$category_id = $tab2cat;
$category_link = get_category_link( $category_id );
$category_name = get_cat_name($category_id);
?>                
                    <div class="tab-category-content">
                         
                            <div class="news">
<?php $recent = new WP_Query('showposts=1&cat=' . $category_id.'&offset=0'); while($recent->have_posts()) : $recent->the_post();?>    
                                <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
                                <article class="top-box">
                                    <div class="box-img">
                                        <a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_post_thumbnail( 'tabbig' ); ?></a>
                                    </div>
                                    <div class="description">
                                        <?php the_content_limit(285); ?>
                                    </div>
                                </article>
<?php endwhile; ?>                             
                                <ul class="ithem-list">
<?php $recent = new WP_Query('showposts=4&cat=' . $category_id.'&offset=1'); while($recent->have_posts()) : $recent->the_post();?>     
                                    <li>
                                        <div class="box-photo">
                                           <a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_post_thumbnail( 'tabsmall' ); ?></a>
                                        </div>
                                        <a href="<?php the_permalink()?>"><?php the_title()?></a>
                                    </li>
<?php endwhile; ?> 
                                </ul>
                            </div>
                            <div class="more-news tab2-more-news">
                                <div class="titel">More <?php echo ($category_name); ?> news</div>
                                <ul class="list-news">
<?php $recent = new WP_Query('showposts=6&cat=' . $category_id.'&offset=5'); while($recent->have_posts()) : $recent->the_post();?> 
                                <li><a href="<?php the_permalink()?>"><?php the_title()?></a></li>
<?php endwhile; ?>
                                </ul>
                                <span class="more"><a href="<?php echo ($category_link); ?>" title="<?php echo $category[0]->category_nicename; ?>"> View more News</a></span>
                            </div>
                         
                    </div>
<?php wp_reset_query(); ?>
                </div>    

            <?php } ?>  


            <?php if ( get_option_mmtheme('tab3') == 'true' ) { ;?>                   
                <div>   
                <?php
$tab3cat = get_option('tab3cat');
?> 
<?php /* Category credentials */
$category_id = $tab3cat;
$category_link = get_category_link( $category_id );
$category_name = get_cat_name($category_id);
?>                
                    <div class="tab-category-content">
                         
                            <div class="news">
<?php $recent = new WP_Query('showposts=1&cat=' . $category_id.'&offset=0'); while($recent->have_posts()) : $recent->the_post();?>    
                                <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
                                <article class="top-box">
                                    <div class="box-img">
                                        <a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_post_thumbnail( 'tabbig' ); ?></a>
                                    </div>
                                    <div class="description">
                                        <?php the_content_limit(285); ?>
                                    </div>
                                </article>
<?php endwhile; ?>                             
                                <ul class="ithem-list">
<?php $recent = new WP_Query('showposts=4&cat=' . $category_id.'&offset=1'); while($recent->have_posts()) : $recent->the_post();?>     
                                    <li>
                                        <div class="box-photo">
                                           <a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_post_thumbnail( 'tabsmall' ); ?></a>
                                        </div>
                                        <a href="<?php the_permalink()?>"><?php the_title()?></a>
                                    </li>
<?php endwhile; ?> 
                                </ul>
                            </div>
                            <div class="more-news tab3-more-news">
                                <div class="titel">More <?php echo ($category_name); ?> news</div>
                                <ul class="list-news">
<?php $recent = new WP_Query('showposts=6&cat=' . $category_id.'&offset=5'); while($recent->have_posts()) : $recent->the_post();?> 
                                <li><a href="<?php the_permalink()?>"><?php the_title()?></a></li>
<?php endwhile; ?>
                                </ul>
                                <span class="more"><a href="<?php echo ($category_link); ?>" title="<?php echo $category[0]->category_nicename; ?>"> View more News</a></span>
                            </div>
                         
                    </div>
<?php wp_reset_query(); ?>
                </div>    

            <?php } ?>   


            <?php if ( get_option_mmtheme('tab4') == 'true' ) { ;?>                   
                <div>   
                <?php
$tab4cat = get_option('tab4cat');
?> 
<?php /* Category credentials */
$category_id = $tab4cat;
$category_link = get_category_link( $category_id );
$category_name = get_cat_name($category_id);
?>                
                    <div class="tab-category-content">
                         
                            <div class="news">
<?php $recent = new WP_Query('showposts=1&cat=' . $category_id.'&offset=0'); while($recent->have_posts()) : $recent->the_post();?>    
                                <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
                                <article class="top-box">
                                    <div class="box-img">
                                        <a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_post_thumbnail( 'tabbig' ); ?></a>
                                    </div>
                                    <div class="description">
                                        <?php the_content_limit(285); ?>
                                    </div>
                                </article>
<?php endwhile; ?>                             
                                <ul class="ithem-list">
<?php $recent = new WP_Query('showposts=4&cat=' . $category_id.'&offset=1'); while($recent->have_posts()) : $recent->the_post();?>     
                                    <li>
                                        <div class="box-photo">
                                           <a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_post_thumbnail( 'tabsmall' ); ?></a>
                                        </div>
                                        <a href="<?php the_permalink()?>"><?php the_title()?></a>
                                    </li>
<?php endwhile; ?> 
                                </ul>
                            </div>
                            <div class="more-news tab4-more-news">
                                <div class="titel">More <?php echo ($category_name); ?> news</div>
                                <ul class="list-news">
<?php $recent = new WP_Query('showposts=6&cat=' . $category_id.'&offset=5'); while($recent->have_posts()) : $recent->the_post();?> 
                                <li><a href="<?php the_permalink()?>"><?php the_title()?></a></li>
<?php endwhile; ?>
                                </ul>
                                <span class="more"><a href="<?php echo ($category_link); ?>" title="<?php echo $category[0]->category_nicename; ?>"> View more News</a></span>
                            </div>
                         
                    </div>
<?php wp_reset_query(); ?>
                </div>    

            <?php } ?>     


            <?php if ( get_option_mmtheme('tab5') == 'true' ) { ;?>                   
                <div>   
                <?php
$tab5cat = get_option('tab5cat');
?> 
<?php /* Category credentials */
$category_id = $tab5cat;
$category_link = get_category_link( $category_id );
$category_name = get_cat_name($category_id);
?>                
                    <div class="tab-category-content">
                         
                            <div class="news">
<?php $recent = new WP_Query('showposts=1&cat=' . $category_id.'&offset=0'); while($recent->have_posts()) : $recent->the_post();?>    
                                <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
                                <article class="top-box">
                                    <div class="box-img">
                                        <a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_post_thumbnail( 'tabbig' ); ?></a>
                                    </div>
                                    <div class="description">
                                        <?php the_content_limit(285); ?>
                                    </div>
                                </article>
<?php endwhile; ?>                             
                                <ul class="ithem-list">
<?php $recent = new WP_Query('showposts=4&cat=' . $category_id.'&offset=1'); while($recent->have_posts()) : $recent->the_post();?>     
                                    <li>
                                        <div class="box-photo">
                                           <a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_post_thumbnail( 'tabsmall' ); ?></a>
                                        </div>
                                        <a href="<?php the_permalink()?>"><?php the_title()?></a>
                                    </li>
<?php endwhile; ?> 
                                </ul>
                            </div>
                            <div class="more-news tab5-more-news">
                                <div class="titel">More <?php echo ($category_name); ?> news</div>
                                <ul class="list-news">
<?php $recent = new WP_Query('showposts=6&cat=' . $category_id.'&offset=5'); while($recent->have_posts()) : $recent->the_post();?> 
                                <li><a href="<?php the_permalink()?>"><?php the_title()?></a></li>
<?php endwhile; ?>
                                </ul>
                                <span class="more"><a href="<?php echo ($category_link); ?>" title="<?php echo $category[0]->category_nicename; ?>"> View more News</a></span>
                            </div>
                         
                    </div>
<?php wp_reset_query(); ?>
                </div>    

            <?php } ?>      


            <?php if ( get_option_mmtheme('tab6') == 'true' ) { ;?>                   
                <div>   
                <?php
$tab6cat = get_option('tab6cat');
?> 
<?php /* Category credentials */
$category_id = $tab6cat;
$category_link = get_category_link( $category_id );
$category_name = get_cat_name($category_id);
?>                
                    <div class="tab-category-content">
                         
                            <div class="news">
<?php $recent = new WP_Query('showposts=1&cat=' . $category_id.'&offset=0'); while($recent->have_posts()) : $recent->the_post();?>    
                                <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
                                <article class="top-box">
                                    <div class="box-img">
                                        <a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_post_thumbnail( 'tabbig' ); ?></a>
                                    </div>
                                    <div class="description">
                                        <?php the_content_limit(285); ?>
                                    </div>
                                </article>
<?php endwhile; ?>                             
                                <ul class="ithem-list">
<?php $recent = new WP_Query('showposts=4&cat=' . $category_id.'&offset=1'); while($recent->have_posts()) : $recent->the_post();?>     
                                    <li>
                                        <div class="box-photo">
                                           <a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_post_thumbnail( 'tabsmall' ); ?></a>
                                        </div>
                                        <a href="<?php the_permalink()?>"><?php the_title()?></a>
                                    </li>
<?php endwhile; ?> 
                                </ul>
                            </div>
                            <div class="more-news tab6-more-news">
                                <div class="titel">More <?php echo ($category_name); ?> news</div>
                                <ul class="list-news">
<?php $recent = new WP_Query('showposts=6&cat=' . $category_id.'&offset=5'); while($recent->have_posts()) : $recent->the_post();?> 
                                <li><a href="<?php the_permalink()?>"><?php the_title()?></a></li>
<?php endwhile; ?>
                                </ul>
                                <span class="more"><a href="<?php echo ($category_link); ?>" title="<?php echo $category[0]->category_nicename; ?>"> View more News</a></span>
                            </div>
                         
                    </div>
<?php wp_reset_query(); ?>
                </div>    

            <?php } ?>    


            <?php if ( get_option_mmtheme('tab7') == 'true' ) { ;?>                   
                <div>   
                <?php
$tab7cat = get_option('tab7cat');
?> 
<?php /* Category credentials */
$category_id = $tab7cat;
$category_link = get_category_link( $category_id );
$category_name = get_cat_name($category_id);
?>                
                    <div class="tab-category-content">
                         
                            <div class="news">
<?php $recent = new WP_Query('showposts=1&cat=' . $category_id.'&offset=0'); while($recent->have_posts()) : $recent->the_post();?>    
                                <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
                                <article class="top-box">
                                    <div class="box-img">
                                        <a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_post_thumbnail( 'tabbig' ); ?></a>
                                    </div>
                                    <div class="description">
                                        <?php the_content_limit(285); ?>
                                    </div>
                                </article>
<?php endwhile; ?>                             
                                <ul class="ithem-list">
<?php $recent = new WP_Query('showposts=4&cat=' . $category_id.'&offset=1'); while($recent->have_posts()) : $recent->the_post();?>     
                                    <li>
                                        <div class="box-photo">
                                           <a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_post_thumbnail( 'tabsmall' ); ?></a>
                                        </div>
                                        <a href="<?php the_permalink()?>"><?php the_title()?></a>
                                    </li>
<?php endwhile; ?> 
                                </ul>
                            </div>
                            <div class="more-news tab7-more-news">
                                <div class="titel">More <?php echo ($category_name); ?> news</div>
                                <ul class="list-news">
<?php $recent = new WP_Query('showposts=6&cat=' . $category_id.'&offset=5'); while($recent->have_posts()) : $recent->the_post();?> 
                                <li><a href="<?php the_permalink()?>"><?php the_title()?></a></li>
<?php endwhile; ?>
                                </ul>
                                <span class="more"><a href="<?php echo ($category_link); ?>" title="<?php echo $category[0]->category_nicename; ?>"> View more News</a></span>
                            </div>
                         
                    </div>
<?php wp_reset_query(); ?>
                </div>    

            <?php } ?>        


            <?php if ( get_option_mmtheme('tab8') == 'true' ) { ;?>                   
                <div>   
                <?php
$tab8cat = get_option('tab8cat');
?> 
<?php /* Category credentials */
$category_id = $tab8cat;
$category_link = get_category_link( $category_id );
$category_name = get_cat_name($category_id);
?>                
                    <div class="tab-category-content">
                         
                            <div class="news">
<?php $recent = new WP_Query('showposts=1&cat=' . $category_id.'&offset=0'); while($recent->have_posts()) : $recent->the_post();?>    
                                <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
                                <article class="top-box">
                                    <div class="box-img">
                                        <a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_post_thumbnail( 'tabbig' ); ?></a>
                                    </div>
                                    <div class="description">
                                        <?php the_content_limit(285); ?>
                                    </div>
                                </article>
<?php endwhile; ?>                             
                                <ul class="ithem-list">
<?php $recent = new WP_Query('showposts=4&cat=' . $category_id.'&offset=1'); while($recent->have_posts()) : $recent->the_post();?>     
                                    <li>
                                        <div class="box-photo">
                                           <a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_post_thumbnail( 'tabsmall' ); ?></a>
                                        </div>
                                        <a href="<?php the_permalink()?>"><?php the_title()?></a>
                                    </li>
<?php endwhile; ?> 
                                </ul>
                            </div>
                            <div class="more-news tab8-more-news">
                                <div class="titel">More <?php echo ($category_name); ?> news</div>
                                <ul class="list-news">
<?php $recent = new WP_Query('showposts=6&cat=' . $category_id.'&offset=5'); while($recent->have_posts()) : $recent->the_post();?> 
                                <li><a href="<?php the_permalink()?>"><?php the_title()?></a></li>
<?php endwhile; ?>
                                </ul>
                                <span class="more"><a href="<?php echo ($category_link); ?>" title="<?php echo $category[0]->category_nicename; ?>"> View more News</a></span>
                            </div>
                         
                    </div>
<?php wp_reset_query(); ?>
                </div>    

            <?php } ?>      


            <?php if ( get_option_mmtheme('tab9') == 'true' ) { ;?>                   
                <div>   
                <?php
$tab9cat = get_option('tab9cat');
?> 
<?php /* Category credentials */
$category_id = $tab9cat;
$category_link = get_category_link( $category_id );
$category_name = get_cat_name($category_id);
?>                
                    <div class="tab-category-content">
                         
                            <div class="news">
<?php $recent = new WP_Query('showposts=1&cat=' . $category_id.'&offset=0'); while($recent->have_posts()) : $recent->the_post();?>    
                                <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
                                <article class="top-box">
                                    <div class="box-img">
                                        <a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_post_thumbnail( 'tabbig' ); ?></a>
                                    </div>
                                    <div class="description">
                                        <?php the_content_limit(285); ?>
                                    </div>
                                </article>
<?php endwhile; ?>                             
                                <ul class="ithem-list">
<?php $recent = new WP_Query('showposts=4&cat=' . $category_id.'&offset=1'); while($recent->have_posts()) : $recent->the_post();?>     
                                    <li>
                                        <div class="box-photo">
                                           <a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_post_thumbnail( 'tabsmall' ); ?></a>
                                        </div>
                                        <a href="<?php the_permalink()?>"><?php the_title()?></a>
                                    </li>
<?php endwhile; ?> 
                                </ul> 
                            </div> 
                            <div class="more-news tab9-more-news">
                                <div class="titel">Más <?php echo ($category_name); ?> Noticias</div>
                                <ul class="list-news">
<?php $recent = new WP_Query('showposts=6&cat=' . $category_id.'&offset=5'); while($recent->have_posts()) : $recent->the_post();?> 
                                <li><a href="<?php the_permalink()?>"><?php the_title()?></a></li>
<?php endwhile; ?>
                                </ul>
                                <span class="more"><a href="<?php echo ($category_link); ?>" title="<?php echo $category[0]->category_nicename; ?>"> Lea más noticias</a></span>
                            </div>
                         
                    </div>
<?php wp_reset_query(); ?>
                </div>    

            <?php } ?>  
        </div>
    </div>
    <!--Horizontal Tab ******************************* -->
</section>