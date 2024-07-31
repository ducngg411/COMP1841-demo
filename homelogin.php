
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/base.css">

    <link rel="shortcut icon" type="image/x-icon" href="logo/fav.png">
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
                            <img src="assets/img/devtrek.png" alt="" class="home__navbar-list-logo-img">
                        </li>
    
                    </ul>

                    <!-- <div class="home__navbar-resources">
                        <div class="home__navbar-padding">
                            <div class="navbar__resources-left">
                                <a href="" class="navbar__resources navbar__resources-post">Posts</a>
                            </div>
    
                            <div class="navbar__resources-right">
                                <a href="" class="navbar__resources navbar__resources-questions">Questions</a>
                            </div>
                        </div>
                    </div> -->
                    


                    <div class="home__navbar-search">
                        <div class="navbar__search-input">
                            <input type="text" name="" id="" placeholder="Search DevTrek." class="navbar__search-input-modify">
                        </div>

                        <button class="navbar__search-icon">
                            <i class="fa-solid fa-magnifying-glass navbar__search-icon-modify" ></i>
                        </button>
                    </div>

                    <div class="home__navbar-checkin">
                        <div class="home_navbar-success">
                            <img src="assets/img/avttest.jpg" alt="avt" width="50px" height="50px" style="border-radius: 50px; border: 1px solid rgb(238, 225, 225);;">
                        </div>

                        <div class="home_navbar-success">
                            <div href="" class="navbar-success-welcome-name">
                                Hi, <span>
                                    Duc Nguyen
                                </span>
                            </div>

                            <ul class="navbar-success-welcome-menu">
                                <li class="success-welcome-menu-list">
                                    <i class="fa-solid fa-user"></i>
                                    <a href="" class="welcome-menu-list-text">My profile</a>
                                </li>
                                <li class="success-welcome-menu-list">
                                    <i class="fa-solid fa-bookmark"></i>
                                    <a href="" class="welcome-menu-list-text">My bookmark</a>
                                </li>
                                <li class="success-welcome-menu-list">
                                    <i class="fa-solid fa-file-lines"></i>
                                    <a href="" class="welcome-menu-list-text">My posts</a>
                                </li>
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

            <div class="home_banner">
                <div class="home_banner-setting"> 
                    <img src="assets/img/Untitled design (1).png" alt="banner" class="home__baner-modify">
                </div>
            </div>

            <div class="home_content-bar">
                <ul class="content-bar-container">
                    <li class="content-bar-change">
                        <h3 class="content-bar-change-profile">PROFILE CHANGE</h3>
                    </li>

                    <li class="content-bar-change">
                        <h3 class="content-bar-modules">MODULES</h3>
                    </li>

                    <li class="content-bar-change">
                        <h3 class="content-bar-authors">AUTHORS</h3>
                    </li>

                    <li class="content-bar-change">
                        <h3 class="content-bar-authors">MY BOOKMARKS</h3>
                    </li>

                    <li class="content-bar-change">
                        <h3 class="content-bar-authors">QUESTIONS</h3>
                    </li>
                </ul>

                <div class="home_content-create-post">
                    <div class="content-create-post">
                        <i class="fa-solid fa-plus create-post-icon"></i>
                        <a href="" class="create-post-button">CREATE POST</a>
                    </div>
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
                        <div class="layout-switcher">
                            <div class="layout-switcher-modify">
                                <i class="fa-solid fa-list" title="Only title" id="only-title"></i>
                            </div>

                            <div class="layout-switcher-modify">
                                <i class="fa-solid fa-newspaper" title="With Preview Contents" id="preview-contents"></i>
                            </div>
                        </div>

                        <div class="post-layout">
                            <div class="post-layout-container">
                                <div class="post-layout-avt">
                                    <img src="assets/img/avttest.jpg" alt="" class="post-layout-avt-modify">
                                </div>

                                <div class="post-layout-content">
                                    <div class="post-layout-content-header">
                                        <div class="header-modify">
                                            <div class="modify-authors">
                                                <a href="" class="modify-authors-name">Đức Nguyễn</a>
                                            </div>

                                            <div class="modify-posting">
                                                <div class="modify-posting-padding">
                                                    <span class="modify-posting-times">
                                                        28 munites ago
                                                    </span>
                                                </div>

                                                <div class="modify-posting-padding">
                                                    <hr class="modify-split">
                                                </div>

                                                <div class="modify-posting-padding">
                                                    <span class="modify-reading-times">
                                                        1 min read
                                                    </span>
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
                                                How to say Hello in Vietnamese?
                                            </div>
                                        </div>

                                        <div class="content-body-title">
                                            <div class="content-body-modules-show">
                                                #Basic Python
                                            </div>
                                        </div>
                                    </div>

                                    <div class="post-layout-content-footer">
                                        <div class="content-footer-icon">
                                            <div class="footer-icon-views">
                                                <div class="footer-icon-title" title="View">

                                                    <i class="fa-solid fa-eye footer-icon-views-icon"></i>
                                                    <span class="footer-icon-views-count">99</span>
                                                </div>
                                            </div>

                                            <div class="footer-icon-views">
                                                <i class="fa-solid fa-bookmark footer-icon-views-icon-bookmark"></i>
                                                <span class="footer-icon-bookmark-count">66</span>
                                            </div>
                                        </div>

                                        <div class="content-footer-upvote">
                                            <div class="footer-upvote-icon">
                                                <div class="footer-upvote-modify">
                                                    <i class="fa-solid fa-caret-up footer-upvote-modify-up"></i>
                                                </div>

                                                <div class="footer-upvote-modify">
                                                    <i class="fa-solid fa-caret-down footer-upvote-modify-down"></i>
                                                </div>
                                            </div>

                                            <div class="footer-upvote-count">
                                                6
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="post-layout">
                            <div class="post-layout-container">
                                <div class="post-layout-avt">
                                    <img src="assets/img/avttest.jpg" alt="" class="post-layout-avt-modify">
                                </div>

                                <div class="post-layout-content">
                                    <div class="post-layout-content-header">
                                        <div class="header-modify">
                                            <div class="modify-authors">
                                                <a href="" class="modify-authors-name">Đức Nguyễn</a>
                                            </div>

                                            <div class="modify-posting">
                                                <div class="modify-posting-padding">
                                                    <span class="modify-posting-times">
                                                        28 munites ago
                                                    </span>
                                                </div>

                                                <div class="modify-posting-padding">
                                                    <hr class="modify-split">
                                                </div>

                                                <div class="modify-posting-padding">
                                                    <span class="modify-reading-times">
                                                        1 min read
                                                    </span>
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
                                                How to say Hello in Vietnamese?
                                            </div>
                                        </div>

                                        <div class="content-body-title">
                                            <div class="content-body-modules-show">
                                                #Basic Python
                                            </div>
                                        </div>
                                    </div>

                                    <div class="post-layout-content-footer">
                                        <div class="content-footer-icon">
                                            <div class="footer-icon-views">
                                                <div class="footer-icon-title" title="View">

                                                    <i class="fa-solid fa-eye footer-icon-views-icon"></i>
                                                    <span class="footer-icon-views-count">99</span>
                                                </div>
                                            </div>

                                            <div class="footer-icon-views">
                                                <i class="fa-solid fa-bookmark footer-icon-views-icon-bookmark"></i>
                                                <span class="footer-icon-bookmark-count">66</span>
                                            </div>
                                        </div>

                                        <div class="content-footer-upvote">
                                            <div class="footer-upvote-icon">
                                                <div class="footer-upvote-modify">
                                                    <i class="fa-solid fa-caret-up footer-upvote-modify-up"></i>
                                                </div>

                                                <div class="footer-upvote-modify">
                                                    <i class="fa-solid fa-caret-down footer-upvote-modify-down"></i>
                                                </div>
                                            </div>

                                            <div class="footer-upvote-count">
                                                6
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="post-layout">
                            <div class="post-layout-container">
                                <div class="post-layout-avt">
                                    <img src="assets/img/avttest.jpg" alt="" class="post-layout-avt-modify">
                                </div>

                                <div class="post-layout-content">
                                    <div class="post-layout-content-header">
                                        <div class="header-modify">
                                            <div class="modify-authors">
                                                <a href="" class="modify-authors-name">Đức Nguyễn</a>
                                            </div>

                                            <div class="modify-posting">
                                                <div class="modify-posting-padding">
                                                    <span class="modify-posting-times">
                                                        28 munites ago
                                                    </span>
                                                </div>

                                                <div class="modify-posting-padding">
                                                    <hr class="modify-split">
                                                </div>

                                                <div class="modify-posting-padding">
                                                    <span class="modify-reading-times">
                                                        1 min read
                                                    </span>
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
                                                How to say Hello in Vietnamese?
                                            </div>
                                        </div>

                                        <div class="content-body-title">
                                            <div class="content-body-modules-show">
                                                #Basic Python
                                            </div>
                                        </div>
                                    </div>

                                    <div class="post-layout-content-footer">
                                        <div class="content-footer-icon">
                                            <div class="footer-icon-views">
                                                <div class="footer-icon-title" title="View">

                                                    <i class="fa-solid fa-eye footer-icon-views-icon"></i>
                                                    <span class="footer-icon-views-count">99</span>
                                                </div>
                                            </div>

                                            <div class="footer-icon-views">
                                                <i class="fa-solid fa-bookmark footer-icon-views-icon-bookmark"></i>
                                                <span class="footer-icon-bookmark-count">66</span>
                                            </div>
                                        </div>

                                        <div class="content-footer-upvote">
                                            <div class="footer-upvote-icon">
                                                <div class="footer-upvote-modify">
                                                    <i class="fa-solid fa-caret-up footer-upvote-modify-up"></i>
                                                </div>

                                                <div class="footer-upvote-modify">
                                                    <i class="fa-solid fa-caret-down footer-upvote-modify-down"></i>
                                                </div>
                                            </div>

                                            <div class="footer-upvote-count">
                                                6
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="post-layout">
                            <div class="post-layout-container">
                                <div class="post-layout-avt">
                                    <img src="assets/img/avttest.jpg" alt="" class="post-layout-avt-modify">
                                </div>

                                <div class="post-layout-content">
                                    <div class="post-layout-content-header">
                                        <div class="header-modify">
                                            <div class="modify-authors">
                                                <a href="" class="modify-authors-name">Đức Nguyễn</a>
                                            </div>

                                            <div class="modify-posting">
                                                <div class="modify-posting-padding">
                                                    <span class="modify-posting-times">
                                                        28 munites ago
                                                    </span>
                                                </div>

                                                <div class="modify-posting-padding">
                                                    <hr class="modify-split">
                                                </div>

                                                <div class="modify-posting-padding">
                                                    <span class="modify-reading-times">
                                                        1 min read
                                                    </span>
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
                                                How to say Hello in Vietnamese?
                                            </div>
                                        </div>

                                        <div class="content-body-title">
                                            <div class="content-body-modules-show">
                                                #Basic Python
                                            </div>
                                        </div>
                                    </div>

                                    <div class="post-layout-content-footer">
                                        <div class="content-footer-icon">
                                            <div class="footer-icon-views">
                                                <div class="footer-icon-title" title="View">

                                                    <i class="fa-solid fa-eye footer-icon-views-icon"></i>
                                                    <span class="footer-icon-views-count">99</span>
                                                </div>
                                            </div>

                                            <div class="footer-icon-views">
                                                <i class="fa-solid fa-bookmark footer-icon-views-icon-bookmark"></i>
                                                <span class="footer-icon-bookmark-count">66</span>
                                            </div>
                                        </div>

                                        <div class="content-footer-upvote">
                                            <div class="footer-upvote-icon">
                                                <div class="footer-upvote-modify">
                                                    <i class="fa-solid fa-caret-up footer-upvote-modify-up"></i>
                                                </div>

                                                <div class="footer-upvote-modify">
                                                    <i class="fa-solid fa-caret-down footer-upvote-modify-down"></i>
                                                </div>
                                            </div>

                                            <div class="footer-upvote-count">
                                                6
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-layout">
                            <div class="post-layout-container">
                                <div class="post-layout-avt">
                                    <img src="assets/img/avttest.jpg" alt="" class="post-layout-avt-modify">
                                </div>

                                <div class="post-layout-content">
                                    <div class="post-layout-content-header">
                                        <div class="header-modify">
                                            <div class="modify-authors">
                                                <a href="" class="modify-authors-name">Đức Nguyễn</a>
                                            </div>

                                            <div class="modify-posting">
                                                <div class="modify-posting-padding">
                                                    <span class="modify-posting-times">
                                                        28 munites ago
                                                    </span>
                                                </div>

                                                <div class="modify-posting-padding">
                                                    <hr class="modify-split">
                                                </div>

                                                <div class="modify-posting-padding">
                                                    <span class="modify-reading-times">
                                                        1 min read
                                                    </span>
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
                                                How to say Hello in Vietnamese?
                                            </div>
                                        </div>

                                        <div class="content-body-title">
                                            <div class="content-body-modules-show">
                                                #Basic Python
                                            </div>
                                        </div>
                                    </div>

                                    <div class="post-layout-content-footer">
                                        <div class="content-footer-icon">
                                            <div class="footer-icon-views">
                                                <div class="footer-icon-title" title="View">

                                                    <i class="fa-solid fa-eye footer-icon-views-icon"></i>
                                                    <span class="footer-icon-views-count">99</span>
                                                </div>
                                            </div>

                                            <div class="footer-icon-views">
                                                <i class="fa-solid fa-bookmark footer-icon-views-icon-bookmark"></i>
                                                <span class="footer-icon-bookmark-count">66</span>
                                            </div>
                                        </div>

                                        <div class="content-footer-upvote">
                                            <div class="footer-upvote-icon">
                                                <div class="footer-upvote-modify">
                                                    <i class="fa-solid fa-caret-up footer-upvote-modify-up"></i>
                                                </div>

                                                <div class="footer-upvote-modify">
                                                    <i class="fa-solid fa-caret-down footer-upvote-modify-down"></i>
                                                </div>
                                            </div>

                                            <div class="footer-upvote-count">
                                                6
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="post-layout">
                            <div class="post-layout-container">
                                <div class="post-layout-avt">
                                    <img src="assets/img/avttest.jpg" alt="" class="post-layout-avt-modify">
                                </div>

                                <div class="post-layout-content">
                                    <div class="post-layout-content-header">
                                        <div class="header-modify">
                                            <div class="modify-authors">
                                                <a href="" class="modify-authors-name">Đức Nguyễn</a>
                                            </div>

                                            <div class="modify-posting">
                                                <div class="modify-posting-padding">
                                                    <span class="modify-posting-times">
                                                        28 munites ago
                                                    </span>
                                                </div>

                                                <div class="modify-posting-padding">
                                                    <hr class="modify-split">
                                                </div>

                                                <div class="modify-posting-padding">
                                                    <span class="modify-reading-times">
                                                        1 min read
                                                    </span>
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
                                                How to say Hello in Vietnamese?
                                            </div>
                                        </div>

                                        <div class="content-body-title">
                                            <div class="content-body-modules-show">
                                                #Basic Python
                                            </div>
                                        </div>
                                    </div>

                                    <div class="post-layout-content-footer">
                                        <div class="content-footer-icon">
                                            <div class="footer-icon-views">
                                                <div class="footer-icon-title" title="View">

                                                    <i class="fa-solid fa-eye footer-icon-views-icon"></i>
                                                    <span class="footer-icon-views-count">99</span>
                                                </div>
                                            </div>

                                            <div class="footer-icon-views">
                                                <i class="fa-solid fa-bookmark footer-icon-views-icon-bookmark"></i>
                                                <span class="footer-icon-bookmark-count">66</span>
                                            </div>
                                        </div>

                                        <div class="content-footer-upvote">
                                            <div class="footer-upvote-icon">
                                                <div class="footer-upvote-modify">
                                                    <i class="fa-solid fa-caret-up footer-upvote-modify-up"></i>
                                                </div>

                                                <div class="footer-upvote-modify">
                                                    <i class="fa-solid fa-caret-down footer-upvote-modify-down"></i>
                                                </div>
                                            </div>

                                            <div class="footer-upvote-count">
                                                6
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="post-layout">
                            <div class="post-layout-container">
                                <div class="post-layout-avt">
                                    <img src="assets/img/avttest.jpg" alt="" class="post-layout-avt-modify">
                                </div>

                                <div class="post-layout-content">
                                    <div class="post-layout-content-header">
                                        <div class="header-modify">
                                            <div class="modify-authors">
                                                <a href="" class="modify-authors-name">Đức Nguyễn</a>
                                            </div>

                                            <div class="modify-posting">
                                                <div class="modify-posting-padding">
                                                    <span class="modify-posting-times">
                                                        28 munites ago
                                                    </span>
                                                </div>

                                                <div class="modify-posting-padding">
                                                    <hr class="modify-split">
                                                </div>

                                                <div class="modify-posting-padding">
                                                    <span class="modify-reading-times">
                                                        1 min read
                                                    </span>
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
                                                How to say Hello in Vietnamese?
                                            </div>
                                        </div>

                                        <div class="content-body-title">
                                            <div class="content-body-modules-show">
                                                #Basic Python
                                            </div>
                                        </div>
                                    </div>

                                    <div class="post-layout-content-footer">
                                        <div class="content-footer-icon">
                                            <div class="footer-icon-views">
                                                <div class="footer-icon-title" title="View">

                                                    <i class="fa-solid fa-eye footer-icon-views-icon"></i>
                                                    <span class="footer-icon-views-count">99</span>
                                                </div>
                                            </div>

                                            <div class="footer-icon-views">
                                                <i class="fa-solid fa-bookmark footer-icon-views-icon-bookmark"></i>
                                                <span class="footer-icon-bookmark-count">66</span>
                                            </div>
                                        </div>

                                        <div class="content-footer-upvote">
                                            <div class="footer-upvote-icon">
                                                <div class="footer-upvote-modify">
                                                    <i class="fa-solid fa-caret-up footer-upvote-modify-up"></i>
                                                </div>

                                                <div class="footer-upvote-modify">
                                                    <i class="fa-solid fa-caret-down footer-upvote-modify-down"></i>
                                                </div>
                                            </div>

                                            <div class="footer-upvote-count">
                                                6
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="post-layout">
                            <div class="post-layout-container">
                                <div class="post-layout-avt">
                                    <img src="assets/img/avttest.jpg" alt="" class="post-layout-avt-modify">
                                </div>

                                <div class="post-layout-content">
                                    <div class="post-layout-content-header">
                                        <div class="header-modify">
                                            <div class="modify-authors">
                                                <a href="" class="modify-authors-name">Đức Nguyễn</a>
                                            </div>

                                            <div class="modify-posting">
                                                <div class="modify-posting-padding">
                                                    <span class="modify-posting-times">
                                                        28 munites ago
                                                    </span>
                                                </div>

                                                <div class="modify-posting-padding">
                                                    <hr class="modify-split">
                                                </div>

                                                <div class="modify-posting-padding">
                                                    <span class="modify-reading-times">
                                                        1 min read
                                                    </span>
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
                                                How to say Hello in Vietnamese?
                                            </div>
                                        </div>

                                        <div class="content-body-title">
                                            <div class="content-body-modules-show">
                                                #Basic Python
                                            </div>
                                        </div>
                                    </div>

                                    <div class="post-layout-content-footer">
                                        <div class="content-footer-icon">
                                            <div class="footer-icon-views">
                                                <div class="footer-icon-title" title="View">

                                                    <i class="fa-solid fa-eye footer-icon-views-icon"></i>
                                                    <span class="footer-icon-views-count">99</span>
                                                </div>
                                            </div>

                                            <div class="footer-icon-views">
                                                <i class="fa-solid fa-bookmark footer-icon-views-icon-bookmark"></i>
                                                <span class="footer-icon-bookmark-count">66</span>
                                            </div>
                                        </div>

                                        <div class="content-footer-upvote">
                                            <div class="footer-upvote-icon">
                                                <div class="footer-upvote-modify">
                                                    <i class="fa-solid fa-caret-up footer-upvote-modify-up"></i>
                                                </div>

                                                <div class="footer-upvote-modify">
                                                    <i class="fa-solid fa-caret-down footer-upvote-modify-down"></i>
                                                </div>
                                            </div>

                                            <div class="footer-upvote-count">
                                                6
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="post-layout">
                            <div class="post-layout-container">
                                <div class="post-layout-avt">
                                    <img src="assets/img/avttest.jpg" alt="" class="post-layout-avt-modify">
                                </div>

                                <div class="post-layout-content">
                                    <div class="post-layout-content-header">
                                        <div class="header-modify">
                                            <div class="modify-authors">
                                                <a href="" class="modify-authors-name">Đức Nguyễn</a>
                                            </div>

                                            <div class="modify-posting">
                                                <div class="modify-posting-padding">
                                                    <span class="modify-posting-times">
                                                        28 munites ago
                                                    </span>
                                                </div>

                                                <div class="modify-posting-padding">
                                                    <hr class="modify-split">
                                                </div>

                                                <div class="modify-posting-padding">
                                                    <span class="modify-reading-times">
                                                        1 min read
                                                    </span>
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
                                                How to say Hello in Vietnamese?
                                            </div>
                                        </div>

                                        <div class="content-body-title">
                                            <div class="content-body-modules-show">
                                                #Basic Python
                                            </div>
                                        </div>
                                    </div>

                                    <div class="post-layout-content-footer">
                                        <div class="content-footer-icon">
                                            <div class="footer-icon-views">
                                                <div class="footer-icon-title" title="View">

                                                    <i class="fa-solid fa-eye footer-icon-views-icon"></i>
                                                    <span class="footer-icon-views-count">99</span>
                                                </div>
                                            </div>

                                            <div class="footer-icon-views">
                                                <i class="fa-solid fa-bookmark footer-icon-views-icon-bookmark"></i>
                                                <span class="footer-icon-bookmark-count">66</span>
                                            </div>
                                        </div>

                                        <div class="content-footer-upvote">
                                            <div class="footer-upvote-icon">
                                                <div class="footer-upvote-modify">
                                                    <i class="fa-solid fa-caret-up footer-upvote-modify-up"></i>
                                                </div>

                                                <div class="footer-upvote-modify">
                                                    <i class="fa-solid fa-caret-down footer-upvote-modify-down"></i>
                                                </div>
                                            </div>

                                            <div class="footer-upvote-count">
                                                6
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="post-layout">
                            <div class="post-layout-container">
                                <div class="post-layout-avt">
                                    <img src="assets/img/avttest.jpg" alt="" class="post-layout-avt-modify">
                                </div>

                                <div class="post-layout-content">
                                    <div class="post-layout-content-header">
                                        <div class="header-modify">
                                            <div class="modify-authors">
                                                <a href="" class="modify-authors-name">Đức Nguyễn</a>
                                            </div>

                                            <div class="modify-posting">
                                                <div class="modify-posting-padding">
                                                    <span class="modify-posting-times">
                                                        28 munites ago
                                                    </span>
                                                </div>

                                                <div class="modify-posting-padding">
                                                    <hr class="modify-split">
                                                </div>

                                                <div class="modify-posting-padding">
                                                    <span class="modify-reading-times">
                                                        1 min read
                                                    </span>
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
                                                How to say Hello in Vietnamese?
                                            </div>
                                        </div>

                                        <div class="content-body-title">
                                            <div class="content-body-modules-show">
                                                #Basic Python
                                            </div>
                                        </div>
                                    </div>

                                    <div class="post-layout-content-footer">
                                        <div class="content-footer-icon">
                                            <div class="footer-icon-views">
                                                <div class="footer-icon-title" title="View">

                                                    <i class="fa-solid fa-eye footer-icon-views-icon"></i>
                                                    <span class="footer-icon-views-count">99</span>
                                                </div>
                                            </div>

                                            <div class="footer-icon-views">
                                                <i class="fa-solid fa-bookmark footer-icon-views-icon-bookmark"></i>
                                                <span class="footer-icon-bookmark-count">66</span>
                                            </div>
                                        </div>

                                        <div class="content-footer-upvote">
                                            <div class="footer-upvote-icon">
                                                <div class="footer-upvote-modify">
                                                    <i class="fa-solid fa-caret-up footer-upvote-modify-up"></i>
                                                </div>

                                                <div class="footer-upvote-modify">
                                                    <i class="fa-solid fa-caret-down footer-upvote-modify-down"></i>
                                                </div>
                                            </div>

                                            <div class="footer-upvote-count">
                                                6
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="post-layout">
                            <div class="post-layout-container">
                                <div class="post-layout-avt">
                                    <img src="assets/img/avttest.jpg" alt="" class="post-layout-avt-modify">
                                </div>

                                <div class="post-layout-content">
                                    <div class="post-layout-content-header">
                                        <div class="header-modify">
                                            <div class="modify-authors">
                                                <a href="" class="modify-authors-name">Đức Nguyễn</a>
                                            </div>

                                            <div class="modify-posting">
                                                <div class="modify-posting-padding">
                                                    <span class="modify-posting-times">
                                                        28 munites ago
                                                    </span>
                                                </div>

                                                <div class="modify-posting-padding">
                                                    <hr class="modify-split">
                                                </div>

                                                <div class="modify-posting-padding">
                                                    <span class="modify-reading-times">
                                                        1 min read
                                                    </span>
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
                                                How to say Hello in Vietnamese?
                                            </div>
                                        </div>

                                        <div class="content-body-title">
                                            <div class="content-body-modules-show">
                                                #Basic Python
                                            </div>
                                        </div>
                                    </div>

                                    <div class="post-layout-content-footer">
                                        <div class="content-footer-icon">
                                            <div class="footer-icon-views">
                                                <div class="footer-icon-title" title="View">

                                                    <i class="fa-solid fa-eye footer-icon-views-icon"></i>
                                                    <span class="footer-icon-views-count">99</span>
                                                </div>
                                            </div>

                                            <div class="footer-icon-views">
                                                <i class="fa-solid fa-bookmark footer-icon-views-icon-bookmark"></i>
                                                <span class="footer-icon-bookmark-count">66</span>
                                            </div>
                                        </div>

                                        <div class="content-footer-upvote">
                                            <div class="footer-upvote-icon">
                                                <div class="footer-upvote-modify">
                                                    <i class="fa-solid fa-caret-up footer-upvote-modify-up"></i>
                                                </div>

                                                <div class="footer-upvote-modify">
                                                    <i class="fa-solid fa-caret-down footer-upvote-modify-down"></i>
                                                </div>
                                            </div>

                                            <div class="footer-upvote-count">
                                                6
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="post-layout">
                            <div class="post-layout-container">
                                <div class="post-layout-avt">
                                    <img src="assets/img/avttest.jpg" alt="" class="post-layout-avt-modify">
                                </div>

                                <div class="post-layout-content">
                                    <div class="post-layout-content-header">
                                        <div class="header-modify">
                                            <div class="modify-authors">
                                                <a href="" class="modify-authors-name">Đức Nguyễn</a>
                                            </div>

                                            <div class="modify-posting">
                                                <div class="modify-posting-padding">
                                                    <span class="modify-posting-times">
                                                        28 munites ago
                                                    </span>
                                                </div>

                                                <div class="modify-posting-padding">
                                                    <hr class="modify-split">
                                                </div>

                                                <div class="modify-posting-padding">
                                                    <span class="modify-reading-times">
                                                        1 min read
                                                    </span>
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
                                                How to say Hello in Vietnamese?
                                            </div>
                                        </div>

                                        <div class="content-body-title">
                                            <div class="content-body-modules-show">
                                                #Basic Python
                                            </div>
                                        </div>
                                    </div>

                                    <div class="post-layout-content-footer">
                                        <div class="content-footer-icon">
                                            <div class="footer-icon-views">
                                                <div class="footer-icon-title" title="View">

                                                    <i class="fa-solid fa-eye footer-icon-views-icon"></i>
                                                    <span class="footer-icon-views-count">99</span>
                                                </div>
                                            </div>

                                            <div class="footer-icon-views">
                                                <i class="fa-solid fa-bookmark footer-icon-views-icon-bookmark"></i>
                                                <span class="footer-icon-bookmark-count">66</span>
                                            </div>
                                        </div>

                                        <div class="content-footer-upvote">
                                            <div class="footer-upvote-icon">
                                                <div class="footer-upvote-modify">
                                                    <i class="fa-solid fa-caret-up footer-upvote-modify-up"></i>
                                                </div>

                                                <div class="footer-upvote-modify">
                                                    <i class="fa-solid fa-caret-down footer-upvote-modify-down"></i>
                                                </div>
                                            </div>

                                            <div class="footer-upvote-count">
                                                6
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="post-layout">
                            <div class="post-layout-container">
                                <div class="post-layout-avt">
                                    <img src="assets/img/avttest.jpg" alt="" class="post-layout-avt-modify">
                                </div>

                                <div class="post-layout-content">
                                    <div class="post-layout-content-header">
                                        <div class="header-modify">
                                            <div class="modify-authors">
                                                <a href="" class="modify-authors-name">Đức Nguyễn</a>
                                            </div>

                                            <div class="modify-posting">
                                                <div class="modify-posting-padding">
                                                    <span class="modify-posting-times">
                                                        28 munites ago
                                                    </span>
                                                </div>

                                                <div class="modify-posting-padding">
                                                    <hr class="modify-split">
                                                </div>

                                                <div class="modify-posting-padding">
                                                    <span class="modify-reading-times">
                                                        1 min read
                                                    </span>
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
                                                How to say Hello in Vietnamese?
                                            </div>
                                        </div>

                                        <div class="content-body-title">
                                            <div class="content-body-modules-show">
                                                #Basic Python
                                            </div>
                                        </div>
                                    </div>

                                    <div class="post-layout-content-footer">
                                        <div class="content-footer-icon">
                                            <div class="footer-icon-views">
                                                <div class="footer-icon-title" title="View">

                                                    <i class="fa-solid fa-eye footer-icon-views-icon"></i>
                                                    <span class="footer-icon-views-count">99</span>
                                                </div>
                                            </div>

                                            <div class="footer-icon-views">
                                                <i class="fa-solid fa-bookmark footer-icon-views-icon-bookmark"></i>
                                                <span class="footer-icon-bookmark-count">66</span>
                                            </div>
                                        </div>

                                        <div class="content-footer-upvote">
                                            <div class="footer-upvote-icon">
                                                <div class="footer-upvote-modify">
                                                    <i class="fa-solid fa-caret-up footer-upvote-modify-up"></i>
                                                </div>

                                                <div class="footer-upvote-modify">
                                                    <i class="fa-solid fa-caret-down footer-upvote-modify-down"></i>
                                                </div>
                                            </div>

                                            <div class="footer-upvote-count">
                                                6
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="post-layout">
                            <div class="post-layout-container">
                                <div class="post-layout-avt">
                                    <img src="assets/img/avttest.jpg" alt="" class="post-layout-avt-modify">
                                </div>

                                <div class="post-layout-content">
                                    <div class="post-layout-content-header">
                                        <div class="header-modify">
                                            <div class="modify-authors">
                                                <a href="" class="modify-authors-name">Đức Nguyễn</a>
                                            </div>

                                            <div class="modify-posting">
                                                <div class="modify-posting-padding">
                                                    <span class="modify-posting-times">
                                                        28 munites ago
                                                    </span>
                                                </div>

                                                <div class="modify-posting-padding">
                                                    <hr class="modify-split">
                                                </div>

                                                <div class="modify-posting-padding">
                                                    <span class="modify-reading-times">
                                                        1 min read
                                                    </span>
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
                                                How to say Hello in Vietnamese?
                                            </div>
                                        </div>

                                        <div class="content-body-title">
                                            <div class="content-body-modules-show">
                                                #Basic Python
                                            </div>
                                        </div>
                                    </div>

                                    <div class="post-layout-content-footer">
                                        <div class="content-footer-icon">
                                            <div class="footer-icon-views">
                                                <div class="footer-icon-title" title="View">

                                                    <i class="fa-solid fa-eye footer-icon-views-icon"></i>
                                                    <span class="footer-icon-views-count">99</span>
                                                </div>
                                            </div>

                                            <div class="footer-icon-views">
                                                <i class="fa-solid fa-bookmark footer-icon-views-icon-bookmark"></i>
                                                <span class="footer-icon-bookmark-count">66</span>
                                            </div>
                                        </div>

                                        <div class="content-footer-upvote">
                                            <div class="footer-upvote-icon">
                                                <div class="footer-upvote-modify">
                                                    <i class="fa-solid fa-caret-up footer-upvote-modify-up"></i>
                                                </div>

                                                <div class="footer-upvote-modify">
                                                    <i class="fa-solid fa-caret-down footer-upvote-modify-down"></i>
                                                </div>
                                            </div>

                                            <div class="footer-upvote-count">
                                                6
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                    </div>

                    <div class="container-content-quick-view" style="top: 80px; max-height: calc(-88px + 95vh); overflow-y: auto;">
                        <div class="quick-view-header-top">
                            <div class="quick-view-modify">
                                <h2 class="newest-question">NEWEST QUESTIONS</h2>
                                <hr class="newest-question-top quick-view-modify-hr">
                            </div>

                            <div class="header-top-content">
                                <div class="top-content-heading">
                                    <div class="content-heading-modify">
                                        Should I transfer to university or not?
                                    </div>
                                </div>

                                <div class="top-content-body">
                                    <div class="top-content-body-upvote">
                                        <div class="content-body-upvote">
                                            <div class="footer-upvote-modify">
                                                <i class="fa-solid fa-caret-up footer-upvote-modify-up"></i>
                                            </div>
    
                                            <div class="footer-upvote-modify">
                                                <i class="fa-solid fa-caret-down footer-upvote-modify-down"></i>
                                            </div>
                                        </div>
    
                                        <div class="footer-upvote-count">
                                            6
                                        </div>
                                    </div>

                                    <div class="top-content-body-views">
                                        <div class="content-body-views">
                                            <div class="footer-icon-title" title="View">
                                                <i class="fa-solid fa-eye footer-icon-views-margin"></i>
                                                <span class="footer-icon-views-count">99</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="top-content-author">
                                    <div class="content-author-name">
                                        <div class="author-name-modify">
                                            <a href="" class="name-modify">Đức Nguyễn</a>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>

                            <div class="header-top-content">
                                <div class="top-content-heading">
                                    <div class="content-heading-modify">
                                        Should I transfer to university or not?
                                    </div>
                                </div>

                                <div class="top-content-body">
                                    <div class="top-content-body-upvote">
                                        <div class="content-body-upvote">
                                            <div class="footer-upvote-modify">
                                                <i class="fa-solid fa-caret-up footer-upvote-modify-up"></i>
                                            </div>
    
                                            <div class="footer-upvote-modify">
                                                <i class="fa-solid fa-caret-down footer-upvote-modify-down"></i>
                                            </div>
                                        </div>
    
                                        <div class="footer-upvote-count">
                                            6
                                        </div>
                                    </div>

                                    <div class="top-content-body-views">
                                        <div class="content-body-views">
                                            <div class="footer-icon-title" title="View">
                                                <i class="fa-solid fa-eye footer-icon-views-margin"></i>
                                                <span class="footer-icon-views-count">99</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="top-content-author">
                                    <div class="content-author-name">
                                        <div class="author-name-modify">
                                            <a href="" class="name-modify">Đức Nguyễn</a>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>

                            <div class="header-top-content">
                                <div class="top-content-heading">
                                    <div class="content-heading-modify">
                                        Explain why these sentences are incorrect?
                                    </div>
                                </div>

                                <div class="top-content-body">
                                    <div class="top-content-body-upvote">
                                        <div class="content-body-upvote">
                                            <div class="footer-upvote-modify">
                                                <i class="fa-solid fa-caret-up footer-upvote-modify-up"></i>
                                            </div>
    
                                            <div class="footer-upvote-modify">
                                                <i class="fa-solid fa-caret-down footer-upvote-modify-down"></i>
                                            </div>
                                        </div>
    
                                        <div class="footer-upvote-count">
                                            2
                                        </div>
                                    </div>

                                    <div class="top-content-body-views">
                                        <div class="content-body-views">
                                            <div class="footer-icon-title" title="View">
                                                <i class="fa-solid fa-eye footer-icon-views-margin"></i>
                                                <span class="footer-icon-views-count">666</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="top-content-author">
                                    <div class="content-author-name">
                                        <div class="author-name-modify">
                                            <a href="" class="name-modify">Park Duc</a>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>

                            <div class="header-top-content">
                                <div class="top-content-heading">
                                    <div class="content-heading-modify">
                                        Explain why these sentences are incorrect?
                                    </div>
                                </div>

                                <div class="top-content-body">
                                    <div class="top-content-body-upvote">
                                        <div class="content-body-upvote">
                                            <div class="footer-upvote-modify">
                                                <i class="fa-solid fa-caret-up footer-upvote-modify-up"></i>
                                            </div>
    
                                            <div class="footer-upvote-modify">
                                                <i class="fa-solid fa-caret-down footer-upvote-modify-down"></i>
                                            </div>
                                        </div>
    
                                        <div class="footer-upvote-count">
                                            2
                                        </div>
                                    </div>

                                    <div class="top-content-body-views">
                                        <div class="content-body-views">
                                            <div class="footer-icon-title" title="View">
                                                <i class="fa-solid fa-eye footer-icon-views-margin"></i>
                                                <span class="footer-icon-views-count">666</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="top-content-author">
                                    <div class="content-author-name">
                                        <div class="author-name-modify">
                                            <a href="" class="name-modify">Park Duc</a>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>

                            <div class="header-top-content header-top-content-no-border">
                                <div class="top-content-heading">
                                    <div class="content-heading-modify">
                                        Why can't Access Token be substituted for Refresh Token? How is Refresh Token more secure than Access Token? Why do we really need Refresh Token?
                                    </div>
                                </div>

                                <div class="top-content-body">
                                    <div class="top-content-body-upvote">
                                        <div class="content-body-upvote">
                                            <div class="footer-upvote-modify">
                                                <i class="fa-solid fa-caret-up footer-upvote-modify-up"></i>
                                            </div>
    
                                            <div class="footer-upvote-modify">
                                                <i class="fa-solid fa-caret-down footer-upvote-modify-down"></i>
                                            </div>
                                        </div>
    
                                        <div class="footer-upvote-count">
                                            7
                                        </div>
                                    </div>

                                    <div class="top-content-body-views">
                                        <div class="content-body-views">
                                            <div class="footer-icon-title" title="View">
                                                <i class="fa-solid fa-eye footer-icon-views-margin"></i>
                                                <span class="footer-icon-views-count">204</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="top-content-author">
                                    <div class="content-author-name">
                                        <div class="author-name-modify">
                                            <a href="" class="name-modify">Peter Parker</a>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>
                            
                            <div class="quick-view-modify">
                                <h2 class="top-authors">TOP AUTHORS</h2>
                                <hr class="newest-question-bottom quick-view-modify-hr">
                            </div>

                            <!-- TOP AUTHORS SCROLL BAR -->
                            <div class="author-container">
                                <div class="author-container-avt-split">
                                    <div class="author-container-avt">
                                        <img src="https://thanhnien.mediacdn.vn/Uploaded/phongdt/2022_08_04/spider-man-2363.jpg" alt="avt-author" class="container-avt-modify">
                                    </div>
    
                                    <div class="author-container-content">
                                        <div class="container-content-modify">
                                            <div class="content-modify">
                                                <a href="" class="content-modify-name">SPIDER MAN</a>
                                            </div>
    
                                            <div class="content-modify">
                                                <div href="" class="content-modify-username">@spidermannowayhome</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="author-container-icon">
                                    <div class="container-icon-post">
                                        <i class="fa-solid fa-pen icon-post-pen"></i>
                                        <div class="icon-post-count">21394</div>
                                    </div>

                                    <div class="container-icon-post">
                                        <i class="fa-solid fa-eye icon-views-eye"></i>
                                        <div class="icon-views-count">328.2K</div>
                                    </div>
                                </div>
                            </div>

                            <div class="author-container">
                                <div class="author-container-avt-split">
                                    <div class="author-container-avt">
                                        <img src="https://playcontestofchampions.com/wp-content/uploads/2021/11/champion-iron-man-infinity-war-720x720.jpg" alt="avt-author" class="container-avt-modify">
                                    </div>
    
                                    <div class="author-container-content">
                                        <div class="container-content-modify">
                                            <div class="content-modify">
                                                <a href="" class="content-modify-name">IRON MAN</a>
                                            </div>
    
                                            <div class="content-modify">
                                                <div href="" class="content-modify-username">@ironman6699</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="author-container-icon">
                                    <div class="container-icon-post">
                                        <i class="fa-solid fa-pen icon-post-pen"></i>
                                        <div class="icon-post-count">19828</div>
                                    </div>

                                    <div class="container-icon-post">
                                        <i class="fa-solid fa-eye icon-views-eye"></i>
                                        <div class="icon-views-count">224.8K</div>
                                    </div>
                                </div>
                            </div>

                            <div class="author-container">
                                <div class="author-container-avt-split">
                                    <div class="author-container-avt">
                                        <img src="https://vov.vn/sites/default/files/styles/large/public/2021-01/d5_khyjueaavq7h_1.jpg" alt="avt-author" class="container-avt-modify">
                                    </div>
    
                                    <div class="author-container-content">
                                        <div class="container-content-modify">
                                            <div class="content-modify">
                                                <a href="" class="content-modify-name">CAPTAIN AMERICA</a>
                                            </div>
    
                                            <div class="content-modify">
                                                <div href="" class="content-modify-username">@captainamericano1</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="author-container-icon">
                                    <div class="container-icon-post">
                                        <i class="fa-solid fa-pen icon-post-pen"></i>
                                        <div class="icon-post-count">17922</div>
                                    </div>

                                    <div class="container-icon-post">
                                        <i class="fa-solid fa-eye icon-views-eye"></i>
                                        <div class="icon-views-count">201.1K</div>
                                    </div>
                                </div>
                            </div>

                            <div class="author-container">
                                <div class="author-container-avt-split">
                                    <div class="author-container-avt">
                                        <img src="https://vcdn1-giaitri.vnecdn.net/2023/02/13/batman-6926-1676258966.png?w=460&h=0&q=100&dpr=2&fit=crop&s=LfrsMpVra4r6MTRKF2FJzw" alt="avt-author" class="container-avt-modify">
                                    </div>
    
                                    <div class="author-container-content">
                                        <div class="container-content-modify">
                                            <div class="content-modify">
                                                <a href="" class="content-modify-name">BATMAN</a>
                                            </div>
    
                                            <div class="content-modify">
                                                <div href="" class="content-modify-username">@batmanoffical</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="author-container-icon">
                                    <div class="container-icon-post">
                                        <i class="fa-solid fa-pen icon-post-pen"></i>
                                        <div class="icon-post-count">16728</div>
                                    </div>

                                    <div class="container-icon-post">
                                        <i class="fa-solid fa-eye icon-views-eye"></i>
                                        <div class="icon-views-count">191.4K</div>
                                    </div>
                                </div>
                            </div>

                            <div class="author-container">
                                <div class="author-container-avt-split">
                                    <div class="author-container-avt">
                                        <img src="https://cdn.britannica.com/64/182864-050-8975B127/Scene-The-Incredible-Hulk-Louis-Leterrier.jpg" alt="avt-author" class="container-avt-modify">
                                    </div>
    
                                    <div class="author-container-content">
                                        <div class="container-content-modify">
                                            <div class="content-modify">
                                                <a href="" class="content-modify-name">HULK</a>
                                            </div>
    
                                            <div class="content-modify">
                                                <div href="" class="content-modify-username">@hulkonepunch</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="author-container-icon">
                                    <div class="container-icon-post">
                                        <i class="fa-solid fa-pen icon-post-pen"></i>
                                        <div class="icon-post-count">15555</div>
                                    </div>

                                    <div class="container-icon-post">
                                        <i class="fa-solid fa-eye icon-views-eye"></i>
                                        <div class="icon-views-count">182.9K</div>
                                    </div>
                                </div>
                            </div>
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
                                <a href="">
                                    <li class="resources-body-post">Post</li>
                                </a>
                            </ul>
                            <ul class="resources-body">
                                <a href="">
                                    <li class="resources-body-questions">Questions</li>
                                </a>
                            </ul>
                            <ul class="resources-body">
                                <a href="">
                                    <li class="resources-body-modules">Modules</li>
                                </a>
                            </ul>
                            <ul class="resources-body">
                                <a href="">
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
                            <a href="" class="facebook-link">
                                <i class="fa-brands fa-facebook facebook-link-icon"></i>
                            </a>
                        </div>

                        <div class="link-icon-modify">
                            <a href="" class="github-link">
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
                    <p class="copyright">
                        © 2024
                        <b>DevTrek. by ducngg411</b>. All rights reserved.
                    </p>
                </div>
            </footer>

        </div>
    </div>
</body>