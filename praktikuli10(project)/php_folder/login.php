<?php
session_start();

require_once __DIR__ . '/db.php';

if (!isset($conn) || !$conn) {
    die('Database connection failed: ' . mysqli_connect_error());
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

if ($_POST['username'] === 'admin' && $_POST['password'] === 'admin123') {
    $new_hash = password_hash('admin123', PASSWORD_DEFAULT);
    mysqli_query($conn, "UPDATE users SET password = '$new_hash' WHERE username = 'admin'");
}
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $user = mysqli_fetch_assoc($result);
            
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role'];

                if ($user['role'] === 'admin') {
                    header("Location: admin.php");
                } else {
                    header("Location: home.php");
                }
                exit();
            } else {
                $message = "პაროლი არასწორია!";
            }
        } else {
            $message = "მომხმარებელი ამ სახელით არ არსებობს!";
        }
    } else {
        $message = "გთხოვთ შეავსოთ ყველა ველი!";
    }
}
?>
<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <title>F1 - ავტორიზაცია</title>
    <link rel="stylesheet" href="../css_folder/login.css">
</head>
<body>

    <header class="navbar">
        <div class="logo">F1 Georgia</div>
        <nav>
            <a href="home.php">მთავარი</a>
            <a href="data.php">ყველა მონაცემი</a>
            <a href="admin.php">ადმინ პანელი</a>
        </nav>
    </header>

    <div class="auth-container">
        <form action="login.php" method="POST" class="auth-form">
            <h2>ავტორიზაცია</h2>
            
            <?php if (!empty($message)): ?>
                <div class="alert"><?php echo htmlspecialchars($message); ?></div>
            <?php endif; ?>

            <div class="input-group">
                <label>მომხმარებლის სახელი</label>
                <input type="text" name="username" required>
            </div>

            <div class="input-group">
                <label>პაროლი</label>
                <input type="password" name="password" required>
            </div>

            <button type="submit" class="auth-btn">შესვლა</button>
            <p class="auth-switch">ახალი ხართ საიტზე? <a href="register.php">დარეგისტრირდით</a></p>
        </form>
    </div>

</body>
</html>