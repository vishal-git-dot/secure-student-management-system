<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<?php include 'includes/header.php'; ?>

<h2>Dashboard</h2>
<p>Welcome, <?php echo $_SESSION['user']; ?></p>

<a href="students.php"><button>Manage Students</button></a>
<a href="logout.php"><button>Logout</button></a>

<?php include 'includes/footer.php'; ?>
