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

<?php
session_start(); 

$username = $_SESSION['username'];
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheetContactUs.css">
    <script src="https://kit.fontawesome.com/a65b5ae8d1.js" crossorigin="anonymous"></script>
    <title>Contact Us</title>
</head>
<body>
    <div>
        <div class="bg">
        </div>
            <!--Header-->
        <div class="nav-outer">
            <div class="logo-outer">
                <img class="main-slider-logo" src="./images/logo-3.png"
                    alt="logo img">
            </div>
            <div class="nav-bar-context">
                <ul class="nav">
                    <li><span><a href="../home.php">Home</a></span></li>
                    <li><span><a href="../kb/kb.php">Tech Services</a></span></li>
                    <li><span><a href="../aboutUs/Issu_Submission_Form.php">Ticket Submission</a></span></li>
                    <li><span><a href="../faq/faq.php">FAQs</a></span></li>
                    <li><span><a href="../ContactUs/contactUsAdd.php">Contact Us</a></span></li>
                    <li><span><a href="../aboutUs/About Us.html">About Us</a></span></li>
                </ul>
                <div class="user-dropdown">
                        <button class="user-button"><i class="fa-solid fa-user"><p><?php echo $username; ?></p></i></button>
                        <div class="dropdown-content">
                            <a href="../Entry/entry.html">Logout</a>
                        </div>
                </div>  
            </div>
            <div class="nav-bar-outer"></div>
        </div>

        <!--Content-->
        <div class="container">
            <div class= "heading">
                <h1>Contact Us</h1>
                <p><b>Our customer service team is waiting to assist you</b><br>Please allow up to 2-business days respose time in order for us to fully address.</p>
            </div>
            <div class="contact-box">
                <div class="contact-left">
                    <form action= '' method='POST'>
                        <h1 align="center">Contact Us</h1>
                        <fieldset>
                        <legend><h4>Details:</h4></legend><br>
                        Name : <input type="text" name="name" placeholder="username" required><br><br>
                        Email : <input type="email" name="email"placeholder="abc@gmail.com" required><br><br>
                        Contact Number : <input type="text" name="contactNumber" placeholder="01123456789" required><br><br>
                        Comments : <br><textarea name="comments" rows="5" cols="20" placeholder="Please add your comments" required></textarea><br>
                        </fieldset><br>
                        <button type="submit" name="submit"><b>Submit</b></button>
                        </form>
            </div>
            <div class="contact-right">
                <h3>Reach Us</h3>

                <table>
                    <tr>
                        <td><a href="nexustechsolutions@gmail.com"><img class="email" src="./images/gmail_bw.png" alt="email"></a>Email</td>
                        <td>nexustechsolutions@gmail.com</td>
                    </tr>
                    <tr>
                        <td><a href="#"><img class="connumber" src="./images/phone.png" alt="contactnumber"></a>Contact Number</td>
                        <td>+9411 256 8480</td>
                    </tr>
                    <tr>
                        <td><a href="https://maps.app.goo.gl/KaLwfRhz48BZENSJ9" target="_blank"><img class="address" src="./images/location.png" alt="Location"></a>Address</td>
                        <td>No.5, Church Lane, <br>Colombo 05 Sri Lanka</td>
                    </tr>
                </table>

                <div class="social_media">
                    <table>
                        <tr>
                            <td><a href="https://web.facebook.com/" target="_blank"><img src="./images/facebook.png" alt="Facebook"></a></td>
                            <td><a href="https://www.instagram.com/" target="_blank"><img src="./images/instagram.png" alt="Instagram"></a></td>
                            <td><a href="https://www.linkedin.com/" target="_blank"><img src="./images/linkedin.png" alt="Linkedin"></a></td>
                            <td><a href="https://www.youtube.com/" target="_blank"><img src="./images/youtube.png" alt="Youtube"></a></td>
                            <td><a href="https://web.whatsapp.com/" target="_blank"><img src="./images/whatsapp.png" alt="Whatsapp"></a></td>
                            <td><a href="https://www.tiktok.com/" target="_blank"><img src="./images/titok.png" alt="TikTok"></a></td>
                        </tr>
                    </table>
                </div>
            </div>
            </div>
        </div>

        <!--Footer-->
        <footer>
            <div class="footer-content">
                <div class="footer-section">
                    <h2>Contact Us</h2>
                    <p>Email: support@example.com</p>
                    <p>Phone: +1 123 456 7890</p>
                </div>
                <div class="footer-section">
                    <h2>Quick Links</h2>
                    <ul>
                            <li><a href="../home.php">Home</a></li>
                            <li><a href="../kb/kb.php">Tech Support</a></li>
                            <li><a href="../aboutUs/Issu_Submission_Form.php">Ticket Submission</a></li>
                            <li><a href="../faq/faq.php">FAQs</a></li>
                            <li><a href="../aboutUs/About Us.html">About Us</a></li>
                            <li><a href="../ContactUs/contactUsAdd.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 NexusTech Solutions</p>
            </div>
        </footer>
    </div>
</body>
</html>
<?php
	if(isset($_POST['submit'])){

	$sql = "INSERT INTO contact (name,email,contactNumber,comments) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['contactNumber']."','".$_POST['comments']."')";

	$result = mysqli_query($connection,$sql);
	if($result)
echo"<script> alert('Submitted Sucessfully') </script>";
else
echo"failed";

}

?>
