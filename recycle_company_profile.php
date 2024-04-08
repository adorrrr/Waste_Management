<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waste Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="recycle_company_dashboard.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="recycle_company_profile.php">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="recycle_purchase_form.html">Purchase Form</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="warehouse.html">Warehouse</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="managerSchedule.html">Contact</a>
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
                <div class="col-md-6 ps-5">
                    <h2 class="mb-3">Company Information</h2>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">Company Name</th>
                                <td>Example Company</td>
                            </tr>
                            <tr>
                                <th scope="row">Email</th>
                                <td>contact@example.com</td>
                            </tr>
                            <tr>
                                <th scope="row">Contact No</th>
                                <td>+123456789</td>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>