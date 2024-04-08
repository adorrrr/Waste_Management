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



// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $user_type = $_POST['user_type'];
    $password = $_POST['password'];
    // Hash the password before storing it in the database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);



    // Prepare SQL statement to insert user data into appropriate table based on user type
    switch ($user_type) {
        case 'Customer':
            $stmt = $pdo->prepare("INSERT INTO customer (name, email, password, location) VALUES (?, ?, ?, '')");
            break;
        case 'Trash Collector':
            $stmt = $pdo->prepare("INSERT INTO trash_collector (fname, email, contact_number, managerID, warehouseID) VALUES (?, ?, ?, '', '')");
            break;
        case 'Recycle Company':
            $stmt = $pdo->prepare("INSERT INTO recycle_company (email, contact_number) VALUES (?, '')");
            break;
        default:
            die("Invalid user type");
    }



    // Execute the prepared statement
    $stmt->execute([$username, $email, $hashed_password, $phone]);
    // Redirect the user to a success page or display a success message
    header("Location: signup_success.php");
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
                <form>
                    <h1>SignUp</h1>
                    <input type="text" placeholder="Username" required>
                    <input type="text" placeholder="Email" required>
                    <input type="text" placeholder="Phone Number" required>
                    <!-- <input type="text" id="demo" name="comboboxdemo"/> -->
                    <select name=" optionlist " onChange="combo(this, 'demo')">
                        <option>Select</option>
                        <option>Customer</option>
                        <option>Trash Collector</option>
                        <option>Recycle Company</option>
                    </select>
                    <input type="password" placeholder="Password" required>
                    <button>Sign up</button>
                    <div class="remember">
                        <input type="checkbox" class="chkbox">
                        <label >Remember me</label>
                    </div>  
                    <a href="#" class="need">Need help?</a>
                    <div class="footer">
                        <h4>If you have created account .<a href="login.html">Login now</a></h4>
                        <!-- <p>This page is protected by Google reCAPTCHA to ensure you're not a bot <a href="">Learn more.</a></p> -->
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