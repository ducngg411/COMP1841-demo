<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevTrek. Admin Site</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/profile.css">

    <link rel="shortcut icon" type="image/x-icon" href="logo/fav.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <script src="home.js"></script>
</head> 
<body>
    <div class="home_page">
        <div class="grid">
            <header class="home__header home__header-profile-change">
                <nav class="home__navbar">
                    <ul class="home__navbar-list">
                        <li class="home__navbar-list-logo">
                            <img src="assets/img/admin (4).png" alt="" class="home__navbar-list-logo-img">
                        </li>

                        <ul class="home__navbar-funtion">
                            <li class="admin-function">
                                <a href="students_show.php">Students Manage</a>
                            </li>
    
                            <li class="admin-function">
                                <a href="">Modules Manage</a>
                            </li>
    
                            <li class="admin-function">
                                <a href="">Questions Manage</a>
                            </li>
    
                            <li class="admin-function">
                                <a href="">Feedback Receive</a>
                            </li>
                        </ul>
                    </ul>

                    <div class="home__navbar-checkin">
                        <div class="home_navbar-success">
                            <img src="assets/img/avttest.jpg" alt="avt" width="50px" height="50px" style="border-radius: 50px; border: 1px solid rgb(238, 225, 225);;">
                        </div>

                        <div class="home_navbar-success">
                            <div href="" class="navbar-success-welcome-name">
                                Hi, <span>
                                    DevTrek. Admin
                                </span>
                            </div>

                            <ul class="navbar-success-welcome-menu">
                                <button class="success-welcome-menu-modify">Edit</button>

                                <li class="success-welcome-menu-list success-welcome-menu-list--sign-out">
                                    <hr class="sign-out-split">
                                    <div class="sign-out-combo">
                                        <i class="fa-solid fa-right-from-bracket"></i>
                                        <a href="logout.php" class="welcome-menu-list-text welcome-menu-list-text--sign-out">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>


            <div class="container__content">
                <div class="container-wrap">
                    <form action="add_students.php" method="post" class="container-wrap-personal" >
                        <div class="contact-info-header">
                            <h1>Contact Info</h1>
                        </div>

                        <div class="contact-info-header">
                            <h3>Manage your contact information</h3>
                        </div>

                        <div class="contact-info-body">
                            <div class="flex-split-info">
                                <div class="body-modify">
                                    <div class="label-change">
                                        <label for="firstname">First Name</label> <br>
                                    </div>
                                    <input type="text" name="firstname" placeholder="" >
                                </div>

                                <div class="body-modify">
                                    <div class="label-change">
                                        <label for="lastname">Last Name</label> <br>
                                    </div>
                                    <input type="text" name="lastname" placeholder="" >
                                </div>
                            </div>

                            <div class="flex-split-info">
                                <div class="body-modify">
                                    <div class="label-change">
                                        <label for="username">Username</label> <br>
                                    </div>
                                    <input type="text" name="username" placeholder="" >
                                </div>

                                <div class="body-modify">
                                    <div class="label-change">
                                        <label for="password">Password</label> <br>
                                    </div>
                                    <input type="password" name="password" placeholder="" >
                                </div>
                            </div>

                            <div class="flex-split-info">
                                <div class="body-modify">
                                    <div class="label-change">
                                        <label for="displayname">Display Name</label> <br>
                                    </div>
                                    <input type="text" name="displayname" placeholder="" >
                                </div>

                                <div class="body-modify">
                                    <div class="label-change">
                                        <label for="dob">Date Of Birth</label> <br>
                                    </div>
                                    <input type="text" name="dob" placeholder="YYYY-MM-DD" >
                                </div>
                            </div>  

                            <div class="flex-split-info">
                                <div class="body-modify">
                                    <div class="label-change">
                                        <label for="phone">Phone</label> <br>
                                    </div>
                                    <input type="text" name="phone" placeholder="0377xxxxx" >
                                </div>

                                <div class="body-modify">
                                    <div class="label-change">
                                        <label for="email">Email</label> <br>
                                    </div>
                                    <input type="email" name="email" placeholder="abc@domain.com" >
                                </div>
                            </div>  

                        </div>

                        <div class="container-personal-info">
                            <div class="info-footer-btn">
                                <div class="button-modify button-modify-border-change">
                                    <a href="students_show.php">
                                        <button name="cancel">Cancel</button>
                                    </a>
                                </div>

                                <div class="button-modify button-modify-hover">
                                    <button name="submit">Add student</button>
                                </div>
                            </div>
                        </div>
                    </form>