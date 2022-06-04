<?php
$rows = get_field('imagine_e_testo');
?>

<section class="p-chi-siamo" >

  <?php if ( $rows ) : ?>
    <?php foreach($rows as $row) : ?>
      <div class="" data-s2r="single" data-s2r-type="stagger-fade-up">
        <figure data-s2r-el><img data-srcset="<?php echo bml_the_image_srcset($row['imagine']) ?>" data-sizes="auto" alt="Francesco Monsignori" class="lazyload"></figure>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>

</section>