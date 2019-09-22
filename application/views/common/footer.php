<footer class="footer" id="footer">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-7 col-lg-6 d-flex flex-column">
                <div class="footer__about-us d-flex">
                    <div class="footer__logo">
                        <a href="/"><img src="/application/public/img/logo/footer-lion.png" alt="Logo_Lion" class="footer__lion"></a>
                    </div>
                    <p class="footer__credo">
                       <?php echo $footer['about']['value']; ?>
                    </p>
                </div>
                <div class="footer__schedule schedule">
                    <div class="schedule__item d-flex">
                        <i class="fal fa-map-marker-alt"></i>
                        <p class="schedule__text">
                            Адрес: <?php echo $footer['addr']['value']; ?>
                        </p>
                    </div>
                    <div class="schedule__item d-flex">
                        <i class="fal fa-calendar-alt"></i>
                        <p class="schedule__text">
                            График работы: <?php echo $footer['schedule']['value']; ?>
                        </p>
                    </div>
                    <div class="schedule__item d-flex">
                        <i class="fal fa-envelope"></i>
                        <p class="schedule__text">
                            Email: <?php echo $footer['mail']['value']; ?>
                        </p>
                    </div>
                    <div class="schedule__item d-flex">
                        <i class="fal fa-phone-volume footer__tel-icon"></i>
                        <a href="tel:<?php echo str_replace(' ', '', $footer['phone_2']['value']); ?>" class="footer__tel-number"><?php echo $footer['phone_2']['value']; ?></a>
                    </div>
                </div>

            </div>
            <div class="offset-lg-2 col-md-5 col-lg-4 d-flex flex-column">
                <div class="footer__contacts-up-wrap d-flex flex-column">
                    <p class="footer__contacts-up-title align-self-end">Доставка и продажа автомобилей</p>
                    <div class="footer__contacts-up d-flex align-items-center">
                        <i class="fal fa-phone-volume footer__tel-icon"></i>
                        <div class="footer__tel-numbers">
                            <a href="tel:<?php echo str_replace(' ', '', $footer['phone_3']['value']); ?>" class="footer__tel-number"><?php echo $footer['phone_3']['value']; ?></a>
                        </div>
                    </div>
                    <div class="footer__contacts-up d-flex align-items-center">
                        <i class="fal fa-phone-volume footer__tel-icon"></i>
                        <div class="footer__tel-numbers">
                            <a href="tel:<?php echo str_replace(' ', '', $footer['phone_1']['value']); ?>" class="footer__tel-number"><?php echo $footer['phone_1']['value']; ?></a>
                        </div>
                    </div>
                </div>
                <div class="footer__contacts-down d-flex justify-content-end">
                    <a class="footer__social footer__social_whatsapp" href="https://api.whatsapp.com/send?phone=<?php echo $messager['whatsapp']['value']; ?>">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a class="footer__social footer__social_viber" href="viber://chat?number=<?php echo $messager['viber']['value']; ?>">
                        <i class="fab fa-viber"></i>
                    </a>
                    <a class="footer__social footer__social_telegram" href="tg://resolve?domain=<?php echo $messager['telegram']['value']; ?>">
                        <i class="fab fa-telegram"></i>
                    </a>
                </div>
                <div class="footer__contacts-studio justify-content-end d-flex mt-auto">
                    <a class="creator-suite" href="tg://resolve?domain=calispell">
                        Создание и обслуживание сайта - студия Calispell
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">

            </div>
        </div>
    </div>
    <hr>
    <div class="footer__copiright d-flex justify-content-center">
        <p class="footer__copiright-text">
            Copyright © 2001-2019 Все права защищены | <a href="/admin">Войти</a>
        </p>
    </div>
</footer>

<script src="/application/public/js/jquery-3.3.1.min.js"></script>
<script src="/application/public/js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="/application/public/js/slider.min.js"></script>
<script src="/application/public/js/menu_sticky.js"></script>
<script src="/application/public/js/form-is change-car.js"></script>
<script src="/application/public/js/Select-years.js"></script>
<script src="https://use.fontawesome.com/c7f254c457.js"></script>

</body>

</html>
