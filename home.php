<?php
session_start(); 

if (!isset($_SESSION['username'])) {
    header("Location: Entry/login.php");
    exit;
}

$username = $_SESSION['username'];
$email = $_SESSION['email'];
?>

<html>
<head>
<title></title>
<link rel="icon" type="image/x-icon" href="favicon.png">

<link rel="stylesheet" href="./styles/homepagestyles.css">
<script src="https://kit.fontawesome.com/a65b5ae8d1.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="social-outer">
        <div class="social-inner-wrap">
            <div class="social-logo"><i class="fa-brands fa-youtube"></i></div>
            <div class="slide-context">YouTube</div>
        </div>
        <div class="social-inner-wrap">
            <div class="social-logo"><i class="fa-brands fa-facebook"></i></div>
            <div class="slide-context">Facebook</div>
        </div>
        <div class="social-inner-wrap">
            <div class="social-logo"><i class="fa-brands fa-instagram"></i></div>
            <div class="slide-context">Instagram</div>
        </div>
        <div class="social-inner-wrap">
            <div class="social-logo"><i class="fa-brands fa-twitter"></i></div>
            <div class="slide-context">Twitter</div>
        </div>
    </div>
    
    <div class="main-slider-outer" >
        <div class="nav-outer">
            <div class="logo-outer">
                <a href="home.php"><img class="main-slider-logo" src="images/logo-3.png" alt="logo img"></a>
            </div>
            <div class="nav-bar-context">
                <ul class="nav">
                    <li><span><a href="home.php">Home</a></span></li>
                    <li><span><a href="kb/kb.php">Tech Services</a></span></li>
                    <li><span><a href="aboutUs/Issu_Submission_Form.php">Issue Submission</a></span></li>
                    <li><span><a href="faq/faq.php">FAQs</a></span></li>
                    <li><span><a href="ContactUs/contactUsAdd.php">Contact Us</a></span></li>
                    <li><span><a href="aboutUs/About Us.php">About Us</a></span></li>
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
    
        <div class="middle-text-outer">
            <h1 class="troubles-text">Your Tech Troubles,</h1>
            <h2 class="solutions-text">Our Expert Solutions</h2>
        </div>

        <div class="middle-anime">
            <img class="middle-anime" src="images/nexustech.gif"/>
        </div>

    </div>

    <div class="about-wrapper">
        <div class="about-inner">
            <div class="about-text-outer">
                <h1 class="welcome-text">
                    Fast repairs
                </h1>
                <h1 class="enjoy-text">
                    right in your <br>neighborhood
                </h1>
            </div>
        </div>
        <div class="about-inner">
            <p>
                Welcome to our Technical Support Management System—a cutting-edge solution designed to streamline and 
                enhance your organization's technical support operations. In today's fast-paced and dynamic business 
                environment, efficient handling of technical issues is crucial for maintaining smooth operations and 
                ensuring customer satisfaction. Our system is meticulously crafted to empower your support teams, 
                optimize workflows, and deliver unparalleled efficiency in managing and resolving technical challenges.
            </p>
        </div>
        <div class="about-inner">
            <p>
                In this introduction section, we invite you to explore the key features and benefits that set our Technical 
                Support Management System apart. From ticket creation and assignment to tracking and resolution, our system
                 is engineered to provide a seamless and intuitive experience for both support agents and end-users. 
                 Experience a new level of organization, collaboration, and responsiveness as you navigate the complexities
                 of technical support with our user-friendly interface and robust functionality.
            </p>
        </div>
    </div>



    

    <div class="service-main-outer">
        <div class="service-inner">
            <div class="shadow-wrapper">
                <div class="show-wrapper">
                    <p><i class="fa-solid fa-gear"></i></p>
                    <h2>Technical Advices</h2>
                </div>
                <div class="hidden-wrapper">
                    <p>"Access expert technical advice and troubleshooting tips on our support management system website. Our platform offers comprehensive guidance to resolve technical issues efficiently, ensuring seamless operation of your systems and devices. From software glitches to hardware malfunctions, find the solutions you need to keep your technology running smoothly."</p>
                </div>
            </div>
        </div>
        <div class="service-inner">
            <div class="shadow-wrapper">
                <div class="show-wrapper">
                    <p><i class="fa-solid fa-mobile"></i></p>
                    <h2>Technical Accessories</h2>
                </div>
                <div class="hidden-wrapper">
                    <p>"Explore a wide range of essential technical accessories on our support management system website. From cables and adapters to peripherals and tools, we provide the accessories you need to optimize your technology setup. Enhance performance, connectivity, and productivity with our carefully curated selection of top-quality accessories designed to complement your devices seamlessly."</p>
                </div>
            </div>
        </div>
        <div class="service-inner">
            <div class="shadow-wrapper">
                <div class="show-wrapper">
                    <p><i class="fa-solid fa-laptop"></i></p>
                    <h2>Laptop Performance Boosting</h2>
                </div>
                <div class="hidden-wrapper">
                    <p>"Unlock the full potential of your laptop with our performance-boosting solutions on our technical support management system website. Discover expert tips, software optimizations, and hardware upgrades to enhance speed, efficiency, and overall performance. From optimizing startup processes to upgrading RAM and storage, we provide the tools and guidance to maximize your laptop's capabilities and productivity."</p>
                </div>
            </div>
        </div>
        <div class="service-inner">
            <div class="shadow-wrapper">
                <div class="show-wrapper">
                    <p><i class="fa-solid fa-handshake-angle"></i></p>
                    <h2>Tech Expert Help</h2>
                </div>
                <div class="hidden-wrapper">
                    <p>"Get personalized tech support from industry experts on our management system website. Our team of experienced professionals is ready to assist you with troubleshooting, software installations, hardware setups, and more. Access reliable guidance and solutions tailored to your specific needs, ensuring smooth operation and optimal performance of your technology."</p>
                </div>
            </div>
        </div>
    </div>

    <div class="whyUs-wrapper">
        <div class="whyUs-inner">
            <div class="about-text-outer">
                <h1 class="welcome-text">
                    Why do People
                </h1>
                <h1 class="enjoy-text">
                    Choose Us
                </h1>
            </div>
        </div>
        <br><br>
        <div class="whyUs-inner-2">
            <p>
                Proven Track Record of Success
            </p>
            <p>|</p>
            <p>
                Comprehensive and Innovative Solutions
            </p>
            <p>|</p>
            <p>
                Customer-Centric Approach
            </p>
            <p>|</p>
            <p>
                Cost-Effective Solutions
            </p>
        </div>
        <br>
        <div class="whyUs-inner-3">
            <p>
                Robust Security and Compliance Measures
            </p>
            <p>|</p>
            <p>
                Scalability and Flexibility
            </p>
            <p>|</p>
            <p>
                Proactive Support and Maintenance
            </p>
            <p>|</p>
            <p>
                User-Friendly Interface and Training
            </p>
        </div>
    </div>

    <div class="support-outer">
                <div class="support-circles">
                    <div class="support-circles-single">
                        <div class="support-circles-image">
                            <img src="./images/support-image-1.svg">
                        </div>
                        <div class="support-circles-name">Active support</div>
                    </div>
                    <div class="support-circles-single">
                        <div class="support-circles-image">
                            <img src="./images/support-image-2.svg">
                        </div>
                        <div class="support-circles-name">Instant support</div>
                    </div>
                    <div class="support-circles-single">
                        <div class="support-circles-image">
                            <img src="./images/support-image-3.svg">
                        </div>
                        <div class="support-circles-name">Connecting Teams</div>
                    </div>
                    <div class="support-circles-single">
                        <div class="support-circles-image">
                            <img src="./images/support-image-4.svg">
                        </div>
                        <div class="support-circles-name">Visionary technology</div>
                    </div>
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
                    <li><span><a href="home.php">Home</a></span></li>
                    <li><span><a href="kb/kb.php">Tech Services</a></span></li>
                    <li><span><a href="aboutUs/Issu_Submission_Form.php">Issue Submission</a></span></li>
                    <li><span><a href="faq/faq.php">FAQs</a></span></li>
                    <li><span><a href="ContactUs/contactUsAdd.php">Contact Us</a></span></li>
                    <li><span><a href="aboutUs/About Us.php">About Us</a></span></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 NexusTech Solutions</p>
        </div>
    </footer>

</body>
</html>