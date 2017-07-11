<?php include_once ROOT."/layouts/header.php"?>

<div class="container">
    <div class="register">
        <h2>Register</h2>
        <form action="#" method="post">
            <div class="col-md-6  register-top-grid">

                <div class="mation">
                    <span>First Name</span>
                    <input type="text" name="firstname" value="Админ" readonly>

                    <span>Last Name</span>
                    <input type="text" name="lastname" value="Багатофиксенко" readonly>

                    <span>Email Address</span>
                    <input type="text" name="email">
                </div>
                <div class="clearfix"> </div>
                <a class="news-letter" href="#">
                    <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up</label>
                </a>
            </div>
            <div class=" col-md-6 register-bottom-grid">

                <div class="mation">
                    <span>Password</span>
                    <input type="password" name="password">
                    <span>Confirm Password</span>
                    <input type="password" name="password">
                </div>
            </div>
            <div class="clearfix"> </div>
        </form>

        <div class="register-but">
            <form action="#" method="post">
                <input type="submit" value="submit">
                <div class="clearfix"> </div>
            </form>
        </div>
    </div>
</div>

<?php include_once ROOT."/layouts/footer.php"?>
