<?php get_header(); ?>

<div data-router-wrapper>
  <div data-router-view="page">
    <main class="p-home-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>
      
        <?php get_template_part( 'partials/global/hero-home' ); ?>

        <div class="l-container" >
        
        <?php get_template_part( 'partials/page/home' ); ?>
        
        <?php get_template_part( 'partials/global/servizi' ); ?>
        
        <?php get_template_part( 'partials/global/sedi' ); ?>

        <?php get_template_part( 'partials/global/news-home' ); ?>

      
        </div>

      <?php endwhile; ?>

    </main>


  </div>
</div>

<?php get_footer(); ?>