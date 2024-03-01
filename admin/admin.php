<?php
session_start(); 
require_once('../config.php'); ?>


<?php
$username = $_SESSION['username'];
$email = $_SESSION['email'];

if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit;
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
        <div class=".container">
            <div class="bg">
                <img src="holo.gif">
            </div>
            <div class="content">
                    <section>
                    <h2>Manage Users</h2>
                    <ul>
                        <li><a href="view_users.php"><button>View Users</button></a></li>
                        <li><a href="add_user.php"><button>Add User</button></a></li>
                        <li><a href="search_user.php"><button>Update User</button></a></li>
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
            </div>
        
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
