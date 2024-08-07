<?php 

include 'includes/DatabaseConnection.php';
include 'includes/DatabaseFunctions.php';

$member = getMemberInfo($pdo);

?>


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

    <link rel="shortcut icon" href="assets/img/favicon (2).ico" type="image/x-icon">
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
                                <a href="modules_show.php">Modules Manage</a>
                            </li>
    
                            <li class="admin-function">
                                <a href="question_manage.php">Questions Manage</a>
                            </li>
    
                            <li class="admin-function">
                                <a href="">Feedback Receive</a>
                            </li>

                            <li class="admin-function">
                                <a href="homelogin.php">Switch To User Page</a>
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
                                    <?php echo htmlspecialchars($member['displayname']) ?>
                                </span>
                            </div>

                            <ul class="navbar-success-welcome-menu">
                                <button class="success-welcome-menu-modify">
                                    <a href="change_profile.php">
                                        Edit
                                    </a>
                                </button>

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
                <main class="container-right">
                    <div class="container-home">
                        <div class="container-home-welcome">
                            <div class="home-welcome-avt">
                                <img src="assets/img/avttest.jpg" alt="avt-change" width="100px" height="100px" style="border: 1px solid  rgb(238, 225, 225); border-radius: 50px;">
                                <h1 class="">Welcome, <?php echo htmlspecialchars($member['displayname']) ?></h1>
                                <p>Manage information with DevTrek. Admin</p>
                            </div>
                        </div>
                    </div>
                </main>
            </div>