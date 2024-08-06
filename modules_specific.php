<?php 

include_once 'includes/DatabaseConnection.php';
include_once 'includes/DatabaseFunctions.php';

$mem_id = getMemberInfo($pdo);
$modules = $_GET['modules_id'] ?? null;
if (!$modules) {
    echo 'Id not found!';
    exit();
}

$sql = "SELECT mo.modules_name, mo.modules_description, mo.questions_count 
                FROM modules mo
                WHERE mo.modules_id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$modules]);
$module = $stmt->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT COUNT(DISTINCT q.mem_id) AS author_count
                FROM questions q
                WHERE q.modules_id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$modules]);
$author_count = $stmt->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT q.id, q.title, q.created_at, q.edited_at, m.displayname,
                (SELECT COUNT(*) FROM bookmarks b WHERE b.question_id = q.id) AS bookmark_count
                FROM questions q
                JOIN member m ON q.mem_id = m.mem_id
                WHERE q.modules_id = ?
                ORDER BY q.created_at DESC LIMIT 20";
$stmt = $pdo->prepare($sql);
$stmt->execute([$modules]);
$questions = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
                                <a href="homelogin.php">Home Page</a>
                            </li>
    
                            <li class="admin-function">
                                <a href="modules_show.php">Modules</a>
                            </li>
    
                            <li class="admin-function">
                                <a href="">Author</a>
                            </li>

                            <li class="admin-function">
                                <a href="">My Bookmarks</a>
                            </li>

                            <li class="admin-function">
                                <a href="">My Questions</a>
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
                                <?php echo htmlspecialchars($mem_id['displayname'])?>
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

            <div class="main-content">
                <div class="container-modules">
                    <div class="modules-header">
                        <i class="fa-solid fa-hashtag"></i>
                        <h1 class="heading-modify"><?php echo htmlspecialchars($module['modules_name']); ?></h1>
                    </div>

                    <div class="modules-description">
                        <h3 class="description-modify"><?php echo htmlspecialchars($module['modules_description']); ?></h3>
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
                                                        <a class="undercoating" href="view_question.php?id=<?php echo $question['id']; ?>">
                                                            <?php echo htmlspecialchars($question['title']); ?>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="content-body-title">
                                                    <div class="content-body-modules-show">
                                                        <?php echo '#'.htmlspecialchars($module['modules_name']); ?>
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
                                <h1 class="heading-modify"><?php echo htmlspecialchars($module['modules_name']); ?></h1>
                                <hr class="hr-backup-rule">
                            </div>

                            <div class="body-count-box">
                                <div class="count-box">
                                    <h1 class="heading-modify"><?php echo htmlspecialchars($module['questions_count']); ?></h1>
                                    <h2>Questions</h2>
                                </div>
                                
                                <hr class="hr-split-rule">

                                <div class="count-box">
                                    <h1><?php echo htmlspecialchars($author_count['author_count']); ?></h1>
                                    <h2>Authors</h2>
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
