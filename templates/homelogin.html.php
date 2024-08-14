<?php

include '../home_controller.php' 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    
    <link rel="stylesheet" href="../assets/css/home.css">
    <link rel="stylesheet" href="../assets/css/base.css">

    <link rel="shortcut icon" href="../assets/img/favicon (2).ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <script src="home.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            document.getElementById('bookmark_icon').addEventListener('click', function() {
            console.log("icon clicked!");
            document.getElementById('bookmarkForm').submit();
        });
    });
    </script>
</head> 
<body>
    <div class="home_page">
        <div class="grid">
            <header class="home__header">
                <nav class="home__navbar">
                    <ul class="home__navbar-list">
                        <li class="home__navbar-list-logo">
                            <img src="../assets/img/devtrek.png" alt="" class="home__navbar-list-logo-img">
                        </li>
                    </ul>
                    <div class="home__navbar-checkin">
                        <div class="home_navbar-success">
                            <img src="../assets/img/avttest.jpg" alt="avt" width="50px" height="50px" style="border-radius: 50px; border: 1px solid rgb(238, 225, 225);;">
                        </div>
                        <div class="home_navbar-success">
                            <div href="" class="navbar-success-welcome-name">
                                Hi, <span><?php echo htmlspecialchars($member['displayname'])?></span>
                            </div>
                            <ul class="navbar-success-welcome-menu">
                                <li class="success-welcome-menu-list">
                                    <i class="fa-solid fa-user"></i>
                                    <a href="change_profile.html.php" class="welcome-menu-list-text">My profile</a>
                                </li>
                                <li class="success-welcome-menu-list">
                                    <i class="fa-solid fa-bookmark"></i>
                                    <a href="../member/views/my_bookmark.html.php" class="welcome-menu-list-text">My bookmark</a>
                                </li>
                                <li class="success-welcome-menu-list">
                                    <i class="fa-solid fa-file-lines"></i>
                                    <a href="../member/views/my_question.html.php" class="welcome-menu-list-text">My questions</a>
                                </li>
                                <li class="success-welcome-menu-list success-welcome-menu-list--sign-out">
                                    <hr class="sign-out-split">
                                    <div class="sign-out-combo">
                                        <i class="fa-solid fa-right-from-bracket"></i>
                                        <a href="../auth/logout.php" class="welcome-menu-list-text welcome-menu-list-text--sign-out">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>

            <div class="home_banner">
                <div class="home_banner-setting"> 
                    <img src="../assets/img/Untitled design (1).png" alt="banner" class="home__baner-modify">
                </div>
            </div>

            <div class="home_content-bar">
                <ul class="content-bar-container">
                    <li class="content-bar-change">
                        <h3 class="content-bar-change-profile">
                            <a href="change_profile.html.php">PROFILE CHANGE</a>
                        </h3>
                    </li>
                    <li class="content-bar-change">
                        <h3 class="content-bar-modules">
                            <a href="../member/views/modules_show_stu.html.php">MODULES</a>    
                        </h3>
                    </li>
                    <li class="content-bar-change">
                        <h3 class="content-bar-authors">
                            <a href="../member/views/author_show.html.php">AUTHORS</a>    
                        </h3>
                    </li>
                    <li class="content-bar-change">
                        <h3 class="content-bar-authors">
                            <a href="../member/views/my_bookmark.html.php">MY BOOKMARKS</a>    
                        </h3>
                    </li>
                    <li class="content-bar-change">
                        <h3 class="content-bar-authors">
                            <a href="../member/views/my_question.html.php">MY QUESTIONS</a>
                        </h3>
                    </li>

                    <li class="content-bar-change">
                        <h3 class="content-bar-authors">
                            <a href="../member/views/admin_contact.html.php">CONTACT US</a>
                        </h3>
                    </li>
                    
                    <li class="content-bar-change">
                        <h3 class="content-bar-authors">
                            <a href="../auth/admin_check.php">ADMIN SITE</a>
                        </h3>
                    </li>

                </ul>
                <div class="home_content-create-post">
                    <a href="create_question.html.php">
                        <div class="content-create-post">
                            <i class="fa-solid fa-plus create-post-icon"></i>
                            <div href="../create_question.html.php" class="create-post-button">CREATE POST</div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="home_join_community">
                <div class="community-link">
                    <a href="https://www.facebook.com/GreenwichVietnam" target="_blank" class="community-link-insert">
                        Join our Facebook Group "DevTrek. Community" to learn together and connect
                    </a>
                </div>
            </div>

            <div class="container">
                <div class="container-content">
                    <div class="container-content-posts">
                        <?php foreach ($questions as $question): ?>
                            <div class="post-layout">
                                <div class="post-layout-container">
                                    <div class="post-layout-avt">
                                        <img src="../assets/img/avttest.jpg" alt="" class="post-layout-avt-modify">
                                    </div>
                                    <div class="post-layout-content">
                                        <div class="post-layout-content-header">
                                            <div class="header-modify">
                                                <div class="modify-authors">
                                                    <a href="authors_question.html.php?mem_id=<?php echo $question['mem_id']; ?>" class="modify-authors-name">
                                                        <?php echo htmlspecialchars($question['displayname']); ?>
                                                    </a>
                                                </div>
                                                <div class="modify-posting">
                                                    <div class="modify-posting-padding">
                                                        <span class="modify-posting-times">
                                                            <?php echo 'Create at: '. $question['created_at']; ?>
                                                            <?php if (!empty($question['edited_at'])) {
                                                                echo '- Latest modify at: ' . $question['edited_at'];
                                                            }; ?>
                                                        </span>
                                                    </div>
                                                    <div class="modify-posting-padding">
                                                        <hr class="modify-split">
                                                    </div>
                                                    <div class="modify-posting-padding">
                                                        <span class="modify-reading-times">1 min read</span>
                                                    </div>
                                                    <div class="modify-posting-padding">
                                                        <i class="fa-solid fa-book-open-reader modify-icons"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-layout-content-body">
                                            <div class="content-body-title">
                                                <div class="content-body-title-modify">
                                                    <a class="undercoating" href="view_question.html.php?id=<?php echo $question['id']; ?>">
                                                        <?php echo htmlspecialchars($question['title']); ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content-body-title">
                                                <div class="content-body-modules-show">
                                                    <a class="non-text" href="modules_specific.html.php?modules_id=<?php echo $question['modules_id'];?>">
                                                        <?php echo '#'.htmlspecialchars($question['modules_name']); ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-layout-content-footer">
                                            <div class="content-footer-icon">
                                                <div class="footer-icon-views">
                                                    <i class="fa-solid fa-bookmark footer-icon-views-icon-bookmark" id="bookmark_icon"></i>
                                                    <span class="footer-icon-bookmark-count"><?php echo $question['bookmark_count']; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="container-content-quick-view" style="top: 80px; max-height: calc(-88px + 95vh); overflow-y: auto;">
                        <div class="quick-view-header-top">
                            <div class="quick-view-modify">
                                <h2 class="newest-question">NEWEST QUESTIONS</h2>
                                <hr class="newest-question-top quick-view-modify-hr">
                            </div>
                            <?php foreach ($newest_questions as $question): ?>
                                <div class="header-top-content">
                                    <div class="top-content-heading">
                                        <div class="content-heading-modify">
                                            <a class="undercoating undercoating-newest" href="view_question.html.php?id=<?php echo $question['id']; ?>">
                                                <?php echo htmlspecialchars($question['title']); ?>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="top-content-body">
                                        <div class="top-content-body-upvote">
                                            <div class="content-footer-icon">
                                                <div class="footer-icon-views">
                                                    <i class="fa-solid fa-bookmark footer-icon-views-icon-bookmark" id="bookmark_icon"></i>
                                                    <span class="footer-icon-bookmark-count"><?php echo $question['bookmark_count']; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="top-content-author">
                                        <div class="content-author-name">
                                            <div class="author-name-modify">
                                                <a href="authors_question.html.php?mem_id=<?php echo $question['mem_id']; ?>" class="name-modify">
                                                    <?php echo htmlspecialchars($question['displayname']); ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="quick-view-modify">
                            <h2 class="top-authors">TOP AUTHORS</h2>
                            <hr class="newest-question-bottom quick-view-modify-hr">
                        </div>

                        <!-- TOP AUTHORS SCROLL BAR -->
                        <div class="author-container">
                            <?php foreach ($top_authors as $author): ?>
                            <div class="author-container-avt-split">
                                <div class="author-container-avt">
                                    <img src="../assets/img/Blue Red Colorful Good Job Student Stickers (2).png" alt="avt-author" class="container-avt-modify">
                                </div>
                                <div class="author-container-content">
                                    <div class="container-content-modify">
                                        <div class="content-modify">
                                            <a href="authors_question.html.php?mem_id=<?php echo $author['mem_id']; ?>" class="content-modify-name ">
                                                <?php echo htmlspecialchars($author['displayname']); ?>
                                            </a>
                                        </div>
                                        <div class="content-modify">
                                            <div href="" class="content-modify-username">
                                                <?php echo htmlspecialchars('@' . $author['username']); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="author-container-icon">
                                <div class="container-icon-post">
                                    <i class="fa-solid fa-pen icon-post-pen"></i>
                                    <div class="icon-post-count">
                                        <?php echo htmlspecialchars($author['question_count']) . ' questions';  ?>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>

                    </div>
                </div>
            </div>

            <footer class="home_footer">
                <div class="home_footer-container">
                    <div class="footer-container-resources">
                        <div class="container-resources-header">
                            <h3 class="resources-header">RESOURCES</h3>
                        </div>
                        <div class="container-resources-body">
                            <ul class="resources-body">
                                <a href="member/views/my_question.html.php">
                                    <li class="resources-body-questions">Questions</li>
                                </a>
                            </ul>
                            <ul class="resources-body">
                                <a href="member/views/modules_show_stu.html.php">
                                    <li class="resources-body-modules">Modules</li>
                                </a>
                            </ul>
                            <ul class="resources-body">
                                <a href="member/views/author_show.html.php">
                                    <li class="resources-body-autors">Authors</li>
                                </a>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-container-resources">
                        <div class="container-links-header">
                            <div class="links-heading">LINKS</div>
                        </div>
                        <div class="link-icon-modify">
                            <a href="https://www.facebook.com/GreenwichVietnam" class="facebook-link">
                                <i class="fa-brands fa-facebook facebook-link-icon"></i>
                            </a>
                        </div>
                        <div class="link-icon-modify">
                            <a href="https://github.com/ducngg411" class="github-link">
                                <i class="fa-brands fa-github"></i>
                            </a>
                        </div>
                        <div class="link-icon-modify">
                            <a href="" class="chrome-link">
                                <i class="fa-brands fa-chrome"></i>
                            </a>  
                        </div>            
                    </div>
                </div>
                <hr class="footer-split">
                <div class="home_footer-copyright">
                    <p class="copyright">© 2024 <b>DevTrek. by ducngg411</b>. All rights reserved.</p>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>