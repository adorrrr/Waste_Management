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

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $userType = $_POST['userType']; // Customer, Trash Collector, or Recycle Company
    $password = $_POST['password'];

    // Prepare SQL statement to insert user data into the appropriate table based on user type
    switch ($userType) {
        case "Customer":
            $stmt = $connection->prepare("INSERT INTO customer (name, email, password, contact_number) VALUES (:username, :email, :password, :phone)");
            break;
        case "Trash Collector":
            $stmt = $connection->prepare("INSERT INTO trash_collector (name, email, password, contact_number) VALUES (:username, :email, :password, :phone)");
            break;
        case "Recycle Company":
            $stmt = $connection->prepare("INSERT INTO recycle_company (company_name, email, contact_number, password) VALUES (:username, :email, :password, :phone)");
            break;
        default:
            // Handle invalid user type
            die("Invalid user type");
    }

    // Bind parameters and execute the prepared statement
    $stmt->bind_param("ssss", $username, $email, $password, $phone);
    $stmt->execute();

    // Close statement
    $stmt->close();

    // Redirect to login page after successful sign-up
    header("Location: login.html");
    exit();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waste Management</title>
    <link rel="stylesheet" href="signup.css">
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


    <section>
        <div class="container">
            <div class="wrapper">
                <div class="wrap">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <h1>SignUp</h1>
                        <input type="text" name="username" placeholder="Username" required>
                        <input type="text" name="email" placeholder="Email" required>
                        <input type="text" name="phone" placeholder="Phone Number" required>
                        <select name="userType">
                            <option value="Customer">Customer</option>
                            <option value="Trash Collector">Trash Collector</option>
                            <option value="Recycle Company">Recycle Company</option>
                        </select>
                        <input type="password" name="password" placeholder="Password" required>
                        <button type="submit">Sign up</button>
                        <div class="remember">
                            <input type="checkbox" class="chkbox">
                            <label >Remember me</label>
                        </div>  
                        <a href="#" class="need">Need help?</a>
                        <div class="footer">
                            <h4>If you have created account .<a href="login.html">Login now</a></h4>
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