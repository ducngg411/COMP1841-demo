<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/> -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/base.css">

    <link rel="shortcut icon" type="image/x-icon" href="logo/fav.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head> 
<body>
    <div class="web web-background_img ">
        <header class="header ">
            <nav class="header__navbar">
                <ul class="header__navbar-list">
                    <li class="header__navbar-item">
                        <div class="header__navbar-logo">
                            <img src="assets/img/devtrek.png" alt="logo" class="header__navbar-img">
                        </div>
                    </li>
                    
                </ul>
                <ul class="header__navbar-register">
                    <li class="header__navbar-item">
                        <div class="header__navbar-checkin header__navbar-checkin-pointer">
                                <a href="registration.php">
                                    <button class="header__navbar-sign-up" >Sign up</button>
                                </a>

                                <a href="index.php">
                                    <button class="header__navbar-login">Login</button>
                                </a>
                        </div>
                    </li>
                </ul>
            </nav>
        </header>

        <div class="container">

            <form class="container__form container--padding" action="login_query.php" method="post">
                <div class="show_message">
                    <?php if(isset($_SESSION['message'])): ?>
                    <div class="alert"
                        <?php echo $_SESSION['message']['alert'] ?> msg"><?php echo $_SESSION['message']['text'] ?></div>
                <script>
                    (function() {
                        removing the message 3 seconds after the page load
                        setTimeout(function(){
                            document.querySelector('.msg').remove();
                        },3000)
                    })();
                </script>
                <?php 
                    endif;
                    // clearing the message
                    unset($_SESSION['message']);
                ?>
                </div>

                <div class="container__header">
                    <div class="container__form-heading">
                        <h1 class="container__form-heading-create">
                            Welcome Back!
                        </h1>
    
                        <h3 class="container__form-heading-sologan container__form-heading-sologan--size-l">
                            Hey, Enter your details to get sign in <br>
                            to your account
                        </h3>
                    </div>
                </div>

                <div class="container__body">
                    <div class="container__form-fill">
                        <div>
                            <input type="text" class="container__form-fill-modify form_email-input container__form-fill-modify--max" placeholder="Username" id="username" name="username" autocomplete="off" required>
                        </div>

                        <div>
                            <input type="password" class="container__form-fill-modify form_email-input container__form-fill-modify--max" placeholder="Password" id="password" name="password" autocomplete="off" required> 
                        </div>

                        <div class="form__sign-up">
                            <button class="form__sign-up-btn" name="login">Sign in</button>
                        </div>
                    </div>
                    <!-- <div class="container__form-google-login">
                        <div class="container__form-hr-split container__form-hr-split--size-l">
                            <hr class="hr-split-left">
                            <span class="hr-center-text">OR</span>
                            <hr class="hr-split-right">
                        </div>
                        
                        <div class="google-button-modify">
                            <i class="fa-brands fa-google google-sign-up-icon"></i>
                            <span class="google-sign-up">Login with Google</span>
                        </div>
                        
                    </div> -->

                </div>
                
                <div class="container__footer">
                    <h3 class="container__footer-h3">Don't have an accoount? <span><a href="registration.php">Sign up for free!</a></span></h3>
                </div>
            </form>
        </div>
    </div>
</body>
</html>