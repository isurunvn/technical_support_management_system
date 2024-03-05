<?php
session_start(); 

$username = $_SESSION['username'];
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>
    About Us 
</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="About Us.css">
<script src="https://kit.fontawesome.com/a65b5ae8d1.js" crossorigin="anonymous"></script>

</head>

<body>
    <div>
            <div class="bg">
            </div>
            <div class="nav-outer">
                <div class="logo-outer">
                    <a href="home.php"><img class="main-slider-logo" src="images/logo-3.png" alt="logo img"></a>
                </div>
                <div class="nav-bar-context">
                    <ul class="nav">
                        <li><span><a href="../home.php">Home</a></span></li>
                        <li><span><a href="../kb/kb.php">Tech Services</a></span></li>
                        <li><span><a href="Issu_Submission_Form.php">Issue Submission</a></span></li>
                        <li><span><a href="../faq/faq.php">FAQs</a></span></li>
                        <li><span><a href="../ContactUs/contactUsAdd.php">Contact Us</a></span></li>
                        <li><span><a href="About Us.php">About Us</a></span></li>
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
            
            <div class="About_us">
                <h1> ABOUT US </h1>
            </div>
        
        
        <div class="content">
        
        <div class="Who_are_we">
        
            <h2>
                Who We Are
            </h2>
        
            <div class="img">
                <img class="clip_art" src="images\who we are.png" alt="img1">
            </div>
            
        <p>
            <strong>We are NexusTech Solutions.</strong><br><br> At NexusTech Solutions, we recognized the importance of technology in your day to day life and business operations.Therefore we decided to provide high quality technical support to ensure your system run smoothly and efficiently.
            </p>
        </div>
        
        <div class="Our_Mission">
        
            <h2>
                Our Mission
            </h2>
        
            <div class="img">
                <img class="clip_art" src="images\our mission.png" alt="img1">
            </div>
        
            <p>
                Our Misson is to support individuals and bussinesses by delivering technical  solutions for there unique needs. We need to be your trusted partner by guiding you in the complex modern technology.
            </p>
        
        </div>
        
        <div class="Get_in_Touch">
        
            <h2>
                Get in Touch
            </h2>
        
            <div class="img">
                <img class="clip_art" src="images\get in touch.png" alt="img1">
            </div>
            
            <p>
            Ready to expereince the superior technical support?
            Feel free anytime to contact us to get more information about our woek and services.
            <br>
                Thank you for choosing NexusTech Solutions
            </p>
        </div>
        
        </div>
        
        <div class="Our_Team">
        
            <h2>
                Our Team 
            </h2>
        
            <div class="img">
                <img class="clip_art" src="images\our team.png" alt="img1">
            </div>
        
            <p >
                With highly qualified and experienced team, we are able to understand the wide range of technologies, from hardware to software and from networking to cybersecurity.
            </p>
        </div>
        
        <div class="Profiles">
        
        <div class="Members">
            <img class="DP" src="images\WhatsApp Image 2024-02-18 at 15.14.32_e1c945db.jpg">
            
            <p class="name">
                Januli Nanayakkara
            </p>
        </div>
        
        <div class="Members">
            <img class="DP" src="images\IMG_20230110_142637-01-01.jpeg.jpg">
        
            <p class="name">
                Tharusha Nemantha
            </p>
        </div>
        
        <div class="Members">
            <img class="DP" src="images\Sandith.jpg">
        
            <p class="name">
                Sandith Moras
            </p>
        </div>
        
        <div class="Members">
            <img class="DP" src="images\Dulmini.jpg">
        
            <p class="name">
                Dulmini Nurekah
            </p>
        </div>
        
        <div class="Members">
            <img class="DP" src="images\Isuru.png">
        
            <p class="name">
                Isuru Naveen
            </p>
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
                        <li><span><a href="../home.php">Home</a></span></li>
                        <li><span><a href="../kb/kb.php">Tech Services</a></span></li>
                        <li><span><a href="Issu_Submission_Form.php">Issue Submission</a></span></li>
                        <li><span><a href="../faq/faq.php">FAQs</a></span></li>
                        <li><span><a href="../ContactUs/contactUsAdd.php">Contact Us</a></span></li>
                        <li><span><a href="About Us.php">About Us</a></span></li>
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

