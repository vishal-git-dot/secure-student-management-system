<?php
session_start();
require 'config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $pdo->prepare("INSERT INTO students (name, email, course) VALUES (?, ?, ?)");
    $stmt->execute([
        $_POST['name'],
        $_POST['email'],
        $_POST['course']
    ]);

    header("Location: students.php");
    exit();
}
?>

<?php include 'includes/header.php'; ?>

<h2>Add Student</h2>

<form method="POST">
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="course" placeholder="Course" required>
    <button type="submit">Save</button>
</form>

<?php include 'includes/footer.php'; ?>
