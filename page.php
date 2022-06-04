<?php get_header(); ?>

<div data-router-wrapper>
  <div data-router-view="page">
    <main class="p-page-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>
      
        <?php get_template_part( 'partials/global/hero-page' ); ?>

        <?php if(is_page( 'chi-siamo' ) || is_page(27)) : ?>

          <div class="l-container" >
            <?php get_template_part( 'partials/page/chi-siamo' ); ?>
          </div>

        <?php else : ?>

          <div class="l-container" >
            <?php get_template_part( 'partials/page/default' ); ?>
          </div>

        <?php endif; ?>

      <?php endwhile; ?>

    </main>


  </div>
</div>

<?php get_footer(); ?>