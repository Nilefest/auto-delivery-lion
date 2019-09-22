<?= $header ?>
<div class="content-bg-white">
    <div class="edit">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xl-3">
                    <div class="add-car">
                        <a href="/auto/edit" class="add-car__link d-flex align-items-center">
                            <i class="fas fa-plus"></i>
                            <p class="add-car__text">
                                Добавить автомобиль
                            </p>
                        </a>
                    </div>
                </div>
                <div style="margin-top:20px;" class="col-md-4 col-xl-6"></div>
                <div class="col-md-4 col-xl-3">
                    <div class="add-car">
                        <a href="?logout" class="add-car__link d-flex align-items-center">
                            <i class="fas fa-sign-out-alt"></i>
                            <p class="add-car__text">
                                Выйти
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <form action="" method="post" class="edit__form">
                <div class="row">
                    <div class="d-flex col-12 col-md-8 col-lg-7 col-xl-6 justify-content-around">
                        <h3 class="edit__title-personal">
                            Персональные данные
                        </h3>
                        <a href="/admin/<?php echo (isset($global_edit) ? '' : 'edit'); ?>" class="edit__edit-save align-self-baseline">
                            <?php echo (isset($global_edit) ? 'Отмена' : 'Редактировать'); ?>
                        </a>
                        <?php if(isset($global_edit)): ?>
                        <input style="cursor:pointer" type="submit" name="sub_save_global" class="edit__edit-save align-self-baseline" value="Сохранить">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="edit__block edit__block_header">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="edit__title-point">
                                Шапка
                            </h4>
                        </div>
                    </div>
                    <div class="edit__wrap-points">
                        <div class="row">
                            <div class="col-sm-3 col-lg-2">
                                <p class="edit__label">
                                    Адрес:
                                </p>
                            </div>
                            <div class="col-4">
                                <input type="text" name="header_addr" <?php echo (!isset($global_edit) ? 'disabled' : ''); ?> id="" class="edit__input" size="40" value="<?php echo $global_header['addr']['value']; ?>" placeholder="Адрес">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 col-lg-2">
                                <p class="edit__label">
                                    Телефон:
                                </p>
                            </div>
                            <div class="col-4">
                                <input type="tel" name="header_phone_1" <?php echo (!isset($global_edit) ? 'disabled' : ''); ?> id="" class="edit__input" size="20" value="<?php echo $global_header['phone_1']['value']; ?>" placeholder="38 012 345 67 89">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 col-lg-2">
                                <p class="edit__label">
                                    Телефон:
                                </p>
                            </div>
                            <div class="col-4">
                                <input type="tel" name="header_phone_2" <?php echo (!isset($global_edit) ? 'disabled' : ''); ?> id="" class="edit__input" size="20" value="<?php echo $global_header['phone_2']['value']; ?>" placeholder="38 012 345 67 89">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 col-lg-2">
                                <p class="edit__label">
                                    Телефон:
                                </p>
                            </div>
                            <div class="col-4">
                                <input type="tel" name="header_phone_3" <?php echo (!isset($global_edit) ? 'disabled' : ''); ?> id="" class="edit__input" size="20" value="<?php echo $global_header['phone_3']['value']; ?>" placeholder="38 012 345 67 89">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="edit__block edit__block_messenger">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="edit__title-point">
                                Месенджеры
                            </h4>
                        </div>
                    </div>
                    <div class="edit__wrap-points">
                        <div class="row">
                            <div class="col-sm-3 col-lg-2">
                                <p class="edit__label">
                                    Telegram:
                                </p>
                            </div>
                            <div class="col-4">
                                <input type="text" name="messager_telegram" <?php echo (!isset($global_edit) ? 'disabled' : ''); ?> id="" class="edit__input" size="20" value="<?php echo $global_messager['telegram']['value']; ?>" placeholder="@Username">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 col-lg-2">
                                <p class="edit__label">
                                    Viber:
                                </p>
                            </div>
                            <div class="col-4">
                                <input type="text" name="messager_viber" <?php echo (!isset($global_edit) ? 'disabled' : ''); ?> id="" class="edit__input" size="20" value="<?php echo $global_messager['viber']['value']; ?>" placeholder="380123456789">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 col-lg-2">
                                <p class="edit__label">
                                    WhatsApp:
                                </p>
                            </div>
                            <div class="col-4">
                                <input type="text" name="messager_whatsapp" <?php echo (!isset($global_edit) ? 'disabled' : ''); ?> id="" class="edit__input" size="20" value="<?php echo $global_messager['whatsapp']['value']; ?>" placeholder="380123456789">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 col-lg-2">
                                <p class="edit__label">
                                    Messenger:
                                </p>
                            </div>
                            <div class="col-4">
                                <input type="text" name="messager_facebook" <?php echo (!isset($global_edit) ? 'disabled' : ''); ?> id="" class="edit__input" size="40" value="<?php echo $global_messager['facebook']['value']; ?>" placeholder="Username">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 col-lg-2">
                                <p class="edit__label">
                                    Телефон:
                                </p>
                            </div>
                            <div class="col-4">
                                <input type="tel" name="messager_phone_0" <?php echo (!isset($global_edit) ? 'disabled' : ''); ?> id="" class="edit__input" size="20" value="<?php echo $global_messager['phone_0']['value']; ?>" placeholder="38 012 345 67 89">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="edit__block edit__block_footer">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="edit__title-point">
                                Подвал
                            </h4>
                        </div>
                    </div>
                    <div class="edit__wrap-points">
                        <div class="row">
                            <div class="col-sm-3 col-lg-2">
                                <p class="edit__label">
                                    Описание:
                                </p>
                            </div>
                            <div class="col-4">
                                <textarea name="footer_about" <?php echo (!isset($global_edit) ? 'disabled' : ''); ?> name="" id="" class="edit__textarea" cols="42" rows="5"><?php echo $global_footer['about']['value']; ?></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 col-lg-2">
                                <p class="edit__label">
                                    Адрес:
                                </p>
                            </div>
                            <div class="col-4">
                                <input type="text" name="footer_addr" <?php echo (!isset($global_edit) ? 'disabled' : ''); ?> id="" class="edit__input" size="40" value="<?php echo $global_footer['addr']['value']; ?>" placeholder="Адрес">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 col-lg-2">
                                <p class="edit__label">
                                    График работы:
                                </p>
                            </div>
                            <div class="col-4">
                                <textarea name="footer_schedule" <?php echo (!isset($global_edit) ? 'disabled' : ''); ?> name="" id="" class="edit__textarea" cols="35" rows="3"><?php echo $global_footer['schedule']['value']; ?></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 col-lg-2">
                                <p class="edit__label">
                                    Email:
                                </p>
                            </div>
                            <div class="col-4">
                                <input type="email" name="footer_mail" <?php echo (!isset($global_edit) ? 'disabled' : ''); ?> id="" class="edit__input" size="20" value="<?php echo $global_footer['mail']['value']; ?>" placeholder="mail">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 col-lg-2">
                                <p class="edit__label">
                                    Телефон:
                                </p>
                            </div>
                            <div class="col-4">
                                <input type="tel" name="footer_phone_1" <?php echo (!isset($global_edit) ? 'disabled' : ''); ?> id="" class="edit__input" size="20" value="<?php echo $global_footer['phone_1']['value']; ?>" placeholder="38 012 345 67 89">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 col-lg-2">
                                <p class="edit__label">
                                    Телефон:
                                </p>
                            </div>
                            <div class="col-4">
                                <input type="tel" name="footer_phone_2" <?php echo (!isset($global_edit) ? 'disabled' : ''); ?> id="" class="edit__input" size="20" value="<?php echo $global_footer['phone_2']['value']; ?>" placeholder="38 012 345 67 89">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 col-lg-2">
                                <p class="edit__label">
                                    Телефон:
                                </p>
                            </div>
                            <div class="col-4">
                                <input type="tel" name="footer_phone_3" <?php echo (!isset($global_edit) ? 'disabled' : ''); ?> id="" class="edit__input" size="20" value="<?php echo $global_footer['phone_3']['value']; ?>" placeholder="38 012 345 67 89">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <form action="" method="post" class="edit__form">
                <div class="edit__block edit__block_password">
                    <div class="row">
                        <div class="d-flex col-12 col-md-8 col-lg-7 col-xl-6 justify-content-around">
                            <h3 class="edit__title-personal">
                                Смена пароля
                            </h3>
                            <input name="sub_save_pass" style="cursor:pointer" type="submit" class="edit__edit-save align-self-baseline" value="Сохранить">
                        </div>
                    </div>
                    <div class="edit__wrap-points">
                        <div class="row">
                            <div class="col-sm-3 col-lg-2">
                                <p class="edit__label">
                                    Старый пароль:
                                </p>
                            </div>
                            <div class="col-4">
                                <input name="old_pass" type="text" id="" class="edit__input" size="20" placeholder="Страрый пароль">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 col-lg-2">
                                <p class="edit__label">
                                    Новый пароль:
                                </p>
                            </div>
                            <div class="col-4">
                                <input type="text" name="password_1" id="" class="edit__input" size="20" placeholder="Новый пароль">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 col-lg-2">
                                <p class="edit__label">
                                    Новый пароль:
                                </p>
                            </div>
                            <div class="col-4">
                                <input type="text" name="password_2" id="" class="edit__input" size="20" placeholder="Новый пароль">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $footer ?>
