<?php echo $header; ?>
<div class="content-bg-gray">
    <div class="container">
        <div class="row">
            <div class="auto-way__wrap col d-flex flex-wrap">
                <p class="auto-way__text">Вы находитесь здесь: &nbsp;</p>
                <a class="auto-way__text" href="/"> Главная &nbsp; // &nbsp;</a>
                <a class="auto-way__text auto-way__text_orange " href="/catalog">Каталог автомобилей</a>
            </div>
        </div>
    </div>
    <section class="catalog-title">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center d-flex flex-column align-items-center">
                    <h2 class="catalog-title__title">
                        Авто <norb>из Америки</norb>
                        <norb>в нашем</norb> каталоге
                    </h2>
                    <p class="catalog-title__subtitle">
                        Мы всегда готовы вам предложить на выбор автомобили, которые уже имеются <norb>в наличии</norb>
                        <norb>в Украине</norb> <br> или находятся на пути <norb>из Америки</norb>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="catalog-list-auto">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div style="padding-top:0px;" class="auction-paginate d-flex justify-content-center text-center">
                        <a href="/catalog/<?php echo ($this_page == 1 ? '1' : $this_page - 1) . $get_str; ?>" class="auction-paginate__arrow-link"><i class="fas fa-chevron-left"></i></a>
                        <a href="/catalog/1<?php echo $get_str; ?>" class="catalog-paginate__page-link <?php echo ($this_page == 1 ? 'page-link__active' : ''); ?>">1</a>
                        <?php if($this_page > 4): ?>
                        <p class="auction-paginate__page-link">...</p>
                        <?php endif; ?>
                        <?php $n_page = ($this_page > 3 ? $this_page - 2 : 2); for(;$n_page <= $page_total;$n_page++): if($n_page == $this_page + 3 || $n_page == $page_total) break; ?>
                        <a href="/catalog/<?php echo $n_page . $get_str; ?>" class="catalog-paginate__page-link <?php echo ($this_page == $n_page ? 'page-link__active' : ''); ?>"><?php echo $n_page; ?></a>
                        <?php endfor;?>
                        <?php if($this_page < $page_total - 3): ?>
                        <p class="catalog-paginate__page-link">...</p>
                        <?php endif; ?>
                        <a href="/catalog/<?php echo $page_total . $get_str; ?>" class="catalog-paginate__page-link <?php echo ($this_page == $page_total ? 'page-link__active' : ''); ?>"><?php echo $page_total; ?></a>
                        <a href="/catalog/<?php echo ($this_page == $page_total ? $page_total : $this_page + 1) . $get_str; ?>" class="catalog-paginate__arrow-link"><i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <?php foreach($auto_catalog as $auto): $img = explode(',', $auto['link_img'])[0]; ?>
                <a href="/auto/<?php echo $auto['id']; ?>" class="link-border-card">
                    <div class="col-md-6 col-lg-4 d-flex">
                        <div class="catalog-list-auto__card">
                            <img src="<?php echo $auto['img']; ?>" alt="<?php echo $auto['img']; ?>" class="catalog-list-auto__img">
                            <div class="catalog-list-auto__wrap d-flex flex-column">
                                <div class="catalog-list-auto__basic-information d-flex justify-content-between">
                                    <h2 class="catalog-list-auto__short-name h5">
                                        <?php echo $auto['car_mark']; ?>
                                        <?php echo $auto['car_model']; ?>
                                    </h2>
                                </div>
                                <span class="catalog-list-auto__price">
                                    от <?php echo $auto['cost_port']; ?>$
                                </span>
                                <span class="catalog-list-auto__date-delivery">
                                    <?php echo ($auto['date_sale'] != '' ? 'Продано' : ($auto['date_sapply'] != '' ? ($auto['date_sapply'] <= date('Y-m-d') ? 'В наличии' : 'Дата доставки: ' . substr($auto['date_sapply'], 8, 2) . '.' . substr($auto['date_sapply'], 5, 2) . '.' . substr($auto['date_sapply'], 0, 4)) : 'Дата доставки: --')); ?>
                                </span>
                                <div class="row catalog-list-auto__specifications specifications d-flex">
                                    <div class="col-6 col-lg-4 specifications__item d-flex">
                                        <img src="/application/public/img/catalog_auto/auto-calendar.png" alt="" class="specifications__label">
                                        <span class="specifications__value">
                                            <?php echo ($auto['car_year_issue'] == ''? '--' : $auto['car_year_issue']); ?> г.в
                                        </span>
                                    </div>
                                    <div class="col-6 col-lg-4 specifications__item d-flex">
                                        <img src="/application/public/img/catalog_auto/auto-road.png" alt="" class="specifications__label">
                                        <span class="specifications__value">
                                            <?php echo $auto['car_mileage']; ?> km
                                        </span>
                                    </div>
                                    <div class="col-6 col-lg-4 specifications__item d-flex">
                                        <img src="/application/public/img/catalog_auto/auto-body.png" alt="" class="specifications__label specifications__label_body-type">
                                        <span class="specifications__value">
                                            <?php echo $auto['car_body']; ?>
                                        </span>
                                    </div>
                                    <div class="col-6 col-lg-4 specifications__item d-flex">
                                        <img src="/application/public/img/catalog_auto/auto-engine.png" alt="" class="specifications__label">
                                        <span class="specifications__value">
                                            <?php echo $auto['car_engine']; ?> L
                                        </span>
                                    </div>
                                    <div class="col-6 col-lg-4 specifications__item d-flex">
                                        <img src="/application/public/img/catalog_auto/auto-transmission.png" alt="" class="specifications__label">
                                        <span class="specifications__value">
                                            <?php echo $auto['car_kpp']; ?>
                                        </span>
                                    </div>
                                    <div class="col-6 col-lg-4 specifications__item d-flex">
                                        <img src="/application/public/img/catalog_auto/auto-fuel.png" alt="" class="specifications__label">
                                        <span class="specifications__value">
                                            <?php echo $auto['car_fuel']; ?>
                                        </span>
                                    </div>
                                </div>
                                <a href="/auto/<?php echo $auto['id']; ?>" class="catalog-list-auto__more mt-auto">подробнее</a>
                            </div>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <div class="catalog-paginate d-flex justify-content-center text-center">
                        <a href="/catalog/<?php echo ($this_page == 1 ? '1' : $this_page - 1); ?>" class="catalog-paginate__arrow-link"><i class="fas fa-chevron-left"></i></a>
						<a href="/catalog/1" class="catalog-paginate__page-link <?php echo ($this_page == 1 ? 'page-link__active' : ''); ?>">1</a>
						<?php if($this_page > 4): ?>
						<p class="catalog-paginate__page-link">...</p>
                        <?php endif; ?>
                        <?php $n_page = ($this_page > 3 ? $this_page - 2 : 2); for(;$n_page <= $page_total;$n_page++): if($n_page == $this_page + 3 || $n_page == $page_total) break; ?>
						<a href="/catalog/<?php echo $n_page; ?>" class="catalog-paginate__page-link <?php echo ($this_page == $n_page ? 'page-link__active' : ''); ?>"><?php echo $n_page; ?></a>
                        <?php endfor;?>
						<?php if($this_page < $page_total - 3): ?>
						<p class="catalog-paginate__page-link">...</p>
                        <?php endif; ?>
						<a href="/catalog/<?php echo $page_total; ?>" class="catalog-paginate__page-link <?php echo ($this_page == $page_total ? 'page-link__active' : ''); ?>"><?php echo $page_total; ?></a>
                        <a href="/catalog/<?php echo ($this_page == $page_total ? $page_total : $this_page + 1); ?>" class="catalog-paginate__arrow-link"><i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php echo $footer ?>
