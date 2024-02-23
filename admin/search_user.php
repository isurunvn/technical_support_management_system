<?php
session_start(); 

// Access username and email from session
$username = $_SESSION['username'];
$email = $_SESSION['email'];

$servername = "localhost"; 
$username_db = "root"; 
$password_db = ""; 
$database = "nexustech"; 

$conn = new mysqli($servername, $username_db, $password_db, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search User - NexusTech Solutions</title>
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
            <h2>Search User</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label for="username">Enter Username to search for update: </label>
                <input type="text" id="username" name="username" required><br><br>
                <div class="button-div">
                <button type="submit" name="search_user">Search User</button>
                </div>
            </form>

            <?php
            // Check if the form is submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['search_user'])) {
                // Retrieve user details from the database based on the provided username
                $username = $_POST['username'];
                $sql = "SELECT * FROM users WHERE username='$username'";
                $result = $conn->query($sql);

                // Check if the user exists
                if ($result->num_rows > 0) {
                    $user = $result->fetch_assoc();
                    ?>
                    <!-- Display user details -->
                    <h3>User Details:</h3>
                    <p><strong>Username:</strong> <?php echo $user['username']; ?></p>
                    <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
                    <p><strong>Role:</strong> <?php echo $user['role']; ?></p>

                    <form method="post" action="update_user.php">
                        <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                        <div class="button-div">
                            <button type="submit" name="update_user">Update User</button>
                        </div>
                    </form>
                    <?php
                } else {
                    echo "User not found.";
                }
            }
            ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 NexusTech Solutions</p>
    </footer>
</body>
</html>
