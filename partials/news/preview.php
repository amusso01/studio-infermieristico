<?php $cat = get_the_category( );?>

<article class=" o-news-card u-px-25 u-py-20 u-shadow-[0px_3px_4px_1px_rgba(54,56,57,0.25)] u-flex u-flex-col u-justify-between">
  <div class="u-flex u-flex-row u-items-center u-justify-between u-pb-25" >

    <div class=" u-text-teal u-uppercase u-tracking-wider u-font-heading u-font-semibold u-text-14"><?php echo $cat[0]->name ?></div>


    <div class=" u-bg-blue u-px-10 u-py-3 u-text-white">
      <time class="u-font-semibold u-text-13 u-tracking-wide" datetime="<?php the_time( 'Y-m-j' ); ?>"><?php the_time( 'M j, Y' ); ?></time>
    </div>

  </div>

  <?php if ( has_post_thumbnail() ) : ?>
    <figure class="u-mb-25">
      <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
        <img data-srcset="<?php bml_the_image_srcset( get_post_thumbnail_id() ); ?>" data-sizes="auto" class="u-w-full lazyload" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>" title="<?php echo get_the_title( get_post_thumbnail_id() ); ?>">
      </a>
    </figure>
  <?php endif; ?>

  <header>
    <?php if ( get_the_title() ) : ?>
      <h3 class="u-text-17 u-tracking-wide"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
    <?php endif; ?>
  </header>
  
  <?php if ( get_the_excerpt() ) : ?>
    <div class="u-mt-20 u-text-14 u-pb-15">
      <?php the_excerpt(); ?>
    </div>
  <?php endif; ?>
</article>