<?php include_once ROOT."/layouts/header.php"?>

<!--//header-->
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
            <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Главная</a></li>
            <li class="active">Авторизация</li>
        </ol>
    </div>
</div>
<div class="account">
    <div class="container">
        <?php echo "lalala"; ?>

        <?php if(isset($_SESSION['user_id'])): ?>

            <form action="#" method="post">
                <div class="col-md-6  register-top-grid">
                    <div class="mation">
                        <div>
                            <span>Имя</span>
                            <input type="text" name="firstname" value="">
                            <div class="error"><?= $errors['loginError']?></div>
                        </div>

                        <div>
                            <span>Фамилия</span>
                            <input type="text" name="lastname" value="<?= $lastname ?>">
                        </div>


                        <div>
                            <span>Email</span>
                            <input type="text" name="email" value="<?= $email ?>">
                            <div class="error"><?= $errors['emailError']?></div>
                        </div>

                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class=" col-md-6 register-bottom-grid">

                    <div class="mation">
                        <div>
                            <span>Пароль</span>
                            <input type="password" name="password">
                            <span>Повторие пароль</span>
                            <input type="password" name="confirm_password">
                        </div>
                        <div class="error">
                            <?= $errors['passwordError'] ?>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
                <div class="register-but">
                    <input type="submit" name="submit" value="Отправить">
                    <div class="clearfix"> </div>
                </div>
            </form>

        <?php else : ?>

        <h2>Авторизация</h2>
        <div class="account_grid">
            <div class="col-md-6 login-right">
                <form action="#" method="post">

                    <span>Email</span>
                    <input type="text" name="email" value="<?= $email ?>">
                    <div class="error"><?= $errors['loginError']?></div>

                    <span>Пароль</span>
                    <input type="password" name="password">
                    <div class="word-in">
                        <a class="forgot" href="#">Напомнить пароль?</a>
                        <input type="submit" value="ВХОД" name="submit">
                    </div>
                </form>
            </div>
            <div class="col-md-6 login-left">
                <h4>Стать клиентом</h4>
                <p>
                    Создав учетную запись в нашем магазине, вы сможете быстрее переходить
                    процесс оформления заказа, хранить несколько адресов доставки,
                    просматривать и отслеживать свои заказы в своей учетной записи и многое другое.</p>

                <a class="acount-btn" href="<?= SITE_ROOT.'/user/register/'?>">Создать аккаунт</a>

            </div>
            <div class="clearfix"> </div>
        </div>

        <?php endif ; ?>

    </div>
</div>

<?php include_once ROOT."/layouts/footer.php"?>