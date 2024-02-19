<?php
session_start(); 

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page if not logged in
    header("Location: ../login.php");
    exit;
}

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
            <h2>Manage Users</h2>
            <ul>
                <li><a href="view_users.php"><button>View Users</button></a></li>
                <li><a href="add_user.php"><button>Add User</button></a></li>
                <li><a href="delete_user.php"><button>Delete User</button></a></li>
            </ul>
        </section>
        <section>
            <h2>Manage Tickets</h2>
            <ul>
                <li><button>View Tickets</button></li>
                <li><button>Assign Tickets</button></li>
                <li><button>Close Tickets</button></li>
            </ul>
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
