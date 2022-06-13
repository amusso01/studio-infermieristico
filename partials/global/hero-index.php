<?php 
$postPageId = get_queried_object(  )->ID;
?>



<?php if ( has_post_thumbnail() ) : ?>
<section class="o-hero-page u-h-220 u-flex u-items-center lazyload" data-sizes="auto" data-bgset="<?php echo bml_the_image_srcset( get_post_thumbnail_id($postPageId) , false ); ?>"  >
  <div class="l-container">
    <h1><?php single_post_title() ?></h1>
  </div>
</section>
<?php endif; ?>