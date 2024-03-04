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
 
<!DOCTYPE html>
<html>
<head>

<title>
    Service Request Form
</title>

<meta charseet ="utf-8">
<meta name="viewport" content="width=device-width, initial scale=1.0">
<link rel="stylesheet" type="text/css" href="Issue Submission Form.css">

</head>

<body>

    <div class="nav-outer">
        <div class="logo-outer">
            <a href="home.html"><img class="main-slider-logo" src="images/logo-3.png" alt="logo img"></a>
        </div>
        <div class="nav-bar-context">
            <ul class="nav">
                <li><span><a href="home.html">Home</a></span></li>
                <li><span><a href="">Tech Services</a></span></li>
                <li><span><a href="">Ticket Submission</a></span></li>
                <li><span><a href="">Downloads</a></span></li>
                <li><span><a href="">FAQs</a></span></li>
                <li><span><a href="">Contact Us</a></span></li>
                <li><span><a href="">About Us</a></span></li>
            </ul>
            <div class="user-dropdown">
                <button class="user-button"><i class="fa-solid fa-user"><p><?php echo $username; ?></p></i></button>
                <div class="dropdown-content">
                    <a href="Entry/entry.html">Logout</a>
                </div>
            </div>            
        </div>
        <div class="nav-bar-outer"></div>
    </div>

    <div class="ticket_submission">

    <h1> Service Request Form </h1>
    
    <div class="details">
    <form>

        <div class="first_name">
        <label for="first_name">First Name:</label><br>
        <input type="text" class="text_name" name="first_name" required>
        </div>

        <div class="last_name">
        <label for="last_name">Last Name:</label><br>
        <input type="text" id="last_name" name="last_name" required>
        </div>

        <div class="email">
        <label for="email">Email Address:</label><br>
        <input type="email" id="email" required name="email" >
        </div>

        <div class="Phone_no">
        <label for="phone">Phone Number:</label><br>
        <input type="tel" id="phone" required name="phone" >
        </div>

        <div class="Problem_cat">
        <label for="cars">Problem Category:</label><br>
        <select id="Problem Category" name="problem" required style="width: 507px; height: 32px; font-size: 20px;  border-radius: 10px;">
        <option style="font-size: 20px;" value="">Please Select</option>
        <option style="font-size: 20px;" value="Computer">Computer</option>
        <option style="font-size: 20px;" value="Email">Email</option>
        <option style="font-size: 20px;" value="Network">Network</option>
        <option style="font-size: 20px;" value="Phone">Phone</option>
        <option style="font-size: 20px;" value="Other">Other</option>
       </select>
       </div>
       
       <div class="Discription">
        <label for="multiline-input">Please explain the issue you're experiencing <br>
            (with as much detail as possible):</label><br>
        <textarea id="multiline-input" name="multiline-input" rows="5" cols="50"></textarea>
       </div>
        
       <div class="submit_button">
       <form action="/submit" method="post">
       <input type="submit" value="Submit">
       </div>
</form>
       </div>

      </div>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h2>Contact Us</h2>
                <p>Email: nexustech@support.com</p>
                <p>Phone: +1 123 456 7890</p>
            </div>
            <div class="footer-section">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="home.html">Home</a></li>
                    <li><a href="#">Tech Support</a></li>
                    <li><a href="#">Ticket Submission</a></li>
                    <li><a href="#">Downloads</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 NexusTech Solutions</p>
        </div>
    </footer>

    </body>
</html>