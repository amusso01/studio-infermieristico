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
          <a href="#" class="o-button o-button-white ">MODULISTICA <span> <i>
            
            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0391 2.13931C12.0391 2.02388 11.9446 1.9303 11.828 1.9303H5.91816C4.63591 1.9303 3.59644 2.95968 3.59644 4.22948V15.9344C3.59644 17.2042 4.63591 18.2336 5.91816 18.2336H14.3608C15.643 18.2336 16.6825 17.2042 16.6825 15.9344V7.69669C16.6825 7.58126 16.588 7.48768 16.4714 7.48768H12.6723C12.3226 7.48768 12.0391 7.20693 12.0391 6.86063V2.13931ZM11.8546 11.0554C12.1277 10.8391 12.5261 10.8829 12.7446 11.1534C12.963 11.4237 12.9188 11.8184 12.6457 12.0347L10.5402 13.7028C10.4315 13.7908 10.2928 13.8437 10.1416 13.8442H10.1395H10.1341C9.98556 13.843 9.84912 13.7911 9.74165 13.705L7.63328 12.0347C7.36021 11.8184 7.31593 11.4237 7.53439 11.1534C7.75285 10.8829 8.15131 10.8391 8.42439 11.0554L9.50635 11.9126V9.03685C9.50635 8.69056 9.78977 8.40981 10.1395 8.40981C10.4892 8.40981 10.7727 8.69056 10.7727 9.03685V11.9125L11.8546 11.0554Z" fill="#00CACD"/>
              <path d="M13.3054 2.41034C13.3054 2.25609 13.468 2.15815 13.5893 2.25505C13.6913 2.33665 13.7831 2.43227 13.8614 2.54028L16.4053 6.05C16.4632 6.1299 16.4005 6.23361 16.3011 6.23361H13.5165C13.3999 6.23361 13.3054 6.14002 13.3054 6.02459V2.41034Z" fill="#00CACD"/>
            </svg>
        
          </i> </span></a> 
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