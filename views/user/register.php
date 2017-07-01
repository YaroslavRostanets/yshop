<?php include_once ROOT."/layouts/header.php"?>

<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
            <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">Register</li>
        </ol>
    </div>
</div>
<div class="container">
    <div class="register">
        <h2>Register</h2>
        <form action="#" method="post">
            <div class="col-md-6  register-top-grid">
                <div class="mation">
                    <div>
                        <span>Имя</span>
                        <input type="text" name="firstname" value="<?= $firstname ?>">
                        <div class="error"><?= $errors['firstNameError']?></div>
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
    </div>
</div>

<?php include_once ROOT."/layouts/footer.php"?>