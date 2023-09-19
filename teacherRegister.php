<?php
$host = "localhost";
$user = "phpuser";
$password = "php123";
$db = "schoolproject"; 

$data = mysqli_connect($host, $user, $password, $db);

if (isset($_POST['reg_teacher'])) {
    $username = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $usertype = $_POST['usertype'];
    $password = $_POST['password'];

    // Check if any of the fields are empty
    if (empty($username) || empty($phone) || empty($email) || empty($usertype) || empty($password)) {
        echo "<script type='text/javascript'> alert('Please fill in all fields');</script>";
    } else {
        $check = "SELECT * FROM user WHERE username = '$username'";
        $check_user = mysqli_query($data, $check);

        $row_count = mysqli_num_rows($check_user);

        if ($row_count == 1) {
            echo "<script type ='text/javascript'> alert('Username Already exists');</script>";
        } else {
            $sql = "INSERT INTO user (username, phone, email, usertype, password) VALUES ('$username', '$phone', '$email', '$usertype', '$password')";
            if (mysqli_query($data, $sql)) {
                echo "<script type ='text/javascript'> alert('Data Upload Success');</script>";
            } else {
                echo "<script type ='text/javascript'> alert('Data Upload Failed');</script>";
            }
        }
    }
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
    
    <style>
        /* Custom CSS for sidebar and content */
        .div-wrapper {
            margin-left: 75px; 
            padding: 20px;
            background-color:#ff4570;
            margin-top:10px;
        }
        
        #sidebar-wrapper {
            width: 200px; 
        }

        label{
            display:inline-block;
            text-align:right;
            width:100px;
            padding-top:10px;
            padding-bottom:10px;

        }

        .box{
            background-color:#f1f1f1;
        }

        .div_deg{
            width:400px;
            padding-top:70px;
            padding-bottom:70px;
        }

        .dropdown{
            text-align:left;
            padding-left:55px;
        }

        .warning{
            color:red;
        }


    </style>
    <link rel="stylesheet" href=" Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>


  <body>
  <nav class="navbar" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <div class="d-flex align-items-center">
            <img src="./images/icon.png" alt="Logo" width="100" height="100" class="d-inline-block align-text-top">
            <h1 class="mb-0 ml-3">Admin Dashboard</h1>
        </div>
    </a>
</div>
</nav>

<div class="d-flex" id="wrapper">
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="list-group list-group-flush">
                <a href="adminhome.php" class="list-group-item list-group-item-action bg-light">Announcements</a>
                <a href="studentRegister.php" class="list-group-item list-group-item-action bg-light">Student Register</a>
                <a href="view_student.php" class="list-group-item list-group-item-action bg-light">Student View</a>
                <a href="teacherRegister.php" class="list-group-item list-group-item-action bg-light">Teacher Register</a>
                <a href="view_teacher.php" class="list-group-item list-group-item-action bg-light">Teacher View</a>
                <a href="timetable.php" class="list-group-item list-group-item-action bg-light">Update Time table</a>
                <a href="complain.php" class="list-group-item list-group-item-action bg-light">Complains</a>
                <br>
                <a href="logout.php" class="list-group-item list-group-item-action bg-light">Log out</a>
        </div>
</div>

<center>

<div class="box div-wrapper">
    <h1>Register Teachers</h1>

    <form action="#" method="POST">
        <div class="div_deg">
            <div>
                <label for="">UserName</label>
                <input type="text" name="name">
            </div>
            <div>
                <label for="">Phone</label>
                <input type="text" name="phone">
            </div>
            <div>
                <label for="">E-mail</label>
                <input type="email" name="email">
            </div>
            <div class="dropdown">
                <label for="">  Usertype</label>
                    <select name="usertype">
                        <option value="1">Teacher</option>
                        <option value="0">Admin</option>

                    </select>
            </div>
            <div>
                <label for="">Password</label>
                <input type="text" name="password">
            </div>
            <br>
            <p class="warning">Make sure all fields are filled before registering a user</p>

            <div>
            <input type="submit" name="reg_teacher" value="Register User">
            </div>
        </div>
    </form>


</div>

</center>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>