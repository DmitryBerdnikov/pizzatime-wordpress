<!-- footer-page -->
<footer class="footer-page">
  <div class="container">
    <div class="footer-page__text"><?php echo carbon_get_theme_option( 'site_footer_text' ); ?></div>
  </div>
</footer>
<!-- /.footer-page -->


<!-- popup-menu -->
<div class="popup popup-menu">
  <div class="popup__wrapper">
    <div class="popup__inner">
      <div class="popup__content popup__content--fluid popup__content--centered">
        <button class="btn-close popup__btn-close popup-close"></button>
        <nav class="mobile-menu popup__mobile-menu">
          <?php
            wp_nav_menu( [
              'theme_location'  => 'menu_main_header',
              'container'       => null, 
              'menu_class'      => 'mobile-menu__ul popup-close', 
            ] );
          ?>
        </nav>
        <div class="phone popup__phone">
          <a class="phone__item phone__item--accent" href="tel:<?php echo $GLOBALS['pizza_time']['phone_digits']; ?>"><?php echo $GLOBALS['pizza_time']['phone']; ?></a>
        </div>
        <ul class="socials">
          <?php if ($GLOBALS['pizza_time']['vk_url']) : ?>
            <li class="socials__item">
              <a href="<?php echo $GLOBALS['pizza_time']['vk_url']; ?>" class="socials__link" target="_blank">
                <svg class="socials__icon socials__icon--vk" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 112.2 112.2" width="35" height="35">
                  <g>
                    <circle cx="56.1" cy="56.1" r="56.1" />
                    <path class="socials__logo" d="M54,80.7h4.4a3.33,3.33,0,0,0,2-.9,3.37,3.37,0,0,0,.6-1.9s-.1-5.9,2.7-6.8,6.2,5.7,9.9,8.2c2.8,1.9,4.9,1.5,4.9,1.5l9.8-.1s5.1-.3,2.7-4.4c-.2-.3-1.4-3-7.3-8.5-6.2-5.7-5.3-4.8,2.1-14.7,4.5-6,6.3-9.7,5.8-11.3s-3.9-1.1-3.9-1.1l-11.1.1a2.32,2.32,0,0,0-1.4.3,3.58,3.58,0,0,0-1,1.2A60,60,0,0,1,70,50.9c-4.9,8.4-6.9,8.8-7.7,8.3-1.9-1.2-1.4-4.9-1.4-7.5,0-8.1,1.2-11.5-2.4-12.4a17.68,17.68,0,0,0-5.2-.5c-4,0-7.3,0-9.2.9-1.3.6-2.2,2-1.6,2.1a5.05,5.05,0,0,1,3.3,1.6c1.1,1.5,1.1,5,1.1,5s.7,9.6-1.5,10.7c-1.5.8-3.5-.8-7.9-8.4a67.05,67.05,0,0,1-4-8.2,2.82,2.82,0,0,0-.9-1.2,5.13,5.13,0,0,0-1.7-.7l-10.5.1s-1.6,0-2.2.7,0,1.9,0,1.9,8.2,19.3,17.6,29c8.5,9,18.2,8.4,18.2,8.4Z" />
                  </g>
                </svg>
              </a>
            </li>
          <?php endif; ?>

          <?php if ($GLOBALS['pizza_time']['fb_url']) : ?>
            <li class="socials__item">
              <a href="<?php echo $GLOBALS['pizza_time']['fb_url']; ?>" class="socials__link" target="_blank">
                <svg class="socials__icon socials__icon--fb" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 112.2 112.2" width="35" height="35">
                  <g>
                    <circle cx="56.1" cy="56.1" r="56.1" />
                    <path class="socials__logo" d="M70.2,58.3h-10V95H45V58.3H37.8V45.4H45V37.1c0-6,2.8-15.3,15.3-15.3H71.5V34.3H63.3c-1.3,0-3.2.7-3.2,3.5v7.6H71.4Z" />
                  </g>
                </svg>
              </a>
            </li>
          <?php endif; ?>

          <?php if ($GLOBALS['pizza_time']['inst_url']) : ?>
            <li class="socials__item">
              <a href="<?php echo $GLOBALS['pizza_time']['inst_url']; ?>" class="socials__link" target="_blank">
                <svg class="socials__icon socials__icon--inst" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="35" height="35">
                  <g>
                    <path d="M332.3,136.2H179.7a44.21,44.21,0,0,0-44.2,44.2V333a44.21,44.21,0,0,0,44.2,44.2H332.3A44.21,44.21,0,0,0,376.5,333V180.4A44.21,44.21,0,0,0,332.3,136.2ZM256,336a79.3,79.3,0,1,1,79.3-79.3A79.42,79.42,0,0,1,256,336Zm81.9-142.2A18.8,18.8,0,1,1,356.7,175,18.78,18.78,0,0,1,337.9,193.8Z" />
                    <path d="M256,210.9a45.8,45.8,0,1,0,45.8,45.8A45.86,45.86,0,0,0,256,210.9Z" />
                    <path d="M256,0C114.6,0,0,114.6,0,256S114.6,512,256,512,512,397.4,512,256,397.4,0,256,0ZM410,333a77.78,77.78,0,0,1-77.7,77.7H179.7A77.78,77.78,0,0,1,102,333V180.4a77.84,77.84,0,0,1,77.7-77.7H332.3A77.84,77.84,0,0,1,410,180.4Z" />
                  </g>
                </svg>
              </a>
            </li>
          <?php endif; ?>
          </ul>
      </div>
    </div>
  </div>
