<?php
// Database connection settings
$host = '127.0.0.1';
$dbname = 'waste_management';
$username = '';
$password = '';


// Attempt database connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usernameOrEmail = $_POST['username_or_email'];
    $password = $_POST['password'];

    // Prepare SQL statement to check credentials for customers, managers, trash collectors.
    $stmt_customer = $pdo->prepare("SELECT * FROM customer WHERE (email = :username OR customerID = :username) AND password = :password");

    $stmt_manager = $pdo->prepare("SELECT * FROM manager WHERE (email = :username OR managerID = :username) AND password = :password");

    $stmt_trash_collector = $pdo->prepare("SELECT * FROM trash_collector WHERE (email = :username OR tcID = :username) AND password = :password");

    $stmt_recycle_company = $pdo->prepare("SELECT * FROM recycle_company WHERE (email = :username OR rcID = :username) AND password = :password");

    $stmt_customer->execute(['username' => $usernameOrEmail, 'password' => $password]);

    $stmt_manager->execute(['username' => $usernameOrEmail, 'password' => $password]);

    $stmt_trash_collector->execute(['username' => $usernameOrEmail, 'password' => $password]);

    $stmt_recycle_company->execute(['username' => $usernameOrEmail, 'password' => $password]);


    
    // Check if user exists as a customer, manager, or trash collector
    if ($stmt_customer->rowCount() > 0) {
        // User exists as a customer, log them in
        session_start();
        $_SESSION['username'] = $usernameOrEmail;
        header("Location: customer_dashboard.php");
        exit();
    } elseif ($stmt_manager->rowCount() > 0) {
        // User exists as a manager, log them in
        session_start();
        $_SESSION['username'] = $usernameOrEmail;
        header("Location: managerDashboard.php");
        exit();
    } elseif ($stmt_trash_collector->rowCount() > 0) {
        // User exists as a trash collector, log them in
        session_start();
        $_SESSION['username'] = $usernameOrEmail;
        header("Location: trash_collector_dashboard.php");
        exit();
    } elseif ($stmt_recycle_company->rowCount() > 0) {
        // User exists as a recycle company, log them in
        session_start();
        $_SESSION['username'] = $usernameOrEmail;
        header("Location: recycle_company_dashboard.php");
        exit();
    } else {
        // Invalid credentials, display error message
        $error = "Invalid username/email or password.";
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waste Management</title>
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="photo/logo.png">
</head>
<body>

    <!-- Header section -->
    <header class="try">
        <!-- Navigation bar -->
        <nav class="navbar">
            <!-- Logo -->
            <div class="logo"></div>
            <!-- Navigation links -->
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="signup.html">SingUp</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
        <div class="hero">
            <!-- Add something later -->
        </div>
    </header>

    
    <!-- Main content section -->
    <section>
    <div class="container">
        <div class="wrapper">
            <div class="wrap">
                <form>
                     <!-- Form title -->
                     <h1>Login</h1>
                        <!-- Input fields for email/username and password -->
                        <input type="text" placeholder="Email or Username" required>
                        <input type="password" placeholder="Password" required>
                        <!-- Button to submit the form -->
                        <button>Login</button>
                    <div class="remember">
                        <input type="checkbox" class="chkbox">
                        <label >Remember me</label>
                    </div>
                    <!-- Link for "Need help?" -->
                    <a href="#" class="need">Need help?</a>
                        <!-- Footer section of the form -->
                        <div class="footer">
                            <!-- Links and message for new users -->
                        <h3>New to West Management?<a href="singup.html">SignUp now</a></h3>
                        <p>This page is protected by Google reCAPTCHA to ensure you're not a bot <a href="">Learn more.</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>
    </section>


     <!-- Footer section -->
     <footer>
        <!-- Container for footer links -->
        <div class="footer-container">
            <!-- Footer links -->
            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <!-- Footer links -->
            <div class="footer-links">
                <h3>Help</h3>
                <ul>
                    <li><a href="login.html">FAQ</a></li>
                    <li><a href="login.html">Terms of Use</a></li>
                    <li><a href="login.html">Privacy Policy</a></li>
                </ul>
            </div>
            <!-- Footer links -->
            <div class="footer-links">
                <h3>Account</h3>
                <ul>
                    <li><a href="login.html">LogIn</a></li>
                    <li><a href="signup.html">Create Account</a></li>
                    <li><a href="login.html">Manage Profile</a></li>
                </ul>
            </div>
        </div>
        <!-- Footer bottom section -->
        <div class="footer-bottom">
            <!-- Copyright notice -->
            <p>&copy; 2024 Waste Management. All rights reserved.</p>
        </div>
    </footer>


</body>
</html>