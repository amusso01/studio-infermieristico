<?php get_header(); ?>

<div data-router-wrapper>
  <div data-router-view="page">
    <main class="p-page-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>
      
        <?php get_template_part( 'partials/global/hero-page' ); ?>

        <?php if(is_page( 'chi-siamo' ) || is_page(27)) : ?>
          <!-- CHI SIAMO -->
          <div class="l-container" >
            <?php get_template_part( 'partials/page/chi-siamo' ); ?>
          </div>

        <?php elseif(is_page('servizi') || is_page(33)) : ?>
          <!-- SERVIZI -->
          <div class="l-container" >
            <div class="l-container-small" >
            <?php get_template_part( 'partials/page/servizi' ); ?>
            </div>
          </div>

        <?php elseif(is_page('il-team') || is_page(29)) : ?>
          <!-- IL TEAM -->
          <div class="l-container" >
            <?php get_template_part( 'partials/page/il-team' ); ?>
          </div>

        <?php elseif(is_page('collaboratori') || is_page(31)) : ?>
          <!-- COLLABORATORI -->
          <div class="l-container" >
            <?php get_template_part( 'partials/page/collaboratori' ); ?>
          </div>

        <?php elseif(is_page('contatti') || is_page(37)) : ?>
        <!-- CONTATTI -->
        <div class="l-container" >
          <?php get_template_part( 'partials/page/contatti' ); ?>
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