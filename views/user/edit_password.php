<?php include_once ROOT."/layouts/header.php"?>

    <!--//header-->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Главная</a></li>
                <li class="active">Изменить пароль</li>
            </ol>
        </div>
    </div>
    <div class="account">
        <div class="container">

            <form action="#" method="post">
                <div class="col-md-6  register-top-grid">
                    <div class="mation">
                        <div>
                            <span>Старый пароль</span>
                            <input type="password" name="old_password" value="">
                            <div class="error"></div>
                        </div>

                        <div>
                            <span>Новый пароль</span>
                            <input type="text" name="password" value="">
                        </div>


                        <div>
                            <span>Повторите пароль</span>
                            <input type="text" name="password-repeat" value="">
                            <div class="error"></div>
                        </div>

                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class=" col-md-6 register-bottom-grid">

                </div>
                <div class="clearfix"> </div>
                <div class="register-but">
                    <input type="submit" name="submit" value="Изменить пароль">
                    <a href="#" onclick="javascript:history.go(-1)">Назад</a>
                    <div class="clearfix"> </div>
                </div>
            </form>

        </div>
    </div>

<?php include_once ROOT."/layouts/footer.php"?>