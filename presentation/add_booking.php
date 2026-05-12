<?php
require 'connection.php';

// prepared statement
$guest_id = 1;
$room_id  = 3;
$check_in = '2026-05-10';
$check_out = '2026-05-15';

try {
    $sql = "INSERT INTO bookings (guests_id, rooms_id, check_in, check_out) 
            VALUES (:g_id, :r_id, :c_in, :c_out)";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':g_id'  => $guest_id,
        ':r_id'  => $room_id,
        ':c_in'  => $check_in,
        ':c_out' => $check_out
    ]);

    echo "ჯავშანი წარმატებით დაემატა! ნომერი: " . $pdo->lastInsertId();
} catch (PDOException $e) {
    echo "ვერ მოხერხდა დაჯავშნა: " . $e->getMessage();
}
?>