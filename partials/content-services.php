<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
    
    <?php if(!get_field('hide_page_title')) : ?>
		  <header class="article-header">
			  <h1 class="page-title">
           <?php the_title(); ?> 
        </h1>
      </header>
    <?php endif; ?>

			<section class="entry-content cf large-wrapper" itemprop="articleBody">
        <div class="services">
          <?php if(have_rows('service_boxes')) : while(have_rows('service_boxes')) : the_row(); ?>
            <div class="service">
              <div class="left">
                <?php $img = get_sub_field('image'); if(!empty($img)) {echo "<img src='$img[url]' class='image'/>";} ?>
              </div>
              <div class="right">
                <h2 class="item-title"><a href="<?php echo get_sub_field('link'); ?>"><?php echo get_sub_field('title'); ?></a></h2>
                <div class="text"><?php echo get_sub_field('text'); ?></div>
              </div>
            </div>
          <?php endwhile; endif; ?>
        </div>
      </section>
      
      <section class="testimonials">
        <header class="article-header">
          <h2 class="page-title">Testimonials</h2>
        </header>
        <?php if(have_rows('testimonials')) : while(have_rows('testimonials')) : the_row(); ?>
          <div class="testimonial">
            <div class="inner-testimonial">
              <i class="fas fa-quote-left"></i>
              <div class="review"><?php echo get_sub_field('review'); ?></div>
              <h3 class="author"><?php echo get_sub_field('author'); ?></h3>
              <i class="fas fa-quote-right"></i>
            </div>
          </div>
        <?php endwhile; endif; ?>
      </section>

		</article>

	<?php endwhile; endif; ?>

</main>