<!DOCTYPE html>
<html lang="en ru ua">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php if($main_page):?>
    <meta name="google-site-verification" content="6IceV8g6by6iUi0FnpMOIMHWFvikZbbfExEbXx3kGUE" />
    <?php endif; ?>

    <link rel="canonical" href="http://www.adlion.info/">

    <title>
        <?php echo $tag ?> |
        <?php echo $title ?>
    </title>

    <meta name="description" content="<?php echo $description ?>">
    <meta name="keywords" content="<?php echo $keywords ?>">
    <!-- Favicon -->
    <link rel="icon" href="/application/public/img/kisspng.logo" type="image">
    <link rel="shortcut icon" href="/application/public/img/logo/favikon-adlion.png">
    <!-- OG Tags -->
    <meta property="og:title" content="<?php echo $title_og ?>">
    <meta property="og:description" content="<?php echo $description_og ?>">
    <meta property="og:type" content="article">
    <meta property="og:image" content="/application/public/img/logo/logo.png">
    <meta property="og:site_name" content="<?php echo $name_og ?>">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,900">
    <link rel="stylesheet" href="/application/public/css/all.css">
    <link rel="stylesheet" href="/application/public/css/fontawesome.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Bootstrap Reboot CSS -->
    <link rel="stylesheet" href="/application/public/css/bootstrap-reboot.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/application/public/css/bootstrap.min.css">
    <!-- Slider CSS -->
    <link rel="stylesheet" href="/application/public/css/slider.css">
    <!-- Menu Sticky -->
    <link rel="stylesheet" href="/application/public/css/menu_sticky.css">
    <!-- Tabs -->
    <link rel="stylesheet" href="/application/public/css/style-tabs.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="/application/public/css/main.css">

    <!-- Library JS -->
    <!-- jQuery JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!---->
    <!--<script src="/application/public/js/jquery.js" type="text/javascript" charset="utf-8"></script><!---->

    <!-- Custom CSS -->
    <?php if(isset($css)): foreach($css as $style):?>
    <link href="/application/public/css/<?php echo $style;?>.css" rel="stylesheet">
    <?php endforeach; endif; ?>


</head>

