<?php

include '../../includes/DatabaseConnection.php';
include '../../includes/DatabaseFunctions.php';

$member = getMemberInfo($pdo);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevTrek. Admin Site</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    
    <link rel="stylesheet" href="../../assets/css/home.css">
    <link rel="stylesheet" href="../../assets/css/base.css">
    <link rel="stylesheet" href="../../assets/css/profile.css">

    <link rel="shortcut icon" href="../../assets/img/favicon (2).ico" type="image/x-icon">
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
                            <img src="../../assets/img/admin (4).png" alt="" class="home__navbar-list-logo-img">
                        </li>

                        <ul class="home__navbar-funtion">
                            <li class="admin-function">
                                <a href="students_show.html.php">Students Manage</a>
                            </li>
    
                            <li class="admin-function">
                                <a href="modules_show.html.php">Modules Manage</a>
                            </li>
    
                            <li class="admin-function">
                                <a href="question_manage.html.php">Questions Manage</a>
                            </li>
    
                            <li class="admin-function">
                                <a href="https://mail.google.com/mail/u/1/#inbox" target="_blank">Feedback Receive</a>
                            </li>

                            <li class="admin-function">
                                <a href="../../templates/homelogin.html.php">Switch To User Page</a>
                            </li>
                        </ul>
                    </ul>

                    <div class="home__navbar-checkin">
                        <div class="home_navbar-success">
                            <img src="../../assets/img/avttest.jpg" alt="avt" width="50px" height="50px" style="border-radius: 50px; border: 1px solid rgb(238, 225, 225);;">
                        </div>

                        <div class="home_navbar-success">
                            <div href="" class="navbar-success-welcome-name">
                                Hi, <span>
                                    <?php echo htmlspecialchars($member['displayname']) ?>
                                </span>
                            </div>

                            <ul class="navbar-success-welcome-menu">
                                <button class="success-welcome-menu-modify">
                                    <a href="../../templates/change_profile.html.php">
                                        Edit
                                    </a>
                                </button>

                                <li class="success-welcome-menu-list success-welcome-menu-list--sign-out">
                                    <hr class="sign-out-split">
                                    <div class="sign-out-combo">
                                        <i class="fa-solid fa-right-from-bracket"></i>
                                        <a href="../../auth/logout.php" class="welcome-menu-list-text welcome-menu-list-text--sign-out">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>


            <div class="container__content" >
                <div class="container-wrap">
                    <form action="../add_modules.php" method="post" class="container-wrap-personal" >
                        <div class="contact-info-header">
                            <h1>Add New Modules</h1>
                        </div>

                        <div class="contact-info-header">
                            <h3>Fill the information below to add a new modules</h3>
                        </div>


                        <div class="body-modify body-modify--modules">
                            <div class="label-change label-change--modules">
                                <label for="modules_name">Modules Name</label> <br>
                            </div>
                            <input type="text" name="modules_name" placeholder="" >
                        </div>

                        <div class="body-modify body-modify--modules">
                            <div class="label-change label-change--modules">
                                <label for="modules_description">Modules Description</label> <br>
                            </div>
                            <input type="textarea" name="modules_description" placeholder="" >
                        </div>

                        <div class="body-modify body-modify--modules">
                            <div class="label-change label-change--modules">
                                <label for="create_time">Create Time</label> <br>
                            </div>
                            <input type="datetime-local" name="create_time" placeholder="" >
                        </div>
                        
                        <div class="container-personal-info">
                            <div class="info-footer-btn info-footer-btn--modules">
                                <div class="button-modify button-modify-border-change button-modify-a">
                                    <a href="modules_show.html.php" class="button-modify" role="button">Cancel</a>
                                </div>

                                <div class="button-modify button-modify-hover">
                                    <button name="submit">Add Modules</button>
                                </div>
                            </div>
                        </div>
                    </form>