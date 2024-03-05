<?php
session_start();
require_once('../config.php');

$username = $_SESSION['username'];
$email = $_SESSION['email'];

if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['delete_issue'])) {
        $delete_issue_id = $_POST['delete_issue_id'];

        $sql = "DELETE FROM issues WHERE issue_id='$delete_issue_id'";
        
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Issue deleted successfully');</script>";
        } else {
            echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
        }
    }
}

$sql = "SELECT * FROM issues";
$category_filter = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['category_filter'])) {
        $category_filter = $_POST['category_filter'];
        if ($category_filter != "all") {
            $sql .= " WHERE category = '$category_filter'";
        }
    }
}

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Tickets - NexusTech Solutions</title>
    <link rel="stylesheet" href="adminstyles.css">
    <style>
        table{
            margin-top:25px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome, <?php echo $_SESSION['username']; ?> as Administrator!</h1>
        <a href="admin.php" class="back-link">
            <button class="back-button">Back to dashboard</button>
        </a>
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
                    <h2>View Tickets</h2>
                    <form method="post">
                        <label for="category_filter">Filter by Category:</label>
                        <select name="category_filter" id="category_filter">
                            <option value="all">All Categories</option>
                            <option value="Computer">Computer</option>
                            <option value="Email">Email</option>
                            <option value="Network">Network</option>
                            <option value="Phone">Phone</option>
                            <option value="Other">Other</option>
                        </select>
                        <button type="submit">Search</button>
                    </form>
                    <table>
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Category</th>
                                <th>Problem</th>
                                <th>Reply</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row['first_name'] . "</td>";
                                    echo "<td>" . $row['last_name'] . "</td>";
                                    echo "<td>" . $row['email'] . "</td>";
                                    echo "<td>" . $row['phone'] . "</td>";
                                    echo "<td>" . $row['category'] . "</td>";
                                    echo "<td>" . $row['problem'] . "</td>";
                                    echo "<td><a href='mailto:" . $row['email'] . "'><button>Reply</button></a></td>";
                                    echo "<td>
                                            <form method='post' onsubmit='return confirm(\"Are you sure you want to delete this issue?\");'>
                                                <input type='hidden' name='delete_issue_id' value='" . $row['issue_id'] . "'>
                                                <button type='submit' name='delete_issue'>Remove</button>
                                            </form>
                                        </td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='8'>No tickets found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
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
// Close MySQL connection
$conn->close();
?>
