<main id="main" class="cf meditations" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	  <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

		  
      <?php $banner = get_field('banner_image'); if(!empty($banner)) {$img = $banner['url'];} else {$img ='';} ?>
      <div class="banner" style="background-image:url(<?= $img ?>)">
      <header class="article-header">
			  <h1 class="page-title">
          <?php $title = get_field('page_title'); if(!empty($title)) : echo $title; else : the_title(); endif; ?>
        </h1>
      </header>
    </div>

			<section class="entry-content cf large-wrapper" itemprop="articleBody">
          <?php the_content(); ?>
          <div class="videos">
            <?php if(have_rows('videos')) : while(have_rows('videos')) : the_row(); ?>
              <div class="video">
              <?= get_sub_field('embed_code'); ?>
              </div>
            <?php endwhile; endif; ?>
          </div>
			</section>

		</article>

	<?php endwhile; endif; ?>

</main>