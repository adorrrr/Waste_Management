<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "waste_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $location = $_POST["location"]; // Changed from "phone" to "location"

    // Prepare update statement
    $sql = "UPDATE customer SET name=?, email=?, location=? WHERE customerID=?"; // Changed from "phone" to "location"

    if ($stmt = $conn->prepare($sql)) {
        // Bind parameters
        $stmt->bind_param("ssss", $name, $email, $location, $customerID); // Changed from "phone" to "location"

        // Set parameters
        $customerID = "C001"; // You need to change this to the customer ID of the logged-in user

        // Execute statement
        if ($stmt->execute()) {
            // Redirect to profile page or show success message
            header("location: profile.php");
            exit();
        } else {
            echo "Error updating record: " . $conn->error;
        }

        // Close statement
        $stmt->close();
    }
}

// Close connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="customerprofileUpdate.css">
</head>
<body>
    <header class="try">
        <nav class="navbar">
            <div class="logo"></div>
            <ul>
                <li><a href="#">Profile</a></li>
                <li><a href="customerResigtration.html">Registration</a></li>
                <li><a href="customerPayBill.html">Pay Bill</a></li>
                <li><a href="customerAboutus.html">About Us</a></li>
                <li><a href="customerfeedback.html">Feedback</a></li>
            </ul> 
        </nav>
    </header>
    <div class="container">
        <h1>Edit Profile</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="John Doe" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="john@example.com" required>
            </div>
            <div class="form-group">
                <label for="location">Location</label> <!-- Changed from "phone" to "location" -->
                <input type="text" id="location" name="location" value="New York" required> <!-- Changed from "phone" to "location" -->
            </div>
            <button type="submit">Update Profile</button>
        </form>
    </div>
    <footer>
        <div class="footer-container">
            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h3>Help</h3>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h3>Account</h3>
                <ul>
                    <li><a href="#">LogIn</a></li>
                    <li><a href="#">Create Account</a></li>
                    <li><a href="customerProfileUpdate.html">Manage Profile</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 West Management. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
