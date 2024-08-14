<?php 

include_once '../../includes/DatabaseConnection.php';
include_once '../../includes/DatabaseFunctions.php';

$mem_id = getMemberInfo($pdo);
$sql = "SELECT COUNT(id) AS count FROM bookmarks b WHERE b.mem_id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$mem_id['mem_id']]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bookmark</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    
    <link rel="stylesheet" href="../../assets/css/home.css">
    <link rel="stylesheet" href="../../assets/css/base.css">
    <link rel="stylesheet" href="../../assets/css/question.css">
    <!-- <link rel="stylesheet" href="../../assets/css/profile.css"> -->
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
                            <img src="../../assets/img/avttest.jpg" alt="avt" width="50px" height="50px" style="border-radius: 50px; border: 1px solid rgb(238, 225, 225);;">
                        </div>

                        <div class="home_navbar-success">
                            <div href="" class="navbar-success-welcome-name">
                                Hi, <span>
                                <?php echo htmlspecialchars($mem_id['displayname'])?>
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

            <div class="container__content">
                <div class="container__h1-button container__h1-button-question">
                    <h1 class="student_list_mdf student_list_mdf--question">My Bookmark List: <?php echo $result['count']?></h1>
                    <!-- <a href="create_question.php"><button class="add_student add_student-question"></button></a> -->
                </div>

                <div class="table-modify">
                    <table>
                        <thead>
                            <tr>
                                <th>Bookmark ID</th>
                                <th>Question ID</th>
                                <th>Question Title</th>
                                <th>Create At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include '../fetch_bookmark.php'; ?>
                        </tbody>
                    </table>    
                </div>
            </div>
        </div>
    </div>
</div>
</html>