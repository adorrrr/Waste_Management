<?php
// Database connection settings
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'project_database';

// Create connection
$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_error){
    die("Connection failed" .$connection-> connect_error);
}

// Retrieve form data
$frequency = $_POST['frequency'];
$block = $_POST['block'];
$road = $_POST['road'];
$area = $_POST['area'];
$house = $_POST['house'];
$city = $_POST['city'];

// Prepare and execute the SQL query to insert data into the service table
$sql = "INSERT INTO service (frequency, block, road, area, house, city) VALUES ('$frequency', '$block', '$road', '$area', '$house', '$city')";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resigtration</title>
    <link rel="stylesheet" href="customerRegistration.css">
</head>
<body>
    <header class="try">
        <nav class="navbar">
            <div class="logo"></div>
            <ul>
                <li><a href="#">Profile</a></li>
                <li><a href="customerRegistration.php">Registration</a></li> <!-- corrected spelling -->
                <li><a href="customerPayBill.html">Pay Bill</a></li>
                <li><a href="customerAboutus.html">About Us</a></li>
                <li><a href="customerFeedback.html">Feedback</a></li> <!-- corrected spelling -->
            </ul> 
        </nav>
    </header>
    <div class="container">
        <h1>Registration Form</h1> <!-- corrected spelling -->
        <<form action="insert_service.php" method="post">
    <div class="form-group">
        <label for="frequency">Frequency</label>
        <input type="text" id="frequency" name="frequency" required>
    </div>
    <div class="form-group">
        <label for="block">Block</label>
        <input type="text" id="block" name="block" required>
    </div>
    <div class="form-group">
        <label for="road">Road</label>
        <input type="text" id="road" name="road" required>
    </div>
    <div class="form-group">
        <label for="area">Area</label>
        <input type="text" id="area" name="area" required>
    </div>
    <div class="form-group">
        <label for="house">House</label>
        <input type="text" id="house" name="house" required>
    </div>
    <div class="form-group">
        <label for="city">City</label>
        <input type="text" id="city" name="city" required>
    </div>
    <button type="submit">Submit</button>
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