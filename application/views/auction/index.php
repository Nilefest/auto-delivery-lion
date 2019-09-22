<?php echo $header; ?>
<div class="content-bg-white">
    <div class="container">
        <div class="row">
            <div class="auto-way__wrap col d-flex flex-wrap">
                <p class="auto-way__text">Вы находитесь здесь: &nbsp;</p>
                <a class="auto-way__text" href="/"> Главная &nbsp; // &nbsp;</a>
                <a class="auto-way__text auto-way__text_orange " href="/auction">Аукцион Copart</a>
            </div>
        </div>
    </div>
    <section id="auction-list-and-calculate" class="auction-list-and-calculate">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div style="padding-top:0px;" class="auction-paginate d-flex justify-content-center text-center">
                        <a href="/auction/<?php echo ($this_page == 1 ? '1' : $this_page - 1) . $get_str; ?>" class="auction-paginate__arrow-link"><i class="fas fa-chevron-left"></i></a>
                        <a href="/auction/1<?php echo $get_str; ?>" class="auction-paginate__page-link <?php echo ($this_page == 1 ? 'page-link__active' : ''); ?>">1</a>
                        <?php if($this_page > 4): ?>
                        <p class="auction-paginate__page-link">...</p>
                        <?php endif; ?>
                        <?php $n_page = ($this_page > 3 ? $this_page - 2 : 2); for(;$n_page <= $page_total;$n_page++): if($n_page == $this_page + 3 || $n_page == $page_total) break; ?>
                        <a href="/auction/<?php echo $n_page . $get_str; ?>" class="auction-paginate__page-link <?php echo ($this_page == $n_page ? 'page-link__active' : ''); ?>"><?php echo $n_page; ?></a>
                        <?php endfor;?>
                        <?php if($this_page < $page_total - 3): ?>
                        <p class="auction-paginate__page-link">...</p>
                        <?php endif; ?>
                        <a href="/auction/<?php echo $page_total . $get_str; ?>" class="auction-paginate__page-link <?php echo ($this_page == $page_total ? 'page-link__active' : ''); ?>"><?php echo $page_total; ?></a>
                        <a href="/auction/<?php echo ($this_page == $page_total ? $page_total : $this_page + 1) . $get_str; ?>" class="auction-paginate__arrow-link"><i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-2 col-md-8 offset-lg-0 col-lg-4">
                    <form action="" class="tab-auction__form">
                        <div class="tab-auction__logo-title d-flex align-items-center">
                            <img src="/application/public/img/brand/copart-logo.png" alt="" class="tab-auction__logo">
                            <h4 class="tab-auction__title">Поиск по аукциону</h4>
                        </div>
                        <div class="tab-auction__wrap">
                            <div class="tab-auction__change-item d-flex">
                                <label class="col-sm-5 col-md-6 col-lg-5 mark__label  text-center" for="mark">
                                    Марка:
                                </label>
                                <select name="mark" class="col-sm-7 col-md-6 col-lg-7 mark__select" name="" id="mark">
                                    <?php foreach($auto_type as $mark): ?>
                                    <option value="<?php echo $mark['mark']; ?>"><?php echo $mark['mark']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="tab-auction__change-item d-flex">
                                <label class="col-sm-5 col-md-6 col-lg-5 model__label text-center" for="model">
                                    Модель:
                                </label>
                                <select name="model" class="col-sm-7 col-md-6 col-lg-7 model__select" id="model">
                                    <option value="all">Все модели</option>
                                    <?php $models = explode(' ', $auto_type[0]['models']); foreach($models as $model): ?>
                                    <option value="<?php echo $model; ?>"><?php echo $model; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="tab-auction__change-item d-flex">
                                <label for="year-min" class="col-sm-5 col-md-6 col-lg-5 year-min__label text-center">
                                    <norb>Год от:</norb>
                                </label>
                                <select name="year-min" id="year-min" class="col-sm-5 col-md-4 col-lg-5 year-min__select">
                                    <?php for($n_year = date('Y'); $n_year > 1950; $n_year--): ?>
                                    <option <?php echo ($n_year == 2014 ? 'selected' : ''); ?> value="<?php echo $n_year; ?>"><?php echo $n_year; ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="tab-auction__change-item d-flex">
                                <label for="year-max" class="col-sm-5 col-md-6 col-lg-5 year-max__label text-center">
                                    до:
                                </label>
                                <select name="year-max" id="year-max" class="col-sm-5 col-md-4 col-lg-5 year-max__select">
                                    <?php for($n_year = date('Y'); $n_year > 1950; $n_year--): ?>
                                    <option <?php echo ($n_year == date('Y') ? 'selected' : ''); ?> value="<?php echo $n_year; ?>"><?php echo $n_year; ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                        </div>
                        <div class="tab-auction__btn-wrap d-flex justify-content-center">
                            <input name="sub_search_auction" class="tab-auction__btn " type="submit" value="Подобрать авто">
                        </div>
                    </form>
                    <form method="get" action="" class="calculate-customs">
                        <h5 class="calculate-customs__title text-center">
                            Расчет таможенных платежей легкового автомобиля
                        </h5>
                        <div class="row calculate-customs__wrap-fuel-type">
                            <div class="col-7 text-right">
                                <label class="calculate-customs__label" for="">Тип двигателя</label>
                            </div>
                            <div class="col-5">
                                <div class="calc_type_select calculate-customs__fuel-type">
                                    <input type="radio" class="calc_type" name="type" value="1" checked> бензин <br>
                                    <input type="radio" class="calc_type" name="type" value="2"> дизель <br>
                                    <input type="radio" class="calc_type" name="type" value="0"> электро <br>
                                </div>
                            </div>
                        </div>
                        <div id="calc_year_label" class="row calculate-customs__item">
                            <div class="col-7 text-right">
                                <label class="calculate-customs__label" for="calc_year">Год выпуска</label>
                            </div>
                            <div class="col-5">
                                <div class="calculate-customs__wrap-input">
                                    <input id="calc_year" class="calculate-customs__input" pattern="[0-9]{4}" type="numb" min="1980" max="<?php echo date('Y')?>" placeholder="1980" required name="year">
                                </div>
                            </div>
                        </div>
                        <div class="row calculate-customs__item">
                            <div class="col-7 text-right">
                                <label id="calc_engin_label" class="calculate-customs__label" for="calc_engin">Объём, см<sup>3</sup></label>
                            </div>
                            <div class="col-5">
                                <div class="calculate-customs__wrap-input">
                                    <input id="calc_engin" class="calculate-customs__input" type="numb" pattern="[0-9]{4}" placeholder="2500" required name="engin">
                                </div>
                            </div>
                        </div>
                        <div class="row calculate-customs__item">
                            <div class="col-7 text-right">
                                <label class="calculate-customs__label" for="calc_cost">Стоимость, $США</label>
                            </div>
                            <div class="col-5">
                                <div class="calculate-customs__wrap-input">
                                    <input id="calc_cost" class="calculate-customs__input" type="numb" placeholder="7500" required name="cost">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-end calculate-customs__btns">
                            <input name="calc_import" id="calc_import" class="calculate-customs__btn calculate-customs__btn_orange" type="button" value="Рассчет">
                            <input class="calculate-customs__btn calculate-customs__btn_gray" type="reset" value="Сброс">
                        </div>
                        <div class="row calculate-customs__item">
                            <div class="col-7 text-right">
                                <label class="calculate-customs__label" for="summ">Итого к оплате</label>
                            </div>
                            <div class="col-5">
                                <div class="calculate-customs__wrap-input">
                                    <input id="calc_summ" name="summ" class="calculate-customs__input" type="numb" placeholder="$" readonly>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-8">
                    <div class="auction-list">
                        <h4 class="auction-list__title">
                            новые поступления на аукционе
                        </h4>
                        <?php foreach($copart_auto as $auto): ?>
                        <a href="/auction-auto/<?php echo $auto['lot_id']; ?>" class="link-border-card">
                            <div class="auction-list__card d-flex flex-column  flex-sm-row">
                                <img src="<?php echo (empty($auto['links_images']) ? '/application/public/img/' . $noimg_auction : $auto['links_images']); ?>" alt="" class="auction-list__img" style="min-width:220px;">
                                <div class="auction-list__wrap">
                                    <div class="auction-list__basic-information d-flex justify-content-between">
                                        <h4 class="auction-list__short-name h5">
                                            <?php echo $auto['lot_car_brand']; ?> <?php echo $auto['lot_car_model']; ?>
                                        </h4>
                                        <span class="auction-list__price">
                                            <?php echo $auto['bid_current_bid']; ?>$
                                        </span>
                                    </div>
                                    <h2 class="auction-list__full-name h6"><?php echo $auto['lot_car_year']; ?> <?php echo $auto['lot_car_brand']; ?> <?php echo $auto['lot_car_model']; ?></h2>
                                    <span class="auction-list__date-delivery">
                                        дата аукциона <?php echo date('Y-m-d', $auto['sale_date']); ?>
                                    </span>
                                    <div class="row auction-list__specifications specifications d-flex">
                                        <div class="col-4 specifications__item d-flex">
                                            <img src="/application/public/img/catalog_auto/auto-calendar.png" alt="" class="specifications__label">
                                            <span class="specifications__value">
                                                <?php echo ($auto['lot_car_year'] == '' ? ' - ': $auto['lot_car_year'] ); ?> г.в
                                            </span>
                                        </div>
                                        <div class="col-4 specifications__item d-flex">
                                            <img src="/application/public/img/catalog_auto/auto-road.png" alt="" class="specifications__label">
                                            <span class="specifications__value">
                                                <?php echo ($auto['lot_odometr'] == '' ? ' - ': $auto['lot_odometr'] ); ?>ml
                                            </span>
                                        </div>
                                        <div class="col-4 specifications__item d-flex">
                                            <img src="/application/public/img/catalog_auto/auto-body.png" alt="" class="specifications__label">
                                            <span class="specifications__value">
                                                <?php echo ($auto['feature_body_style'] == '' ? ' - ': $auto['feature_body_style'] ); ?>
                                            </span>
                                        </div>
                                        <div class="col-4 specifications__item d-flex">
                                            <img src="/application/public/img/catalog_auto/auto-engine.png" alt="" class="specifications__label">
                                            <span class="specifications__value">
                                                <?php echo ($auto['feature_engine_type'] == '' ? ' - ': $auto['feature_engine_type'] ); ?>
                                            </span>
                                        </div>
                                        <div class="col-4 specifications__item d-flex">
                                            <img src="/application/public/img/catalog_auto/auto-transmission.png" alt="" class="specifications__label">
                                            <span class="specifications__value">
                                                <?php echo ($auto['feature_transmission'] == '' ? ' - ': $auto['feature_transmission'] ); ?>
                                            </span>
                                        </div>
                                        <div class="col-4 specifications__item d-flex">
                                            <img src="/application/public/img/catalog_auto/auto-fuel.png" alt="" class="specifications__label">
                                            <span class="specifications__value">
                                                <?php echo ($auto['feature_fuel'] == '' ? ' - ': $auto['feature_fuel'] ); ?>
                                            </span>
                                        </div>
                                    </div>
                                    <a href="/auction-auto/<?php echo $auto['lot_id']; ?>" class="auction-list__more">подробнее</a>
                                </div>
                            </div>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="auction-paginate d-flex justify-content-center text-center">
                        <a href="/auction/<?php echo ($this_page == 1 ? '1' : $this_page - 1); ?>" class="auction-paginate__arrow-link"><i class="fas fa-chevron-left"></i></a>
                        <a href="/auction/1" class="auction-paginate__page-link <?php echo ($this_page == 1 ? 'page-link__active' : ''); ?>">1</a>
                        <?php if($this_page > 4): ?>
                        <p class="auction-paginate__page-link">...</p>
                        <?php endif; ?>
                        <?php $n_page = ($this_page > 3 ? $this_page - 2 : 2); for(;$n_page <= $page_total;$n_page++): if($n_page == $this_page + 3 || $n_page == $page_total) break; ?>
                        <a href="/auction/<?php echo $n_page; ?>" class="auction-paginate__page-link <?php echo ($this_page == $n_page ? 'page-link__active' : ''); ?>"><?php echo $n_page; ?></a>
                        <?php endfor;?>
                        <?php if($this_page < $page_total - 3): ?>
                        <p class="auction-paginate__page-link">...</p>
                        <?php endif; ?>
                        <a href="/auction/<?php echo $page_total; ?>" class="auction-paginate__page-link <?php echo ($this_page == $page_total ? 'page-link__active' : ''); ?>"><?php echo $page_total; ?></a>
                        <a href="/auction/<?php echo ($this_page == $page_total ? $page_total : $this_page + 1); ?>" class="auction-paginate__arrow-link"><i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="auction-article">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-12">
                    <div class="auction-article__main-wrap">
                        <h2 class="auction-article__main-title">
                            Как безопасно купить автомобиль на аукционе США?
                        </h2>
                    </div>
                </div>
                <div class="col-md-6 col-xl-7">
                    <p class="auction-article__main-text">
                        Рынок подержанных автомобилей в США организован в не привычном виде для жителей Украины. Продавцам автотранспорта в Америке не приходится самостоятельно организовывать продажу своего авто, поскольку выгоднее это делать через страховые компании. Существует онлайн авторынок поддержанных автомобилей, с которыми сотрудничают большинство страховых компаний.
                    </p>
                    <h3 class="auction-article__main-subtitle">
                        Американские аукционы
                    </h3>
                    <p class="auction-article__main-text">
                        Самые популярные торговые площадки - онлайн аукционы Copart, IAAI и Manheim работают как международные сайты по продаже б/у техники. Обязательным условием для участия в торгах на таких онлайн ресурсах необходимо:<br>
                        - пройти регистрирацию на сайте,<br>
                        - оплатить базовый взнос, подтверждающий вашу платежеспособность,<br>
                        - обязательно выкупить автотранспортное средство, если выиграли на торгах. <br>
                        При несоблюдении условий, аукционы выставляю штрафы или блокирую участие в торгах.
                    </p>
                </div>
                <div class="col-md-6 col-xl-5">
                    <div class="auction-article__gray-wrap">
                        <p class="auction-article__main-text">
                            Компания Adlion уже 12 лет сотрудничает с американскими и европейскими аукционами, имеет прямые договора с площадками, надёжных партнёров в службе транспортировки по наземной части континента, свои помещения в портах и надёжных брокеров в Украине. Мы предлагаем вам сотрудничество в нескольких направлениях: <a href="services.html" class="auction-article__link-in-text">прочитайте здесь</a>.
                        </p>
                        <p class="auction-article__main-text">
                            Мы всегда готовы выполнить ваш заказ и имеем индивидуальный подход к каждому заказчику. Заказывайте американский автомобиль в АД Лион и и мы гарантируем вам процесс подбора, выкупа и доставки автомобиля из Америки наиболее комфортным, максимально удобным и самым безопасным способом.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    var mark_arr = {
        <?php foreach($auto_type as $mark): ?> "<?php echo $mark['mark']; ?>": [
            <?php $models = explode(' ', $mark['models']); if(count($models) > 1): foreach($models as $model): ?> "<?php echo $model; ?>",
            <?php endforeach; endif; ?>
        ],
        <?php endforeach; ?>
    };

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
<?php echo $footer; ?>
