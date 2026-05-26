<?php
session_start();
require_once __DIR__ . '/db.php';

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: home.php");
    exit;
}

if (!isset($conn) || !$conn) {
    die('Database connection failed: ' . mysqli_connect_error());
}

if (isset($_POST['add_driver'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $number = (int)$_POST['number'];
    $bio = mysqli_real_escape_string($conn, $_POST['bio']);
    $image_url = mysqli_real_escape_string($conn, $_POST['image_url']);
    $website = mysqli_real_escape_string($conn, $_POST['driver_website']);

    mysqli_query($conn, "INSERT INTO drivers (name, number, bio, image_url, driver_website) VALUES ('$name', $number, '$bio', '$image_url', '$website')");
    header("Location: admin.php");
    exit;
}

if (isset($_POST['add_circuit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $length = (float)$_POST['length_km'];
    $image_url = mysqli_real_escape_string($conn, $_POST['image_url']);
    $website = mysqli_real_escape_string($conn, $_POST['circuit_website']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    mysqli_query($conn, "INSERT INTO circuits (name, location, length_km, image_url, circuit_website, description) VALUES ('$name', '$location', $length, '$image_url', '$website', '$description')");
    header("Location: admin.php");
    exit;
}

if (isset($_POST['add_team'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $logo_url = mysqli_real_escape_string($conn, $_POST['logo_url']);
    $website = mysqli_real_escape_string($conn, $_POST['website']);

    mysqli_query($conn, "INSERT INTO teams (name, logo_url, website) VALUES ('$name', '$logo_url', '$website')");
    header("Location: admin.php");
    exit;
}

if (isset($_GET['delete_driver'])) {
    $id = (int)$_GET['delete_driver'];
    mysqli_query($conn, "DELETE FROM drivers WHERE id = $id");
    header("Location: admin.php");
    exit;
}

if (isset($_GET['delete_circuit'])) {
    $id = (int)$_GET['delete_circuit'];
    
    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS = 0");
    mysqli_query($conn, "DELETE FROM races WHERE circuit_id = $id");
    mysqli_query($conn, "DELETE FROM circuits WHERE id = $id");
    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS = 1");
    
    header("Location: admin.php");
    exit;
}

if (isset($_GET['delete_team'])) {
    $id = (int)$_GET['delete_team'];
    mysqli_query($conn, "DELETE FROM teams WHERE id = $id");
    header("Location: admin.php");
    exit;
}

$drivers = mysqli_query($conn, "SELECT * FROM drivers");
$circuits = mysqli_query($conn, "SELECT * FROM circuits");
$teams = mysqli_query($conn, "SELECT * FROM teams"); // 🆕
?>
<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <title>F1 Georgia - ადმინ პანელი</title>
    <link rel="stylesheet" href="../css_folder/home.css">
    <link rel="stylesheet" href="../css_folder/admin.css"> </head>
<body>

    <header class="navbar">
        <div class="logo">F1 Georgia (Admin)</div>
        <nav>
            <a href="home.php">მთავარი</a>
            <a href="data.php">ყველა მონაცემი</a>
            <a href="admin.php">ადმინ პანელი</a>
        </nav>
    </header>

    <div class="admin-container">
        <h2>მართვის პანელი</h2>

        <div class="admin-box">
            <h3>ახალი მრბოლელის დამატება</h3>
            <form action="admin.php" method="POST">
                <div class="form-group">
                    <label>მრბოლელის სახელი და გვარი</label>
                    <input type="text" name="name" required placeholder="მაგ: Lewis Hamilton">
                </div>
                <div class="form-group">
                    <label>მრბოლელის ნომერი</label>
                    <input type="number" name="number" required placeholder="მაგ: 44">
                </div>
                <div class="form-group">
                    <label>ბიოგრაფია (მოკლე აღწერა)</label>
                    <textarea name="bio" rows="3" required placeholder="მოკლე ინფორმაცია მრბოლელზე..."></textarea>
                </div>
                <div class="form-group">
                    <label>ფოტოს ლინკი (URL)</label>
                    <input type="url" name="image_url" required placeholder="https://example.com/driver.png">
                </div>
                <div class="form-group">
                    <label>ოფიციალური ვებ-გვერდი</label>
                    <input type="url" name="driver_website" required placeholder="https://lewishamilton.com">
                </div>
                <button type="submit" name="add_driver" class="btn-submit">მრბოლელის დამატება</button>
            </form>
        </div>

        <div class="admin-box">
            <h3>ახალი ავტოდრომის დამატება</h3>
            <form action="admin.php" method="POST">
                <div class="form-group">
                    <label>ავტოდრომის სახელი</label>
                    <input type="text" name="name" required placeholder="მაგ: Spa-Francorchamps">
                </div>
                <div class="form-group">
                    <label>მდებარეობა (ქვეყანა, ქალაქი)</label>
                    <input type="text" name="location" required placeholder="მაგ: Stavelot, Belgium">
                </div>
                <div class="form-group">
                    <label>ტრასის სიგრძე (კმ)</label>
                    <input type="number" step="0.001" name="length_km" required placeholder="მაგ: 7.004">
                </div>
                <div class="form-group">
                    <label>ტრასის ფოტოს ლინკი (URL)</label>
                    <input type="url" name="image_url" required placeholder="https://example.com/circuit.jpg">
                </div>
                <div class="form-group">
                    <label>ოფიციალური F1 ლინკი</label>
                    <input type="url" name="circuit_website" required placeholder="https://www.formula1.com/...">
                </div>
                <div class="form-group">
                    <label>აღწერა</label>
                    <textarea name="description" rows="3" required placeholder="საინტერესო ფაქტები ტრასის შესახებ..."></textarea>
                </div>
                <button type="submit" name="add_circuit" class="btn-submit">ტრასის დამატება</button>
            </form>
        </div>

        <div class="admin-box">
            <h3>ახალი გუნდის დამატება</h3>
            <form action="admin.php" method="POST">
                <div class="form-group">
                    <label>გუნდის სახელი</label>
                    <input type="text" name="name" required placeholder="მაგ: Scuderia Ferrari">
                </div>
                <div class="form-group">
                    <label>ლოგოს / მანქანის ფოტოს ლინკი (URL)</label>
                    <input type="url" name="logo_url" required placeholder="https://example.com/ferrari.png">
                </div>
                <div class="form-group">
                    <label>ოფიციალური ვებ-გვერდი</label>
                    <input type="url" name="website" required placeholder="https://www.ferrari.com">
                </div>
                <button type="submit" name="add_team" class="btn-submit">გუნდის დამატება</button>
            </form>
        </div>

        <div class="admin-box">
            <h3>მონაცემების წაშლა / მართვა</h3>
            <div class="table-wrapper">
                
                <h4>მრბოლელები</h4>
                <table class="races-table" style="width:100%; margin-bottom: 30px;">
                    <thead>
                        <tr><th>სახელი</th><th>ნომერი</th><th>მოქმედება</th></tr>
                    </thead>
                    <tbody>
                        <?php while($d = mysqli_fetch_assoc($drivers)): ?>
                        <tr>
                            <td><strong style="color:#fff;"><?php echo htmlspecialchars($d['name']); ?></strong></td>
                            <td>#<?php echo $d['number']; ?></td>
                            <td><a href="admin.php?delete_driver=<?php echo $d['id']; ?>" class="delete-link" onclick="return confirm('ნამდვილად გსურთ მრბოლელის წაშლა?')">წაშლა</a></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>

                <h4>ავტოდრომები</h4>
                <table class="races-table" style="width:100%; margin-bottom: 30px;">
                    <thead>
                        <tr><th>ტრასის სახელი</th><th>მდებარეობა</th><th>მოქმედება</th></tr>
                    </thead>
                    <tbody>
                        <?php while($c = mysqli_fetch_assoc($circuits)): ?>
                        <tr>
                            <td><strong style="color:#fff;"><?php echo htmlspecialchars($c['name']); ?></strong></td>
                            <td><?php echo htmlspecialchars($c['location']); ?></td>
                            <td><a href="admin.php?delete_circuit=<?php echo $c['id']; ?>" class="delete-link" onclick="return confirm('ყურადღება! ტრასის წაშლით წაიშლება მასზე მიბმული რბოლებიც. გსურთ წაშლა?')">წაშლა</a></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>

                <h4>გუნდები</h4>
                <table class="races-table" style="width:100%;">
                    <thead>
                        <tr><th>გუნდის სახელი</th><th>მოქმედება</th></tr>
                    </thead>
                    <tbody>
                        <?php while($t = mysqli_fetch_assoc($teams)): ?>
                        <tr>
                            <td><strong style="color:#fff;"><?php echo htmlspecialchars($t['name']); ?></strong></td>
                            <td><a href="admin.php?delete_team=<?php echo $t['id']; ?>" class="delete-link" onclick="return confirm('ნამდვილად გსურთ გუნდის წაშლა?')">წაშლა</a></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2026 Formula 1 პროექტი. ყველა უფლება დაცულია.</p>
    </footer>

</body>
</html>