<?php echo $header; ?>
<div class="content-bg-gray">
    <div class="container">
        <div class="row">
            <div class="auto-way__wrap col d-flex flex-wrap">
                <p class="auto-way__text">Вы находитесь здесь: &nbsp;</p>
                <a class="auto-way__text" href="/"> Главная &nbsp; // &nbsp;</a>
                <a class="auto-way__text" href="/auction"> Аукцион &nbsp; // &nbsp;</a>
                <a class="auto-way__text auto-way__text_orange text-uppercase" href="/auction-auto/<?php echo $copart_auto['lot_id'];?>"> <?php echo $copart_auto['lot_car_brand'] . ' ' . $copart_auto['lot_car_model']; ?></a>
            </div>
        </div>
    </div>
    <section class="a-auto-ss" id="a-auto-ss">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-5 col-xl-4">
                    <div class="a-auto-ss__list-wrap">
                        <div class="row a-auto-ss__name-wrap">
                            <h2 class="col-12 a-auto-ss__name">
                                <?php echo $copart_auto['lot_car_brand'] . ' ' . $copart_auto['lot_car_model']; ?>
                            </h2>
                            <div class="col-12 a-auto-ss__item d-flex">
                                <div class="a-auto-ss__item-key-wrap">
                                    <img src="/application/public/img/auto1/bidding-hummer.png" alt="" class="a-auto-ss__key-img">
                                    <span class="a-auto-ss__key">
                                        Дата аукциона
                                    </span>
                                </div>
                                <p class="a-auto-ss__value ml-auto">
                                    <?php echo date('d.m.Y', $copart_auto['sale_date']); ?>
                                </p>
                            </div>
                            <div class="col-12 a-auto-ss__item d-flex">
                                <div class="a-auto-ss__item-key-wrap">
                                    <img src="/application/public/img/auto1/sale-status.png" alt="" class="a-auto-ss__key-img">
                                    <span class="a-auto-ss__key">
                                        Статус продажи
                                    </span>
                                </div>
                                <p class="a-auto-ss__value ml-auto">
                                    <?php echo $copart_auto['bid_sale_status']; ?>
                                </p>
                            </div>
                            <div class="col-12 a-auto-ss__item d-flex">
                                <div class="a-auto-ss__item-key-wrap">
                                    <img src="/application/public/img/auto1/curent-rate.png" alt="" class="a-auto-ss__key-img">
                                    <span class="a-auto-ss__key">
                                        Текущая ставка
                                    </span>
                                </div>
                                <p class="a-auto-ss__value ml-auto">
                                    <?php echo $copart_auto['bid_current_bid']; ?>$
                                </p>
                            </div>
                            <div class="col-12 a-auto-ss__item d-flex">
                                <div class="a-auto-ss__item-key-wrap">
                                    <img src="/application/public/img/auto1/end-reload.png" alt="" class="a-auto-ss__key-img">
                                    <span class="a-auto-ss__key">
                                        Последнее обновление
                                    </span>
                                </div>
                                <p class="a-auto-ss__value ml-auto">
                                    <?php 
                                    $this_date = explode(' ', $copart_auto['date_change']); 
                                    $this_date[0] = explode('-', $this_date[0]); 
                                    echo $this_date[0][2] . '.' . $this_date[0][1] . '.' . $this_date[0][0] . ' '; 
                                    echo $this_date[1];
                                    ?>
                                </p>
                            </div>
                        </div>
                        <div class="row a-auto-ss__specifications-wrap d-flex">
                            <div class="col-12 a-auto-ss__subtitle-wrap">
                                <h6 class="a-auto-ss__subtitle">
                                    Технические характеристики
                                </h6>
                            </div>
                            <div class="col-12 a-auto-ss__item d-flex">
                                <div class="a-auto-ss__item-key-wrap">
                                    <img src="/application/public/img/auto/auto-fuel.png" alt="" class="a-auto-ss__key-img">
                                    <span class="a-auto-ss__key">
                                        Топливо
                                    </span>
                                </div>
                                <p class="a-auto-ss__value ml-auto">
                                    <?php echo $copart_auto['feature_fuel']; ?>
                                </p>
                            </div>
                            <div class="col-12 a-auto-ss__item d-flex">
                                <div class="a-auto-ss__item-key-wrap">
                                    <img src="/application/public/img/auto/auto-road.png" alt="" class="a-auto-ss__key-img">
                                    <span class="a-auto-ss__key">
                                        Пробег
                                    </span>
                                </div>
                                <p class="a-auto-ss__value ml-auto">
                                    <?php echo $copart_auto['lot_odometr']; ?>км
                                </p>
                            </div>
                            <div class="col-12 a-auto-ss__item d-flex">
                                <div class="a-auto-ss__item-key-wrap">
                                    <img src="/application/public/img/auto/auto-engine.png" alt="" class="a-auto-ss__key-img">
                                    <span class="a-auto-ss__key">
                                        Двигатель
                                    </span>
                                </div>
                                <p class="a-auto-ss__value ml-auto">
                                    <?php echo $copart_auto['feature_engine_type']; ?>L
                                </p>
                            </div>
                            <div class="col-12 a-auto-ss__item d-flex">
                                <div class="a-auto-ss__item-key-wrap">
                                    <img src="/application/public/img/auto/auto-calendar.png" alt="" class="a-auto-ss__key-img">
                                    <span class="a-auto-ss__key">
                                        Год
                                    </span>
                                </div>
                                <p class="a-auto-ss__value ml-auto">
                                    <?php echo $copart_auto['lot_car_year']; ?>
                                </p>
                            </div>
                            <div class="col-12 a-auto-ss__item d-flex">
                                <div class="a-auto-ss__item-key-wrap">
                                    <img src="/application/public/img/auto/auto-KPP.png" alt="" class="a-auto-ss__key-img">
                                    <span class="a-auto-ss__key">
                                        КПП
                                    </span>
                                </div>
                                <p class="a-auto-ss__value ml-auto">
                                    <?php echo $copart_auto['feature_transmission']; ?>
                                </p>
                            </div>
                            <div class="col-12 a-auto-ss__item d-flex">
                                <div class="a-auto-ss__item-key-wrap">
                                    <img src="/application/public/img/auto/auto-while.png" alt="" class="a-auto-ss__key-img">
                                    <span class="a-auto-ss__key">
                                        Привод
                                    </span>
                                </div>
                                <p class="a-auto-ss__value ml-auto">
                                    <?php echo $copart_auto['feature_drive']; ?>
                                </p>
                            </div>
                            <div class="col-12 a-auto-ss__item d-flex">
                                <div class="a-auto-ss__item-key-wrap">
                                    <img src="/application/public/img/auto/auto-paint.png" alt="" class="a-auto-ss__key-img">
                                    <span class="a-auto-ss__key">
                                        Цвет
                                    </span>
                                </div>
                                <p class="a-auto-ss__value ml-auto">
                                    <?php echo $copart_auto['feature_color']; ?>
                                </p>
                            </div>
                            <div class="col-12 a-auto-ss__item d-flex">
                                <div class="a-auto-ss__item-key-wrap">
                                    <img src="/application/public/img/auto/auto-body.png" alt="" class="a-auto-ss__key-img">
                                    <span class="a-auto-ss__key">
                                        Кузов
                                    </span>
                                </div>
                                <p class="a-auto-ss__value ml-auto">
                                    <?php echo $copart_auto['feature_body_style']; ?>
                                </p>
                            </div>
                        </div>
                        <div class="a-auto-ss__more-wrap text-center">
                            <div class=" cnt">
                                <button id="mod_my_lot" class="a-auto-ss__more open-modal-btn">
                                    Предложить ставку
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-8">
                    <div class="a-auto-ss__carusel-wrap">
                        <div id="gallery">
                            <div id="panel">
                                <img class="largeImage1" id="largeImage" src="<?php echo $copart_auto['links_images'][array_keys($copart_auto['links_images'])[0]]; ?>" />
                            </div>
                            <div id="thumbs" class="d-flex justify-content-between flex-wrap">
                                <?php foreach($copart_auto['links_images'] as $key => $img): ?>
                                <img src="<?php echo $img; ?>" alt="Описание 1" class="smallImage1 <?php echo ($key == 0 ? 'thumbs__border-active' : '');?>" />
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="a-auto-forms">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-7 offset-xl-1 col-xl-6 d-flex flex-column">
                    <div class="a-auto-forms__technical-certificate">
                        <h6 class="a-auto-forms__subtitle">
                            Технический паспорт
                        </h6>
                        <div class="a-auto-forms__item-wrap">
                            <div class="a-auto-forms__item d-flex justify-content-between">
                                <span class="a-auto-forms__key">
                                    Тип документа
                                </span>
                                <p class="a-auto-forms__value">
                                    <?php echo $copart_auto['lot_doc_type']; ?>
                                </p>
                            </div>
                        </div>
                        <div class="a-auto-forms__item-wrap">
                            <div class="a-auto-forms__item d-flex justify-content-between">
                                <span class="a-auto-forms__key">
                                    VIN
                                </span>
                                <p class="a-auto-forms__value">
                                    <?php echo $copart_auto['lot_vin']; ?>
                                </p>
                            </div>
                        </div>
                        <div class="a-auto-forms__item-wrap">
                            <div class="a-auto-forms__item d-flex justify-content-between">
                                <span class="a-auto-forms__key">
                                    Основные повреждения
                                </span>
                                <p class="a-auto-forms__value">
                                    <?php echo $copart_auto['lot_primary_damage']; ?>
                                </p>
                            </div>
                        </div>
                        <div class="a-auto-forms__item-wrap">
                            <div class="a-auto-forms__item d-flex justify-content-between">
                                <span class="a-auto-forms__key">
                                    Особенности
                                </span>
                                <p class="a-auto-forms__value">
                                    Заводится и едет
                                </p>
                            </div>
                        </div>
                        <div class="a-auto-forms__item-wrap">
                            <div class="a-auto-forms__item d-flex justify-content-between">
                                <span class="a-auto-forms__key">
                                    Пробег подтвержден
                                </span>
                                <p class="a-auto-forms__value">
                                    <?php echo $copart_auto['lot_odometr_type']; ?>
                                </p>
                            </div>
                        </div>
                        <div class="a-auto-forms__item-wrap">
                            <div class="a-auto-forms__item d-flex justify-content-between">
                                <span class="a-auto-forms__key">
                                    Ключи
                                </span>
                                <p class="a-auto-forms__value">
                                    <?php echo $copart_auto['feature_keys']; ?>
                                </p>
                            </div>
                        </div>
                        <div class="a-auto-forms__item-wrap">
                            <div class="a-auto-forms__item d-flex justify-content-between">
                                <span class="a-auto-forms__key">
                                    Нахождение
                                </span>
                                <p class="a-auto-forms__value">
                                    <?php echo $copart_auto['sale_location']; ?>
                                </p>
                            </div>
                        </div>
                        <div style="font-size:18px;" class="auto-additionally__link-auction-wrap text-center">
                            <a target="_blank" href="<?php echo $copart_auto['link_to_copart']; ?>" class="auto-additionally__link-auction">cсылка на аукцион</a>
                        </div>
                        <div class="a-auto-forms__buy-report-wrap mt-auto text-center">
                            <div class=" cnt">
                                <button id="mod_sale_vin" class="a-auto-forms__link-report open-modal-btn">
                                    купить подробный vin отчет (4.95$)
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4 d-flex">
                    <form action="" class="a-auto-calculate">
                        <h5 class="a-auto-calculate__title text-center">
                            Расчет таможенных платежей легкового автомобиля
                        </h5>
                        <div class="row a-auto-calculate__wrap-fuel-type">
                            <div class="col-7 text-right">
                                <label class="a-auto-calculate__label" for="">Тип двигателя</label>
                            </div>
                            <div class="col-5">
                                <div class="calc_type_select" class="a-auto-calculate__fuel-type">
                                    <input type="radio" class="calc_type" name="type" value="1" checked> бензин <br>
                                    <input type="radio" class="calc_type" name="type" value="2"> дизель <br>
                                    <input type="radio" class="calc_type" name="type" value="0"> электро <br>
                                </div>
                            </div>
                        </div>
                        <div id="calc_year_label" class="row a-auto-calculate__item">
                            <div class="col-7 text-right">
                                <label class="a-auto-calculate__label" for="">Год выпуска</label>
                            </div>
                            <div class="col-5">
                                <div class="a-auto-calculate__wrap-input">
                                    <input id="calc_year" class="a-auto-calculate__input" pattern="[0-9]{4}" type="numb" min="1980" max="2019" placeholder="1980" required>
                                </div>
                            </div>
                        </div>
                        <div class="row a-auto-calculate__item">
                            <div class="col-7 text-right">
                                <label id="calc_engin_label" class="a-auto-calculate__label" for="">Объём, см<sup>3</sup></label>
                            </div>
                            <div class="col-5">
                                <div class="a-auto-calculate__wrap-input">
                                    <input id="calc_engin" class="a-auto-calculate__input" type="numb" pattern="[0-9]{4}" placeholder="2500" required>
                                </div>
                            </div>
                        </div>
                        <div class="row a-auto-calculate__item">
                            <div class="col-7 text-right">
                                <label class="a-auto-calculate__label" for="">Стоимость, $США</label>
                            </div>
                            <div class="col-5">
                                <div class="a-auto-calculate__wrap-input">
                                    <input id="calc_cost" class="a-auto-calculate__input" type="numb" placeholder="7500" required>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-end a-auto-calculate__btns">
                            <input id="calc_import" class="a-auto-calculate__btn a-auto-calculate__btn_orange" type="button" value="Рассчет">
                            <input class="a-auto-calculate__btn a-auto-calculate__btn_gray" type="reset" value="Сброс">
                        </div>
                        <div class="row a-auto-calculate__item">
                            <div class="col-7 text-right">
                                <label class="a-auto-calculate__label" for="">Итого к оплате</label>
                            </div>
                            <div class="col-5">
                                <div class="a-auto-calculate__wrap-input">
                                    <input id="calc_summ" class="a-auto-calculate__input" type="numb" placeholder="$" readonly>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="a-auto-question">
        <div class="container">
            <div class="row">
                <div class="offset-lg-1 col-lg-10">
                    <form action="" class="a-auto-question__wrap-form" method="post">
                        <h3 class="a-auto-question__title">
                            Задать вопрос
                        </h3>
                        <div class="a-auto-question__wrap-for-contacts d-flex flex-column flex-sm-row">
                            <input name="ans_name" type="text" class="a-auto-question__name" placeholder="Ваше имя">
                            <input name="ans_phone" type="phone" class="a-auto-question__tel" placeholder="Номер телефона">
                        </div>
                        <textarea name="ans_message" id="" class="a-auto-question__textarea" rows="4" placeholder="Введите сообщение"></textarea>
                        <input name="ans_auto_id" type="hidden" class="a-auto-question__btn" value="<?php echo $copart_auto['id']; ?>">
                        <input name="ans_sub" type="submit" class="a-auto-question__btn">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="a-auto-information">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <p class="a-auto-information__text">
                        На официальном сайте компании Adlion вы можете подобрать автомобиль с аукциона Copart. Все предложения на сайте актуальны и соответствуют данным аукциона.
                    </p><br>
                    <p class="a-auto-information__text">
                        Многолетний опыт работы компании Adlion с американскими аукционами позволяет предоставить нашим заказчикам более расширенную информационную базу по каждому автомобилю. Лот каждого интересуемого авто проверяется сотрудником нашей компании на реальность заявленного пробега, на участие в ДТП со смертельным исходом, на количество владельцев и количество перепродаж на американском рынке, на факт затопления автомобиля и другие страховые случаи. Информация собирается из разных источников:<br>
                        - правоохранительные органы;<br>
                        - государственные учреждения;<br>
                        - страховые компании;<br>
                        - автосалоны;<br>
                        - станции технического обслуживания и др.
                    </p><br>
                    <p class="a-auto-information__text">
                        Подбираете ли вы автомобиль на американских аукционах впервые, или уже осуществляли покупку авто из Америки неоднократно, компания Adlion позаботится,чтобы процесс подбора, покупки и доставки автомобиля из США для вас стал наиболее комфортным, максимально удобным и гарантированно безопасным.
                    </p>
                </div>
                <div class="col-lg-5">
                    <div class="a-auto-information__img-wrap">
                        <img class="a-auto-information__img" src="/application/public/img/auto1/a-auto-example-car.jpg" alt="">
                        <p class="a-auto-information__img-label text-center">
                            BMW X1 2016 года<br>
                            2.0 бензин 28160км пробег
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Модальные окна  -->
<div id="wrapper-1">
    <div class="cover-1"></div>
    <div class="modal-1">
        <div class="modal-1__wrap">
            <p class="modal-1__title">Предложить ставку</p>
            <form class="modal-1__form d-flex flex-column" method="post">
                <input name="rate_name" class="modal-1__input" type="text" placeholder="Ваше имя" required="">
                <input name="rate_phone" class="modal-1__input" type="tel" placeholder="Номер телефона" required="">
                <input name="rate_usd" class="modal-1__input" type="number" placeholder="Сумма в $ США" required="">
                <input name="rate_auto_id" value="<?php echo $copart_auto['id']; ?>" class="modal-1__btn" type="hidden" />
                <input name="rate_sub" class="modal-1__btn" type="submit" />
            </form>
        </div>
    </div>
