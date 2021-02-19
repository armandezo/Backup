</div> <!-- #wrapper ends -->
	<footer id="footer">
		<div class="heading-footer">
			<div class="headin-footer-holder">
				<div class="logo-small"><a href="<?php echo get_option('home'); ?>"> <img src="<?php echo get_option_mmtheme( 'custom_logo_value' ) ?>" alt="<?php bloginfo('name'); ?>" /></a></div>
				<?php wp_nav_menu( array( 'walker' => new Arrow_Walker_Nav_Menu, 'theme_location' => 'third', 'menu_class' => 'footer-nav' ,'fallback_cb'=>'primarymenu3') );?>
			</div>
		</div>
 
	 
					<div id="bottomfooter">
						<div class="site-footer">
						<?php echo stripslashes( get_option_mmtheme('copy_text') ) ?></a>  
						</div>	<!-- .site-footer .site-footer -->
 
						<div class="cb"> </div> 	 	 

</div><!-- #bottomfooter -->



	</footer>

  

<?php echo stripslashes( get_option_mmtheme('track_code') ) ?> 
<?php wp_footer(); ?>

</body>
</html>