<?php
session_start(); 


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

// Handle add user form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add_user'])) {
        $new_username = $_POST['new_username'];
        $new_email = $_POST['new_email'];
        $new_password = $_POST['new_password']; // Make sure to hash the password securely before storing it in the database
        $new_role = $_POST['new_role'];

        // Insert new user into the database
        $sql = "INSERT INTO users (username, email, password, role) VALUES ('$new_username', '$new_email', '$new_password', '$new_role')";
        
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('User added successfully');</script>";
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
        <a href="../Entry/entry.html" class="logout-link">
            <button class="logout-button">Logout</button>
        </a>
    </header>
    <main>
        <section>
            <h2>Add Users</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label for="new_username">Username:</label>
                <input type="text" id="new_username" name="new_username" required><br><br>
                <label for="new_email">Email:</label>
                <input type="email" id="new_email" name="new_email" required><br><br>
                <label for="new_password">Password:</label>
                <input type="password" id="new_password" name="new_password" required><br><br>
                <label for="new_role">Role:</label><br>
                <input type="radio" id="admin" name="new_role" value="admin" required>
                <label for="admin">Admin</label><br>
                <input type="radio" id="user" name="new_role" value="user" required>
                <label for="user">User</label><br><br>
                <div class="button-div">
                <button type="submit" name="add_user">Add User</button>
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
// Close MySQL connection
$conn->close();
?>