</div>
<div id="wrapper-2">
    <div class="cover-2"></div>
    <div class="modal-2">
        <div class="modal-2__wrap">
            <p class="modal-2__title">Купить VIN отчёт</p>
            <form class="modal-2__form d-flex flex-column" method="post">
                <input name="sale_vin_name" class="modal-2__input" type="text" placeholder="Ваше имя" required="">
                <input name="sale_vin_phone" class="modal-2__input" type="tel" placeholder="Номер телефона" required="">
                <input name="sale_vin_vin" value="<?php echo $copart_auto['lot_vin']; ?>" class="modal-2__input" type="text" placeholder="Здесь должен стоять тот VIN код который на каждой странице" readonly>
                <input name="sale_auto_id" value="<?php echo $copart_auto['id']; ?>" class="modal-2__btn" type="hidden" />
                <input name="sale_vin_sub" class="modal-2__btn" type="submit" />
            </form>
        </div>
    </div>
</div>

<script>
    // Открытие модальных окон
    $('#mod_my_lot').click(function() {
        $('.cover-1').addClass('modal_visible');
        $('.modal-1__wrap').addClass('modal_visible');
    });

    $('#mod_sale_vin').click(function() {
        $('.cover-2').addClass('modal_visible');
        $('.modal-2__wrap').addClass('modal_visible');
    });

    // Закрытие модальных окон
    $('.cover-1').click(function() {
        $('.cover-1').removeClass('modal_visible');
        $('.modal-1__wrap').removeClass('modal_visible');
    });

    $('.cover-2').click(function() {
        $('.cover-2').removeClass('modal_visible');
        $('.modal-2__wrap').removeClass('modal_visible');
    });
    
    // Для верхнего слайдера
    $('.smallImage1').click(function() {
        $('.largeImage1').attr('src', $(this).attr('src'));
        $('.thumbs__border-active').removeClass('thumbs__border-active');
        $(this).addClass('thumbs__border-active');
    });

    $(".calc_type_select").click(function() {
        var type = $(".calc_type:checked").val();
        if (type == 0) {
            $('#calc_year_label').hide();
            $('#calc_engin_label').html("Ёмкоть, кВт/час");

        } else {
            $('#calc_year_label').show();
            $('#calc_engin_label').html("Объём, см<sup>3</sup>");
        }
    });

    $("#calc_import").click(function() {
        $.ajax({
            url: "http://adlion.info/calc_import",
            data: {
                type: $(".calc_type:checked").val(),
                year: $("#calc_year").val(),
                engin: $("#calc_engin").val(),
                cost: $("#calc_cost").val()
            },
            success: function(data) {
                //alert(data);
                $("#calc_summ").val(data + '$');
            }
        });
    });

</script>
<?php echo $footer ?>
