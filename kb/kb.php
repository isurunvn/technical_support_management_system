<?php
session_start(); // Start the session

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page if not logged in
    header("Location: ../Entry/login.php");
    exit;
}

// Access username and email from session
$username = $_SESSION['username'];
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knowledge Nexus</title>
    <script src="https://kit.fontawesome.com/a65b5ae8d1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="kb.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div>
        <div class="bg">
        </div>
        <div class="content-wrapper">
            <div class="nav-outer">
                <div class="logo-outer">
                    <img class="main-slider-logo" src="../images/logo-3.png" alt="logo img">
                </div>
                <div class="nav-bar-context">
                    <ul class="nav">
                        <li><span><a href="../home.php">Home</a></span></li>
                        <li><span><a href="../kb/kb.php">Tech Services</a></span></li>
                        <li><span><a href="../aboutUs/Issu_Submission_Form.php">Issue Submission</a></span></li>
                        <li><span><a href="../faq/faq.php">FAQs</a></span></li>
                        <li><span><a href="../ContactUs/contactUsAdd.php">Contact Us</a></span></li>
                        <li><span><a href="../aboutUs/About Us.html">About Us</a></span></li>
                    </ul>
                    <div class="user-dropdown">
                        <button class="user-button" type="button" title="User Profile"><i class="fa-solid fa-user"><p><?php echo $username; ?></p></i></button>
                        <div class="dropdown-content">
                            <a href="../Entry/entry.html">Logout</a>
                        </div>
                    </div>  
                </div>
                <div class="nav-bar-outer"></div>
            </div>
        
        
            <h3 class="title">Knowledge Nexus</h3>

            <div class="container">
                <div class="card">
                    <div class="icon">
                        <img src="images/image1.jpg">
                    </div>
                    <div class="content">
                        <h3>Trouble Shooting Laptop Issues</h3>

                        <p>Troubleshoot laptop issues by optimizing performance, addressing hardware malfunctions, and resolving software glitches such as system crashes and other errors. Utilize tools like Task Manager, update drivers, and perform regular maintenance tasks.
                            If problems persist, seek professional assistance and ensure data backup.For laptop troubleshooting, tackle slowdowns, hardware glitches, and software issues with disk cleanup.</p>
                        <br/>
                        <button class="btn" onclick="window.location.href='articles/article1.pdf'" download><i class="fa fa-download"></i> Download PDF</button>
                    </div>
                    <br/>

                    <a class="more"></a>
                    <br/>
                </div>

                <div class="card">
                    <div class="icon">
                        <img src="images/image3.jpg">
                    </div>
                    <div class="content">
                        <h3>Troubleshooting Mobile Phone Issues</h3>

                        <p>Troubleshoot mobile phone issues by addressing connectivity issues like Wi-Fi and mobile data problems, software glitches such as app crashes and system performance issues,
                            and hardware malfunctions including battery drain and screen issues. Perform basic troubleshooting steps like restarting the device, updating software, and checking settings. If problems persist, seek assistance from the manufacturer or carrier.</p>
                        <br/>
                        <button class="btn" onclick="window.location.href='articles/article2.pdf'" download><i class="fa fa-download"></i> Download PDF</button>
                    </div>
                    <br/>

                    <a class="more"></a>
                    <br/>
                </div>

                <div class="card">
                    <div class="icon">
                        <img src="images/image2.jpg">
                    </div>
                    <div class="content">
                        <h3>Trouble Shooting Software Issues</h3>

                        <p>Troubleshoot software issues by updating apps/OS, clearing caches, reinstalling apps, running compatibility mode,
                            checking for updates, using Task Manager, scanning for malware, and seeking professional help if needed.
                            Resolve software issues with updates, cache clearance, reinstalls, compatibility adjustments, OS updates, and hardware upgrades. Combat security threats with antivirus scans, and data backup. </p>
                        <br/>
                        <button class="btn" onclick="window.location.href='articles/article3.pdf'" download><i class="fa fa-download"></i> Download PDF</button>
                    </div>
                    <br/>

                    <a class="more"></a>
                    <br/>
                </div>
            </div>
            </div>
    </div>

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

    <script>
        let more = document.querySelectorAll('.more');
        let activeCard = null;
    
        for (let i = 0; i < more.length; i++) {
            more[i].addEventListener('click', function () {
                if (more[i].parentNode === activeCard) {
                    more[i].parentNode.classList.remove('active');
                    activeCard = null;
                } else {
                    if (activeCard !== null) {
                        activeCard.classList.remove('active');
                    }
                    more[i].parentNode.classList.add('active');
                    activeCard = more[i].parentNode;
                }
            })
        }
    </script>
    
    
</body>

</html>
