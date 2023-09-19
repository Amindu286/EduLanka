<?php

$host = "localhost";
$user = "phpuser";
$password = "php123";
$db = "schoolproject"; 

$conn = mysqli_connect($host, $user, $password, $db);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

session_start();



if (isset($_SESSION['username'])) {
    $loggedInUsername = $_SESSION['username'];
  
    
} else {
    $loggedInUsername = "Welcome";

}

?>

<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>EduLanka</title>

            <!--favicon-->
            <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
            <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
            <link rel="manifest" href="./favicon/site.webmanifest">
            <link rel="mask-icon" href="./favicon/safari-pinned-tab.svg" color="#5bbad5">
            <meta name="msapplication-TileColor" content="#da532c">
            <meta name="theme-color" content="#ffffff">
        
        <link rel="stylesheet" href=" Style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <style>
          .main{
                background-image: linear-gradient(to right, #EFEFEF, #27A770);
                font-family: 'Cormorant Garamond';
                }

            .card-body{
                background-color: #c3cbdc;
                background-image: linear-gradient(147deg, #c3cbdc 0%, #edf1f4 74%);
                border-radius:20px;
            }
        </style>
    </head>

    <body class="main">
    <nav class="navbar" style="background-color: transparent;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <div class="d-flex align-items-center">
                <img src="./images/iconDark.png" alt="Logo" width="100" height="100" class="d-inline-block align-text-top">
                <h1 class="mb-0 ml-3">Teacher</h1>
            </div>
        </a>

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo $loggedInUsername; ?>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                    <li><a class="dropdown-item" href="editprofile.php">Edit Profile</a></li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </div>
    </div>
    </nav>

    <center>
    <h1>Select grade</h1>
    </center>

    <div class="row">
    <div class="col-sm-12 col-md-6 mb-3 mb-sm-0 p-5 custom-card bg-transparent">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Grade 4</h5>
                <a href="teacher/teacher4.php" class="btn btn-primary">Go to Grade 4</a>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-6 p-5 custom-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Grade 5</h5>
                <a href="teacher/teacher5.php" class="btn btn-primary">Go to Grade 5</a>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-6 mb-3 mb-sm-0 p-5 custom-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Grade 6 to Grade 9</h5>
                <a href="teacher/teacher6to9.php" class="btn btn-primary">Go to Grade</a>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-6 p-5 custom-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">GCE/Ordinary Level</h5>
                <a href="teacher/teacherOL.php" class="btn btn-primary">Go to O/L</a>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-6 mb-3 mb-sm-0 p-5 custom-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">GCE/Advanced Level</h5>
                <a href="teacher/teacherAL.php" class="btn btn-primary">Go to A/L</a>
            </div>
        </div>
    </div>
</div>

    <br>
    <footer class="footer">
    <div class="footer-content">
      <div class="contact-info">
        <h3>Contact Us</h3>
        <p>Email: edulanka@gmail.com</p>
        <p>Phone: (+94)77 564 0931</p>
      </div>
      <div class="social-media">
        <h3>Follow Us</h3>
        <div class="social-icons">
          <a href="#" class="icon-link"><i class="fab fa-facebook"></i></a>
          <a href="#" class="icon-link"><i class="fab fa-twitter"></i></a>
          <a href="#" class="icon-link"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
    <p class="footer-text">&copy; 2023 EduLanka. All rights reserved.</p>
  </footer>
  



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <script>

    </body>
    </html>
