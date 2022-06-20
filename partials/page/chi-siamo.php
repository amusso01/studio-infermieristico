<?php
$rows = get_field('imagine_e_testo');
?>

<section class="p-chi-siamo__content u-mt-60 u-mb-90 md:u-mt-130 md:u-mb-220" >

  <?php if ( $rows ) : ?>
    <?php foreach($rows as $index => $row) : ?>
      <div class="u-flex u-flex-col-reverse u-gap-y-70 u-mb-160 md:u-mb-150 md:u-gap-x-70 md:u-flex-row lg:u-gap-x-130 <?php echo $index === 1 ? 'md:u-flex-row-reverse u-mb-0 md:u-mb-0' : ''?>" >
        <figure  class=" u-self-center u-relative u-min-w-[466px] u-w-[466px] u-h-[580px]" data-s2r="single" data-s2r-type="block-fade-up">
          <img data-srcset="<?php echo bml_the_image_srcset($row['imagine']) ?>" data-sizes="auto" alt="Francesco Monsignori" class="lazyload i-cover">
        </figure>
        <div class="l-image-text" data-s2r="single" data-s2r-type="block-fade-in" >
          <h2 class="u-mb-40 u-tracking-wide"><?php echo $row['titolo'] ?></h2>
          <p class=" u-leading-loose"><?php echo $row['contenuto'] ?></p>
          <?php if($index === 0) : ?>
            <p class="  u-font-heading u-tracking-wide u-font-bold u-mt-45 u-mb-8">Francesco Monsignori</p>
            <p class=" u-font-heading u-tracking-wide">Fondatore e Amministratore Delegato</p>
          <?php endif; ?>
        </div>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>

</section>