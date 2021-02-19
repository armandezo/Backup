<?php get_header(); ?>
		<div id="main">
			<div id="content">
		            <?php if ( get_option_mmtheme('featured_slider') == 'true' ) { ;?>        
		            <div class="box-info">           
					<?php get_template_part( 'featuredslider' ); ?>
					</div>
					<?php } ?>

<?php if ( get_option_mmtheme('ad_2_on_off') == 'true' ) { ;?> 
<div class="ad2">
<?php echo stripslashes( get_option_mmtheme('ad_2') ) ?>  		 
</div>  
<?php } ?>

		        <?php if ( get_option_mmtheme('featuredblock_one_two') == 'true' ) { ;?>        
				<div class="box-news">
					<?php get_template_part( '2' ); ?> 
					<?php get_template_part( '3' ); ?> 
				</div>
				<?php } ?>
<?php if ( get_option_mmtheme('ad_3_on_off') == 'true' ) { ;?> 
<div class="ad3">
<?php echo stripslashes( get_option_mmtheme('ad_3') ) ?>  		 
</div>  
<?php } ?>
				<?php get_template_part( '4' ); ?>                             
			</div> 
			<?php get_sidebar(); ?>		
		</div>

<?php get_footer(); ?>