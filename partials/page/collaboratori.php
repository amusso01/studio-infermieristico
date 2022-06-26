<?php
$collaboratori = get_field('collaboratori') ;
?>

<section class="p-collaboratori__content 
 u-mt-60 
 u-mb-100 
 md:u-px-40
 md:u-mt-130 md:u-mb-200 " >

  <h2 class=" u-tracking-widest u-text-center u-mb-85">
    I Nostri <span class="u-text-blue">Collaboratori</span>
  </h2>

  <div class="c-cards c-cards-collab" >
    <?php if ( $collaboratori) : ?>
      <?php foreach($collaboratori as $index => $team) : ?>
        <div class="c-card u-h-full u-w-full  " data-s2r="single" data-s2r-type="block-fade-up">
          <figure class="u-relative u-w-full u-h-[288px]" >
            <img class="lazyload i-cover u-rounded-t-3" data-sizes="auto" data-srcset="<?php bml_the_image_srcset($team['collaboratore']['foto']) ?>" alt="<?php echo get_the_title($team['collaboratore']['foto']) ?>">
          </figure>
          <div class=" c-card__text c-card__text-blue">
            <p class="u-text-15 u-mb-5 u-font-semibold"><?php echo $team['collaboratore']['nome'] ?></p>
            <p class=" u-text-14 u-mb-8"><?php echo $team['collaboratore']['ruolo'] ?></p>
            <p class=" u-text-14 u-mb-5 u-font-medium"> <span class=' u-hidden'><?php bml_the_svg('icon-phone-small', '0 0 11 11', ' u-h-15 u-inline-block u-mr-15 ') ?></span> <a href="tel:<?php echo $team['collaboratore']['numero_di_telefono'] ?> "><?php echo $team['collaboratore']['numero_di_telefono'] ?></a></p>
            <p class=" u-text-14 u-font-medium"> <span class=" u-hidden"><?php bml_the_svg('icon-email-small', '0 0 11 11', ' u-h-17 u-inline-block u-mr-15') ?></span><a href="mailto:<?php echo $team['collaboratore']['email'] ?>"><?php echo $team['collaboratore']['email'] ?></a></p>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>



</section>