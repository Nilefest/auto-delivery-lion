<?php echo $header; ?>
<div class="content-bg-white">
    <section class="stub" id="stub">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center d flex flex-column">
                    <div class="stub__title-wrap">
                        <h3 class="stub__title">
                            Страница находится в
                        </h3>
                        <h3 class="stub__subtitle">
                            процессе разработки
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center d flex flex-column">
                    <div class="stub__offer-wrap">
                        <h5 class="stub__offer">
                            По вопросам заказа автомобимя<br>
                            звоните: <?php echo $phones['1']['value']; ?>
                        </h5>
                        <a href="tel:<?php echo str_replace(' ', '', $phones['1']['value']); ?>" class="stub__offer-link btn_orange">
                            позвонить
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php echo $footer ?>
