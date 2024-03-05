<?php
session_start(); 
require_once('../config.php');

$username = $_SESSION['username'];
$email = $_SESSION['email'];

if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit;
}

$sql = "SELECT COUNT(*) AS total_users FROM users";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total_users = $row['total_users'];

$sql = "SELECT COUNT(*) AS total_admins FROM users WHERE role = 'admin'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total_admins = $row['total_admins'];

// Calculate the datetime 24 hours ago
$twenty_four_hours_ago = date('Y-m-d H:i:s', strtotime('-24 hours'));

$sql = "SELECT COUNT(*) AS new_users FROM users WHERE created_at >= '$twenty_four_hours_ago'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$new_users = $row['new_users'];

$sql = "SELECT COUNT(*) AS new_issues FROM issues WHERE created_at >= '$twenty_four_hours_ago'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$new_issues = $row['new_issues'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Page - NexusTech Solutions</title>
    <link rel="stylesheet" href="adminstyles.css">
    <style>
        main{
            font-size: x-large;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome, <?php echo $_SESSION['username']; ?> as Administrator!</h1>
        <a href="../Entry/entry.html" class="logout-link">
            <button class="logout-button">Logout</button>
        </a>
    </header>
    <main>
        <div class="container">
            <div class="bg">
                
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
                <section class="middle-sec">
                    <h2>Statistics</h2>
                    <ul>
                        <li>Total Users: <?php echo $total_users; ?></li>
                        <li>Total Admins: <?php echo $total_admins; ?></li>
                        <li>New Users (Last 24 Hours): <?php echo $new_users; ?></li>
                        <li>New Issues (Last 24 Hours): <?php echo $new_issues; ?></li>
                    </ul>
                </section>
                <section>
                    <h2>Manage Tickets</h2>
                    <ul>
                        <li><a href="view_tickets.php"><button>View All Tickets - Reply/ Remove</button></a></li>
                        <li><a href="search_tickets.php"><button>Search by Category - Reply/ Remove</button></a></li>
                    </ul>
                </section>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 NexusTech Solutions</p>
    </footer>
</body>
</html>

<?php

$conn->close();
?>
