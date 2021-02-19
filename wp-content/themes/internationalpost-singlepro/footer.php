<?php if ( get_option_mmtheme('ad_8_on_off') == 'true' ) { ;?> 
<div class="ad-8">
<?php echo stripslashes( get_option_mmtheme('ad_8') ) ?>  		
</div>
<?php } ?>  	

</div> 
</section>
</div> 
 
 <footer class="footer">
			<div class="footer-holder">
				<div class="container">
					
					<nav class="nav">
				<?php wp_nav_menu( array( 'walker' => new Arrow_Walker_Nav_Menu, 'theme_location' => 'forth', 'container_id' => 'fotnav', 'container_class' => 'ddsmoothmenu1', 'fallback_cb'=>'primarymenu4') );?>   
					</nav>
					<div class="cb"></div>
				</div>
			</div>

</footer>


 
<div class="footer">
<div class="footer2-wrapper">
<div class="footer2-area">
<div id="footerwrapper1"> 
 
		
		
		<div class="box-hold footerwrapper">                      
			<div class="box footer1">                   
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Block 1') ) : ?> 		
				<?php endif; ?>     <div class="cb"></div>       
			</div>
			<div class="box footer2">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Block 2') ) : ?> 		
				<?php endif; ?>           <div class="cb"></div> 
			</div>
			<div class="box footer3">                  
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Block 3') ) : ?> 		
				<?php endif; ?>            <div class="cb"></div>
			</div>
			<div class="box footer4">                    
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Block 4') ) : ?> 		
				<?php endif; ?>            <div class="cb"></div> 	
			</div>
		</div>
				
				
    </div>

</div>
</div><!-- footer2-wrapper -->
</div><!-- #footer -->
 
 

<div class="footer"> 
<div class="copy">
					<div id="bottomfooter">
						<div class="site-footer">
						<?php echo stripslashes( get_option_mmtheme('copy_text') ) ?> | <a href="#top"> <?php _e("Back to top", "mm"); ?> </a>  
						</div>	<!-- .site-footer .site-footer -->
 
						<div class="cb"> </div> 	 	 

					</div><!-- #bottomfooter -->
</div>


</div>
 
  
<?php wp_footer(); ?>
<?php echo stripslashes( get_option_mmtheme('track_code') ) ?>   
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-508dd6f042d9364c"></script>
</body>
</html> 
