<?php get_header(); ?>

<div data-router-wrapper>
  <div  data-router-view ="index">
  
    <?php get_template_part( 'partials/global/hero-index' ); ?>

    <main class="p-index-main" role="main" data-s2r="group">

      <div class=" u-mt-60 u-mb-90 md:u-mt-130 md:u-mb-220" data-s2r-el="stagger-fade-up" data-s2r-delay="0.2">

        <?php if ( have_posts() ) : ?>

          <div class="l-container u-grid u-gap-40 u-grid-cols-1 sm:u-grid-cols-2 lg:u-grid-cols-3 md:u-gap-80">
            <?php while ( have_posts() ) : the_post(); ?>


            <?php get_template_part( 'partials/news/preview' ); ?>

            
            <?php endwhile; ?>
          </div>

          <div class="l-container">
            <?php get_template_part( 'partials/global/pagination-archive' ); ?>
          </div>

        <?php else : ?>

          <div class="l-container">
            <?php get_template_part( 'partials/global/not_found' ); ?>
          </div>

        <?php endif; ?>

      </div>
    </main>

  </div>
</div>

<?php get_footer(); ?>