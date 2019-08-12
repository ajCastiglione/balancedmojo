<?php
/*
 Template Name: Home Page
*/

$args = array(
	'post_type' => 'post',
	'posts_per_page' => 5
);
$blogs = new WP_Query($args);
?>

<?php get_header(); ?>


	<div id="content">

		<div id="inner-content" class="cf">

			<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

						<section class="entry-content cf" itemprop="articleBody">
							<?php the_content(); ?>
							<div class="content">
								<div class="wrap">
									<h1 class="word"><?php echo get_field('word'); ?></h1>
									<div class="text"><?php echo get_field('description'); ?></div>
								</div>
							</div>
							<div class="verb">
								<?php echo get_field('verbal_definition'); ?>
							</div>

							<section class="bio large-wrapper">
								<div class="img">
									<?php $bImg = get_field('page_content_image'); if(!empty($bImg)) {echo "<img class='image' src=$bImg[url] alt=$bImg[alt] />";} ?>
								</div>
								<div class="page-content">
									<h1 class="title"><?php echo get_field('page_title'); ?></h1>
									<div class="text"><?php echo get_field('page_content'); ?></div>
								</div>
							</section>
							
							<div class="services">
								<?php if(have_rows('boxes')) : while(have_rows('boxes')) : the_row(); ?>
									<div class="service">
										<div class="inner-service">
											<?php $sImg = get_sub_field('image'); if(!empty($sImg)) {echo "<img class='image' src=$sImg[url] alt=$sImg[alt]/>";} ?>
											<div class="service-content">
												<h2 class="title"><?php echo get_sub_field('title'); ?></h2>
												<div class="text"><?php echo get_sub_field('content'); ?></div>
											</div>
										</div>
									</div>
								<?php endwhile; endif; ?>
							</div>

							
						</section>

						<section class="email-signup">
							<div class="inner-email-signup large-wrapper">
								<h2 class="title">sign up for email updates</h2>
								<?php echo do_shortcode('[mc4wp_form id="59"]'); ?>
							</div>
						</section>

						<section class="blogs">
							<div class="large-wrapper">
								<h2 class="title">Blog</h2>
								<div class="flex">
									<?php if($blogs->have_posts()) : while($blogs->have_posts()) : $blogs->the_post(); ?>
										<a href="<?php the_permalink() ?>">
											<img class="blog-image" src="<?php echo get_the_post_thumbnail_url(null, 'full'); ?>">
										</a>
									<?php endwhile; endif; ?>
								</div>
							</div>
						</section>

					</article>

					<?php endwhile; endif; ?>

				</main>

			</div>

	</div>


<?php get_footer(); ?>
