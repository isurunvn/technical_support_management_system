<?php
session_start(); 
require_once('../config.php'); ?>


<?php
$username = $_SESSION['username'];
$email = $_SESSION['email'];

// Access username and email from session
$username = $_SESSION['username'];
$email = $_SESSION['email'];


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_user'])) {
    $user_id = $_POST['user_id'];
    $new_username = isset($_POST['new_username']) ? $_POST['new_username'] : '';
    $new_email = isset($_POST['new_email']) ? $_POST['new_email'] : '';
    $new_role = isset($_POST['new_role']) ? $_POST['new_role'] : '';

    // Validate form data
    if (empty($new_username) || empty($new_email) || empty($new_role)) {
        echo "<script>alert(Error: Please fill in all required fields.);</script>";
    } else {
        // Update user details in the database
        $sql = "UPDATE users SET username='$new_username', email='$new_email', role='$new_role' WHERE id='$user_id'";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('User details updated successfully');</script>";
        } else {
            echo "<script>alert('Error updating user details: " . $conn->error . "');</script>";
        }
    }
}

// Retrieve user details to pre-fill the form fields
if (isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];
    $sql = "SELECT * FROM users WHERE id='$user_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $default_username = $user['username'];
        $default_email = $user['email'];
        $default_role = $user['role'];
    } else {
        echo "User not found.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update User - NexusTech Solutions</title>
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
            <h2>Update User</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <input type="hidden" name="user_id" value="<?php echo isset($_POST['user_id']) ? $_POST['user_id'] : ''; ?>">
                <label for="new_username">New Username:</label>
                <input type="text" id="new_username" name="new_username" value="<?php echo isset($default_username) ? $default_username : ''; ?>" required><br><br>
                <label for="new_email">New Email:</label>
                <input type="email" id="new_email" name="new_email" value="<?php echo isset($default_email) ? $default_email : ''; ?>" required><br><br>
                <label for="new_role">New Role:</label>
                <select id="new_role" name="new_role">
                    <option value="user" <?php echo isset($default_role) && $default_role == 'user' ? 'selected' : ''; ?>>User</option>
                    <option value="admin" <?php echo isset($default_role) && $default_role == 'admin' ? 'selected' : ''; ?>>Admin</option>
                </select><br><br>
                <div class="button-div">
                    <button type="submit" name="update_user">Update User</button>
                </div>            
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 NexusTech Solutions</p>
    </footer>
</body>
</html>
