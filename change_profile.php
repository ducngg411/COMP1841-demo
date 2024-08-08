<?php
include 'includes/DatabaseConnection.php';
include 'includes/DatabaseFunctions.php';

$mem_id = getMemberInfo($pdo)['mem_id'];

// Fetch current data
$sql = "SELECT * FROM member WHERE mem_id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$mem_id]);
$member = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$member) {
    echo "Member not found!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/profile.css">

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
                                <?php echo htmlspecialchars($member['displayname'])?>
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
                <div class="container-wrap container-wrap-no-margin">
                    <form action="edit_profile.php" method="post" class="container-wrap-personal container-wrap-personal-padding">
                        <div class="contact-info-header">
                            <h1>Your Profile</h1>
                        </div>
    
                        <div class="contact-info-header">
                            <h3>Change your information.</h3>
                        </div>

                        <div class="contact-info-body">
                            <input type="hidden" name="mem_id" value="<?php echo $member['mem_id']; ?>">

                            <div class="flex-split-info">
                                <div class="body-modify">
                                    <div class="label-change">
                                        <label for="firstname">First Name</label> <br>
                                    </div>
                                    <input type="text" name="firstname" value="<?php echo htmlspecialchars($member['firstname']); ?>">
                                </div>

                                <div class="body-modify">
                                    <div class="label-change">
                                        <label for="lastname">Last Name</label> <br>
                                    </div>
                                    <input type="text" name="lastname" value="<?php echo htmlspecialchars($member['lastname']); ?>">
                                </div>
                            </div>

                            <div class="flex-split-info">
                                <div class="body-modify">
                                    <div class="label-change">
                                        <label for="username">Username</label> <br>
                                    </div>
                                    <input type="text" name="username" value="<?php echo htmlspecialchars($member['username']); ?>">
                                </div>

                                <div class="body-modify">
                                    <div class="label-change">
                                        <label for="password">Password</label> <br>
                                    </div>
                                    <input type="password" name="password" value="<?php echo htmlspecialchars($member['password']); ?>">
                                </div>
                            </div>

                            <div class="flex-split-info">
                                <div class="body-modify">
                                    <div class="label-change">
                                        <label for="displayname">Display Name</label> <br>
                                    </div>
                                    <input type="text" name="displayname" value="<?php echo htmlspecialchars($member['displayname']); ?>">
                                </div>

                                <div class="body-modify">
                                    <div class="label-change">
                                        <label for="dob">Date Of Birth</label> <br>
                                    </div>
                                    <input type="text" name="dob" value="<?php echo htmlspecialchars($member['dob']); ?>">
                                </div>
                            </div>  

                            <div class="flex-split-info">
                                <div class="body-modify">
                                    <div class="label-change">
                                        <label for="phone">Phone</label> <br>
                                    </div>
                                    <input type="text" name="phone" value="<?php echo htmlspecialchars($member['phone']); ?>">
                                </div>

                                <div class="body-modify">
                                    <div class="label-change">
                                        <label for="email">Email</label> <br>
                                    </div>
                                    <input type="email" name="email" value="<?php echo htmlspecialchars($member['email']); ?>">
                                </div>
                            </div>  

                        </div>

                        <div class="container-personal-info">
                            <div class="info-footer-btn">
                                <div class="button-modify button-modify-border-change">
                                    <a href="homelogin.php">
                                        <button name="cancel">Cancel</button>
                                    </a>
                                </div>

                                <div class="button-modify button-modify-hover">
                                    <button type="submit">Update</button>
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
