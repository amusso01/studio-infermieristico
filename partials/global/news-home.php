<?php 

$args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => 3

);

$the_query = new WP_Query( $args );
?>


<section class="p-home__servizi u-mb-100 md:u-mt-130 md:u-mb-200 u-hidden" >

  <h2 class=" u-text-38 sm:u-text-45 u-text-center u-tracking-wider u-mb-50 md:u-mb-80"  data-s2r="single" data-s2r-type="block-fade-up">News e Comunicati</h2>

  <div class="u-grid u-grid-cols-1  sm:u-grid-cols-3 u-gap-y-40 u-gap-x-40 md:u-gap-x-80 u-mb-80"  data-s2r="single" data-s2r-type="block-fade-in">

    <?php if ( $the_query->have_posts() ) :  ?>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post();  ?>

        <div class="c-card-news-home">
          <div class="u-flex u-justify-between">
            <?php $cat = get_the_category(  ) ?>
            <p class="u-font-heading u-font-medium u-tracking-widest u-uppercase u-mb-20 u-text-14"><?php echo $cat[0]->name  ?></p>

            <?php if($cat[0]->name  == "Comunicati") :?>
              <i><?php bml_the_svg('icon-comunicato', '0 0 15 16', 'u-w-15 u-h-16 ') ?></i>
            <?php endif; ?>
          </div>
          <p class="u-bg-blue u-text-white u-py-1 u-px-17 u-self-start">
            <time class="u-font-semibold u-text-13 u-tracking-wide" datetime="<?php the_time( 'Y-m-j' ); ?>"><?php the_time( 'j F Y' ); ?></time>
          </p>
          <h6 class="u-text-17 u-font-semibold u-mt-35 u-mb-30"> <a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title() ?></a></h6>
          <p class="u-text-14 u-leading-loose u-mb-60"><?php echo get_the_excerpt(  ) ?></p>
          <a href="<?php echo get_the_permalink() ?>" class="u-font-heading u-text-teal u-font-semibold hover:u-underline">PROSEGUI LA LETTURA</a>
        </div>

      <?php endwhile; ?>
      <?php endif; ?>

      <?php 
        // Reset Post Data
        wp_reset_postdata();
      ?>

  </div>



  <a href="<?php echo site_url('/news') ?>" class="o-button o-button-icon u-mt-40" >TUTTE LE NEWS <span><i><?php bml_the_svg('icon-carret', '0 0 12 12', 'u-w-12 u-h-12  u-inline-block u-ml-10') ?></i></span></a>

</section>