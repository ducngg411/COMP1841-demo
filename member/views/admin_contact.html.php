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
    <title>Edit Your Question</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="../../assets/css/home.css">
    <link rel="stylesheet" href="../../assets/css/base.css">
    <link rel="stylesheet" href="../../assets/css/question.css">
    <link rel="stylesheet" href="../../assets/css/header.css">
    <link rel="shortcut icon" href="../../assets/img/favicon (2).ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="home.js"></script>
</head> 
<body>
    <div class="home_page">
        <div class="grid">
            <header class="home__header">
                <nav class="home__navbar">
                    <ul class="home__navbar-list">
                        <li class="home__navbar-list-logo">
                            <img src="../../assets/img/devtrek.png" alt="" class="home__navbar-list-logo-img">
                        </li>

                        <ul class="home__navbar-funtion">
                            <li class="admin-function">
                                <a href="../../templates/homelogin.html.php">Home Page</a>
                            </li>
    
                            <li class="admin-function">
                                <a href="modules_show_stu.html.php">Modules</a>
                            </li>
    
                            <li class="admin-function">
                                <a href="author_show.html.php">Author</a>
                            </li>

                            <li class="admin-function">
                                <a href="my_bookmark.html.php">My Bookmarks</a>
                            </li>

                            <li class="admin-function">
                                <a href="my_question.html.php">My Questions</a>
                            </li>

                            <li class="admin-function">
                                <a href="admin_contact.html.php">Contact Us</a>
                            </li>
                        </ul>
                    </ul>

                    <div class="home__navbar-checkin">
                        <div class="home_navbar-success">
                            <img src="../../assets/img/avttest.jpg" alt="avt" width="50px" height="50px" style="border-radius: 50px; border: 1px solid rgb(238, 225, 225);">
                        </div>

                        <div class="home_navbar-success">
                            <div href="" class="navbar-success-welcome-name">
                                Hi, <span><?php echo htmlspecialchars($member['displayname'])?></span>
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

            <div class="container__content container__content--create-questions">
                <div class="container-wrap container-wrap--create-questions">
                    <form action="../../mail/send_mail.php" method="POST" class="container-wrap-personal container-wrap-personal-question" enctype="multipart/form-data">
                        <div class="contact-info-header">
                            <h1>Contact Us</h1>
                        </div>

                        <div class="contact-info-header contact-info-header--msg">
                            <div class="icon_heart">
                                <i class="fa-solid fa-heart-circle-check"></i>
                            </div>
                            <h3>We value your feedback and are here to assist you with any inquiries or suggestions. Your input helps us improve and provide better services. Please fill out the form below, and our team will get back to you as soon as possible.</h3>
                        </div>

                        <div class="body-modify body-modify--modules">
                            <div class="label-change label-change--modules">
                                <label for="email">Your Email <span style="font-style: italic;">( We will use this mail to respond to you!)</span></label> <br>
                            </div>
                            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($member['email']) ?>">
                        </div>

                        <div class="body-modify body-modify--modules">
                            <div class="label-change label-change--modules">
                                <label for="fullname">Your Name</label> <br>
                            </div>
                            <input type="text" id="fullname" name="fullname" value="<?php echo htmlspecialchars($member['displayname']) ?>">
                        </div>

                        <div class="body-modify body-modify--modules">
                            <div class="label-change label-change--modules">
                                <label for="title">Title <span style="font-style: italic;">( A short description about your problem)</span></label> <br>
                            </div>
                            <input type="text" id="title" name="title" required>
                        </div>

                        <div class="body-modify body-modify--modules">
                            <div class="label-change label-change--modules">
                                <label for="description">Description <span style="font-style: italic;">( More details about your problem)</span></label> <br>
                            </div>
                            <pre><textarea id="description" name="description" rows="5" required></textarea></pre>
                        </div>

                        <div class="body-modify body-modify--modules">
                            <div class="label-change label-change--modules">
                                <label for="attachment">Add an image</label> <br>
                            </div>
                            <input type="file" id="attachment" name="attachment" accept="image/*">
                        </div>

                        <div class="container-personal-info">
                            <div class="info-footer-btn">
                                <div class="button-modify button-modify-border-change button-modify-a">
                                    <a href="../../homelogin.html.php" class="button-modify-question" role="button">Cancel</a>
                                </div>

                                <div class="button-modify button-modify-hover">
                                    <button type="submit" name="submit_mail">Send Email</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
