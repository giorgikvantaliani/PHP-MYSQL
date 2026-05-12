<?php
require 'connection.php';

try {
    // 1. ვიწყებთ ტრანზაქციას
    $pdo->beginTransaction();

    // 2. ნაბიჯი პირველი: ჯავშნის დამატება (bookings ცხრილში)
    $sql_booking = "INSERT INTO bookings (guests_id, rooms_id, check_in, check_out) 
                    VALUES (:guest, :room, :in, :out)";
    $stmt_booking = $pdo->prepare($sql_booking);
    $stmt_booking->execute([
        ':guest' => 1,           
        ':room'  => 3,           
        ':in'    => '2026-06-01',
        ':out'   => '2026-06-05'
    ]);

    // ვიღებთ ახლახან შექმნილი ჯავშნის ID-ს, რომელიც payments ცხრილისთვის გვჭირდება
    $last_booking_id = $pdo->lastInsertId();

    // 3. ნაბიჯი მეორე: გადახდის დამატება (payments ცხრილში)
    $sql_payment = "INSERT INTO payments (booking_id, amount, status) 
                    VALUES (:b_id, :amount, :status)";
    $stmt_payment = $pdo->prepare($sql_payment);
    $stmt_payment->execute([
        ':b_id'   => $last_booking_id,
        ':amount' => 500,        // გადახდილი თანხა
        ':status' => 'completed'
    ]);

    // 4. თუ ორივე ოპერაცია წარმატებულია, ვადასტურებთ ტრანზაქციას
    $pdo->commit();
    echo "ჯავშანი და გადახდა წარმატებით დარეგისტრირდა!";

} catch (Exception $e) {

    $pdo->rollBack();
    echo "შეცდომა: ჯავშანი ვერ გაფორმდა. " . $e->getMessage();
}
?>