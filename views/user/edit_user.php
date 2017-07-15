<?php include_once ROOT."/layouts/header.php"?>

    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Главная</a></li>
                <li class="active">Профиль</li>
            </ol>
        </div>
    </div>
    <div class="container">
        <div class="register">
            <h2>Профиль</h2>

                <form action="#" method="post">
                    <div class="col-md-6  register-top-grid">
                        <div class="mation">
                            <div>
                                <span>Имя</span>
                                <input type="text" name="firstname" value="<?= $user['firstname'] ?>">
                                <div class="error"></div>
                            </div>

                            <div>
                                <span>Фамилия</span>
                                <input type="text" name="lastname" value="<?= $user['lastname'] ?>">
                            </div>


                            <div>
                                <span>Email</span>
                                <input type="text" name="email" value="<?= $user['email'] ?>">
                                <div class="error"></div>
                            </div>

                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class=" col-md-6 register-bottom-grid">

                    </div>
                    <div class="clearfix"> </div>
                    <div class="register-but">
                        <input type="submit" name="submit" value="Сохранить">
                        <a href="#" onclick="javascript:history.go(-1)">Назад</a>
                        <div class="clearfix"> </div>
                    </div>
                </form>

        </div>
    </div>

<?php include_once ROOT."/layouts/footer.php"?>