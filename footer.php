			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="cf">

				<nav role="navigation">
					<?php wp_nav_menu(array(
								'container' => false,                          
								'container_class' => 'footer-menu cf',         // class of container (should you choose to use it)
								'menu' => __( 'Footer Menu', 'bonestheme' ),   // nav name
								'menu_class' => 'nav footer-nav cf',            // adding custom nav class
								'theme_location' => 'footer-menu',             // where it's located in the theme
								'depth' => 0,                                   // limit the depth of the nav
								'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
								)); ?>
					</nav>

					<div class="bottom large-wrapper">
						<div class="copyright">
								<p>Balanced Mojo Copyright &copy;<?php echo date('Y'); ?></p>
						</div>
						<div class="social">
								<a href="#"><i class="fab fa-facebook-square"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
								<a href="#"><i class="fab fa-twitter-square"></i></a>
						</div>
					</div>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>
        

	</body>

</html> <!-- end of site. what a ride! -->
