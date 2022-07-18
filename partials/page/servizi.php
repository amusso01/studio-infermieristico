<?php
$servizi = get_field('servizi') ;
?>

<section class="p-servizi__content u-mt-60 u-mb-100 md:u-mt-130 md:u-mb-200" >

  <h2 class="u-text-30 sm:u-text-38 u-font-normal u-tracking-wider u-max-w-[83rem] u-mb-100">
  Lo Studio Infermieristico Associato 
  effettua i seguenti servizi professionali
  </h2>

  <div class="c-accordion" data-s2r="single" data-s2r-type="stagger-fade-up"  x-data="{ selected:null  }">
    <?php if ( $servizi ) : ?>
      <?php foreach($servizi as $index => $servizio) : ?>
        <div class="c-accordion-single u-rounded-3 u-bg-grey-light-b u-mb-35 " data-s2r-el >
          <!-- HEAD -->
          <div class=" u-w-full u-py-30 u-px-25 u-flex u-items-center u-justify-between hover:u-cursor-pointer" 
          @click="selected !== <?php echo $index ?> ? selected = <?php echo $index ?> : selected = null" 
          :class="selected == <?php echo $index ?> ? 's-active' : ''" >

            <p class=" u-font-heading u-font-medium u-text-18 sm:u-text-24 u-tracking-wide u-transition-all u-duration-slow"><?php echo $servizio['titolo'] ?></p>
            <i class="u-w-20 u-h-20" x-cloak x-show="selected == <?php echo $index ?>" ><?php bml_the_svg('minus') ?></i> 
            <i class="u-w-20 u-h-20" x-cloak x-show="selected !== <?php echo $index ?>" ><?php bml_the_svg('plus') ?></i> 

          </div>
          <!-- CONTENT -->
          <div class="u-max-h-0 u-overflow-hidden u-duration-slow " x-ref="tab<?php echo $index ?>"
          :style="selected == <?php echo $index ?> ? 'max-height: ' + $refs.tab<?php echo $index ?>.scrollHeight + 'px; border-top: 1px solid #232C33' : '' "  >

              <p class="u-px-25 u-pt-30 u-mb-20 u-tracking-wider">Durata: <?php echo $servizio['durata'] ?></p>
              <p class="u-px-25 u-pb-30 u-mb-15 u-uppercase u-tracking-wide u-text-18 u-leading-medium"><?php echo $servizio['contenuto'] ?></p>
              <p class="u-px-25 u-pb-50 u-uppercase u-font-semibold">Per appuntamenti  <a href="tel:+39 366 4239850">+39 366 4239850 </a></p>

          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>

  <div class="o-svg-servizi-bg u-overflow-hidden u-z-below u-absolute u-top-20 u-left-[40%] md:-u-top-100 md:u-left-[85%]">
    <?php bml_the_svg('servizi-bg', '0 0 470 420', ' u-w-[120px] md:u-w-[470px] ' ) ?>
  </div>

</section>