<?php require_once('connect.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheetContactUs.css">
    <title>Contact Us</title>
    <style>
        img.bg{
             position: absolute;
             left: 0px;
             top: 69px;
             bottom: 10px;
             width: 100%;
             height: 100%;
             z-index: -1;
             padding-bottom: 0px;
             }
    </style>
</head>
<body>
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
                <li><span><a href="../contactUs/contactUsAdd.php">Contact Us</a></span></li>
                <li><span><a href="../aboutUs/About Us.php">About Us</a></span></li>
            </ul>
            <button class="user-button"><i class="fa-solid fa-user"></i>  user</button>
        </div>
        <div class="nav-bar-outer"></div>
    </div>

    <!--Content-->
    <img class="bg" src="./images/background3.png">
    <div class="container">
        <h1>Contact Us</h1>
        <p><b>Our customer service team is waiting to assist you</b><br>Please allow up to 2-business days respose time in order for us to fully address your inquiries.</p>

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
                    <li><a href="../technical_support_management_system/index.html">Home</a></li>
                    <li><a href="#">Tech Support</a></li>
                    <li><a href="#">Ticket Submission</a></li>
                    <li><a href="#">Downloads</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="contacts.html">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 NexusTech Solutions</p>
        </div>
    </footer>
</body>
</html>
<?php
	if(isset($_POST['submit'])){

	$sql = "INSERT INTO contact_us (name,email,contactNumber,comments) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['contactNumber']."','".$_POST['comments']."')";

	$result = mysqli_query($connection,$sql);
	if($result)
echo"<script> alert('Submitted Sucessfully') </script>";
else
echo"failed";

}

?>
