<?php
/*
 Template Name: Internal Pages
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="cf">

				<?php if(is_page(31)) : get_template_part('partials/content', 'about'); endif; ?>
				<?php if(is_page(33)) : get_template_part('partials/content', 'services'); endif; ?>
				<?php if(is_page(35)) : get_template_part('partials/content', 'contact'); endif; ?>
				<?php if(is_page(150) || is_page(146) || is_page(148)) : get_template_part('partials/content', 'products'); endif; ?>
						
				</div>

			</div>


<?php get_footer(); ?>
