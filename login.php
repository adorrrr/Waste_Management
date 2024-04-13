<?php
// Database connection settings
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'waste_management';

// Create connection
$connection = new mysqli($servername, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usernameOrEmail = $_POST['username_or_email'];
    $password = $_POST['password'];

    // Prepare SQL statement to check credentials for customers, managers, trash collectors.
    $stmt_customer = $connection->prepare("SELECT * FROM customer WHERE (email = ? OR customerID = ?) AND password = ?");
    $stmt_customer->bind_param("sss", $usernameOrEmail, $usernameOrEmail, $password);

    $stmt_manager = $connection->prepare("SELECT * FROM manager WHERE (email = ? OR managerID = ?) AND password = ?");
    $stmt_manager->bind_param("sss", $usernameOrEmail, $usernameOrEmail, $password);

    $stmt_trash_collector = $connection->prepare("SELECT * FROM trash_collector WHERE (email = ? OR tcID = ?) AND password = ?");
    $stmt_trash_collector->bind_param("sss", $usernameOrEmail, $usernameOrEmail, $password);

    $stmt_recycle_company = $connection->prepare("SELECT * FROM recycle_company WHERE (email = ? OR rcID = ?) AND password = ?");
    $stmt_recycle_company->bind_param("sss", $usernameOrEmail, $usernameOrEmail, $password);

    $stmt_customer->execute();
    $stmt_manager->execute();
    $stmt_trash_collector->execute();
    $stmt_recycle_company->execute();

    // Check if user exists as a customer, manager, trash collector, or recycle company
    if ($stmt_customer->fetch()) {
        // User exists as a customer, log them in
        session_start();
        $_SESSION['username'] = $usernameOrEmail;
        header("Location: customer_dashboard.php");
        exit();
    } elseif ($stmt_manager->fetch()) {
        // User exists as a manager, log them in
        session_start();
        $_SESSION['username'] = $usernameOrEmail;
        header("Location: managerDashboard.php");
        exit();
    } elseif ($stmt_trash_collector->fetch()) {
        // User exists as a trash collector, log them in
        session_start();
        $_SESSION['username'] = $usernameOrEmail;
        header("Location: trash_collector_dashboard.php");
        exit();
    } elseif ($stmt_recycle_company->fetch()) {
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
                <li><a href="login.php">Login</a></li>
<<<<<<< HEAD
                <li><a href="signup.php">SignUp</a></li>
=======
                <li><a href="signup.php">SingUp</a></li>
>>>>>>> 25a5cba561545741fb3983fc1b54b953dfd5f453
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
<<<<<<< HEAD
                    <form method="post" action="">
                        <h1>Login</h1>
                        <select name="userType">
                            <option value="Customer">Customer</option>
                            <option value="Trash Collector">Trash Collector</option>
                            <option value="Recycle Company">Recycle Company</option>
                        </select>
=======
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <h1>Login</h1>
                        <?php if (isset($error)) { ?>
                            <div class="error"><?php echo $error; ?></div>
                        <?php } ?>
>>>>>>> 25a5cba561545741fb3983fc1b54b953dfd5f453
                        <input type="text" name="username_or_email" placeholder="Email or Username" required>
                        <input type="password" name="password" placeholder="Password" required>
                        <button type="submit">Login</button>
                        <div class="remember">
                            <input type="checkbox" class="chkbox">
                            <label >Remember me</label>
                        </div>
                        <a href="#" class="need">Need help?</a>
                        <div class="footer">
                            <h3>New to West Management?<a href="signup.html">SignUp now</a></h3>
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