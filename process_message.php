<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['nama'];
    $email = $_POST['email'];
    $message = $_POST['pesan'];

    $stmt = $conn->prepare('INSERT INTO messages (name, email, message) VALUES (?, ?, ?)');
    $stmt->bind_param("sss", $name, $email, $message);
    $stmt->execute();
    $stmt->close();

    header('Location: index.php?section=contact&success=1');
    exit();
}
?>
