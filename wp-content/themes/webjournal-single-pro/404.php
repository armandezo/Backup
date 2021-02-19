<?php get_header(); ?>

	<div id="content" role="main">
		<section>
			<div style="font-family:'Georgia', serif; font-size: 20px;margin-top: 8px;line-height:27px">
				<center><h2><?php _e("*404* - Not Found", "mm"); ?> </h2></center><br />
				<?php _e("Lo sentimos, pero no podemos encontrar el contenido que usted está buscando en esta dirección URL. Por favor, vuelva al menú principal en la parte superior o intente una nueva búsqueda más abajo..", "mm"); ?><br /><br />
				<center> <div class="archive-search">  <?php get_search_form( ); ?> </div> </center>
			</div>
		</section>
	</div><!-- #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
