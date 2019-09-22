<?= $header ?>
<div class="content-bg-white">
    <section class="login" id="login">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-column">
                    <form action="" method="post">
                        <div class="login__item d-flex justify-content-center">
                            <label class="login__label" for="login__login">Логин:</label>
                            <input name="login" id="login__login" class="login__login" type="text">
                        </div>
                        <div class="login__item d-flex justify-content-center">
                            <label class="login__label" for="login__password">Пароль:</label>
                            <input name="password" id="login__password" class="login__password" type="password">
                        </div>
                        <div class="text-center"><button name="sub_login" class="login__btn btn-orange align-self-center">Войти</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $footer ?>
