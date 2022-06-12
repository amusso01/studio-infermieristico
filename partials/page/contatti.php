<?php
  $castMap = get_field('Gmappa');
  $castAddress = get_field('dove_siamo');
  $castPhone = get_field('numeri_telefonici');
  $castEmail = get_field('email');

  $spMap = get_field('Gmappa_sp');
  $spAddress = get_field('dove_siamo_sp');
  $spPhone = get_field('numeri_telefonici_sp');
  $spEmail = get_field('email_sp');
  
?>

<section class="p-contatti__content 
 u-mt-60 
 u-mb-100 
 md:u-px-40
 md:u-mt-130 md:u-mb-200 " >

  
  <div class="c-map c-map_castelnuovo u-mb-180">
    <h2 class=" u-tracking-widest u-text-center u-mb-85">
      Castelnuovo Magra
    </h2>
    <div class="u-grid u-grid-cols-2 u-gap-x-90">

      <?php echo $castMap; ?>

      <div class="u-flex u-flex-col u-h-full u-justify-around">
        <?php if($castAddress) : ?>
          <div class="u-flex u-flex-col u-space-y-5">
            <?php bml_the_svg('icon-map' , '0 0 50 50' ,'u-w-40 u-mb-10') ?>
            <h4 class="u-text-20 u-mb-15">DOVE CI TROVI</h4>
            <p ><?php echo $castAddress ?></p>
          </div>
        <?php endif; ?>

        <?php if($castPhone) : ?>
        <div class="u-flex u-flex-col u-space-y-5">
          <?php bml_the_svg('icon-phone' , '0 0 50 50' ,'u-w-40 u-mb-10') ?>
          <h4 class="u-text-20 u-mb-15">TELEFONACI</h4>
          <?php foreach($castPhone as $number)  : ?>
          <p ><a href="tel:<?php echo $number['telefono'] ?>"><?php echo $number['telefono'] ?></a> </p>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <?php if($castPhone) : ?>
        <div class="u-flex u-flex-col u-space-y-5">
          <?php bml_the_svg('icon-email' , '0 0 50 50' ,'u-w-40 u-mb-10') ?>
          <h4 class="u-text-20 u-mb-15">SCRIVICI</h4>
          <p ><a href="mailto:<?php echo $castEmail ?>"><?php echo $castEmail ?></a> </p>
        </div>
        <?php endif; ?>
      </div>

    </div>

  </div>
  
  <div class="c-map c-map_sp u-mb-150">
    <h2 class=" u-tracking-widest u-text-center u-mb-85">
      La Spezia
    </h2>
    <div class="u-grid u-grid-cols-2 u-gap-x-90">

      <?php echo $spMap; ?>

      <div class="u-flex u-flex-col u-h-full u-justify-around">
        <?php if($spAddress) : ?>
          <div class="u-flex u-flex-col u-space-y-5">
            <?php bml_the_svg('icon-map' , '0 0 50 50' ,'u-w-40 u-mb-10') ?>
            <h4 class="u-text-20 u-mb-15">DOVE CI TROVI</h4>
            <p ><?php echo $spAddress ?></p>
          </div>
        <?php endif; ?>

        <?php if($spPhone) : ?>
        <div class="u-flex u-flex-col u-space-y-5">
          <?php bml_the_svg('icon-phone' , '0 0 50 50' ,'u-w-40 u-mb-10') ?>
          <h4 class="u-text-20 u-mb-15">TELEFONACI</h4>
          <?php foreach($spPhone as $number)  : ?>
          <p ><a href="tel:<?php echo $number['telefono'] ?>"><?php echo $number['telefono'] ?></a> </p>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <?php if($spPhone) : ?>
        <div class="u-flex u-flex-col u-space-y-5">
          <?php bml_the_svg('icon-email' , '0 0 50 50' ,'u-w-40 u-mb-10') ?>
          <h4 class="u-text-20 u-mb-15">SCRIVICI</h4>
          <p ><a href="mailto:<?php echo $spEmail ?>"><?php echo $spEmail ?></a> </p>
        </div>
        <?php endif; ?>
      </div>

    </div>

  </div>






</section>