<body>
    <div class="container position-relative">
        <div class="fixed-contact position-fixed d-flex flex-column text-right">
            <a class="fixed-contact__social fixed-contact__social_telegram" href="tg://resolve?domain=<?php echo $messager['telegram']['value']; ?>">
                <i class="fab fa-telegram"></i>
            </a>
            <a class="fixed-contact__social fixed-contact__social_viber" href="viber://chat?number=<?php echo $messager['viber']['value']; ?>">
                <i class="fab fa-viber"></i>
            </a>
            <a class="fixed-contact__social fixed-contact__social_facebook" href="https://www.messenger.com/t/<?php echo $messager['facebook']['value']; ?>">
                <i class="fab fa-facebook-messenger"></i>
            </a>
        </div>
        <div class="fixed-contact position-fixed d-flex flex-column text-right">
            <a class="fixed-contact__social fixed-contact__social_telegram" href="tg://resolve?domain=<?php echo $messager['telegram']['value']; ?>">
                <i class="fab fa-telegram"></i>
            </a>
            <a class="fixed-contact__social fixed-contact__social_viber" href="viber://chat?number=<?php echo $messager['viber']['value']; ?>">
                <i class="fab fa-viber"></i>
            </a>
            <a class="fixed-contact__social fixed-contact__social_facebook" href="https://www.messenger.com/t/<?php echo $messager['facebook']['value']; ?>">
                <i class="fab fa-facebook-messenger"></i>
            </a>
            <a class="fixed-contact__social fixed-contact__social_call" href="tel:<?php echo $messager['phone_0']['value']; ?>">
                <i class="fal fa-phone"></i>
            </a>
        </div>
    </div>
    <?php if($main_page == true): ?>
    <div class="container">
        <div class="header__nav">
            <div class="row d-flex">
                <div class="col-6 col-md-5 col-lg-4">
                    <div id="block_search" class="header__find-of-vin d-flex justify-content-between mr-auto">
                        <input id="search_auto" class="header__find-input position-absolute" size="30" type="text" placeholder="">
                        <input id="search_auto_palaceholder" class="header__find-input" size="30" type="text" placeholder="Поиск по номеру лота, VIN коду">
                        <a id="search_auto_link" href="" class="header__find-btn"><i class="fal fa-search"></i></a>
                    </div>

                    <p class="header__adress">
                        <norb>
                            <?php echo $header['addr']['value']; ?>
                        </norb>
                    </p>
                    <norb>
                        <div class="header__call"><a href="tel:<?php echo str_replace(' ', '', $header['phone_2']['value']); ?>" class="header__call">
                                <?php echo $header['phone_2']['value']; ?></a></div>
                    </norb>
                </div>
                <div class="d-none d-md-block offset-0 col-md-2 offset-lg-1">
                    <a href="/" class="header__logo">
                        <img src="/application/public/img/logo/logo_smalll.png" alt="Leon" class="header__leon">
                    </a>
                </div>
                <div class="col-6 col-md-5 d-flex flex-column">
                    <div class="header__more-services text-right">
                        <a href="/services" class="header__about-services ">Узнать этапы сотрудничества</a>
                    </div>
                    <div class="header__tell d-flex flex-column ml-auto">
                        <a href="tel:<?php echo str_replace(' ', '', $header['phone_3']['value']); ?>" class="header__call">
                            <norb>
                                <?php echo $header['phone_3']['value']; ?>
                            </norb>
                        </a>
                        <a href="tel:<?php echo str_replace(' ', '', $header['phone_1']['value']); ?>" class="header__call">
                            <norb>
                                <?php echo $header['phone_1']['value']; ?>
                            </norb>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header id="header" class="header">
        <div class="slider" id="slider">
            <div class="slItems">
                <div class="slItem" style="background-image: url('/application/public/img/main_slider/Fon-1.jpeg');">
                    <div class="slText">
                        <p class="header__aftertitle">
                            без лишних затрат
                        </p>
                        <h1 class="header__title">
                            Автомобиль из Америки
                        </h1>
                        <p class="header__text">
                            Мы гарантируем <span class="text-uppercase">Полное сопровождение</span>
                            <norb>на всех этапах:</norb> поиск, покупка <norb>с аукционов</norb>
                            <norb>в США</norb> и Европы, оформление документации, доставка автомобиля <norb>в Украину,</norb> таможенное сопровождение <norb>и восстановление</norb> автомобиля <norb>с гарантией</norb>
                        </p>
                        <a href="/services" class="btn-orange">Этапы сотруднечества</a>
                    </div>
                </div>
                <div class="slItem" style="background-image: url('/application/public/img/main_slider/Fon-2.png');">
                    <div class="slText">
                        <h1 class="header__title">
                            Автомобиль 2018 года <norb>с аукциона США</norb>
                        </h1>
                        <p class="header__subtitle">
                            по самым доступным ценам уже <norb>в Днепре</norb>
                        </p>
                        <a href="/services" class="btn-orange">Узнать условия</a>
                    </div>
                </div>
                <div class="slItem" style="background-image: url('/application/public/img/main_slider/Fon-3.png');">
                    <div class="slText">
                        <h1 class="header__title">
                            Обменяй свой автомобиль <norb>на авто</norb>
                            <norb>из Америки</norb>
                        </h1>
                        <p class="header__text">
                            С услугой <norb>“Treid in”</norb> вам <norb>не прийдётся</norb>
                            <norb>“ходить пешком”</norb>
                            <norb>в период</norb> доставки <norb>и оформления</norb> автомобиля
                        </p>
                        <a href="/services" class="btn-orange">Узнать условия</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <?php endif; ?>
    <section id="menu" class="menu sticky">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-5 align-item-center">
                    <nav class="menu__nav d-flex justify-content-between align-item-center">
                        <a href="/" class="menu__item">Главная</a>
                        <a href="/services" class="menu__item">Услуги</a>
                        <a href="/catalog" class="menu__item">Каталог</a>
                        <a href="/auction" class="menu__item">Аукцион</a>
                    </nav>
                </div>
                <div class="d-none d-lg-block col-lg-1 offset-lg-1">
                    <a href="/" class="sticky__logo">
                        <img src="/application/public/img/logo/logo.png" alt="Logo to Index">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 offset-lg-1 d-flex justify-content-end">
                    <div class=" d-flex flex-column ">
                        <div id="block_search1" class="menu__find-of-vin d-flex justify-content-between ml-auto">
                            <input id="search_auto1" class="menu__find-input position-absolute" size="30" type="text" placeholder="">
                            <input id="search_auto_palaceholder1" class="menu__find-input" size="30" type="text" placeholder="Поиск по номеру лота, VIN коду">
                            <a id="search_auto_link1" href="" class="menu__find-btn"><i class="fal fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
