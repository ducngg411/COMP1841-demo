<?php
include 'includes/DatabaseConnection.php';
include 'includes/DatabaseFunctions.php';

// $count = getCountById($pdo, $count);

$modules_id = $_GET['modules_id'] ?? null;
if (!$modules_id) {
    header("Location: modules_show.php");
    exit();
}

// Fetch current data
$sql = "SELECT * FROM modules WHERE modules_id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$modules_id]);
$modules = $stmt->fetch(PDO::FETCH_ASSOC);
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
                                <a href="modules_show.php">Modules Manage</a>
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
                <div class="container-wrap">
                    <form action="edit_modules.php" method="post" class="container-wrap-personal" >
                        <div class="contact-info-header">
                            <h1>Edit Modules</h1>
                        </div>

                        <div class="contact-info-header">
                            <h3>Fill the information below to edit modules</h3>
                        </div>

                        <div class="modules-info-body">
                        <input type="hidden" name="modules_id" value="<?php echo $modules['modules_id']; ?>">

                            <div class="body-modify body-modify--modules">
                                <div class="label-change label-change--modules">
                                    <label for="modules_name">Modules Name</label> <br>
                                </div>
                                <input type="text" name="modules_name" placeholder="" value="<?php echo $modules['modules_name'];?>">
                            </div>
    
                            <div class="body-modify body-modify--modules">
                                <div class="label-change label-change--modules">
                                    <label for="modules_description">Modules Description</label> <br>
                                </div>
                                <input type="text" name="modules_description" placeholder="" value="<?php echo $modules['modules_description'];?>">
                            </div>
    
                            <div class="body-modify body-modify--modules">
                                <div class="label-change label-change--modules">
                                    <label for="create_time">Create Time</label> <br>
                                </div>
                                <input type="datetime-local" name="create_time" placeholder="" value="<?php echo $modules['create_time'];?>">>
                            </div>
                            
                            <div class="container-personal-info">
                                <div class="info-footer-btn info-footer-btn--modules">
                                    <div class="button-modify button-modify-border-change">
                                        <a href="modules_show.php">
                                            <button name="cancel">Cancel</button>
                                        </a>
                                    </div>
    
                                    <div class="button-modify button-modify-hover">
                                        <button type="submit">Update Modules</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>