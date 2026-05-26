<?php
require_once __DIR__ . '/db.php';

if (!isset($conn) || !$conn) {
    die('Database connection failed: ' . mysqli_connect_error());
}

$message = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        $check_sql = "SELECT * FROM users WHERE username = '$username'";
        $check_res = mysqli_query($conn, $check_sql);

        if (mysqli_num_rows($check_res) > 0) {
            $message = "ეს მომხმარებლის სახელი უკვე დაკავებულია!";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            
            $insert_sql = "INSERT INTO users (username, password, role) VALUES ('$username', '$hashed_password', 'user')";
            
            if (mysqli_query($conn, $insert_sql)) {
                $message = "რეგისტრაცია წარმატებით დასრულდა! შეგიძლიათ გაიაროთ ავტორიზაცია.";
            } else {
                $message = "შეცდომა რეგისტრაციისას: " . mysqli_error($conn);
            }
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
    <title>F1 - რეგისტრაცია</title>
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
        <form action="register.php" method="POST" class="auth-form">
            <h2>რეგისტრაცია</h2>
            
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

            <button type="submit" class="auth-btn">დარეგისტრირება</button>
            <p class="auth-switch">უკვე გაქვთ ანგარიში? <a href="login.php">შესვლა</a></p>
        </form>
    </div>

</body>
</html>