<?php 
$postPageTitle = get_the_title( get_option('page_for_posts') );
$pageForPosts = get_option( 'page_for_posts' );



?>



<?php if ( has_post_thumbnail() ) : ?>
<section class="o-hero-page u-h-220 u-flex u-items-center lazyload" data-sizes="auto" data-bgset="<?php echo bml_the_image_srcset( get_post_thumbnail_id($pageForPosts) , false ); ?>"  >
  <div class="l-container">
    <h1><?php echo $postPageTitle ?></h1>
  </div>
</section>
<?php endif; ?>