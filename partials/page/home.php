<?php
$homeIntroText = get_field('introduzione');
$homeIntroImage = get_field('immagine');
$homeIntroCit = get_field('citazione');


?>

<section class="p-home-intro u-mt-60 u-mb-90 md:u-mt-150 md:u-mb-220" >


  <div class="u-flex u-flex-col u-gap-y-70 u-mb-100 md:u-mb-140 md:u-gap-x-70 md:u-flex-row lg:u-gap-x-130" >

    <div class="l-image-text" data-s2r="single" data-s2r-type="block-fade-in" >
      <h2 class="u-mb-40 u-tracking-wide">Studio Infermieristico Associato <br> Monsignori Francesco</h2>
      <p class=" u-leading-loose u-font-heading u-text-18 u-mb-40"><?php echo $homeIntroText ?></p>
      <a href="<?php echo site_url('/chi-siamo') ?>" class="o-button  o-button-icon">LEGGI DI PIÙ <span><i><?php bml_the_svg('icon-carret', '0 0 12 12', 'u-w-12 u-h-12  u-inline-block u-ml-10') ?></i></span></a>
    </div>

    <figure  class=" u-self-center u-relative u-mt-35 md:u-mt-10 u-w-[366px] u-h-[380px] sm:u-min-w-[466px] sm:u-w-[466px] sm:u-h-[480px]" data-s2r="single" data-s2r-type="block-fade-in">
      <img data-srcset="<?php echo bml_the_image_srcset($homeIntroImage) ?>" data-sizes="auto" alt="Studio infermieristico Monsignori Francesco" class="lazyload i-cover">
    </figure>
  </div>

  <div class=" u-text-center u-relative u-max-w-7xl u-mx-auto">

    <blockquote class="u-font-heading u-text-26 u-mb-50 u-font-normal u-leading-[45px] u-tracking-widest" data-s2r="single" data-s2r-type="block-fade-in">
      <?php echo $homeIntroCit['citazione'] ?>
    </blockquote>

    <cite  class="u-flex u-justify-end u-text-20 u-font-semibold "><?php echo $homeIntroCit['autore'] ?></cite>


    <div class="o-svg-cite-bg u-overflow-hidden u-z-below u-opacity-70 u-absolute u-top-0 u-right-0 sm:-u-right-70 sm:u-inline-block"  data-s2r="single" data-s2r-type="block-fade-up" data-s2r-duration="1.8">
    <?php bml_the_svg('cite', '0 0 370 320', 'u-w-[270px]' ) ?>
    </div>

  </div>


</section>