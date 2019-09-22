<?php echo $header; ?>
<style>
    .smallImage2, .smallImage2{
        margin-right: 5px;
    }
    
    .thumbs__border-active:hover{
        transition: all .2s;
        background-color: red;
        opacity: 0.3;
    }
    
</style>
<div class="content-bg-gray">
    <form enctype="multipart/form-data" method="post">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="auto-way__wrap col d-flex flex-wrap">
                        <p id='largeImage1' class="auto-way__text">Вы находитесь здесь: &nbsp;</p>
                        <a class="auto-way__text" href="/"> Главная &nbsp; // &nbsp;</a>
                        <a class="auto-way__text" href="/catalog">Каталог автомобилей &nbsp; // &nbsp;</a>
                        <?php if(isset($auto['id'])): ?>
                        <a class="auto-way__text auto-way__text_orange" href="/auto/<?php echo $auto['id']; ?>">
                            <?php echo $auto['car_mark']; ?>
                            <?php echo $auto['car_model']; ?></a>
                        <?php endif; ?>
                        <?php if(!isset($auto['id'])): ?>
                        <a class="auto-way__text auto-way__text_orange" href="/auto/edit">Добавить авто</a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-6 col-lg-2 d-flex">
                    <div class="admin-btn-wrap d-flex align-items-center">
                        <input type="hidden" name="catalog_id" value="<?php echo $auto['id']; ?>">
                        <input type="submit" class="a-e-edit-auto-btn text-center" value="<?php echo (isset($auto['id']) ? 'Сохранить' : 'Добавить'); ?>" name="<?php echo (isset($auto['id']) ? 'save' : 'add'); ?>_auto">
                    </div>
                </div>
                <div class="col-6 col-lg-2 d-flex">
                    <div class="admin-btn-wrap d-flex align-items-center">
                        <?php if(isset($auto['id'])): ?>
                        <input type="submit" class="a-e-remove-auto-btn text-center" value="Удалить" name="rem_auto">
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
        <section class="a-e-specifications" id="a-e-specifications">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-lg-4">
                        <div class="a-e-specifications__list-wrap">
                            <div class="a-e-specification__name-wrap">
                                <h2 class="a-e-specification__name">
                                    <input name="car_mark" type="text" class="a-e-item" size="20" value="<?php echo $auto['car_mark']; ?>" placeholder="Марка"><br><br>
                                    <input name="car_model" type="text" class="a-e-item" size="20" value="<?php echo $auto['car_model']; ?>" placeholder="Модель">
                                </h2>
                                <div class="col-12 a-e-specifications__item d-flex">
                                    <div class="a-e-specification__item-key-wrap">
                                        <span class="a-e-specifications__key">
                                            дата доставки
                                        </span>
                                    </div>
                                    <p class="a-e-specifications__value">
                                        <input name="date_sapply" type="date" class="a-e-item" size="10" value="<?php echo $auto['date_sapply']; ?>">
                                    </p>
                                </div>
                                <div class="col-12 a-e-specifications__item d-flex">
                                    <div class="a-e-specification__item-key-wrap">
                                        <span class="a-e-specifications__key">
                                            дата продажи
                                        </span>
                                    </div>
                                    <p class="a-e-specifications__value">
                                        <input name="date_sale" type="date" class="a-e-item" size="10" value="<?php echo $auto['date_sale']; ?>">
                                    </p>
                                </div>
                                <p class="a-e-specification__date-delivery">

                                </p>
                                <div class="a-e-specifications__item d-flex">
                                    <img src="/application/public/img/auto/auto-price.png" alt="" class="a-e-specifications__key-img">
                                    <p class="a-e-specification__price">
                                        <input name="cost_port" type="text" class="a-e-item" size="10" value="<?php echo $auto['cost_port']; ?>">
                                    </p>
                                </div>
                                <div class="a-e-specifications__item d-flex">
                                    <img src="/application/public/img/auto/auto_star.png" alt="" class="a-e-specifications__key-img">
                                    <p class="a-e-specification__price">
                                        <input name="car_is_top" type="checkbox" id="is_top_check" class="a-e-item" size="10" <?php echo ($auto['car_is_top'] == 1 ? 'checked' : ''); ?> >
                                        <label for="is_top_check"> Добавить в топ</label>
                                    </p>
                                </div>
                            </div>
                            <div class="row a-e-specifications__specifications-wrap d-flex">
                                <div class="col-12 a-e-specifications__subtitle-wrap">
                                    <h6 class="a-e-specifications__subtitle">
                                        Технические характеристики
                                    </h6>
                                </div>
                                <div class="col-12 a-e-specifications__item d-flex">
                                    <div class="a-e-specification__item-key-wrap">
                                        <img src="/application/public/img/auto/auto-fuel.png" alt="" class="a-e-specifications__key-img">
                                        <span class="a-e-specifications__key">
                                            Топливо
                                        </span>
                                    </div>
                                    <p class="a-e-specifications__value ml-auto">
                                        <input name="car_fuel" type="text" class="a-e-item" size="10" value="<?php echo $auto['car_fuel']; ?>">
                                    </p>
                                </div>
                                <div class="col-12 a-e-specifications__item d-flex">
                                    <div class="a-e-specification__item-key-wrap">
                                        <img src="/application/public/img/auto/auto-road.png" alt="" class="a-e-specifications__key-img">
                                        <span class="a-e-specifications__key">
                                            Пробег (km)
                                        </span>
                                    </div>
                                    <p class="a-e-specifications__value ml-auto">
                                        <input name="car_mileage" type="text" class="a-e-item" size="10" value="<?php echo $auto['car_mileage']; ?>">
                                    </p>
                                </div>
                                <div class="col-12 a-e-specifications__item d-flex">
                                    <div class="a-e-specification__item-key-wrap">
                                        <img src="/application/public/img/auto/auto-engine.png" alt="" class="a-e-specifications__key-img">
                                        <span class="a-e-specifications__key">
                                            Двигатель (L)
                                        </span>
                                    </div>
                                    <p class="a-e-specifications__value ml-auto">
                                        <input name="car_engine" type="text" class="a-e-item" size="10" value="<?php echo $auto['car_engine']; ?>">
                                    </p>
                                </div>
                                <div class="col-12 a-e-specifications__item d-flex">
                                    <div class="a-e-specification__item-key-wrap">
                                        <img src="/application/public/img/auto/auto-calendar.png" alt="" class="a-e-specifications__key-img">
                                        <span class="a-e-specifications__key">
                                            Год
                                        </span>
                                    </div>
                                    <p class="a-e-specifications__value ml-auto">
                                        <input name="car_year_issue" type="text" class="a-e-item" size="10" value="<?php echo $auto['car_year_issue'];?>">
                                    </p>
                                </div>
                                <div class="col-12 a-e-specifications__item d-flex">
                                    <div class="a-e-specification__item-key-wrap">
                                        <img src="/application/public/img/auto/auto-KPP.png" alt="" class="a-e-specifications__key-img">
                                        <span class="a-e-specifications__key">
                                            КПП
                                        </span>
                                    </div>
                                    <p class="a-e-specifications__value ml-auto">
                                        <input name="car_kpp" type="text" class="a-e-item" size="10" value="<?php echo $auto['car_kpp']; ?>">
                                    </p>
                                </div>
                                <div class="col-12 a-e-specifications__item d-flex">
                                    <div class="a-e-specification__item-key-wrap">
                                        <img src="/application/public/img/auto/auto-while.png" alt="" class="a-e-specifications__key-img">
                                        <span class="a-e-specifications__key">
                                            Привод
                                        </span>
                                    </div>
                                    <p class="a-e-specifications__value ml-auto">
                                        <input name="car_drive_unit" type="text" class="a-e-item" size="10" value="<?php echo $auto['car_drive_unit']; ?>">
                                    </p>
                                </div>
                                <div class="col-12 a-e-specifications__item d-flex">
                                    <div class="a-e-specification__item-key-wrap">
                                        <img src="/application/public/img/auto/auto-paint.png" alt="" class="a-e-specifications__key-img">
                                        <span class="a-e-specifications__key">
                                            Цвет
                                        </span>
                                    </div>
                                    <p class="a-e-specifications__value ml-auto">
                                        <input name="car_color" type="text" class="a-e-item" size="10" value="<?php echo $auto['car_color']; ?>">
                                    </p>
                                </div>
                                <div class="col-12 a-e-specifications__item d-flex">
                                    <div class="a-e-specification__item-key-wrap">
                                        <img src="/application/public/img/auto/auto-body.png" alt="" class="a-e-specifications__key-img">
                                        <span class="a-e-specifications__key">
                                            Кузов
                                        </span>
                                    </div>
                                    <p class="a-e-specifications__value ml-auto">
                                        <input name="car_body" type="text" class="a-e-item" size="10" value="<?php echo $auto['car_body']; ?>">
                                    </p>
                                </div>
                            </div>
                            <div class="a-e-specifications__more-wrap text-center">
                                <a class="auto-specification__more" href="tel:<?php echo str_replace(' ', '', $phones['1']['value']); ?>" class="header__call">
                                    <norb>Позвонить</norb>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="a-e-specifications__carusel-wrap">
                            <div id="gallery">
                                <div id="panel">
                                    <img class='largeImage1' id="largeImage" src="<?php echo $auto['link_img'][0]; ?>" alt="<?php echo $auto['link_img'][0]; ?>" />
                                </div>
                                <div id="thumbs" class="all_images1 d-flex justify-content-between flex-wrap">
                                    <?php if(count($auto['link_img']) > 1): $n_img = 0; foreach($auto['link_img'] as $img): if($n_img++ == 99) break; ?>
                                    <img class="smallImage1 <?php echo ($n_img == 1 ? 'thumbs__border-active' : ''); ?>" src="<?php echo $img; ?>" alt="<?php echo $img; ?>" />
                                    <?php endforeach; endif; ?>
                                    <div class="add-photo-wrap">
                                        <label class="a-e-add-label" for="a-e-thumbs-upload_old"></label>
                                        <input id="a-e-thumbs-upload_old" class="a-e-thumbs-upload" type="file" accept=".jpeg,.jpg,.png" name="thumbs-upload" value="" multiple>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="a-e-additionally" id="a-e-additionally">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-md-6 col-lg-5 d-flex flex-column">
                        <div class="a-e-additionally__technical-certificate">
                            <h6 class="a-e-additionally__subtitle">
                                Технический паспорт
                            </h6>
                            <div class="a-e-additionally__item-wrap">
                                <div class="a-e-additionally__item d-flex justify-content-between">
                                    <span class="a-e-additionally__key">
                                        VIN
                                    </span>
                                    <p class="a-e-additionally__value">
                                        <input name="car_vin" id="car_vin" type="text" class="a-e-input" size="10" value="<?php echo $auto['car_vin']; ?>">
                                    </p>
                                </div>
                            </div>
                            <div class="a-e-additionally__item-wrap">
                                <div class="a-e-additionally__item d-flex justify-content-between">
                                    <span class="a-e-additionally__key">
                                        Основные повреждения
                                    </span>
                                    <p class="a-e-additionally__value">
                                        <input name="info_damage" type="text" class="a-e-input" size="10" value="<?php echo $auto['info_damage']; ?>">
                                    </p>
                                </div>
                            </div>
                            <div class="a-e-additionally__item-wrap">
                                <div class="a-e-additionally__item d-flex justify-content-between">
                                    <span class="a-e-additionally__key">
                                        Особенности
                                    </span>
                                    <p class="a-e-additionally__value">
                                        <input name="info_special" type="text" class="a-e-input" size="10" value="<?php echo $auto['info_special']; ?>">
                                    </p>
                                </div>
                            </div>
                            <div class="a-e-additionally__item-wrap">
                                <div class="a-e-additionally__item d-flex justify-content-between">
                                    <span class="a-e-additionally__key">
                                        Пробег подтвержден
                                    </span>
                                    <p class="a-e-additionally__value">
                                        <input name="info_mileage_confirmed" type="text" class="a-e-input" size="10" value="<?php echo $auto['info_mileage_confirmed']; ?>">
                                    </p>
                                </div>
                            </div>
                            <div class="a-e-additionally__item-wrap">
                                <div class="a-e-additionally__item d-flex justify-content-between">
                                    <span class="a-e-additionally__key">
                                        Ключи
                                    </span>
                                    <p class="a-e-additionally__value">
                                        <input name="info_key" type="text" class="a-e-input" size="10" value="<?php echo $auto['info_key']; ?>">
                                    </p>
                                </div>
                            </div>
                            <div class="a-e-additionally__item-wrap">
                                <div class="a-e-additionally__link-auction-wrap d-flex justify-content-between">
                                    <span class="a-e-additionally__key">
                                        Ссылка на аукцион
                                    </span>
                                    <p class="a-e-additionally__value">
                                        <input name="link_lot" type="text" class="a-e-input" size="10" value="<?php echo $auto['link_lot']; ?>">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-7 d-flex">
                        <div class="a-e-additionally__additional-information justify-content-between">
                            <h6 class="a-e-additionally__subtitle">
                                Дополнительная информация по автомобмлю
                            </h6>
                            <p class="a-e-additionally__text">
                                <textarea name="info_other" id="" rows="12" class="a-e-textarea a-e-history__description-textarea"><?php echo $auto['info_other']; ?></textarea>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="a-e-history" id="a-e-history">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-lg-4">
                        <div class="a-e-history__restored-cars-wrap d-flex flex-column">
                            <h6 class="a-e-history__restored-subtitle">
                                Восстановление автомобиля
                            </h6>
                            <p class="a-e-history__restored-date">
                                дата окончания работ <input name="date_recovery" type="date" class="a-e-input" size="10" value="<?php echo $auto['date_recovery'];?>">
                            </p>
                            <div class="a-e-history__price-wrap d-flex">
                                <img src="/application/public/img/auto/auto-price.png" alt="" class="a-e-history__price-img">
                                <p class="a-e-history__price">
                                    <input name="cost_key" type="text" class="a-e-item" size="10" value="<?php echo $auto['cost_key']; ?>" placeholder="$">
                                </p>
                            </div>
                            <div class="a-e-history__description-wrap">
                                <p class="a-e-history__description-subtitle">
                                    Описание
                                </p>
                                <p class="a-e-history__description-text">
                                    <textarea name="info_desc_recovery" id="" rows="10" class="a-e-history__description-textarea"><?php echo $auto['info_desc_recovery']; ?></textarea>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-8">
                        <div class="a-e-history__carusel-wrap">
                            <div id="gallery">
                                <div id="panel">
                                    <img class='largeImage2' id="largeImage" src="<?php echo $auto['link_img_lion'][0]; ?>" alt="<?php echo $auto['link_img_lion'][0]; ?>" />
                                </div>
                                <div id="thumbs" class="all_images2 d-flex justify-content-between flex-wrap">
                                    <?php if(count($auto['link_img_lion']) > 1): $n_img = 0; foreach($auto['link_img_lion'] as $img): if($n_img++ == 99) break; ?>
                                    <img class="smallImage2 <?php echo ($n_img == 1 ? 'thumbs__border-active' : ''); ?>" src="<?php echo $img; ?>" alt="<?php echo $img; ?>" />
                                    <?php endforeach; endif; ?>
                                    <div id="upload_new" class="add-photo-wrap">
                                        <label class="a-e-add-label" for="a-e-thumbs-upload_new"></label>
                                        <input id="a-e-thumbs-upload_new" class="upload_new a-e-thumbs-upload" type="file" accept=".jpeg,.jpg,.png" name="thumbs-upload" value="" multiple>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
