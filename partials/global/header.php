<header class="u-bg-white u-py-25  u-left-0 u-w-full u-z-header u-fixed u-top-0 u-transition-all u-duration-slow"  :class="{ ' u-shadow-md u-py-15' : scrollTop , '-u-top-110' : navHide }" role="banner">
  <div class="l-container u-flex u-items-center u-justify-between">
    <h1 class="o-nav-logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="xs:u-flex xs:u-items-center" aria-label="<?php bloginfo(); ?>">
        <figure class="u-relative u-w-[268px] u-h-[52px]  md:u-h-[60px] md:u-w-[300px] u-transition-all u-duration-normal" :class="{ 'u-w-[267px] u-h-[47px]' : scrollTop  }" >
          <img src="<?php echo get_template_directory_uri(  ).'/assets/dist/images/logo.jpg' ?>" alt="Studio Infermieristico logo" class="u-absolute u-object-cover u-top-0 u-left-0 u-w-full u-h-full">
        </figure>
        <?php ?>
        <span class="u-hidden u-uppercase md:u-text-22 md:u-ml-10"><?php bloginfo(); ?></span>
      </a>
    </h1>
    <nav class="o-nav o-nav--header" x-data  :class="{'o-nav-s-open': $store.openMenu.on}" role="navigation">
      <?php bml_the_menu( 'primary_menu' ); ?>
    </nav>
    <div class="u-c-hamburger u-c-hamburger--criss-cross md:u-hidden" x-data @click="$store.openMenu.toggle()" :class="{'u-active': $store.openMenu.on }" >
      <div class="u-c-hamburger-inner">
        <span class="u-c-hamburger-bar"></span>
        <span class="u-c-hamburger-bar"></span>
        <span class="u-c-hamburger-bar"></span>
      </div>
    </div>
  </div>
</header>