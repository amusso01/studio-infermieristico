<?php 

  $google_analytics_tracking_id = get_field( 'google_analytics_tracking_id', 'option' );
  $head_tags = get_field( 'head_tags', 'option' );

?>
<!DOCTYPE html>
<html class="u-h-full" <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<meta name="msapplication-tap-highlight" content="no">

<meta name="mobile-web-app-capable" content="yes">
<meta name="application-name" content="<?php bloginfo(); ?>">

<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="<?php bloginfo(); ?>">

<?php wp_head(); ?>

<?php if ( $google_analytics_tracking_id ) : ?>
  <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $google_analytics_tracking_id; ?>"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '<?php echo $google_analytics_tracking_id; ?>');
  </script>
<?php endif; ?>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PDXTN29');</script>
<!-- End Google Tag Manager -->

<?php echo $head_tags ? $head_tags : ''; ?>

</head>

<body <?php body_class( 'js-body' ); ?> 
x-data="{ scrollTop: false, scrollOneThird : 750, navHide : false }"  
x-init="window.pageYOffset > 150 ? scrollTop = true : scrollTop = false; "
@scroll.window="window.pageYOffset > 150 ? scrollTop = true : scrollTop = false; 
                window.pageYOffset > scrollOneThird ? navHide = true : navHide = false;">


<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PDXTN29"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


  <?php get_template_part( 'partials/global/header' ); ?>

  <section class="u-flex-1 u-mt-110">
