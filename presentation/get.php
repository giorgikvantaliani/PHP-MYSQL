<?php
require 'connection.php';

try {

    $stmt = $pdo->query("SELECT name, email, number FROM guests");
    $guests = $stmt->fetchAll();

    echo "<h2>სასტუმროს სტუმრები:</h2>";
    foreach ($guests as $guest) {
        echo "სახელი: " . htmlspecialchars($guest['name']) . " | ";
        echo "Email: " . htmlspecialchars($guest['email']) . " | ";
        echo "ტელ: " . htmlspecialchars($guest['number']) . "<br>";
    }
} catch (PDOException $e) {
    echo "შეცდომა: " . $e->getMessage();
}
?>