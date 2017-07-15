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

            <?php if(isset($isUserUpdate)) : ?>
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Профиль изменен</h3>
                    </div>
                    <div class="panel-body"> Вы будете перенаправлены на главную через <span id="timerBack">5</span> сек </div>
                </div>
                <script>
                    $(document).ready(function(){
                        (function(){
                            var sek = 5;

                            setInterval(function(){
                                $('#timerBack').text(sek);
                                sek = sek--;
                                if(sek < 1) {
                                    window.href = '<?php $_SERVER['SERVER_NAME'] ?>';
                                }
                            }, 1000);
                        })();
                    })
                </script>
            <?php else : ?>

                <form action="#" method="post">
                    <div class="col-md-6  register-top-grid">
                        <div class="mation">
                            <div>
                                <span>Имя</span>
                                <input type="text" name="firstname" value="<?= $user['firstname'] ?>">
                                <div class="error">
                                    <?= $errors['firstNameError'] ?>
                                </div>
                            </div>

                            <div>
                                <span>Фамилия</span>
                                <input type="text" name="lastname" value="<?= $user['lastname'] ?>">
                                <div class="error">
                                    <?= $errors['lastNameError'] ?>
                                </div>
                            </div>


                            <div>
                                <span>Email</span>
                                <input type="text" name="email" value="<?= $user['email'] ?>">
                                <div class="error">
                                    <?= $errors['emailError'] ?>
                                </div>
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

            <?php endif ; ?>

        </div>
    </div>

<?php include_once ROOT."/layouts/footer.php"?>