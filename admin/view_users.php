<?php
session_start(); // Start the session

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

// Query to select all users
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Page - NexusTech Solutions</title>
    <link rel="stylesheet" href="adminstyles.css">
    <style>
        /* Add custom styles for scrollbar */
        .user-list-container {
            margin-top: 0px;
            height: 75%; 
            overflow: auto; 
        }
    </style>
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
            <h2>All UserNames and Emails</h2>
            <div class="user-list-container">
                <table>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                    </tr>
                    <?php
                    // Check if there are users in the database
                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["username"] . "</td>";
                            echo "<td>" . $row["email"] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>0 results</td></tr>";
                    }
                    ?>
                </table>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 NexusTech Solutions</p>
    </footer>
</body>
</html>
