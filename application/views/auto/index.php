<?php echo $header; ?>
<div class="content-bg-gray">

    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-10">
                <div class="auto-way__wrap col d-flex flex-wrap">
                    <p id='largeImage1' class="auto-way__text">Вы находитесь здесь: &nbsp;</p>
                    <a class="auto-way__text" href="/"> Главная &nbsp; // &nbsp;</a>
                    <a class="auto-way__text" href="/catalog">Каталог автомобилей &nbsp; // &nbsp;</a>
                    <a class="auto-way__text auto-way__text_orange" href="/auto/<?php echo $auto['id']; ?>">
                        <?php echo $auto['car_mark']; ?>
                        <?php echo $auto['car_model']; ?></a>
                </div>
            </div>
            <?php if($admin == 1):?>
            <div class="col-6 col-md-3 col-lg-2 d-flex">
                <div class="admin-btn-wrap d-flex align-items-center">
                    <a href="/auto/edit/<?php echo $auto['id']; ?>" class="a-e-edit-auto-btn text-center">
                        Редактировать
                    </a>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <section class="auto-specifications" id="auto-specifications">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-4">
                    <div class="auto-specifications__list-wrap">
                        <div class="auto-specification__name-wrap">
                            <h2 class="auto-specification__name">
                                <?php echo $auto['car_mark']; ?>
                                <norb>
                                    <?php echo $auto['car_model']; ?>
                                </norb>
                            </h2>
                            <p class="auto-specification__date-delivery">
                                <?php echo ($auto['date_sale'] != '' ? 'Продано' : ($auto['date_sapply'] != '' ? ($auto['date_sapply'] <= date('Y-m-d') ? 'В наличии' : 'Дата доставки: ' . substr($auto['date_sapply'], 8, 2) . '.' . substr($auto['date_sapply'], 5, 2) . '.' . substr($auto['date_sapply'], 0, 4)) : 'Дата доставки: --')); ?>
                            </p>
                            <div class="auto-specifications__item d-flex">
                                <img src="/application/public/img/auto/auto-price.png" alt="" class="auto-specifications__key-img">
                                <p class="auto-specification__price">
                                    от
                                    <?php echo $auto['cost_port']; ?>$<br>
                                    под ключ
                                    <?php echo $auto['cost_key']; ?>$
                                </p>
                            </div>
                        </div>
                        <div class="row auto-specifications__specifications-wrap d-flex">
                            <div class="col-12 auto-specifications__subtitle-wrap">
                                <h6 class="auto-specifications__subtitle">
                                    Технические характеристики
                                </h6>
                            </div>
                            <div class="col-12 auto-specifications__item d-flex">
                                <div class="auto-specification__item-key-wrap">
                                    <img src="/application/public/img/auto/auto-fuel.png" alt="" class="auto-specifications__key-img">
                                    <span class="auto-specifications__key">
                                        Топливо
                                    </span>
                                </div>
                                <p class="auto-specifications__value ml-auto">
                                    <?php echo $auto['car_fuel']; ?>
                                </p>
                            </div>
                            <div class="col-12 auto-specifications__item d-flex">
                                <div class="auto-specification__item-key-wrap">
                                    <img src="/application/public/img/auto/auto-road.png" alt="" class="auto-specifications__key-img">
                                    <span class="auto-specifications__key">
                                        Пробег
                                    </span>
                                </div>
                                <p class="auto-specifications__value ml-auto">
                                    <?php echo $auto['car_mileage']; ?> km
                                </p>
                            </div>
                            <div class="col-12 auto-specifications__item d-flex">
                                <div class="auto-specification__item-key-wrap">
                                    <img src="/application/public/img/auto/auto-engine.png" alt="" class="auto-specifications__key-img">
                                    <span class="auto-specifications__key">
                                        Двигатель
                                    </span>
                                </div>
                                <p class="auto-specifications__value ml-auto">
                                    <?php echo $auto['car_engine']; ?> L
                                </p>
                            </div>
                            <div class="col-12 auto-specifications__item d-flex">
                                <div class="auto-specification__item-key-wrap">
                                    <img src="/application/public/img/auto/auto-calendar.png" alt="" class="auto-specifications__key-img">
                                    <span class="auto-specifications__key">
                                        Год
                                    </span>
                                </div>
                                <p class="auto-specifications__value ml-auto">
                                    <?php echo ($auto['car_year_issue'] == ''? '--' : $auto['car_year_issue']); ?>
                                </p>
                            </div>
                            <div class="col-12 auto-specifications__item d-flex">
                                <div class="auto-specification__item-key-wrap">
                                    <img src="/application/public/img/auto/auto-KPP.png" alt="" class="auto-specifications__key-img">
                                    <span class="auto-specifications__key">
                                        КПП
                                    </span>
                                </div>
                                <p class="auto-specifications__value ml-auto">
                                    <?php echo $auto['car_kpp']; ?>
                                </p>
                            </div>
                            <div class="col-12 auto-specifications__item d-flex">
                                <div class="auto-specification__item-key-wrap">
                                    <img src="/application/public/img/auto/auto-while.png" alt="" class="auto-specifications__key-img">
                                    <span class="auto-specifications__key">
                                        Привод
                                    </span>
                                </div>
                                <p class="auto-specifications__value ml-auto">
                                    <?php echo $auto['car_drive_unit']; ?>
                                </p>
                            </div>
                            <div class="col-12 auto-specifications__item d-flex">
                                <div class="auto-specification__item-key-wrap">
                                    <img src="/application/public/img/auto/auto-paint.png" alt="" class="auto-specifications__key-img">
                                    <span class="auto-specifications__key">
                                        Цвет
                                    </span>
                                </div>
                                <p class="auto-specifications__value ml-auto">
                                    <?php echo $auto['car_color']; ?>
                                </p>
                            </div>
                            <div class="col-12 auto-specifications__item d-flex">
                                <div class="auto-specification__item-key-wrap">
                                    <img src="/application/public/img/auto/auto-body.png" alt="" class="auto-specifications__key-img">
                                    <span class="auto-specifications__key">
                                        Кузов
                                    </span>
                                </div>
                                <p class="auto-specifications__value ml-auto">
                                    <?php echo $auto['car_body']; ?>
                                </p>
                            </div>
                        </div>
                        <div class="auto-specifications__more-wrap text-center">
                            <a class="auto-specification__more" href="tel:<?php echo str_replace(' ', '', $phones['1']['value']); ?>" class="header__call">
                                <norb>Позвонить</norb>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="auto-specifications__carusel-wrap">
                        <div id="gallery">
                            <div id="panel">
                                <img class='largeImage1' id="largeImage" src="<?php echo $auto['link_img'][0]; ?>" alt="<?php echo $auto['link_img'][0]; ?>" />
                            </div>
                            <div id="thumbs" class="d-flex justify-content-between flex-wrap">
                                <?php if(count($auto['link_img']) > 1): $n_img = 0; foreach($auto['link_img'] as $img): if($n_img++ == 99) break; ?>
                                <img class="smallImage1 <?php echo ($n_img == 1 ? 'thumbs__border-active' : ''); ?>" src="<?php echo $img; ?>" alt="<?php echo $img; ?>" />
                                <?php endforeach; endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="auto-additionally" id="auto-additionally">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 col-lg-5 d-flex flex-column">
                    <div class="auto-additionally__technical-certificate">
                        <h6 class="auto-additionally__subtitle">
                            Технический паспорт
                        </h6>
                        <div class="auto-additionally__item-wrap">
                            <div class="auto-additionally__item d-flex justify-content-between">
                                <span class="auto-additionally__key">
                                    VIN
                                </span>
                                <p class="auto-additionally__value">
                                    <?php echo $auto['car_vin']; ?>
                                </p>
                            </div>
                        </div>
                        <div class="auto-additionally__item-wrap">
                            <div class="auto-additionally__item d-flex justify-content-between">
                                <span class="auto-additionally__key">
                                    Основные повреждения
                                </span>
                                <p class="auto-additionally__value">
                                    <?php echo $auto['info_damage']; ?>
                                </p>
                            </div>
                        </div>
                        <div class="auto-additionally__item-wrap">
                            <div class="auto-additionally__item d-flex justify-content-between">
                                <span class="auto-additionally__key">
                                    Особенности
                                </span>
                                <p class="auto-additionally__value">
                                    <?php echo $auto['info_special']; ?>
                                </p>
                            </div>
                        </div>
                        <div class="auto-additionally__item-wrap">
                            <div class="auto-additionally__item d-flex justify-content-between">
                                <span class="auto-additionally__key">
                                    Пробег подтвержден
                                </span>
                                <p class="auto-additionally__value">
                                    <?php echo ($auto['info_mileage_confirmed'] == ''? 'не указано' : $auto['info_mileage_confirmed']); ?>
                                </p>
                            </div>
                        </div>
                        <div class="auto-additionally__item-wrap">
                            <div class="auto-additionally__item d-flex justify-content-between">
                                <span class="auto-additionally__key">
                                    Ключи
                                </span>
                                <p class="auto-additionally__value">
                                    <?php echo $auto['info_key']; ?>
                                </p>
                            </div>
                        </div>
                        <div class="auto-additionally__link-auction-wrap text-center">
                            <a target="_blank" href="<?php echo $auto['link_lot']; ?>" class="auto-additionally__link-auction">cсылка на аукцион</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="auto-additionally__additional-information">
                        <h6 class="auto-additionally__subtitle">
                            Дополнительная информация по автомобилю
                        </h6>
                        <p class="auto-additionally__text">
                            <?php echo ($auto['info_other'] == '1'? '--' : $auto['info_other']); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php if($auto['date_recovery'] . $auto['date_sale'] != ''): ?>
    <section class="auto-history" id="auto-history">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-4">
                    <div class="auto-history__restored-cars-wrap d-flex flex-column">
                        <h6 class="auto-history__restored-subtitle">
                            Восстановление автомобиля
                        </h6>
                        <p class="auto-history__restored-date">
                            <?php echo ($auto['date_recovery'] != '' ? ($auto['date_recovery'] <= date('Y-m-d') ? 'Восстановлен' : 'Дата окончания работ: ' . substr($auto['date_recovery'], 8, 2) . '.' . substr($auto['date_recovery'], 5, 2) . '.' . substr($auto['date_recovery'], 0, 4)) : 'Дата окончания работ: --'); ?>
                        </p>
                        <div class="auto-history__price-wrap d-flex">
                            <img src="/application/public/img/auto/auto-price.png" alt="" class="auto-history__price-img">
                            <p class="auto-history__price">
                                $
                                <?php echo $auto['cost_key']; ?>
                            </p>
                        </div>
                        <div class="auto-history__description-wrap">
                            <p class="auto-history__description-subtitle">
                                Описание
                            </p>
                            <p class="auto-history__description-text">
                                <?php echo $auto['info_desc_recovery']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-lg-8">
                    <div id='largeImage2' class="auto-history__carusel-wrap">
                        <div id="gallery">
                            <div id="panel">
                                <img class='largeImage2' id="largeImage" src="<?php echo (count($auto['link_img_lion']) > 1 ? '/application/public/img/auto_lion/' . $auto['car_vin'] . '/' : '' ) . $auto['link_img_lion'][0]; ?>" />
                            </div>
                            <div id="thumbs" class="d-flex justify-content-between flex-wrap">
                                <?php if(count($auto['link_img_lion']) > 1 ): $n_img = 0; foreach($auto['link_img_lion'] as $img): if($n_img++ == 99) break; ?>
                                <img class="smallImage2 <?php echo ($n_img == 1 ? 'thumbs__border-active' : ''); ?>" src="/application/public/img/auto_lion/<?php echo $auto['car_vin'] . '/' . $img; ?>" alt="<?php echo $auto['car_vin'] . '/' . $img; ?>" />
                                <?php endforeach; endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
</div>
<script>
    // Для верхнего слайдера
    $('.smallImage1').click(function() {
        $('.largeImage1').attr('src', $(this).attr('src'));
        $('.thumbs__border-active').removeClass('thumbs__border-active');
        $(this).addClass('thumbs__border-active');
    });
    // Для нижнего слайдера
    $('.smallImage2').click(function() {
        $('.largeImage2').attr('src', $(this).attr('src'));
        $('.thumbs__border-active').removeClass('thumbs__border-active');
        $(this).addClass('thumbs__border-active');
    });

</script>
<?php echo $footer ?>
