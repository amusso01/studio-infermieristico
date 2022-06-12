<?php
$teams = get_field('teams') ;
?>

<section class="p-team__content 
 u-mt-60 
 u-mb-100 
 md:u-px-40
 md:u-mt-130 md:u-mb-200 " >

  <h2 class=" u-tracking-widest u-text-center u-mb-85">
    I Nostri <span class="u-text-teal">Professionisti</span>
  </h2>

  <div class="c-cards" >
    <?php if ( $teams) : ?>
      <?php foreach($teams as $index => $team) : ?>
        <div class="c-card u-h-full u-w-full xs:u-w-[233px] " data-s2r="single" data-s2r-type="block-fade-up">
          <figure class="u-relative u-w-full u-h-[288px]" >
            <img class="lazyload i-cover u-rounded-t-3" data-sizes="auto" data-srcset="<?php bml_the_image_srcset($team['team_member']['foto']) ?>" alt="<?php echo get_the_title($team['team_member']['foto']) ?>">
          </figure>
          <div class=" c-card__text">
            <p class="u-text-14 u-mb-5 u-font-semibold"><?php echo $team['team_member']['nome'] ?></p>
            <p class=" u-text-13"><?php echo $team['team_member']['ruolo'] ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>



</section>