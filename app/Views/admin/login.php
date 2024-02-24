<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <!-- Liens vers vos fichiers CSS -->
    <link rel="icon" type="image/png" href="/templogin/images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="/templogin/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/templogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/templogin/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="/templogin/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="/templogin/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="/templogin/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="/templogin/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="/templogin/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="/templogin/css/util.css">
    <link rel="stylesheet" type="text/css" href="/templogin/css/main.css">
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100" style="background-image: url('/templogin/images/bg-01.png');">
            <div class="wrap-login100">
                <!-- Affiche les erreurs -->
                <?php if (session()->has('error')): ?>
                    <div class="alert alert-danger"><?= session('error') ?></div>
                <?php endif; ?>

                <form class="login100-form validate-form" action="/admin/verificationlogin" method="post">
                    <span class="login100-form-logo">
                        <i class="zmdi zmdi-landscape"></i>
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        Log in Admin
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <input class="input100" type="text" name="username" value="aina@gmail.com">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="pass" value="aina">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
    
    <!-- JavaScript -->
    <script src="/templogin/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="/templogin/vendor/animsition/js/animsition.min.js"></script>
    <script src="/templogin/vendor/bootstrap/js/popper.js"></script>
    <script src="/templogin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/templogin/vendor/select2/select2.min.js"></script>
    <script src="/templogin/vendor/daterangepicker/moment.min.js"></script>
    <script src="/templogin/vendor/daterangepicker/daterangepicker.js"></script>
    <script src="/templogin/vendor/countdowntime/countdowntime.js"></script>
    <script src="/templogin/js/main.js"></script>

</body>
</html>
