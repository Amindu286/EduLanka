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

    $sql = "SELECT * FROM user WHERE username = '$loggedInUsername'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $userData = mysqli_fetch_assoc($result);
    } else {
        echo "No user data found.";
        exit; 
    }
} else {
    echo "User is not logged in.";
    exit; 
}

// Handle password change
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['changePassword'])) {
    $oldPassword = $_POST['oldPassword'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];

    $storedPassword = $userData['password']; 

    if ($oldPassword === $storedPassword) {
        if ($newPassword === $confirmPassword) {
            $updateSql = "UPDATE user SET password = '$newPassword' WHERE username = '$loggedInUsername'";
            mysqli_query($conn, $updateSql);
            echo "<script>alert('Password changed successfully.');</script>";
        } else {
            echo "<script>alert('New passwords do not match.');</script>";
        }
    } else {
        echo "<script>alert('Old password is incorrect.');</script>";
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['deleteAccount'])) {
    echo "<script>alert('Account deletion is not allowed.');</script>";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EduLanka</title>

        <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
        <link rel="manifest" href="./favicon/site.webmanifest">
        <link rel="mask-icon" href="./favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <style>
            .text{
                font-family: 'Cormorant Garamond';
                color:#333333;
            }

            .container{
                    border-radius:15px;
                    background-color: #f2f2f2; 
                }

            .body{
                background-image: linear-gradient(to right, #ffadf5, #B0E0E6);

                }
        </style>

    <link rel="stylesheet" href=" Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Cormorant Garamond' rel='stylesheet'>
</head>
<body class="body">
<nav class="navbar" style="background-color:  transparent;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <div class="d-flex align-items-center">
                <img src="./images/icon.png" alt="Logo" width="100" height="100" class="d-inline-block align-text-top">
                <h1 class=" text mb-0 ml-3">Edit Profile Info</h1>
            </div>
        </a>

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo $loggedInUsername; ?>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                    <li><a class="dropdown-item" href="#">Return</a></li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </div>
    </div>
    </nav>

    <div class="container mt-5">
        <form method="post" action="">
            <h2 class="text">Your Profile</h2>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" value="<?php echo $userData['username']; ?>" class="form-control" readonly>
            </div>
        
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $userData['email']; ?>" class="form-control" readonly>
            </div>
        
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" value="<?php echo $userData['phone']; ?>" class="form-control" readonly>
            </div>

            <br><br>
            </div>
            <br><br>
        <div class="container mt-5">
            <h3 class="text">Change Password</h3>
            <div class="form-group">
                <label for="oldPassword">Old Password:</label>
                <input type="password" id="oldPassword" name="oldPassword" class="form-control">
            </div>

            <div class="form-group">
                <label for="newPassword">New Password:</label>
                <input type="password" id="newPassword" name="newPassword" class="form-control">
            </div>

            <div class="form-group">
                <label for="confirmPassword">Confirm New Password:</label>
                <input type="password" id="confirmPassword" name="confirmPassword" class="form-control">
            </div>
            <br>
            <button type="submit" name="changePassword" class="btn btn-primary mb-3">Change Password</button>
        </form>
        <br>
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
  

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+J6f6jGzvx6bF5Mxe6M5l2z8jPp69Hf3h/a5MKtEZy5mr6o1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>