</div>
<script>
    $('body').on('click', '.smallImage1.thumbs__border-active', function() {
        let Data = new FormData();
        Data.append('vin', $('#car_vin').val());
        Data.append('type', 'old');
        Data.append('del', '1');

        $.ajax({
            type: "POST",
            data: {
                del: $(this).attr('src'),
                vin: $('#car_vin').val(),
                type: "old"
            },
            success: function(data) {
                if (data == 'novin') {
                    alert('Не указан VIN код автомобиля');
                } else {
                    data = JSON.parse(data);
                    $('.largeImage1').attr('src', data['2']);
                    $('.smallImage1').remove();
                    for (var el in data) {
                        $('.all_images1').prepend('<img class="smallImage1" src="' + data[el] + '" alt="' + data[el] + '" />');
                    }
                }
            }
        });
    });

    $('body').on('click', '.smallImage2.thumbs__border-active', function() {
        let Data = new FormData();
        Data.append('vin', $('#car_vin').val());
        Data.append('type', 'new');
        Data.append('del', '1');

        $.ajax({
            type: "POST",
            data: {
                del: $(this).attr('src'),
                vin: $('#car_vin').val(),
                type: "new"
            },
            success: function(data) {
                if (data == 'novin') {
                    alert('Не указан VIN код автомобиля');
                } else {
                    data = JSON.parse(data);
                    $('.largeImage2').attr('src', data['2']);
                    $('.smallImage2').remove();
                    for (var el in data) {
                        $('.all_images2').prepend('<img class="smallImage2" src="' + data[el] + '" alt="' + data[el] + '" />');
                    }
                }
            }
        });
    });

    // Для верхнего слайдера
    $('body').on('click', '.smallImage1', function() {
        $('.largeImage1').attr('src', $(this).attr('src'));
        $('.thumbs__border-active').removeClass('thumbs__border-active');
        $(this).addClass('thumbs__border-active');
    });

    // Для нижнего слайдера
    $('body').on('click', '.smallImage2', function() {
        $('.largeImage2').attr('src', $(this).attr('src'));
        $('.thumbs__border-active').removeClass('thumbs__border-active');
        $(this).addClass('thumbs__border-active');
    });

    $('#a-e-thumbs-upload_old').change(function() {
        let files = this.files;
        sendFilesOld(files);
    });

    $('#a-e-thumbs-upload_new').change(function() {
        let files = this.files;
        sendFilesNew(files);
    });


    function sendFilesOld(files) {
        let maxFileSize = 5242880;
        let Data = new FormData();
        $(files).each(function(index, file) {
            if ((file.size <= maxFileSize) && ((file.type == 'image/png') || (file.type == 'image/jpeg'))) {
                Data.append('images[]', file);
            }
        });
        Data.append('vin', $('#car_vin').val());
        Data.append('type', 'old');

        $.ajax({
            type: "POST",
            data: Data,
            contentType: false,
            processData: false,
            success: function(data) {
                if (data == 'novin') {
                    alert('Не указан VIN код автомобиля');
                } else {
                    data = JSON.parse(data);
                    $('.largeImage1').attr('src', data['2']);
                    $('.smallImage1').remove();
                    for (var el in data) {
                        $('.all_images1').prepend('<img class="smallImage1" src="' + data[el] + '" alt="' + data[el] + '" />');
                    }

                }
            }
        });
    }

    function sendFilesNew(files) {
        let maxFileSize = 5242880;
        let Data = new FormData();
        $(files).each(function(index, file) {
            if ((file.size <= maxFileSize) && ((file.type == 'image/png') || (file.type == 'image/jpeg'))) {
                Data.append('images[]', file);
            }
        });
        Data.append('vin', $('#car_vin').val());
        Data.append('type', 'new');

        $.ajax({
            type: "POST",
            data: Data,
            contentType: false,
            processData: false,
            success: function(data) {
                if (data == 'novin') {
                    alert('Не указан VIN код автомобиля');
                } else {
                    data = JSON.parse(data);
                    $('.largeImage2').attr('src', data['2']);
                    $('.smallImage2').remove();
                    for (var el in data) {
                        $('.all_images2').prepend('<img class="smallImage2" src="' + data[el] + '" alt="' + data[el] + '" />');
                    }

                }
            }
        });
    }

</script>
<?php echo $footer; ?>
