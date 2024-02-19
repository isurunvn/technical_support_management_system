<?php
session_start(); // Start the session

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page if not logged in
    header("Location: ../login.php");
    exit;
}

// Access username and email from session
$username = $_SESSION['username'];
$email = $_SESSION['email'];
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
                <li><button>Add User</button></li>
                <li><button>Edit User</button></li>
                <li><button>Delete User</button></li>
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
