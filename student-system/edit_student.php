<?php
session_start();
require 'config/database.php';

$id = $_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM students WHERE id = ?");
$stmt->execute([$id]);
$student = $stmt->fetch();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $pdo->prepare("UPDATE students SET name=?, email=?, course=? WHERE id=?");
    $stmt->execute([
        $_POST['name'],
        $_POST['email'],
        $_POST['course'],
        $id
    ]);
    header("Location: students.php");
    exit();
}
?>

<?php include 'includes/header.php'; ?>

<h2>Edit Student</h2>

<form method="POST">
    <input type="text" name="name" value="<?= $student['name'] ?>" required>
    <input type="email" name="email" value="<?= $student['email'] ?>" required>
    <input type="text" name="course" value="<?= $student['course'] ?>" required>
    <button type="submit">Update</button>
</form>

<?php include 'includes/footer.php'; ?>
