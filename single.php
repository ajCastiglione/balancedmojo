<?php get_header(); ?>

			<div id="content">

				<section id="inner-content" class="wrap cf">

					<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<section class="col-xs-12 col-sm-8 col-lg-8 cf">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<?php
								/*
								 * Ah, post formats. Nature's greatest mystery (aside from the sloth).
								 *
								 * So this function will bring in the needed template file depending on what the post
								 * format is. The different post formats are located in the post-formats folder.
								 *
								 *
								 * REMEMBER TO ALWAYS HAVE A DEFAULT ONE NAMED "format.php" FOR POSTS THAT AREN'T
								 * A SPECIFIC POST FORMAT.
								 *
								 * If you want to remove post formats, just delete the post-formats folder and
								 * replace the function below with the contents of the "format.php" file.
								*/
								get_template_part( 'post-formats/format', get_post_format() );
							?>

						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry cf">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
									</footer>
							</article>

						<?php endif; ?>
					
						</section>
					
						<?php get_sidebar(); ?>
						
					</main>

					<section class="about-author cf">
							<div class="flex">
								<div class="bio">
									<div class="top">
										<img src="<?php echo get_template_directory_uri().'/library/images/darlene.png'; ?>" alt="Darlene Photo" class="image">
										<h3 class="name">about the author - darlene bodhorn</h3>
									</div>
									<span class="titles">Freelance Writer, Meditation Specialist & Intuitive</span>
									<div class="content">
										<?= get_field('author_bio', 'options'); ?>
									</div>
								</div>
								<div class="about-side">
									<h4 class="verb-title">Bal·anced mo·jo</h4>
									<p class="verb-contents">
									[ˈbalənst] [ˈmōjō] <br>
									NOUN <br>
									US
									</p>
									<ol class="verb-definitions">
									<li>Life energy center point of Self-Family-Work-Spirit maximizing joy, love and gratitude “I’m on cloud nine today, I am so happy!”</li>
									<li>Flow point with the highest return for least physical or mental effort “Amazingly the stars and universe aligned, I am truly blessed”</li>
									<li>Achieving the highest outcome possible “Wow, I am a Rock-Star today, nailed it!”</li>
									<li>A renewal of your healthy outlook or life circumstance from a dire situation “God, Creator, Spirit, Arch Angels and All the Saints are in my court”</li>
									<li>The 30-year marriage of Moe-and-Ernie-“What’s Up Joe”- Lounsbury “Love, Harmony and Separate Bowling Nights”</li>
									</ol>
								</div>
							</div>
						</section>

						<section class="internal-links">
							<a href="<?= site_url() . '/meditations/' ?>" class="meditation-link">Overthinking and Out of Balance? Listen Now to this Personalized Guided Meditation!</a>
							<a href="<?= site_url() . '/personalized-guided-meditations/';?>" class="classes-link">Order Meditations & Sign- Up for Classes Here</a>
						</section>

				</div>

			</div>

<?php get_footer(); ?>
