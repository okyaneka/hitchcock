
<div class="credits section-inner">
	
	<?php if ( has_nav_menu( 'footer' ) ) : ?>
			
		<ul class="footer-menu">
					
			<?php 
				wp_nav_menu(
					array(
						'theme_location'	=>	'footer',
						'container'			=>	'',
						'items_wrap'		=>	'%3$s'
					)
				);
			?>
			
		</ul> <!-- /social-menu -->
	
	<?php endif; ?>
	
	<p class="copy">&copy; <?php echo date('Y'); ?> <a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo('name'); ?></a></p>
	<p class="caption"><?php _e('Theme by','hitchcock'); ?> <a href="http://www.andersnoren.se">Anders Nor&eacute;n</a> <?php _e('Develop by','hitchcock'); ?> <a href="http://www.okyfantasy.ga">Oky Aneka</a></p>
	<div class="clear"></div>
	
</div> <!-- /credits -->

<?php wp_footer(); ?>

</body>
</html>