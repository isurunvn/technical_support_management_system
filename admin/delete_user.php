<?php
session_start(); 
require_once('../config.php'); ?>


<?php
$username = $_SESSION['username'];
$email = $_SESSION['email'];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['delete_user'])) {
        $delete_username = $_POST['delete_username'];

        $sql = "DELETE FROM users WHERE username='$delete_username'";
        
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('User deleted successfully');</script>";
        } else {
            echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
        }
    }
}
?>

<html>
<head>
    <title>Admin Page - NexusTech Solutions</title>
    <link rel="stylesheet" href="adminstyles.css">
</head>
<body>
    <header>
        <h1>Welcome, <?php echo $username; ?> as Administrator!</h1>
        <a href="admin.php" class="back-link">
            <button class="back-button">Back to dashboard</button>
        </a>
        <a href="../Entry/entry.html" class="logout-link">
            <button class="logout-button">Logout</button>
        </a>
    </header>
    <main>
        <section>
            <h2>Remove Users</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label for="delete_username">Username to Delete:</label>
                <input type="text" id="delete_username" name="delete_username" required><br><br>
                <div class="button-div">
                    <button type="submit" name="delete_user">Delete User</button>
                </div>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 NexusTech Solutions</p>
    </footer>
</body>
</html>

<?php
$conn->close();
?>
