<?php if ( has_post_thumbnail() ) : ?>
<section class="o-hero-page <?php echo is_page('collaboratori') || is_page(31) ? 'o-hero-page__collab' : ''?> u-h-220 u-flex u-items-center lazyload " data-sizes="auto" data-bgset="<?php echo bml_the_image_srcset( get_post_thumbnail_id() , false ); ?>"  >
  <div class="l-container">
    <h1><?php echo get_the_title() ?></h1>
  </div>
</section>
<?php endif; ?>