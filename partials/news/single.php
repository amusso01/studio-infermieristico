<?php if ( has_post_thumbnail() ) : ?>
  <div class="u-col-span-10 sm:u-col-span-4 ">
    <div class="sm:u-sticky sm:u-top-55">
      <figure class=" u-h-[313px] u-w-[401px] u-relative" data-s2r-el>
        <img data-srcset="<?php bml_the_image_srcset( get_post_thumbnail_id() ); ?>" data-sizes="auto" class="u-w-full lazyload i-cover" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>" title="<?php echo get_the_title( get_post_thumbnail_id() ); ?>">
      </figure>
      <?php if(get_field('scritto_da')) : ?>
      <div class="u-mt-40">
        <p class=" u-font-heading u-text-14 -u-tracking-wide u-font-normal u-mb-10">Articolo scritto da:</p>
        <p class="u-font-heading u-text-14 -u-tracking-wide u-font-semibold "><?php echo get_field('scritto_da') ?></p>
      </div>
      <?php endif; ?>
    </div>

  </div>
<?php endif; ?>

<article class="u-col-span-10 sm:u-col-span-6" >

  <header data-s2r-el>
    <?php if ( get_the_title() ) : ?>
      <h1 class="u-h2 u-mb-30"><?php the_title(); ?></h1>
    <?php endif; ?>
    <div class="u-text-16 u-font-bold u-text-teal u-font-heading u-tracking-wider">
      <time datetime="<?php the_time( 'Y-m-j' ); ?>"><?php the_time( 'j M , Y' ); ?></time>   
    </div>
  </header>
  
  <?php if ( get_the_content() ) : ?>
    <div class="u-rich-text u-mb-100 u-mt-30 md:u-mt-50 js-richText" data-s2r-el>
      <?php the_content(); ?>
    </div>
  <?php endif; ?>

  <div class="u-flex u-flex-col sm:u-flex-row u-gap-y-25 u-justify-between">
    <div class="u-border-1 u-border-solid u-min-h-[45px] u-self-start u-border-black-text-2 u-inline-flex u-gap-x-17 u-items-center u-py-9 u-px-17 u-shadow-md u-rounded-3">
      <div class="u-w-[32px] u-h-[32px] u-flex u-justify-center u-items-center u-border-1 u-border-solid u-border-teal u-rounded-full ">
       <i title="SHARE"><?php bml_the_svg('icon-share', '0 0 17 17', 'u-w-17 u-h-15 u-inline-block') ?></i>
      </div>

      <div class="u-w-[32px] u-h-[32px] u-flex u-justify-center u-items-center u-border-1 u-border-solid u-border-black-text-2 u-rounded-full ">
        <a target="_blank" rel=”noopener noreferrer” href="https://www.facebook.com/sharer.php?u=<?php echo get_the_permalink() ?>">
          <i><?php bml_the_svg('icon-facebook', '0 0 21 21', 'u-w-25 u-h-25 u-inline-block') ?></i>
        </a>
      </div>

      <div class="u-w-[32px] u-h-[32px] u-flex u-justify-center u-items-center u-border-1 u-border-solid u-border-black-text-2 u-rounded-full ">
        <a target="_blank" rel=”noopener noreferrer”  href="https://twitter.com/intent/tweet?text=<?php echo get_the_title() ?>!&url=<?php echo get_the_permalink() ?>">
          <i><?php bml_the_svg('icon-twitter', '0 0 17 17', 'u-w-25 u-h-25  u-inline-block') ?></i>
        </a>
      </div>
    </div>

    <a href="<?php echo site_url( '/news' ) ?>" class="o-button o-button-icon">TUTTE LE NEWS <span><i><?php bml_the_svg('icon-carret', '0 0 12 12', 'u-w-12 u-h-12  u-inline-block u-ml-10') ?></i></span></a>
  </div>
</article>