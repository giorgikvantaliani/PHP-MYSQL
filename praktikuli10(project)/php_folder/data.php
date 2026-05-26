<?php

require_once __DIR__ . '/db.php';

if (!isset($conn) || !$conn) {
    die('Database connection failed: ' . mysqli_connect_error());
}


$drivers_res  = mysqli_query($conn, "SELECT * FROM drivers");
$teams_res    = mysqli_query($conn, "SELECT * FROM teams");
$circuits_res = mysqli_query($conn, "SELECT * FROM circuits");
$races_res    = mysqli_query($conn, "SELECT races.*, circuits.name AS circuit_name FROM races LEFT JOIN circuits ON races.circuit_id = circuits.id");
$users_res    = mysqli_query($conn, "SELECT id, username, role FROM users");
?>

<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <title>F1 - ყველა მონაცემი</title>
    <link rel="stylesheet" href="../css_folder/programs.css">
</head>
<body>
    <header class="navbar">
        <div class="logo">F1 Georgia</div>
        <nav>
            <a href="home.php">მთავარი</a>
            <a href="data.php">ყველა მონაცემი</a>
            <a href="admin.php">ადმინ პანელი</a>
        </nav>

        <div class="auth-buttons">
            <a href="login.php" class="btn-login">ავტორიზაცია</a>
            <a href="register.php" class="btn-register">რეგისტრაცია</a>
        </div>

    </header>
    <main class="container">
        <h1 class="page-title">მონაცემთა ბაზის სრული ინფორმაცია</h1>

        <section class="table-section">
            <h2>1. მრბოლელები (Drivers)</h2>
            <table class="f1-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>სახელი</th>
                        <th>ნომერი</th>
                        <th>ბიოგრაფია</th>
                    </tr>
                </thead>

                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($drivers_res)): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['id']); ?></td>
                            <td><strong><?php echo htmlspecialchars($row['name']); ?></strong></td>
                            <td>#<?php echo htmlspecialchars($row['number']); ?></td>
                            <td><?php echo htmlspecialchars($row['bio']); ?></td>
                        </tr>

                    <?php endwhile; ?>
                </tbody>
            </table>
        </section>

        <section class="table-section">
            <h2>2. გუნდები (Teams)</h2>
            <table class="f1-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>გუნდის სახელი</th>
                        <th>ვებ-გვერდი</th>
                    </tr>
                </thead>
                <tbody>

                    <?php while ($row = mysqli_fetch_assoc($teams_res)): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['id']); ?></td>
                            <td><?php echo htmlspecialchars($row['name']); ?></td>
                            <td><a href="<?php echo htmlspecialchars($row['website']); ?>" target="_blank">გადასვლა</a></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </section>

        <section class="table-section">
            <h2>3. ავტოდრომები (Circuits)</h2>
            <table class="f1-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ტრასის სახელი</th>
                        <th>მდებარეობა</th>
                        <th>სიგრძე (კმ)</th>
                    </tr>
                </thead>
                <tbody>

                    <?php while ($row = mysqli_fetch_assoc($circuits_res)): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['id']); ?></td>
                            <td><?php echo htmlspecialchars($row['name']); ?></td>
                            <td><?php echo htmlspecialchars($row['location']); ?></td>
                            <td><?php echo htmlspecialchars($row['length_km']); ?> კმ</td>
                        </tr>

                    <?php endwhile; ?>
                </tbody>
            </table>
        </section>

        <section class="table-section">
            <h2>4. რბოლების კალენდარი (Races)</h2>
            <table class="f1-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>გრან პრი</th>
                        <th>ტრასა (კავშირი)</th>
                        <th>თარიღი</th>
                    </tr>
                </thead>
                <tbody>

                    <?php while ($row = mysqli_fetch_assoc($races_res)): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['id']); ?></td>
                            <td><?php echo htmlspecialchars($row['race_name']); ?></td>
                            <td><?php echo htmlspecialchars($row['circuit_name'] ?? 'არ არის მიბმული'); ?></td>
                            <td><?php echo htmlspecialchars($row['race_date']); ?></td>
                        </tr>

                    <?php endwhile; ?>

                </tbody>
            </table>
        </section>

        <section class="table-section">
            <h2>5. დარეგისტრირებული მომხმარებლები (Users)</h2>
            <table class="f1-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>მომხმარებლის სახელი</th>
                        <th>როლი (უფლება)</th>
                    </tr>
                </thead>
                <tbody>

                    <?php while ($row = mysqli_fetch_assoc($users_res)): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['id']); ?></td>
                            <td><?php echo htmlspecialchars($row['username']); ?></td>
                            <td><span class="role-badge <?php echo $row['role']; ?>"><?php echo htmlspecialchars($row['role']); ?></span></td>
                        </tr>

                    <?php endwhile; ?>
                </tbody>
            </table>
        </section>
    </main>

    <footer class="footer">
        <p>&copy; 2026 Formula 1 პროექტი. ყველა უფლება დაცულია.</p>
    </footer>

</body>
</html> 