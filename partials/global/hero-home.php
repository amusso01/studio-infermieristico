<?php 

$banner = get_field('testo_banner');

?>


<?php if ( has_post_thumbnail() ) : ?>
<section class="o-hero-home u-h-[645px] u-flex u-items-center lazyload " data-sizes="auto" data-bgset="<?php echo bml_the_image_srcset( get_post_thumbnail_id() , false ); ?>"  >
  <div class="l-container">
    <div class="o-home-hero-text"  data-s2r="single" data-s2r-type="block-fade-up">
      <?php echo $banner ?>
      <a href="<?php echo site_url('/servizi') ?>" class="o-button  o-button-icon">I NOSTRI SERVIZI <span><i><?php bml_the_svg('icon-carret', '0 0 12 12', 'u-w-12 u-h-12  u-inline-block u-ml-10') ?></i></span></a>
    </div>
  </div>
</section>
<?php endif; ?>