<?php
session_start();
require 'config/database.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$stmt = $pdo->query("SELECT * FROM students");
$students = $stmt->fetchAll();
?>

<?php include 'includes/header.php'; ?>

<h2>Students</h2>
<a href="add_student.php"><button>Add Student</button></a>

<table border="1" width="100%" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Course</th>
    <th>Action</th>
</tr>

<?php foreach ($students as $student): ?>
<tr>
    <td><?= $student['id'] ?></td>
    <td><?= $student['name'] ?></td>
    <td><?= $student['email'] ?></td>
    <td><?= $student['course'] ?></td>
    <td>
        <a href="edit_student.php?id=<?= $student['id'] ?>">Edit</a>
        <a href="delete_student.php?id=<?= $student['id'] ?>">Delete</a>
    </td>
</tr>
<?php endforeach; ?>
</table>

<?php include 'includes/footer.php'; ?>
