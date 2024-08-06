<?php 

include 'includes/DatabaseConnection.php';
include 'includes/DatabaseFunctions.php';

$member = getMemberInfo($pdo)
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
    <!-- <link rel="stylesheet" href="assets/css/profile.css"> -->
    <link rel="stylesheet" href="assets/css/header.css">

    <link rel="shortcut icon" type="image/x-icon" href="logo/fav.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <script src="home.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                                <?php echo htmlspecialchars($member['displayname'])?>
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

            <div class="container__content container__content--create-questions">
                <div class="container-wrap container-wrap--create-questions">
                    <form action="submit_questions.php" method="post" class="container-wrap-personal container-wrap-personal-question" enctype="multipart/form-data">
                        <div class="contact-info-header">
                            <h1>Add New Questions</h1>
                        </div>

                        <div class="contact-info-header">
                            <h3>Fill the information below to add a new question</h3>
                        </div>

                        <div class="body-modify body-modify--modules">
                            <input type="hidden" name="mem_id" value="<?php echo $member['mem_id']; ?>">
                            <div class="label-change label-change--modules">
                                <label for="title">Title</label> <br>
                            </div>
                            <input type="text" name="title" placeholder="Title" required>
                        </div>

                        <div class="body-modify body-modify--modules">
                            <div class="label-change label-change--modules">
                                <label for="content">Questions description</label> <br>
                            </div>
                            <textarea name="content" placeholder="Describe the problem you are having here!" rows="5" required></textarea>
                        </div>

                        <div class="body-modify body-modify--modules">
                            <div class="label-change label-change--modules">
                                <label for="code">Code</label> <br>
                            </div>
                            <textarea name="code" placeholder="If you have code, paste here!" rows="5"></textarea>
                        </div>

                        <div class="body-modify body-modify--modules">
                            <div class="label-change label-change--modules">
                                <label for="image">Add a image</label> <br>
                            </div>
                            <input type="file" name="image" class="file_modify">
                        </div>

                        <div class="body-modify body-modify--modules">
                            <div class="label-change label-change--modules">
                                <label for="modules_id">Select modules</label> <br>
                            </div>
                            <select name="modules_id" >
                                <option value="" required>Choose suitable modules</option>
                                <?php    
                                    // Fetch current data
                                    $sql = "SELECT * FROM modules";
                                    $stmt = $pdo->prepare($sql); // $pdo là đối tượng kết nối PDO
                                    $stmt->execute();
                                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        echo "<option value='{$row['modules_id']}'>{$row['modules_name']}</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        
                        <div class="container-personal-info">
                            <div class="info-footer-btn">
                                <div class="button-modify button-modify-border-change button-modify-a">
                                    <a href="homelogin.php" class="button-modify-question" role="button">Cancel</a>
                                </div>

                                <div class="button-modify button-modify-hover">
                                    <button type="submit" name="submit">Add Question</button>
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
