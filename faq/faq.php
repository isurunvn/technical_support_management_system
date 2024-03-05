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

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FAQs</title>
    
    <script src="https://kit.fontawesome.com/a65b5ae8d1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="faq.css">

</head>
<body>
    <div>
        <div class="bg">
        </div>
        <div class="nav-outer">
            <div class="logo-outer">
                <img class="main-slider-logo" src="../images/logo-3.png"
                    alt="logo img">
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
                    <button class="user-button"><i class="fa-solid fa-user"><p><?php echo $username; ?></p></i></button>
                    <div class="dropdown-content">
                        <a href="../Entry/entry.html">Logout</a>
                    </div>
                </div> 
            </div>
            <div class="nav-bar-outer"></div>
        </div>

    <section>
        <h1 class="title">FAQs</h1>

        <div class="questions-container">
            <div class="question">
                <button>
                    <span>How do I crate a NexusTech Support account?</span>
                    <i class="fas fa-chevron-down d-arrow"></i>
                </button>
                <p>To create an account,click on the <a href="#signup.html">Sign Up</a> button on the homepage and follow the prompts.
                    Ensure that you provide accurate information for a seamless registration process</p>
            </div>

            <div class="question">
                <button>
                    <span>I forgot my NexusTech Support password. What should I do?</span>
                    <i class="fas fa-chevron-down d-arrow"></i>
                </button>
                <p>If you forget your password, click on the "Forgot Password" link on the NexusTech Support login page.
                    Follow the instructions sent to your registered email to reset your password securely.</p>
            </div>

            <div class="question">
                <button>
                    <span>What information should I include when reporting a problem ?</span>
                    <i class="fas fa-chevron-down d-arrow"></i>
                </button>
                <p>When reporting a problem, include a detailed description of the issue, any error messages received, and steps to reproduce the problem. 
                    This helps NexusTech Support troubleshoot and resolve your issue faster.</p>
            </div>

            <div class="question">
                <button>
                    <span>Can I change my NexusTech Support account email address?</span>
                    <i class="fas fa-chevron-down d-arrow"></i>
                </button>
                <p>Currently, the NexusTech Support system doesn't support changing the email address directly.
                    For security reasons, if you need to update your email, please contact NexusTech Support for assistance.</p>
            </div>

            <div class="question">
                <button>
                    <span>Are my transactions on NexusTech Support secure?</span>
                    <i class="fas fa-chevron-down d-arrow"></i>
                </button>
                <p>Yes, NexusTech Support prioritizes the security of your transactions. 
                    They use industry-standard encryption protocols to ensure your data remains confidential and secure.</p>
            </div>

            <div class="question">
                <button>
                    <span>How can I provide feedback on NexusTech Support?</span>
                    <i class="fas fa-chevron-down d-arrow"></i>
                </button>
                <p>NexusTech Support welcomes your feedback! Please use the "Feedback" option in your account dashboard to share your thoughts, suggestions, or report any issues you encounter.
                    Your input helps NexusTech Support improve its services.</p>
            </div>
            
        </div>
    </section>

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

    <script src="faq.js"></script>
    </div>

</body>
</html>