<?php
require_once __DIR__ . '/db.php';

if (!isset($conn) || !$conn) {
    die('Database connection failed: ' . mysqli_connect_error());
}

$drivers_sql = "SELECT * FROM drivers LIMIT 6";
$drivers_result = mysqli_query($conn, $drivers_sql);

$circuits_sql = "SELECT * FROM circuits LIMIT 6";
$circuits_result = mysqli_query($conn, $circuits_sql);

$teams_sql = "SELECT * FROM teams LIMIT 6";
$teams_result = mysqli_query($conn, $teams_sql);

$races_sql = "SELECT races.*, circuits.name AS circuit_name 
              FROM races 
              LEFT JOIN circuits ON races.circuit_id = circuits.id 
              ORDER BY race_date ASC";
$races_result = mysqli_query($conn, $races_sql);

if (!$drivers_result || !$circuits_result || !$teams_result || !$races_result) {
    die('Query error: ' . mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <title>F1 Georgia - მთავარი გვერდი</title>
    <link rel="stylesheet" href="../css_folder/home.css">
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

    <section class="hero-history">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Formula 1-ის ისტორია</h1>
            <p>
                Formula 1 სათავეს იღებს 1950 წლიდან, როდესაც დიდი ბრიტანეთის სილვერსტოუნის ტრასაზე პირველი ოფიციალური გრან პრი გაიმართა. 
                ათწლეულების განმავლობაში სპორტმა განიცადა უდიდესი ევოლუცია — უბრალო, სახიფათო მანქანებიდან დღევანდელ ჰიბრიდულ, 
                ზეტექნოლოგიურ ინჟინერიის საოცრებებამდე. F1 არ არის მხოლოდ სიჩქარე, ეს არის გონების, სტრატეგიის, 
                ლეგენდარული პილოტებისა და გუნდების დაპირისპირება წამის მეასედებისთვის.
            </p>
        </div>
    </section>

    <main class="container">
        
        <h1 class="title">Formula 1-ის მრბოლელები</h1>
        <div class="drivers-grid" style="margin-bottom: 60px;">
            <?php if (mysqli_num_rows($drivers_result) > 0): ?>
                <?php while ($row = mysqli_fetch_assoc($drivers_result)): ?>
                    <div class="driver-card">
                        <img src="<?php echo htmlspecialchars($row['image_url']); ?>" alt="<?php echo htmlspecialchars($row['name']); ?>" class="driver-img">
                        <h3><?php echo htmlspecialchars($row['name']); ?> <span class="number">#<?php echo htmlspecialchars($row['number']); ?></span></h3>
                        <p class="bio"><?php echo htmlspecialchars($row['bio']); ?></p>
                        <a href="<?php echo htmlspecialchars($row['driver_website']); ?>" target="_blank" class="driver-link">ეწვიე ვებ-გვერდს</a>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>მრბოლელები ბაზაში არ მოიძებნა.</p>
            <?php endif; ?>
        </div>

        <h1 class="title">Formula 1-ის გუნდები</h1>
        <div class="drivers-grid" style="margin-bottom: 60px;">
            <?php if (mysqli_num_rows($teams_result) > 0): ?>
                <?php while ($row = mysqli_fetch_assoc($teams_result)): ?>
                    <div class="driver-card">
                        <img src="<?php echo htmlspecialchars($row['logo_url']); ?>" alt="<?php echo htmlspecialchars($row['name']); ?>" class="driver-img">
                        <h3><?php echo htmlspecialchars($row['name']); ?></h3>
                        <p class="bio">ოფიციალური Formula 1-ის კონსტრუქტორი, რომელიც ასპარეზობს მსოფლიო ჩემპიონატზე.</p>
                        <a href="<?php echo htmlspecialchars($row['website']); ?>" target="_blank" class="driver-link">გუნდის საიტი</a>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>გუნდები ბაზაში არ მოიძებნა.</p>
            <?php endif; ?>
        </div>

        <h1 class="title">ლეგენდარული ავტოდრომები</h1>
            <div class="drivers-grid" style="margin-bottom: 60px;">
                <?php if (mysqli_num_rows($circuits_result) > 0): ?>
                    <?php while ($row = mysqli_fetch_assoc($circuits_result)): ?>
                        <div class="driver-card">                            
                            <h3><?php echo htmlspecialchars($row['name']); ?> <span class="number"><?php echo htmlspecialchars($row['location']); ?></span></h3>
                            <p class="bio"><?php echo htmlspecialchars($row['description']); ?></p>
                            <a href="<?php echo htmlspecialchars($row['circuit_website']); ?>" target="_blank" class="driver-link">ტრასის შესახებ</a>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p>ავტოდრომები ბაზაში არ მოიძებნა.</p>
                <?php endif; ?>
            </div>

        <h1 class="title">F1 2026 წლის რბოლების კალენდარი</h1>
        <div class="table-wrapper" style="background-color: #2a2a32; padding: 25px; border-radius: 12px; overflow-x: auto; margin-bottom: 40px;">
            <table class="races-table" style="width: 100%; border-collapse: collapse; text-align: left;">
                <thead>
                    <tr style="border-bottom: 2px solid #3a3a45;">
                        <th style="padding: 16px 20px; color: #e10600; text-transform: uppercase; font-size: 13px;">ეტაპი</th>
                        <th style="padding: 16px 20px; color: #e10600; text-transform: uppercase; font-size: 13px;">გრან პრი</th>
                        <th style="padding: 16px 20px; color: #e10600; text-transform: uppercase; font-size: 13px;">ავტოდრომი</th>
                        <th style="padding: 16px 20px; color: #e10600; text-transform: uppercase; font-size: 13px; text-align: right;">რბოლის თარიღი</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $stage = 1;
                    if (mysqli_num_rows($races_result) > 0):
                        while ($row = mysqli_fetch_assoc($races_result)): 
                    ?>
                        <tr style="border-bottom: 1px solid #3a3a45;">
                            <td style="padding: 16px 20px;"><span style="background-color: #15151e; color: #aaa; padding: 4px 8px; border-radius: 4px; font-size: 13px; font-weight: bold;">#<?php echo $stage++; ?></span></td>
                            <td style="padding: 16px 20px;"><strong style="color: #ffffff; font-size: 16px;"><?php echo htmlspecialchars($row['race_name']); ?></strong></td>
                            <td style="padding: 16px 20px;"><span style="color: #999999;"><?php echo htmlspecialchars($row['circuit_name'] ?? 'TBA'); ?></span></td>
                            <td style="padding: 16px 20px; color: #e10600; font-weight: bold; text-align: right;"><?php echo htmlspecialchars($row['race_date']); ?></td>
                        </tr>
                    <?php 
                        endwhile; 
                    else:
                    ?>
                        <tr><td colspan="4" style="padding: 20px; text-align: center;">კალენდარი ცარიელია.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

    </main>

    <footer class="footer">
        <p>&copy; 2026 Formula 1 პროექტი. ყველა უფლება დაცულია.</p>
    </footer>

</body>
</html>