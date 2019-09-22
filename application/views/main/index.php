<?php echo $header; ?>
<div class="content-bg-white">
    <section id="advantages" class="advantages">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="advantages__title">
                        Почему выгодно приобрести автомобиль<norb> в США,</norb> <br> а доставку доверить нам?!
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="advantages__item d-flex flex-column">
                        <img class="advantages__img" src="/application/public/img/main_advantages/advantages-1.png" alt="advantages">
                        <p class="advantages__description">
                            На американских аукционах вы сможете выбрать современный автомобиль с минимальным пробегом
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantages__item d-flex flex-column">
                        <img class="advantages__img" src="/application/public/img/main_advantages/advantages-2.png" alt="advantages">
                        <p class="advantages__description">
                            С услугой “Авто Покупка” вы получаете помощь в подборе, покупке, доставке и растаможке авто
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantages__item d-flex flex-column">
                        <img class="advantages__img" src="/application/public/img/main_advantages/advantages-3.png" alt="advantages">
                        <p class="advantages__description">
                            На американском рынке всегда есть выбор автомобилей с максимальной комплектацией и эксклюзивными опциями
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantages__item d-flex flex-column">
                        <img class="advantages__img" src="/application/public/img/main_advantages/advantages-4.png" alt="advantages">
                        <p class="advantages__description">
                            Стоимость автомобиля всегда будет значительно ниже рыночной стоимости аналогового авто в Украине
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantages__item d-flex flex-column">
                        <img class="advantages__img advantages__img_auto" src="/application/public/img/main_advantages/advantages-5.png" alt="advantages">
                        <p class="advantages__description">
                            С услугой “Авто Покупка под ключ” вы получаете еще и гарантию на все выполненые ремонтные работы в Украине
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="advantages__item d-flex flex-column">
                        <img class="advantages__img" src="/application/public/img/main_advantages/advantages-6.png" alt="advantages">
                        <p class="advantages__description">
                            Оплата частями обеспечит вам рассрочку на покупку автомобиля вашей мечты
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tab-wrap">
        <div class="container-fluid position-relative">
            <div class="row col-8 tab-wrap__gray-fon no-gutters">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <main>
                    <h3 class="tab-wrap__title">
                        Каталог автомобилей
                    </h3>
                    <input id="tab1" type="radio" name="tabs" checked>
                    <label for="tab1">Ожидаемые авто</label>
                    <input id="tab2" type="radio" name="tabs">
                    <label for="tab2">Аукцион</label>
                    <input id="tab3" type="radio" name="tabs">
                    <label for="tab3">Восстановленные авто</label>
                    <section class="tab-expected-cars" id="tab-expected-cars">
                        <div class="row justify-content-center">
                            <?php $n_auto = 0; foreach($auto_expected as $expected): ?>
                            <a href="http://adlion.info/auto/<?php echo $expected['id']; ?>" class="link-border-card">
                                <div class="col-md-6 col-lg-4 <?php echo ($n_auto++ == 2 ? 'd-md-none d-lg-block' : ''); ?>">
                                    <div class="tab-expected-cars__card">
                                        <img src="<?php echo $expected['img']; ?>" alt="" class="tab-expected-cars__img">
                                        <div class="tab-expected-cars__wrap">
                                            <div class="tab-expected-cars__basic-information d-flex justify-content-between">
                                                <h2 class="tab-expected-cars__short-name h5">
                                                    <?php echo $expected['mark'] . $expected['model']; ?>
                                                </h2>
                                                <span class="tab-expected-cars__price">
                                                    от $<?php echo $expected['cost_port']; ?>
                                                </span>
                                            </div>
                                            <h2 class="tab-expected-cars__full-name h6"><?php echo $expected['car_year_issue']; ?> <?php echo $expected['car_mark']; ?> <?php echo $expected['car_model']; ?></h2>
                                            <span class="tab-expected-cars__date-delivery">
                                                дата доставки <?php echo ($expected['date_sapply'] != '' ? substr($expected['date_sapply'], 8, 2) . '.' . substr($expected['date_sapply'], 5, 2) . '.' . substr($expected['date_sapply'], 0, 4) : '--'); ?>
                                            </span>
                                            <div class="row tab-expected-cars__specifications specifications d-flex">
                                                <div class="col-6 col-xl-4 specifications__item d-flex">
                                                    <img src="/application/public/img/catalog_auto/auto-calendar.png" alt="" class="specifications__label">
                                                    <span class="specifications__value">
                                                        <?php echo $expected['car_year_issue']; ?> г.в
                                                    </span>
                                                </div>
                                                <div class="col-6 col-xl-4 specifications__item d-flex">
                                                    <img src="/application/public/img/catalog_auto/auto-road.png" alt="" class="specifications__label">
                                                    <span class="specifications__value">
                                                        <?php echo $expected['car_mileage']; ?>ml
                                                    </span>
                                                </div>
                                                <div class="col-6 col-xl-4 specifications__item d-flex">
                                                    <img src="/application/public/img/catalog_auto/auto-body.png" alt="" class="specifications__label">
                                                    <span class="specifications__value">
                                                        <?php echo $expected['car_body']; ?>
                                                    </span>
                                                </div>
                                                <div class="col-6 col-xl-4 specifications__item d-flex">
                                                    <img src="/application/public/img/catalog_auto/auto-engine.png" alt="" class="specifications__label">
                                                    <span class="specifications__value">
                                                        <?php echo $expected['car_engine']; ?>L
                                                    </span>
                                                </div>
                                                <div class="col-6 col-xl-4 specifications__item d-flex">
                                                    <img src="/application/public/img/catalog_auto/auto-transmission.png" alt="" class="specifications__label">
                                                    <span class="specifications__value">
                                                        <?php echo $expected['car_kpp']; ?>
                                                    </span>
                                                </div>
                                                <div class="col-6 col-xl-4 specifications__item d-flex">
                                                    <img src="/application/public/img/catalog_auto/auto-fuel.png" alt="" class="specifications__label">
                                                    <span class="specifications__value">
                                                        <?php echo $expected['car_fuel']; ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <a href="/auto/<?php echo $expected['id']; ?>" class="tab-expected-cars__more">подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <?php endforeach; ?>
                        </div>
                        <a href="/catalog" class="tab-expected-cars__all-view d-flex justify-content-center">смотреть все автомобили</a>
                    </section>
                    <section class="tab-auction" id="tab-auction">
                        <div class="row align-items-center">
                            <div class="d-none d-sm-block col-sm-3 col-md-6">
                                <img src="/application/public/img/main/tab-auction-car.png" alt="Поиск авто из америки" class="tab-auction__car">
                            </div>
                            <div class="col-12 col-sm-9 col-md-6">
                                <form name="form_search_auction" method="get" action="/auction" class="tab-auction__form">
                                    <div class="tab-auction__logo-title d-flex align-items-center
				    					justify-content-between">
                                        <img src="/application/public/img/brand/copart-logo.png" alt="" class="tab-auction__logo">
                                        <h4 class="tab-auction__title">Поиск по аукциону</h4>
                                    </div>
                                    <div class="tab-auction__wrap">
                                        <div class="tab-auction__change-item d-flex justify-content-around">
                                            <label class="col-md-5 col-lg-6 mark__label" for="mark">
                                                Марка:
                                            </label>
                                            <select name="mark" class="col-md-7 col-lg-6 mark__select" name="" id="mark">
                                                <?php foreach($auto_type as $mark): ?>
                                                <option value="<?php echo $mark['mark']; ?>"><?php echo $mark['mark']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="tab-auction__change-item d-flex justify-content-around">
                                            <label class="col-md-5 col-lg-6 model__label" for="model">
                                                Модель:
                                            </label>
                                            <select name="model" class="col-md-7 col-lg-6 model__select" id="model">
                                                <option value="all">Все модели</option>
                                                <?php $models = explode(' ', $auto_type[0]['models']); foreach($models as $model): ?>
                                                <option value="<?php echo $model; ?>"><?php echo $model; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="tab-auction__change-item d-flex">
                                            <label for="year-min" class="col-md-5 col-lg-6 year-min__label">
                                                <norb>Год от:</norb>
                                            </label>
                                            <select name="year-min" id="year-min" class="col-md-7 col-lg-3 year-min__select">
                                                <?php for($n_year = date('Y'); $n_year > 1950; $n_year--): ?>
                                                <option <?php echo ($n_year == 2014 ? 'selected' : ''); ?> value="<?php echo $n_year; ?>"><?php echo $n_year; ?></option>
                                                <?php endfor; ?>
                                            </select>
                                        </div>
                                        <div class="tab-auction__change-item d-flex">
                                            <label for="year-max" class="col-md-5 col-lg-6 year-max__label">
                                                до:
                                            </label>
                                            <select name="year-max" id="year-max" class="col-md-7 col-lg-3 year-max__select">
                                                <?php for($n_year = date('Y'); $n_year > 1950; $n_year--): ?>
                                                <option <?php echo ($n_year == date('Y') ? 'selected' : ''); ?> value="<?php echo $n_year; ?>"><?php echo $n_year; ?></option>
                                                <?php endfor; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="tab-auction__btn-wrap d-flex justify-content-center">
                                        <input name="sub_search_auction" class="tab-auction__btn " type="hidden" value="main">
                                        <button id="form_search_auction_submit" class="tab-auction__btn ">Подобрать авто</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <section class="tab-restored-cars" id="tab-restored-cars">
                        <div class="row justify-content-center">
                            <?php $n_auto = 0; foreach($auto_restored as $restored): ?>
                            <div class="col-md-6 col-lg-4 <?php echo ($n_auto++ == 2 ? 'd-md-none d-lg-block' : ''); ?>">
                                <div class="tab-restored-cars__wrap">
                                    <h3 class="tab-restored-cars__title">
                                        <?php echo $restored['car_year_issue']; ?> <?php echo $restored['car_mark']; ?> <br> <?php echo $restored['car_model']; ?>
                                    </h3>
                                    <div class="tab-restored-cars__card d-flex flex-column">
                                        <div class="tab-restored-cars__up-wrap d-flex">
                                            <img class="tab-restored-cars__up" src="<?php echo $restored['link_img']; ?>" alt="">
                                            <img class="tab-restored-cars__arrow" src="/application/public/img/main/restored-car-arrow.png" alt="">
                                        </div>
                                        <img class="tab-restored-cars__down" src="/application/public/img/auto_lion/<?php echo $restored['car_vin']; ?>/1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <div class="col-12 tabrestored-cars__more-wrap text-center">
                                <a href="/catalog" class="btn-orange tab-restored-cars__more">Подробнее</a>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </section>
    <section class="auction" id="auction">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="auction__title">Американские аукционы, с которых мы <br> привезём Вам понравившийся автомобиль</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-4">
                    <div class="auction__card">
                        <img class="auction__img auction__img_big-margin" src="/application/public/img/brand/copart-logo.png" alt="Copart">
                        <div class="auction__paragraph-wrap d-none d-md-block">
                            <p class="auction__paragraph">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Ресурс Copart это поставщик услуг онлайн-аукциона и ремаркетинга автомобилей в США.
                            </p>
                            <p class="auction__paragraph">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Copart предоставляет продавцам автsомобилей целый ряд услуг по продаже подержанного и поврежденного автотранспорта по названию через Интернет с использованием запатентованной технологии виртуальных продаж.
                            </p>
                            <p class="auction__paragraph">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Продавцы автомобилей на аукционах Copart состоят в основном из страховых компаний.
                            </p>
                            <p class="auction__paragraph">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Онлайн-ресурс Copart через свое подразделение Copart Direct также приобретает транспортные средства непосредственно у широкой круга населения для перепродажи.
                            </p>
                            <a target="_blank" href="https://www.copart.com/" class="auction__link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="auction__card">
                        <img class="auction__img" src="/application/public/img/brand/insurance-logo.png" alt="insurance">
                        <div class="auction__paragraph-wrap d-none d-md-block">
                            <p class="auction__paragraph">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Insurance Auto Auctions, Inc. - интернет- ресурс ежедневных аукционов по продаже б/у автотранспорта в США, имеющий значительную базу покупателей и высокий рейтинг успешных сделок.
                            </p>
                            <p class="auction__paragraph">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Эксклюзивная ориентация аукциона на сферу продаж автомобилей после ДТП и более 150 корпоративных объектов в Соединенных Штатах и Канаде предоставляет своим посетителям наилучшие предложения для купли-продажи автотранспорта в разном состоянии.
                            </p>
                            <p class="auction__paragraph">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Гибридная аукционная модель, включающая прямые, интернет- и прокси-торги - в сочетании с объёмной базой покупателей и продавцов - предлагает исключительную выгоду от каждой сделки.
                            </p>
                            <a target="_blank" href="https://www.iaai.com/" class="auction__link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="auction__card">
                        <img class="auction__img auction__img_big-margin" src="/application/public/img/brand/manheim-logo.png" alt="manheim">
                        <div class="auction__paragraph-wrap d-none d-md-block">
                            <p class="auction__paragraph">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Manheim - ведущий поставщик услуг по ремаркетингу транспортных средств в Северной Америке, объединяющий покупателей и продавцов с крупнейшим оптовым рынком подержанных автомобилей и самой широкой аукционной сетью.
                            </p>
                            <p class="auction__paragraph">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Мангейм объединяет квалифицированных продавцов и оптовых покупателей подержанных автомобилей, включая автомобильные дилеры, банки, агентства по прокату автомобилей, производителей автомобилей и государственные учреждения.
                            </p>
                            <p class="auction__paragraph">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Manheim предлагает комплексные решения от оптовой до розничной торговли.Его дилеры имеют доступ к надежному и безопасному рынку, на котором можно приобрести различные транспортные средства.
                            </p>
                            <a target="_blank" href="https://www.manheim.com/" class="auction__link"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <a href="/auction" class="btn-orange auction__find">начать поиск на аукционе</a>
                </div>
            </div>
        </div>
    </section>
    <section class="your-benefits">
        <div class="container-fluid position-relative">
            <div class="row d-none d-sm-block col-11 col-md-8 your-benefits__gray-fon no-gutters"></div>
        </div>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-7">
                    <div class="your-benefits__left">
                        <h2 class="your-benefits__title">
                            Наши преимущества - Ваши выгоды
                        </h2>
                        <div class="your-benefits__wrap d-flex flex-wrap text-center justify-content-center">
                            <div class="col-sm-6 your-benefits__card">
                                <div class="your-benefits__wrap-img">
                                    <img src="/application/public/img/main_benefits/benefit-1.png" alt="benefit" class="your-benefits__img">
                                </div>
                                <p class="your-benefits__text">
                                    Имеем опыт в сфере доставки авто из США и Европы более 12 лет
                                </p>
                            </div>
                            <div class="col-sm-6 your-benefits__card">
                                <div class="your-benefits__wrap-img">
                                    <img src="/application/public/img/main_benefits/benefit-2.png" alt="benefit" class="your-benefits__img">
                                </div>
                                <p class="your-benefits__text">
                                    Предоставляем возможность оплаты заказа частями
                                </p>
                            </div>
                            <div class="col-sm-6 your-benefits__card">
                                <div class="your-benefits__wrap-img">
                                    <img src="/application/public/img/main_benefits/benefit-3.png" alt="benefit" class="your-benefits__img">
                                </div>
                                <p class="your-benefits__text">
                                    Отсутствие посредников на каждом этапе исполнения заказа
                                </p>
                            </div>
                            <div class="col-sm-6 your-benefits__card">
                                <div class="your-benefits__wrap-img">
                                    <img src="/application/public/img/main_benefits/benefit-4.png" alt="benefit" class="your-benefits__img">
                                </div>
                                <p class="your-benefits__text">
                                    Работаем с надёжными брокерскими компаниями Украины
                                </p>
                            </div>
                            <div class="col-sm-6 your-benefits__card">
                                <div class="your-benefits__wrap-img">
                                    <img src="/application/public/img/main_benefits/benefit-6.png" alt="benefit" class="your-benefits__img">
                                </div>
                                <p class="your-benefits__text">
                                    С услугой “Treid in” вам не прийдётся “ходить пешком” в период доставки и оформления автомобиля
                                </p>
                            </div>
                            <div class="col-sm-6 your-benefits__card">
                                <div class="your-benefits__wrap-img">
                                    <img src="/application/public/img/main_benefits/benefit-7.png" alt="benefit" class="your-benefits__img">
                                </div>
                                <p class="your-benefits__text">
                                    Страхование авто и комплектующих от утери и повреждений при транспортировке
                                </p>
                            </div>
                            <div class="col-sm-6 your-benefits__card">
                                <div class="your-benefits__wrap-img">
                                    <img src="/application/public/img/main_benefits/benefit-5.png" alt="benefit" class="your-benefits__img">
                                </div>
                                <p class="your-benefits__text">
                                    Четко отлаженая логистика и отточеные годами маршруты доставки
                                </p>
                            </div>
                            <div class="col-sm-6 your-benefits__card">
                                <div class="your-benefits__wrap-img">
                                    <img src="/application/public/img/main_benefits/benefit-8.png" alt="benefit" class="your-benefits__img">
                                </div>
                                <p class="your-benefits__text">
                                    Предоставляем гарантию на все выполненые ремонтные работы
                                </p>
                            </div>
                            <a href="/services" class="btn-orange auction__find">Этапы сотрудничества</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="your-benefits__about-us">
                        <div class="your-benefits__about-point about-point">
                            <h4 class="about-point__title">
                                Кто мы?
                            </h4>
                            <p class="about-point__text">
                                Ваш надежный партнер в США!
                            </p>
                        </div>
                        <div class="your-benefits__about-point about-point">
                            <h4 class="about-point__title">
                                Что мы делаем?
                            </h4>
                            <p class="about-point__text">
                                Мы находим, преобретаем для Вас и доставляем любые авто из Америки
                            </p>
                            <p class="about-point__text">
                                Мы предоставляем полное таможенное сопровождение
                            </p>
                            <p class="about-point__text">
                                Мы восстанавливаем автомобили из США «под ключ» с последующей гарантией на все ремонтные работы
                            </p>
                        </div>
                        <div class="your-benefits__about-point about-point">
                            <h4 class="about-point__title">
                                Где мы это делаем?
                            </h4>
                            <p class="about-point__text">
                                В Днепре – постоянно действующий офис и СТО
                            </p>
                            <p class="about-point__text">
                                В Одессе – лучшие брокерские компании
                            </p>
                            <p class="about-point__text">
                                В США – надёжные партнёры
                            </p>
                        </div>
                        <div class="your-benefits__about-point about-point">
                            <h4 class="about-point__title">
                                Как давно мы это делаем?
                            </h4>
                            <p class="about-point__text">
                                Вот уже 12 лет мы успешно осуществляем доставку авто с Америки в Украину
                            </p>
                        </div>
                        <div class="your-benefits__about-point about-point">
                            <h4 class="about-point__title">
                                Зачем мы это делаем?
                            </h4>
                            <p class="about-point__text">
                                Потому что умеем! И знаем свое дело!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="secure-purchase">
        <div class="container-fluid position-relative">
            <div class="row d-none d-sm-block col-sm-6 secure-purchase__gray-fon-right no-gutters"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="secure-purchase__title">
                        Как сегодня безопасно купить б/у автомобиль в Америке и сэкономить до 40%?
                    </h2>
                </div>
                <div class="col-sm-6">
                    <p class="secure-purchase__text">
                        Вы решили приобрести автомобиль на аукционе в Америке и привезти его в Украину, но еще не определились, кому вы доверите торги, доставку и оформление. <br><br>
                        Сервис Auto delivery Lion сделает это для вас, исключая немалое количество посредников и уменьшая расходы. Мы четко и расширено предоставляем нашим заказчикам информацию о каждом этапе сотрудничества. <br><br>
                        В разделе <a href="/services" class="secure-purchase__link-in-text">Услуги</a> вы узнаете подробное описание этого процесса.
                    </p>
                </div>
                <div class="col-sm-6 d-flex flex-column align-items-center  bg-sm-gray">
                    <p class="secure-purchase__text-right">
                        Кто даст гарантии на безопасное приобретение авто на американском аукционе? <br><br>
                        У кого выгодно заказать доставку автомобиля в Украину?<br><br>
                        Как правильно просчитать смету на восстановление выбранного автомобиля?<br><br>
                        Где восстановить поврежденный автомобиль и получить гарантии на все ремонтные работы?<br><br>
                    </p>
                    <a href="tel:<?php echo $messager['phone_0']['value']; ?>" class="btn-orange secure-purchase__more">Получить констультацию</a>
                </div>
            </div>
            <div class="row align-items-center secure-purchase__second-block">
                <div class="col-md-6 col-lg-8">
                    <h3 class="secure-purchase__subtitle">
                        Современное авто из США с АDLion
                    </h3>
                    <p class="secure-purchase__text">
                        Auto delivery Lion надёжный сервис по подбору и доставке б/у легковых авто в Украину, как битых, так и целых. Выбирайте неповреждённые б/у автомашины на Мanheim, новый автомобиль от американских дилеров на cars.com, или б/у автомобиль с легкими повреждениями от страховых компаний на аукционах Copar t и IAAI. <br><br>
                        Мы организуем вам полный сервис по доставке авто из США под ключ, или до получения растаможенного автомобиля и документации в одном из портов города Одессы. Больше о выгодах каждой из предоставляемой нами услуги, прочитайте <a href="/services" class="secure-purchase__link-in-text">здесь</a> или получите содержательную консультацию по телефону <a href="tel:<?php echo str_replace(' ', '', $phones['3']['value']); ?>" class="secure-purchase__link-tel">
                            <norb>
                                <?php echo $phones['3']['value']?>
                            </norb>
                        </a>
                    </p>
                </div>
                <div class="col-md-6 col-lg-4">
                    <img class="secure-purchase__img" src="/application/public/img/main/auto_from_usa.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="us-expirens">
        <div class="container-fluid position-relative">
            <div class="row d-none d-sm-block col-sm-5 us-expirens__gray-fon-left no-gutters"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-5 bg-sm-gray">
                    <h3 class="us-expirens__subtitle">
                        Наш опыт - ваши выгоды
                    </h3>
                    <p class="us-expirens__text us-expirens__text_pr">
                        АDLion уже более 12 лет работает на рынке оказания услуг по доставке автотранспорта в Украину. За это время мы приобрели немалый опыт в работе как с клиентами, так и с американскими аукционами. <br><br>
                        Не зависимо от того, впервые ли вы подбираете себе американский автомобиль или уже неоднократно осуществляли покупку авто из Америки, мы организуем вам процесс подбора, выкупа и доставки автомобиля наиболее комфортным, максимально удобным и гарантированно безопасным.
                    </p>
                </div>
                <div class="col-sm-7">
                    <h3 class="us-expirens__subtitle">
                        Надёжные партнёры на аукционах в США
                    </h3>
                    <p class="us-expirens__text us-expirens__text_pr">
                        Перед выкупом, автотранспорт всегда проверяется нами по vin-коду или регистрационному номеру на информацию, не находится ли он в угоне, не является ли "утопленником", не попадал ли в серьёзную аварию со смертельными случаями.<br><br>
                        Мы предлагаем своим клиентам самые выгодные и четко отлаженные маршрут доставки выбранного автомобиля, исключаем не нужных посредников, благодаря чему уменьшаются и расходы на доставку. <br><br>
                        Мы имеем договора с разными портами в Америке, поэтому автомобиль доставляется в ближайший порт, что уменьшает время и расходы на транспортировку.
                    </p>
                </div>
                <div class="col-sm-6 col-md-5">
                    <h3 class="us-expirens__subtitle">
                        Страхование от всех бед
                    </h3>
                    <p class="us-expirens__text us-expirens__text_pr">
                        Страхование выбранного вами автомобиля и работа наших надёжных партнёров на разных площадках аукционов обеспечит вам аккуратную транспортировку вашего автомобиля по наземной части континента и качественную погрузку в контейнер.<br><br>
                        Перед погрузкой автомашины в контейнер, мы предоставляем клиенту подробный фотоотчет транспортного средства. В случае повреждения или утери какой-либо части автомобиля, клиент получает компенсацию в денежном эквиваленте. Но это очень редкие случаи.
                    </p>
                </div>
                <div class="col-sm-6 col-md-7">
                    <h3 class="us-expirens__subtitle">
                        Таможенное сопровождение
                    </h3>
                    <p class="us-expirens__text us-expirens__text_pr">
                        Доставка в один из портов города Одессы занимает около 39 дней, в зависимости от места отправки контейнера. На этом этапе подключаются наши партнёры в городе Одесса. <br><br>
                        Мы работаем с лучшими брокерскими компаниями, которые гарантируют полное таможенное сопровождение в кратчайшие сроки. <br><br>
                        При оформлении всего пакета документации, автомобиль выезжает из порта Одессы и, по желанию клиента, или передаётся ему в руки, или транспортируется в город клиента и там передаётся, или перевозится в город Днепр на сертифицированное СТО "Леон" и проходит процедуру полного восстановления под ключ.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="stantion-lion">
        <div class="container-fluid position-relative">
            <div class="row col-12 col-sm-10 col-md-8 stantion-lion__gray-fon-left no-gutters"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="stantion-lion__title">
                        Сертифицированная станция "Леон"
                    </h2>
                </div>
                <div class="col-12 col-sm-10 col-md-7">
                    <p class="stantion-lion__text">
                        Adlion - сертифицированная СТО в городе Днепр, работает в сфере восстановления и реремонта автомобилей с 2000 года. <br><br>
                        При поступлении автомобиля на станцию проводится полная диагностика транспортного средства: наружный осмотр, компьютерная диагностика, замеры геометрии кузова, дефектовка всех поврежденных деталей автомобиля и выявление скрытых неисправностей. <br><br>
                        После заказа и получения запчастей для автомобиля происходит разборка, рихтовочно-покрасочные работы, сборка и полировка. На все выполненые ремонтные работы станция AD Lion предоставляе гарантию и дополнительные скидки на последующее обслуживание вашего автомобиля.
                    </p>
                </div>
                <div class="offset-1 col-10 offset-sm-1 col-sm-10 offset-md-0 col-md-5">
                    <img class="stantion-lion__img" src="/application/public/img/main/adlion-stantion.jpeg" alt="Lion Stantion">
                </div>
            </div>
        </div>
    </section>
    <section class="car-lion">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="car-lion__title">
                        Восстановленные автомобили на станции "Леон"
                    </h2>
                </div>
            </div>
            <div class="row d-flex">
                <?php foreach($auto_lion as $lion): ?>
                <a href="/auto/<?php echo $lion['id']; ?>" class="link-border-card">
                    <div class="col-12 col-md-6 d-flex">
                        <div class="car-lion__card d-flex flex-column justify-content-center">
                            <h3 class="car-lion__card-title text-center">
                                <?php echo $lion['car_mark'] . ' ' . $lion['car_model']; ?>
                            </h3>
                            <div class="car-lion__img-wrap">
                                <img src="/application/public/img/auto_lion/<?php echo $lion['car_vin']; ?>/1.jpg" alt="<?php echo $lion['car_vin']; ?>" class="car-lion__img">
                            </div>
                            <div class="car-lion__item d-flex">
                                <img src="/application/public/img/main_auto/damage.png" alt="" class="car-lion__item-img car-lion__item-img_damage">
                                <p class="car-lion__item-text">Основное повреждение: <?php echo $lion['info_damage']; ?></p>
                            </div>
                            <div class="car-lion__item d-flex">
                                <img src="/application/public/img/main_auto/cargo-ship.png" alt="" class="car-lion__item-img car-lion__item-img_cargo-ship">
                                <p class="car-lion__item-text">Время доставки в Украину: <?php echo $lion['time_transit']; ?> дн.</p>
                            </div>
                            <div class="car-lion__item d-flex">
                                <img src="/application/public/img/main_auto/mechanic.png" alt="" class="car-lion__item-img car-lion__item-img_mechanic">
                                <p class="car-lion__item-text">Время восстановительных работ: <?php echo $lion['time_repair']; ?> дн.</p>
                            </div>
                            <div class="car-lion__item d-flex">
                                <img src="/application/public/img/main_auto/price-tag.png" alt="" class="car-lion__item-img car-lion__item-img_price-tag">
                                <p class="car-lion__item-text">Цена под ключ: $<?php echo $lion['cost_key']; ?></p>
                            </div>
                            <div class="car-lion__item d-flex">
                                <img src="/application/public/img/main_auto/process-work.png" alt="" class="car-lion__item-img car-lion__item-img_process-work">
                                <p class="car-lion__item-text">Выполненые работы: <?php echo $lion['info_desc_recovery']; ?></p>
                            </div>
                            <div class="car-lion__link-wrap mt-auto">
                                <div class="car-lion__item d-flex">
                                    <img src="/application/public/img/main_auto/auction.png" alt="" class="car-lion__item-img">
                                    <a target="_blank" href="<?php echo $lion['link_lot']; ?>" class="car-lion__item-text car-lion__auction-link">Ссылка на аукцион</a>
                                </div>
                                <div class="car-lion__more-wrap text-center">
                                    <a href="/auto/<?php echo $lion['id']; ?>" class="car-lion__more tab-expected-cars__more">подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
            <div class="row">
                <div class="col-12 text-center car-lion__more-cars-wrap">
                    <a href="/catalog" class="btn-orange car-lion__more-cars">Перейти в каталог авто</a>
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

</script>
<?php echo $footer ?>
