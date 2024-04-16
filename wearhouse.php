<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Application Form</title>
    <link rel="stylesheet" href="wearhouse.css">
</head>
<body>

    <header>
        <nav class="navbar">
            <div class="logo"></div>
            <ul>
                <li><a href="tc_dashboard.html">Home</a></li>
                <li><a href="assigned_work.html">Assigned Work</a></li>
                <li><a href="track.html">Track</a></li>
                <li><a href="data_entery.html">Data Entry</a></li>
                <li><a href="wearhouse.html">Warehouse</a></li>
            </ul>
        </nav>
        <div class="hero">

        </div>
    </header>

    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
            <div class="employee-details">
                <label for="full-name">Full Name:</label>
                <input type="text" id="full-name" name="full-name" required>

                <label for="employee-id">Employee ID:</label>
                <input type="text" id="employee-id" name="employee-id" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                 <br>
                 <br>
                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone">
                <br>
                <br>
                <br>
            </div>

            <div class="leave-details">
                <label for="Date">Date:</label>
                <input type="date" id="Date" name="Date" required>
                  <br>
                  <br>
                  <br>
                  <br>
                <label for="number-of-days">Number of Trash bags:</label>
                <input type="number" id="number-of-days" name="number-of-days" required>
                   <br>
                   <br>
                   <label>Choose Trash Type:</label>
                   <br>

                   <input type="radio" id="disposal" name="method" value="disposal">
                   <label for="disposal">Disposal</label><br>
                   <input type="radio" id="non-disposal" name="method" value="non-disposal">
                   <label for="non-disposal">Non-Disposal</label><br>

                <label for="comment">additional-comments:</label>
                <textarea id="comment" name="comment" rows="4" cols="50"></textarea>
            </div>

            <div class="manager-details">
                <label for="manager-name">Manager's Name:</label>
                <input type="text" id="manager-name" name="manager-name" required>

                <label for="manager-id">Manager's ID:</label>
                <input type="id" id="manager-id" name="manager-id" required>
            </div>
            <br>
            <label for="warehouse">Warehouse No:</label>
            <input type="text" id="number" name="number">
            <br>
            <br>
            <div class="attachments">
                <label for="attachment">Attachments (Optional):</label>
                <input type="file" id="attachment" name="attachment">
            </div>
            <br>

            <div class="buttons">
                <button type="submit">Submit</button>
                <button type="reset">Cancel</button>
            </div>
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
                    <li><a href="#">Manage Profile</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 West Management. All rights reserved.</p>
        </div>
    </footer>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "waste_management";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $full_name = $_POST['full-name'];
        $employee_id = $_POST['employee-id'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $date = $_POST['Date'];
        $number_of_trash_bags = $_POST['number-of-days'];
        $trash_type = $_POST['method'];
        $additional_comments = $_POST['comment'];
        $manager_name = $_POST['manager-name'];
        $manager_id = $_POST['manager-id'];
        $warehouse_number = $_POST['number'];


        $sql = "INSERT INTO trash_collector (name, email, contact_number, assigned_area, managerID, warehouseID)
        VALUES ('$full_name', '$email', '$phone', '$warehouse_number', '$manager_id', '$warehouse_number')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
       
