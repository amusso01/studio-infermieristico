<?php get_header(); ?>

<div data-router-wrapper>
  <div data-router-view="single">

    <?php get_template_part( 'partials/global/hero-single' ); ?>
    
    <main class="p-single-main" role="main">
      <div class="l-container u-grid u-grid-cols-1 u-gap-x-30 u-gap-y-50 u-mt-60 u-mb-90 md:u-mt-130 md:u-mb-220 md:u-grid-cols-10 "  data-s2r="single" data-s2r-type="stagger-fade-up">
        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'partials/news/single' ); ?>


        <?php endwhile; ?>
      </div>
      
    </main>

    <?php get_sidebar(); ?>

  </div>
</div>

<?php get_footer(); ?>