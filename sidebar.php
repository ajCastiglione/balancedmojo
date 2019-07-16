				<div id="sidebar1" class="sidebar cf col-xs-12 col-sm-4 col-lg-4" role="complementary">

					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
						<h2 class="sidebar-title">stay connected</h2>
						<p>Get the latest article on mojo balance, wellness, things that make you go hmmm straight to your inbox each week (or more often depending on how the stars align)</p>
						<hr>
						<?php echo do_shortcode('[mc4wp_form id="59"]'); ?>
						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php else : ?>

						<?php
							/*
							 * This content shows up if there are no widgets defined in the backend.
							*/
						?>

						<div class="no-widgets">
							<p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'bonestheme' );  ?></p>
						</div>

					<?php endif; ?>

				</div>
