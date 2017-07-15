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

    </div>
</div>

<?php include_once ROOT."/layouts/footer.php"?>