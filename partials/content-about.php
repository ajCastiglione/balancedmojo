<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	  <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

		  <header class="article-header">
			  <h1 class="page-title">
          <?php $title = get_field('page_title'); if(!empty($title)) : echo $title; else : the_title(); endif; ?>
        </h1>
			</header>

			<section class="entry-content cf large-wrapper" itemprop="articleBody">
        <div class="flex">
          <div class="left">
            <?php if(have_rows('content_images')) : while(have_rows('content_images')) : the_row(); ?>
              <?php $img = get_sub_field('image'); if(!empty($img)) {echo "<img src='$img[url]' alt='$img[alt]' class='image'/>";} ?>
            <?php endwhile; endif; ?>
          </div>
          <div class="right">
            <?php the_content(); ?>
          </div>
        </div>
			</section>

		</article>

	<?php endwhile; endif; ?>

</main>