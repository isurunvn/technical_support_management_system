<?php
session_start(); 
require_once('../config.php'); ?>


<?php
$username = $_SESSION['username'];
$email = $_SESSION['email'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['delete_user'])) {
        $delete_username = $_POST['delete_username'];

        // Check if the user exists in the database
        $check_sql = "SELECT * FROM users WHERE username='$delete_username'";
        $result = $conn->query($check_sql);
        if ($result->num_rows > 0) {
            // Delete related records in the issues table first
            $delete_issues_sql = "DELETE FROM issues WHERE username='$delete_username'";
            if ($conn->query($delete_issues_sql) === TRUE) {
                // Proceed with deleting the user
                $delete_user_sql = "DELETE FROM users WHERE username='$delete_username'";
                if ($conn->query($delete_user_sql) === TRUE) {
                    echo "<script>alert('User deleted successfully');</script>";
                } else {
                    echo "<script>alert('Error: " . $delete_user_sql . "<br>" . $conn->error . "');</script>";
                }
            } else {
                echo "<script>alert('Error deleting related records: " . $conn->error . "');</script>";
            }
        } else {
            // User does not exist
            echo "<script>alert('User does not exist');</script>";
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
    <div class="content">
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
</div>
    <footer>
        <p>&copy; 2024 NexusTech Solutions</p>
    </footer>
</body>
</html>

<?php
$conn->close();
?>
