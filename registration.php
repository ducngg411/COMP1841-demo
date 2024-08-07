<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/base.css">

    <link rel="shortcut icon" href="assets/img/favicon (2).ico" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
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

        <div class="container">'
            <div class="container__form">
                <form action="register_query.php" method="POST">
                    <div class="container__header">
                        <div class="container__form-heading">
                            <h1 class="container__form-heading-create">
                                Create your account
                            </h1>
        
                            <h3 class="container__form-heading-sologan">
                                Sign up to expand your knowledge!
                            </h3>
                        </div>
        
                        <!-- <div class="container__form-google-login">
                            <div class="google-button-modify">
                                <i class="fa-brands fa-google google-sign-up-icon"></i>
                                <span class="google-sign-up">Sign up with Google</span>
                            </div>
                            
                            <div class="container__form-hr-split ">
                                <hr class="hr-split-left">
                                <span class="hr-center-text">OR</span>
                                <hr class="hr-split-right">
                            </div>
                        </div> -->
                    </div>
    
                    <div class="container__body">
                        <div class="container__form-fill">
                            <div class="form__fill-cover">
                                <div>
                                    <input type="text" class="container__form-fill-modify form_full-name-input" placeholder="First Name" id="firstname" name="firstname" autocomplete="off" required>
                                </div>
                                <div>
                                    <input type="text" class="container__form-fill-modify form_email-input" placeholder="Last Name" id="lastname" name="lastname" autocomplete="off" required>
                                </div>
                            </div>
                            
                            <div class="form__fill-cover">
                                <div>
                                    <input type="text" class="container__form-fill-modify form_email-input" placeholder="Username" id="username" name="username" autocomplete="off" required> 
                                </div>
        
                                <div>
                                    <input type="password" class="container__form-fill-modify form_email-input" placeholder="Password" id="password" name="password" autocomplete="off" required> 
                                </div>
                            </div>

                            <div>
                                <input type="text" class="container__form-fill-modify form_full-name-input container__form-fill-modify--full-width" placeholder="Display Name" id="displayname" name="displayname" autocomplete="off" required>
                            </div>
    
                            
                            <div class="form__fill-cover">
                                <div>
                                    <input type="text" class="container__form-fill-modify form_email-input" placeholder="DOB (YYYY - MM - DD)" id="dob" name="dob" autocomplete="off" required>
                                </div>
                                <div>
                                    <input type="text" class="container__form-fill-modify form_email-input" placeholder="Phone" id="phone" name="phone" autocomplete="off" required> 
                                </div>
        
                            </div>

                            <div>
                                <input type="email" class="container__form-fill-modify form_email-input container__form-fill-modify--full-width" placeholder="Email" id="email" name="email" autocomplete="off" required> 
                            </div>
                            
                            <div class="form__checkbox">
                                <input type="checkbox" class="form__checkbox-checked" id="form__checkbox-checked" name="checkox" required>
                                <label for="form__checkbox-checked" class="form__checkbox-description">I agree to all Term, Privacy Policy and Fees</label>
                            </div>
    
                            <div class="form__sign-up">
                                <button  class="form__sign-up-btn" name="register" >Sign Up</button>
                            </div>
                        </div>
    
    
                    </div>
                    
                    <div class="container__footer">
                        <h3 class="container__footer-h3">Already have an account? <span><a href="index.php">Login?</a></span></h3>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>