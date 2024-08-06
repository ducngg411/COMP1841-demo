<?php 
include 'includes/DatabaseConnection.php';
include 'includes/DatabaseFunctions.php';

$member = getMemberInfo($pdo);

$questions = $_GET['id'] ?? null;
if (!$questions) {
    // header("Location: homelogin.php");
    echo 'Id not found!';
    exit();
}

// Fetch current data
$sql = "SELECT * FROM questions WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$questions]);
$question = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Your Question</title>
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
                            <img src="assets/img/admin (4).png" alt="" class="home__navbar-list-logo-img">
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
                            <img src="assets/img/avttest.jpg" alt="avt" width="50px" height="50px" style="border-radius: 50px; border: 1px solid rgb(238, 225, 225);">
                        </div>

                        <div class="home_navbar-success">
                            <div href="" class="navbar-success-welcome-name">
                                Hi, <span><?php echo htmlspecialchars($member['displayname'])?></span>
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
                    <form action="edit_question.php" method="post" class="container-wrap-personal container-wrap-personal-question" enctype="multipart/form-data">
                        <div class="contact-info-header">
                            <h1>Edit Your Question</h1>
                        </div>

                        <div class="contact-info-header">
                            <h3>Fill the information below to edit your question</h3>
                        </div>

                        <div class="body-modify body-modify--modules">
                            <input type="hidden" name="mem_id" value="<?php echo $member['mem_id']; ?>">
                            <input type="hidden" name="id" value="<?php echo $questions; ?>">
                            <div class="label-change label-change--modules">
                                <label for="title">Title</label> <br>
                            </div>
                            <input type="text" name="title"  value="<?php echo htmlspecialchars($question['title']);?>" >
                        </div>

                        <div class="body-modify body-modify--modules">
                            <div class="label-change label-change--modules">
                                <label for="content">Question description</label> <br>
                            </div>
                            <textarea name="content" rows="5" ><?php echo htmlspecialchars($question['content'], ENT_QUOTES, 'UTF-8');?></textarea>
                        </div>

                        <div class="body-modify body-modify--modules">
                            <div class="label-change label-change--modules">
                                <label for="code">Code</label> <br>
                            </div>
                            <textarea name="code" rows="5" ><?php echo $question['code'];?></textarea>
                        </div>

                        <div class="body-modify body-modify--modules">
                            <div class="label-change label-change--modules">
                                <label for="image">Add a image</label> <br>
                            </div>
                            <input type="file" name="image" class="file_modify" value="">
                        </div>

                        <div class="body-modify body-modify--modules">
                            <div class="label-change label-change--modules">
                                <label for="modules_id">Select modules</label> <br>
                            </div>
                            <select name="modules_id" >
                                <option value="" ></option>
                                <?php    
                                    $sql = "SELECT * FROM modules";
                                    $stmt = $pdo->prepare($sql);
                                    $stmt->execute();
                                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        $selected = ($row['modules_id'] == $question['modules_id']) ? 'selected' : '';
                                        echo "<option value='{$row['modules_id']}' $selected>{$row['modules_name']}</option>";
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
                                    <button type="submit" name="submit">Update</button>
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
