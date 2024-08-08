<?php 

include 'includes/DatabaseConnection.php';
include 'includes/DatabaseFunctions.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT q.id, q.title, q.content, q.code, q.image, q.image_type, q.created_at, q.edited_at, q.mem_id, m.displayname, m.username, m.role, mo.modules_name, mo.modules_id,
                            (SELECT COUNT(*) FROM bookmarks b WHERE b.question_id = q.id) AS bookmark_count 
                            FROM questions q
                            JOIN member m ON q.mem_id = m.mem_id
                            JOIN modules mo ON q.modules_id = mo.modules_id
                            WHERE q.id = ?");
    $stmt->execute([$id]);
    $question = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$question) {
        echo "Question not found";
        exit;
    }
    
    $stmt = $pdo->prepare("SELECT a.content, a.code, a.image, a.image_type, a.created_at, m.displayname, m.username 
                            FROM answers a
                            JOIN member m ON a.mem_id = m.mem_id
                            WHERE a.question_id = ?
                            ORDER BY a.created_at DESC");
    $stmt->execute([$id]);
    $answers = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
} else {
    echo "Question Id hasn't been provided!";
    exit;
}

$member = getMemberInfo($pdo);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['answer'])) {
    $content = $_POST['content'];
    $code = $_POST['code'];
    $mem_id = $member['mem_id'];

    if (!empty($_FILES['image']['tmp_name'])) {
        $image = $_FILES['image']['tmp_name'];
        $imageContent = file_get_contents($image);
        $imageType = $_FILES['image']['type'];

        $stmt = $pdo->prepare("INSERT INTO answers (question_id, content, code, image, image_type, mem_id) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $id);
        $stmt->bindParam(2, $content);
        $stmt->bindParam(3, $code);
        $stmt->bindParam(4, $imageContent, PDO::PARAM_LOB);
        $stmt->bindParam(5, $imageType);
        $stmt->bindParam(6, $mem_id);
    } else {
        $stmt = $pdo->prepare("INSERT INTO answers (question_id, content, code, mem_id) VALUES (?, ?, ?, ?)");
        $stmt->bindParam(1, $id);
        $stmt->bindParam(2, $content);
        $stmt->bindParam(3, $code);
        $stmt->bindParam(4, $mem_id);
    }

    if ($stmt->execute()) {
        header("Location: view_question.php?id=$id");
    } else {
        echo "An unexpected error has occurred";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevTrek. Admin Site</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/profile.css">
    <link rel="stylesheet" href="assets/css/question.css">
    <link rel="shortcut icon" href="assets/img/favicon (2).ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="home.js"></script>
    <style>
        .answer-form {
            display: none; /* Ẩn form trả lời mặc định */
        }
    </style>
    <script>
        function toggleAnswerForm() {
            const answerForm = document.querySelector('.answer-form');
            if (answerForm.style.display === 'none' || answerForm.style.display === '') {
                answerForm.style.display = 'block'; // Hiển thị form trả lời
            } else {
                answerForm.style.display = 'none'; // Ẩn form trả lời
            }
        }

        document.addEventListener('DOMContentLoaded', (event) => {
            document.getElementById('bookmarkHeading').addEventListener('click', function() {
            console.log("H2 clicked!");
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

                            <ul class="navbar-success-welcome-menu navbar-success-welcome-menu-extend">
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

            <div class="main-container">
                <div class="question-view">
                    <div class="question-view-answer">
                        <div class="question-show-question">
                            <div class="show-question-info">
                                <div class="question-time">
                                    <div class="question-time-specific">
                                        <?php echo htmlspecialchars($question['created_at']) ?>
                                    </div>
                                    
                                    <div class="question-time-specific">
                                        -
                                    </div>

                                    <div class="question-time-specific">
                                        <i class="fa-solid fa-bookmark"></i>
                                        <?php echo htmlspecialchars($question['bookmark_count']);?>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="show-question-info show-question-info-flex">
                                <div class="question-title">
                                    <h1>
                                    <?php echo htmlspecialchars($question['title']) ?>
                                    </h1>
                                </div>

                                <?php if ($question['mem_id'] == $member['mem_id'] || $member['role'] == 'admin') { // Kiểm tra nếu người dùng hiện tại là người tạo câu hỏi hoặc là admin ?>
                                    <div class="extend-option">
                                        <div class="parent-container">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    
                                        <ul class="navbar-success-welcome-menu navbar-success-welcome-menu-extend navbar-success-welcome-menu-extend-questions">
                                            <?php if ($question['mem_id'] == $member['mem_id']) { // Người dùng là người tạo câu hỏi ?>
                                                <form action="edit_question_ui.php" method="post">
                                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                                    <button type="submit" class="action_btn action_btn--edit">Edit</button>
                                                </form>
                                            <?php } ?>
                                            <?php if ($question['mem_id'] == $member['mem_id'] || $member['role'] == 'admin') { // Người dùng là người tạo câu hỏi hoặc admin ?>
                                                <form action="delete_question.php" method="post">
                                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                                    <button type="submit" class="action_btn action_btn--delete">Delete</button>
                                                </form>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                <?php } ?>
                            </div>

                            <div class="show-question-info">
                                <div class="question-modules">
                                    <div class="content-body-modules-show content-body-modules-show--view">
                                        <a class="non-text non-text-modify" href="modules_specific.php?modules_id=<?php echo $question['modules_id']; ?>">
                                            <?php echo '#' . htmlspecialchars($question['modules_name']) ?>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="show-question-info">
                                <div class="question-content">
                                    <p>
                                    <?php echo htmlspecialchars($question['content']) ?>
                                    </p>
                                </div>

                                <div class="question-content">
                                    <div class="content-show-code">
                                        <pre class="scrollable"><div class="answer-code"><?php echo htmlspecialchars($question['code']); ?></div></pre>
                                    </div>
                                </div>
                            </div>

                            <div class="question-image">
                                <?php if (!empty($question['image'])): ?>
                                    <img src="data:<?php echo $question['image_type']; ?>;base64,<?php echo base64_encode($question['image']); ?>" alt="Question Image" class="question-show-image">
                                <?php endif; ?>
                            </div>

                            <div class="show-question-info">
                                <div class="question-post-btn" onclick="toggleAnswerForm()">
                                        <i class="fa-solid fa-pen"></i>
                                        <a href="javascript:void(0);" class="button-modify" role="button">Post Answer</a>
                                </div>
                            </div>

                            <div class="answer-form">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="answer-form-container">
                                        <h2>Your Answer</h2>
                                        <textarea name="content" id="answer-form-text" placeholder="Write your answer here!"></textarea>
                                        <textarea name="code" id="answer-form-code" placeholder="Write your code here (If have)"></textarea>
                                        <h3>Make your answer clearly with image</h3>
                                        <input type="file" name="image">
                                    </div>
    
                                    <div class="answer-footer">
                                        <div class="thank-message">
                                            <i>
                                            Thanks for contributing an answer to DevTrek. Community!
                                            </i>
                                        </div>
                                            
                                        <button type="submit" name="answer">Submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                        <div class="question-show-profile-profile">
                            <div class="post-layout post-layout-width">
                                <div class="post-layout-container post-layout-container-question">
                                    <div class="flex-question">
                                        <div class="post-layout-avt post-layout-avt-question">
                                            <img src="assets/img/avttest.jpg" alt="" class="post-layout-avt-modify">
                                        </div>
    
                                        <div class="post-layout-content post-layout-content-main">
                                            <div class="post-layout-content-header">
                                                <div class="header-modify header-modify-block">
                                                    <div class="modify-authors">
                                                        <a href="authors_question.php?mem_id=<?php echo htmlspecialchars($question['mem_id']);?>" class="modify-authors-name modify-authors-name-question">
                                                        <?php echo htmlspecialchars($question['displayname']) ?>
                                                        </a> 
                                                    </div> 
                                                    
                                                    <div class="modify-authors">
                                                        <a href="" class="modify-authors-name modify-authors-name-id">
                                                        <?php echo '@' .  htmlspecialchars($question['username']) ?>
                                                        </a>
                                                    </div>  
                                                </div>                                            
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bookmark-btn bookmark-btn-question">
                                        <div class="bookmark-btn-modify">
                                            <form id="bookmarkForm" action="bookmark_question.php" method="post" style="display:none;">
                                                <input type="hidden" name="question_id" value="<?php echo $question['id']; ?>">
                                            </form>
                                            <i class="fa-solid fa-bookmark"></i>
                                            <h2 id="bookmarkHeading">BOOKMARK THIS QUESTION</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="post-social">
                                <div class="social-media">
                                    <i class="fa-brands fa-facebook"></i>
                                </div>

                                <div class="social-media">
                                    <i class="fa-brands fa-linkedin linkedin"></i>
                                </div>

                                <div class="social-media">
                                    <i class="fa-brands fa-telegram telegram"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>

                <h3 class="answer-count"> 
                    ANSWER
                </h3>
                
                <?php foreach ($answers as $answer): ?>
                    <div class="answer-showing">
                        <div class="answer-showing-container">
                            <div class="answer-flex">
                                <div class="answer-container">
                                    <div class="answer-container-header">
                                        <div class="header-date-time">
                                            <?php echo 'Answer at: ' . $answer['created_at']; ?></div>
                                    </div>
        
                                    <div class="answer-container-content">
                                        <p><?php echo nl2br(htmlspecialchars($answer['content']));?></p>
                                        <pre class="scrollable"><div class="answer-code"><?php echo htmlspecialchars($answer['code']); ?></div></pre>
        
                                        <div class="content-img">
                                            <?php if (!empty($answer['image'])): ?>
                                                <img src="data:<?php echo $answer['image_type']; ?>;base64,<?php echo base64_encode($answer['image']); ?>" alt="Answer Image">
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="answer-profile">
                                    <div class="post-layout post-layout-width post-layout-answer">
                                        <div class="post-layout-container post-layout-container-question">
                                            <div class="flex-question">
                                                <div class="post-layout-avt post-layout-avt-question">
                                                    <img src="assets/img/avttest.jpg" alt="" class="post-layout-avt-modify">
                                                </div>
            
                                                <div class="post-layout-content post-layout-content-main">
                                                    <div class="post-layout-content-header">
                                                        <div class="header-modify header-modify-block">
                                                            <div class="modify-authors">
                                                                <a href="authors_question.php?mem_id=<?php echo htmlspecialchars($question['mem_id']);?>" class="modify-authors-name modify-authors-name-question">
                                                                <?php echo htmlspecialchars($answer['displayname']); ?>
                                                                </a> 
                                                            </div> 
                                                            
                                                            <div class="modify-authors">
                                                                <a href="" class="modify-authors-name modify-authors-name-id">
                                                                <?php echo '@' .  htmlspecialchars($answer['username']) ?>
                                                                </a>
                                                            </div>  
                                                        </div>                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="split-hr">
                    </div>
                <?php endforeach; ?>    
            </div>
        </div>
    </div>
</body>
</html>
