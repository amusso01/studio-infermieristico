<footer class=" u-bg-black-text-2  u-text-white c-footer" role="contentinfo">
  <div class="c-footer-info  u-pt-60 u-pb-50 ">
    <div class="l-container u-grid u-grid-cols-footer u-gap-x-75">
      <div class="c-footer-left c-footer-item u-flex u-flex-col u-gap-y-55 ">
        <div class="c-footer-left__top">
          <div class=" u-border-1 u-border-teal u-rounded-tl-40 u-py-35 u-px-30 u-rounded-tr-5 u-rounded-br-40 u-rounded-bl-5">
            <h3 class="o-h-footer">ORARI AMBULATORIALI</h3>
            <ul class=" u-space-y-15 ">
              <li class="u-flex u-justify-between">
                <p class="o-hour-footer">Lunedì - Venerdì:</p>
                <p class="o-hour-footer">7.00 - 13.00 | 15.30 - 18.30</p>
              </li>
              <li class="u-flex u-justify-between">
                <p class="o-hour-footer">Sabato:</p>
                <p class="o-hour-footer">7.00 - 13.00</p>
              </li>
            </ul>
          </div>

        </div>
        <div class="c-footer-left__bottom">
          <h3 class="o-h-footer">CONTATTI</h3>
          <ul class=" u-space-y-10">
            <li class="c-contact-footer" ><span><?php bml_the_svg('icon-phone', '0 0 17 17', 'u-w-17 u-h-17 u-inline-block u-mr-25 ') ?></span><a href="tel:+39 0187 1864906">+39 0187 1864906</a></li>
            <li class="c-contact-footer" ><span><?php bml_the_svg('icon-phone', '0 0 17 17', 'u-w-17 u-h-17 u-inline-block u-mr-25 ') ?></span><a href="tel:+39 366 4239850">+39 366 4239850</a></li>
            <li class="c-contact-footer" ><span><?php bml_the_svg('icon-map', '0 0 17 17', 'u-w-17 u-h-17 u-inline-block u-mr-25 ') ?></span><a href="https://goo.gl/maps/VpM9CcBTNv3dtviz5" rel=”noreferrer noopener”  target="_blank" >Via Aurelia 160 - Castelnuovo Magra</a></li>
            <li class="c-contact-footer" ><span><?php bml_the_svg('icon-email', '0 0 17 17', 'u-w-17 u-h-17 u-inline-block u-mr-25 ') ?></span><a href="mailto:monsignorifrancesco@hotmail.it" >monsignorifrancesco@hotmail.it</a></li>
          </ul>
        </div>
      </div>
      <div class="c-footer-center c-footer-item u-flex u-flex-col u-gap-y-55">
        <div class="c-footer-center__top">
          <p class="u-text-13 u-mb-15 u-leading-loose">Scarica la modulistica per le visite a domicilio e risparmia tempo</p>
          <a href="#" class="o-button o-button-white u-relative">MODULISTICA <span> <i><?php bml_the_svg('doc', '0 0 21 21', 'u-w-20 u-h-20 u-inline-block u-m-l-10 u-absolute o-svg-color u-top-1/2 u-right-20 -u-translate-y-1/2') ?></i> </span></a> 
       </div>
        <div class="c-footer-center__bottom u-h-full u-flex u-flex-col u-justify-end">
          <h3 class="o-h-footer">LINK UTILI</h3>
          <nav class="o-nav-footer">
            <?php bml_the_menu('footer_menu' , "o-nav-footer-menu") ?>
          </nav>
        </div>
      </div>
      <div class="c-footer-right c-footer-item">
        <h3 class="o-h-footer">SEGUICI SU FACEBOOK</h3>

      </div>
    </div>
  </div>
  <div class="C-footer-copyright u-border-t-1 u-border-t-white">
    <p class="  u-pb-10 u-pt-10  l-container u-text-12"><?php printf( '%1$s %2$s %3$s', '&copy;', date( 'Y' ), get_bloginfo() ); ?></p>
  </div>
</footer>