</div>
<!-- /.popup-menu -->

<!-- popup-order -->
<div class="popup popup-order">
  <div class="popup__wrapper">
    <div class="popup__inner">
      <div class="popup__content">
        <button class="btn-close popup__btn-close popup-close"></button>
        <h2 class="page-title">Корзина</h2>
        <div class="cart js-cart-wrapper">
          <form class="form cart__form form-send">
            <div class="cart__items js-cart">
            </div>
            <div class="cart__totals">
              <div>Итого: <span class="cart__bold"><span class="js-cart-total-price"></span> ₽</span></div>
            </div>
            <div class="order">
            <h3 class="order__title">Заполните форму</h3>
              <div class="form__main">
                <input class="form__input" type="text" name="Имя" placeholder="Имя" required="">
                <input class="form__input" type="text" name="Телефон" placeholder="Телефон" required="">
                <input class="form__input" type="text" name="Адрес" placeholder="Адрес" required="">
                <input class="js-cart-total-price-input" type="hidden" name="Общая сумма">
                <select class="form__input" name="оплата">
                  <option value="Оплата наличными">Оплата наличными</option>
                  <option value="Оплата картой">Оплата картой</option>
                </select>
                <button class="btn form__btn" type="submit">Отправить</button>
              </div>
            </div>
          </form>
          <div class="cart__empty">
            <p class="cart__info">Нет товаров</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.popup-order -->

<!-- popup-thanks -->
<div class="popup popup-thanks">
  <div class="popup__wrapper">
    <div class="popup__inner">
      <div class="popup__content">
        <button class="btn-close popup__btn-close popup-close"></button>
        <h2 class="page-title popup__title">Успешно отправлено</h2>
        <p class="popup__subtitle">Мы уже начали готовить ваш заказ</p>
      </div>
    </div>
  </div>
</div>
<!-- /.popup-thanks -->

<!-- popup-error -->
<div class="popup popup-error">
  <div class="popup__wrapper">
    <div class="popup__inner">
      <div class="popup__content">
        <button class="btn-close popup__btn-close popup-close"></button>
        <h2 class="page-title popup__title">Произошла ошибка</h2>
        <p class="popup__subtitle">Пожалуйста, сделайте заказ по номеру <a class="popup__link" href="<?php echo $GLOBALS['pizza_time']['phone_digits']; ?>"><?php echo $GLOBALS['pizza_time']['phone']; ?></a></p>
      </div>
    </div>
  </div>
</div>
<!-- /.popup-error -->

<button class="cart-btn" data-popup="popup-order">
  <span class="cart-btn__counter js-cart-total-count-items">0</span>
  <svg class="cart-btn__icon" viewBox="0 -31 512.00026 512" xmlns="http://www.w3.org/2000/svg">
    <path d="m164.960938 300.003906h.023437c.019531 0 .039063-.003906.058594-.003906h271.957031c6.695312 0 12.582031-4.441406 14.421875-10.878906l60-210c1.292969-4.527344.386719-9.394532-2.445313-13.152344-2.835937-3.757812-7.269531-5.96875-11.976562-5.96875h-366.632812l-10.722657-48.253906c-1.527343-6.863282-7.613281-11.746094-14.644531-11.746094h-90c-8.285156 0-15 6.714844-15 15s6.714844 15 15 15h77.96875c1.898438 8.550781 51.3125 230.917969 54.15625 243.710938-15.941406 6.929687-27.125 22.824218-27.125 41.289062 0 24.8125 20.1875 45 45 45h272c8.285156 0 15-6.714844 15-15s-6.714844-15-15-15h-272c-8.269531 0-15-6.730469-15-15 0-8.257812 6.707031-14.976562 14.960938-14.996094zm312.152343-210.003906-51.429687 180h-248.652344l-40-180zm0 0" />
    <path d="m150 405c0 24.8125 20.1875 45 45 45s45-20.1875 45-45-20.1875-45-45-45-45 20.1875-45 45zm45-15c8.269531 0 15 6.730469 15 15s-6.730469 15-15 15-15-6.730469-15-15 6.730469-15 15-15zm0 0" />
    <path d="m362 405c0 24.8125 20.1875 45 45 45s45-20.1875 45-45-20.1875-45-45-45-45 20.1875-45 45zm45-15c8.269531 0 15 6.730469 15 15s-6.730469 15-15 15-15-6.730469-15-15 6.730469-15 15-15zm0 0" />
  </svg>
</button>

  <?php wp_footer(); ?>
</body>
</html>