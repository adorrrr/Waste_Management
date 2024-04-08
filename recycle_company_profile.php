<?php
// Start PHP session to access login session variables
session_start();

// Assuming company ID is stored in session during login
// For example, $_SESSION['company_id'] = 'companyID_here';
//$companyID = isset($_SESSION['company_id']) ? $_SESSION['company_id'] : '';
$companyID = "R001";

// Database configuration
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "waste_management";

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch company information
$sql = "SELECT rcID, company_name, email, contact_number FROM recycle_company WHERE rcID = '" . $companyID . "'";
$result = $conn->query($sql);

// Check if the query returned any result
if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc(); // Fetch one row of result
} else {
    echo "0 results";
}
$conn->close();
?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waste Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="recycle_common.css">
    <link rel="icon" href="photo/logo.png">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <div class="logo"></div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="recycle_company_dashboard.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="recycle_company_profile.php">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="recycle_purchase_form.php">Purchase Form</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="warehouse_info_recycle.php">Warehouse</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="managerSchedule.html">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-success" href="login.php">Log Out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="profile-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 pe-5">
                    <img src="Photo/profile-01.png" alt="Company Logo" class="img-fluid">
                </div>
                <!-- Assuming this is within the same file as the PHP code above -->
                <div class="col-md-6 ps-5">
                    <h2 class="mb-3">Company Information</h2>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">Company ID</th>
                                <td><?php echo htmlspecialchars($row['rcID']); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Company Name</th>
                                <td><?php echo htmlspecialchars($row['company_name']); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Email</th>
                                <td><?php echo htmlspecialchars($row['email']); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Contact No</th>
                                <td><?php echo htmlspecialchars($row['contact_number']); ?></td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                    <button class="btn btn-success">Update Information</button>
                </div>

            </div>
        </div>
    </section>




    <footer>
        <div class="footer-container text-center">
            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="managerDashboard.html.html">Home</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h3>Help</h3>
                <ul>
                    <li><a href="#.html">FAQ</a></li>
                    <li><a href="#.html">Terms of Use</a></li>
                    <li><a href="#.html">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h3>Account</h3>
                <ul>
                    <li><a href="login.html">LogIn</a></li>
                    <li><a href="signup.html">Create Account</a></li>
                    <li><a href="profile.html">Manage Profile</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p class="aa">&copy; 2024 Waste Management. All rights reserved.</p>
        </div>
    </footer>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>