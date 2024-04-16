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
    <!--<header>
        <nav class="navbar">
            <div class="logo"></div>
            <ul>
                <li><a href="recycle_company_dashboard.html">Home</a></li>
                <li><a href="recycle_company_profile.html">Profile</a></li>
                <li><a href="recycle_purchase_form.html">Purchase Form</a></li>
                <li><a href="warehouse.html">Warehouse</a></li>
                <li><a href="managerSchedule.html">Contact</a></li>
            </ul>
        </nav>
    </header>-->

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
                            <a class="nav-link" href="recycle_purchase_form.php">Purchase Form</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="warehouse_info_recycle.php">Warehouse</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-success" href="login.php">Log Out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!--<section class="one">
        <div class="navbar-last b">
            <div class="part1">
                <div class="red">
                    <h6>Welcome to</h6>
                </div>
                <div>
                    <h1><b>Manager Dashboard</b></h1>
                    <div class="b">
                        
                        <div class="gr">
                            <h1><b>Trash troubles?</b></h1>
                        </div>
                    </div>
                </div>
                <div class="gray">
                    <h6>Let's tackle them head-on with smart solutions!</h6>
                </div>
                <div class="link">
                    <a href="managerProfile.html">
                        <p><button class="cta-button"><b>Profile</b></button></p>
                    </a>
                </div>
            </div>
            <div class="img">
                <img src="Photo/Illustration.png" alt="">
            </div>
        </div>
    </section>-->


    <section class="one py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h6>Welcome to</h6>
                    <h1><b>Recycle Company</b></h1>
                    <h1 class="gr"><b>Trash troubles?</b></h1>
                    <h6>Let's tackle them head-on with smart solutions!</h6>
                    <a href="managerProfile.html" class="btn btn-success mt-3"><b>Profile</b></a>
                </div>
                <div class="col-md-6 text-center">
                    <img src="Photo/recycle_company-01.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="project-info bg-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="Photo/project_complete-01.png" alt="Project Image" class="img-fluid">
                    <!-- Update your image path here -->
                </div>
                <div class="col-md-6">
                    <h2 class="mb-3 project-info-title">Project Information</h2>
                    <div>
                        <p class="project-label">Active Projects</p>
                        <p class="project-number text-success">4</p>
                        <!-- Dynamically update your project numbers here -->
                    </div>
                    <div>
                        <p class="project-label">Completed Projects</p>
                        <p class="project-number text-primary">10</p>
                        <!-- Dynamically update your project numbers here -->
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--<section class="container">
        <div class="row">
            <div class="card col col-lg-3 col-md-3 col-12" style="width: 18rem;">
                <img src="Photo/1 (1).png" class="card-img-top" alt="logo">
                <div class="card-body">
                    <h5 class="card-title">Residential Waste Pickup</h5>
                    <p class="card-text">WM's curbside trash and recycling pickup is the best choice for your home, and
                        for the environment.</p>
                </div>
            </div>
            <div class="card col col-lg-3 col-md-3 col-12" style="width: 18rem;">
                <img src="Photo/1 (2).png" class="card-img-top" alt="logo">
                <div class="card-body">
                    <h5 class="card-title">Commercial Waste Pickup</h5>
                    <p class="card-text">WM's business trash and recycling pickup is the best choice for your
                        organization, and for the environment.</p>
                </div>
            </div>
            <div class="card col col-lg-3 col-md-3 col-12" style="width: 18rem;">
                <img src="Photo/1 (3).png" class="card-img-top" alt="logo">
                <div class="card-body">
                    <h5 class="card-title">Roll-Off Dumpster Rental</h5>
                    <p class="card-text">From quick cleanouts to major renovations, WM has a dumpster that's perfect for
                        your project.</p>
                </div>
            </div>
            <div class="card col col-lg-3 col-md-3 col-12" style="width: 18rem;">
                <img src="Photo/jpgtopngconverter-com.png" class="card-img-top" alt="logo">
                <div class="card-body">
                    <h5 class="card-title">Recycle</h5>
                    <p class="card-text">"Embrace the power of recycling for a sustainable future."</p>
                </div>
            </div>
        </div>
    </section>-->

    <section class="container py-4 mb-5">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="Photo/1 (1).png" class="card-img-top" alt="logo">
                    <div class="card-body">
                        <h5 class="card-title">Residential Waste Pickup</h5>
                        <p class="card-text">WM's curbside trash and recycling pickup is the best choice for your home,
                            and for the environment.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="Photo/1 (2).png" class="card-img-top" alt="logo">
                    <div class="card-body">
                        <h5 class="card-title">Commercial Waste Pickup</h5>
                        <p class="card-text">WM's business trash and recycling pickup is the best choice for your
                            organization, and for the environment.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="Photo/1 (3).png" class="card-img-top" alt="logo">
                    <div class="card-body">
                        <h5 class="card-title">Roll-Off Dumpster Rental</h5>
                        <p class="card-text">From quick cleanouts to major renovations, WM has a dumpster that's perfect
                            for your project.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="Photo/jpgtopngconverter-com.png" class="card-img-top" alt="logo">
                    <div class="card-body">
                        <h5 class="card-title">Recycle</h5>
                        <p class="card-text">"Embrace the power of recycling for a sustainable future."</p>
                    </div>
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

    <!--<footer class="bg-dark text-white pt-4 pb-2">
        <div class="container d-flex align-items-center text-center">
            <div class="row">
                <div class="col-md-4 col-lg-4 mx-auto mt-3">
                    <h5 class="text-uppercase mb-2 font-weight-bold">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="managerDashboard.html" class="text-white" style="text-decoration: none;">Home</a></li>
                        <li><a href="login.html" class="text-white" style="text-decoration: none;">Login</a></li>
                        <li><a href="about.html" class="text-white" style="text-decoration: none;">About</a></li>
                        <li><a href="contact.html" class="text-white" style="text-decoration: none;">Contact</a></li>
                    </ul>
                </div>
    
                <div class="col-md-4 col-lg-4 mx-auto mt-3">
                    <h5 class="text-uppercase mb-2 font-weight-bold">Help</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white" style="text-decoration: none;">FAQ</a></li>
                        <li><a href="#" class="text-white" style="text-decoration: none;">Terms of Use</a></li>
                        <li><a href="#" class="text-white" style="text-decoration: none;">Privacy Policy</a></li>
                    </ul>
                </div>
    
                <div class="col-md-4 col-lg-4 mx-auto mt-3">
                    <h5 class="text-uppercase mb-2 font-weight-bold">Account</h5>
                    <ul class="list-unstyled">
                        <li><a href="login.html" class="text-white" style="text-decoration: none;">LogIn</a></li>
                        <li><a href="signup.html" class="text-white" style="text-decoration: none;">Create Account</a></li>
                        <li><a href="profile.html" class="text-white" style="text-decoration: none;">Manage Profile</a></li>
                    </ul>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12 text-center">
                        <p class="text-light pt-2">
                            &copy; 2024 Waste Management. All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
    
            
        </div>
    </footer>-->



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>