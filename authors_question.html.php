<?php
include 'includes/DatabaseConnection.php';
include 'includes/DatabaseFunctions.php';



if (!isset($_GET['mem_id'])) {
    die('Member ID not provided');
}

$mem_id = intval($_GET['mem_id']);
$stmt = $pdo->prepare(" SELECT q.id, q.title, q.content, q.created_at, mo.modules_name, mo.modules_id,
                        (SELECT COUNT(*) FROM bookmarks b WHERE b.question_id = q.id) AS bookmark_count
                        FROM questions q
                        JOIN modules mo ON mo.modules_id =  q.modules_id
                        WHERE q.mem_id = ?");
$stmt->execute([$mem_id]);
$questions = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $pdo->prepare("SELECT m.mem_id, m.firstname, m.lastname, m.username, m.displayname, m.dob, m.phone, m.email, COUNT(q.id) AS question_count
                        FROM member m
                        LEFT JOIN questions q ON m.mem_id = q.mem_id
                        WHERE m.mem_id = ? ");
$stmt->execute([$mem_id]);
$member = $stmt->fetch(PDO::FETCH_ASSOC);


$stmt = $pdo->prepare("SELECT COUNT(mem_id) as bookmark_count 
                        From bookmarks bo 
                        WHERE bo.mem_id = ?");
$stmt->execute([$mem_id]);
$student_bookmark = $stmt->fetch(PDO::FETCH_ASSOC);

$member_id = getMemberInfo($pdo);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/question.css">
    <link rel="stylesheet" href="assets/css/header.css">

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

                        <ul class="home__navbar-funtion">
                            <li class="admin-function">
                                <a href="homelogin.html.php">Home Page</a>
                            </li>
    
                            <li class="admin-function">
                                <a href="member/views/modules_show_stu.html.php">Modules</a>
                            </li>
    
                            <li class="admin-function">
                                <a href="member/views/author_show.html.php">Author</a>
                            </li>

                            <li class="admin-function">
                                <a href="member/views/my_bookmark.html.php">My Bookmarks</a>
                            </li>

                            <li class="admin-function">
                                <a href="member/views/my_question.html.php">My Questions</a>
                            </li>

                            <li class="admin-function">
                                <a href="member/views/admin_contact.html.php">Contact Us</a>
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
                                <?php echo htmlspecialchars($member_id['displayname'])?>
                                </span>
                            </div>

                            <ul class="navbar-success-welcome-menu">
                                <button class="success-welcome-menu-modify">
                                    <a href="change_profile.html.php">
                                        Edit
                                    </a>
                                </button>

                                <li class="success-welcome-menu-list success-welcome-menu-list--sign-out">
                                    <hr class="sign-out-split">
                                    <div class="sign-out-combo">
                                        <i class="fa-solid fa-right-from-bracket"></i>
                                        <a href="auth/logout.php" class="welcome-menu-list-text welcome-menu-list-text--sign-out">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>

            <div class="main-content">
                <div class="container-modules">
                    <div class="modules-header">
                        <div class="post-layout-avt">
                            <img src="assets/img/avttest.jpg" alt="" class="post-layout-avt-modify">
                        </div>
                        <div class="combine">
                            <h1 class="heading-modify heading-modify--margin"><?php echo htmlspecialchars($member['displayname']); ?></h1>
                            <div class="modules-description">
                                <h3 class="description-modify description-modify-padding"><?php echo htmlspecialchars('@'. $member['username']); ?></h3>
                            </div>
                        </div>
                    </div>


                    <div class="modules-body">
                        <div class="modules-body-questions">
                            <div class="body-questions-header">
                                <a>Questions</a>
                            </div>

                            <hr class="hr-split">
                            <div class="body-questions-list">
                                <?php foreach ($questions as $question): ?>
                                <div class="post-layout">
                                    <div class="post-layout-container">
                                        <div class="post-layout-avt post-layout-avt-width">
                                            <img src="assets/img/avttest.jpg" alt="" class="post-layout-avt-modify">
                                        </div>

                                        <div class="post-layout-content">
                                            <div class="post-layout-content-header">
                                                <div class="header-modify">
                                                    <div class="modify-authors">
                                                        <a href="" class="modify-authors-name">
                                                        <?php echo htmlspecialchars($member['displayname']); ?>
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
                                                        <a class="undercoating" href="view_question.html.php?id=<?php echo $question['id']; ?>">
                                                            <?php echo htmlspecialchars($question['title']); ?>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="content-body-title">
                                                    <div  class="content-body-modules-show">
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

                                                <!-- <div class="content-footer-upvote">
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
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>    
                            </div>
                        </div>  

                        <div class="modules-body-count">
                            <div class="body-count-header">
                                <h1 class="heading-modify">STATICS</h1>
                                <hr class="hr-backup-rule">
                            </div>

                            <div class="body-count-box">
                                <div class="count-box">
                                    <h1 class="heading-modify"><?php echo htmlspecialchars($member['question_count']); ?></h1>
                                    <h2>Total Questions</h2>
                                </div>
                                
                                <hr class="hr-split-rule">

                                <div class="count-box">
                                    <h1><?php echo htmlspecialchars($student_bookmark['bookmark_count']); ?></h1>
                                    <h2>Total Bookmarks</h2>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
