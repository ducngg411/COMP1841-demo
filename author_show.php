<?php 

include_once 'includes/DatabaseConnection.php';
include_once 'includes/DatabaseFunctions.php';

$mem_id = getMemberInfo($pdo);
$stmt = $pdo->prepare("SELECT COUNT(DISTINCT mem_id) AS count
                    FROM questions");
$stmt->execute();
$countResult = $stmt->fetch(PDO::FETCH_ASSOC);
$count = $countResult['count'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authors List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/question.css">
    <!-- <link rel="stylesheet" href="assets/css/profile.css"> -->
    <link rel="stylesheet" href="assets/css/header.css">

    <link rel="shortcut icon" href="assets/img/favicon (2).ico" type="image/x-icon">
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
                                <a href="modules_show_stu.php">Modules</a>
                            </li>
    
                            <li class="admin-function">
                                <a href="author_show.php">Author</a>
                            </li>

                            <li class="admin-function">
                                <a href="my_bookmark.php">My Bookmarks</a>
                            </li>

                            <li class="admin-function">
                                <a href="my_question.php">My Questions</a>
                            </li>

                            <li class="admin-function">
                                <a href="admin_contact.php">Contact Us</a>
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
                <div class="container__h1-button container__h1-button-question">
                    <h1 class="student_list_mdf student_list_mdf--question">List of authors: <?php echo htmlspecialchars($count); ?></h1>
                    <!-- <a href="create_question.php"><button class="add_student add_student-question"></button></a> -->
                </div>

                <div class="table-modify">
                    <table>
                        <thead>
                            <tr>
                                <<th>Author ID</th>
                                <th>User Name</th>
                                <th>Display Name</th>
                                <th>Email</th>
                                <th>Question Count</th>
                                <!-- <th>Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php include 'fetch_authors.php'; ?>
                        </tbody>
                    </table>    
                </div>
            </div>            
        </div>
    </div>    
</div>
</html>