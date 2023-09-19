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

if(isset($_POST['upload'])){
    $file = $_FILES['image']['name'];
    $target_path = "uploads/"; 

    $query = "INSERT INTO announcements(image) VALUES('$file')";
    $res = mysqli_query($conn, $query);

    if($res){
        move_uploaded_file($_FILES['image']['tmp_name'], $target_path . $file);
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

        .item{
            color:#000000;
        }

        .info{
            background-color:#f2f2f2;
        }
        .sidebar{
            background-color:#ffffff;
        }

        .div-wrapper {
            margin-left: 25px; /* Adjust the width of the sidebar */
            padding: 20px;
        }
        #sidebar-wrapper {
            width: 200px; /* Adjust the width of the sidebar */
        }

    </style>


    <link rel="stylesheet" href=" Style.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar" style="background-color: #f2f2f2;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <div class="d-flex align-items-center">
            <img src="./images/icon.png" alt="Logo" width="100" height="100" class="d-inline-block align-text-top">
            <h1 class="mb-0 ml-3">Admin Dashboard</h1>
        </div>
    </a>
</div>
</nav>

<div class="info d-flex" id="wrapper">
        <div class="sidebar border-right" id="sidebar-wrapper">
            <div class="list-group list-group-flush">
                <a href="adminhome.php" class="item list-group-item list-group-item-action ">Announcements</a>
                <a href="studentRegister.php" class="item list-group-item list-group-item-action ">Student Register</a>
                <a href="view_student.php" class="item list-group-item list-group-item-action ">Student View</a>
                <a href="teacherRegister.php" class="item list-group-item list-group-item-action ">Teacher Register</a>
                <a href="view_teacher.php" class="item list-group-item list-group-item-action ">Teacher View</a>
                <a href="timetable.php" class="item list-group-item list-group-item-action ">Update Time table</a>
                <a href="complain.php" class="item list-group-item list-group-item-action ">Complains</a>
                <br>
                <a href="logout.php" class="item list-group-item list-group-item-action ">Log out</a>
        </div>
</div>


<div class="div-wrapper">
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-center">Upload the Announcement</h3>
                    <form action="#" method="POST" enctype="multipart/form-data">
                        <input type="file" name="image" class="form-control">
                        <input type="submit" name="upload" value="UPLOAD" class="btn btn-success my-3">
                    </form>
                </div>
                <div class="col-md-6">
                    <h3 class="text-center">Display the image</h3>
                    <?php
                    $sel = "SELECT * FROM announcements";
                    $que = mysqli_query($conn, $sel);

                    if(mysqli_num_rows($que) < 1){
                        echo "<h3 class='text-center'>NO IMAGE UPLOADED</h3>";
                    }

                    while($row = mysqli_fetch_array($que)){
                        echo "<div class='announcement-item'>
                        <img src='uploads/".$row['image']."' class='my-3' style='width:100px; height:100px;'>
                        <form action='delete_announcement.php' method='POST'>
                            <input type='hidden' name='announcement_id' value='".$row['id']."'>
                            <button type='submit' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure you want to delete this announcement?\")'>Delete</button>
                        </form>
                    </div>";
                    }
          
                    ?>
                </div>

            </div>
        </div>
    </div>
</div>



</div>


  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script>

  </body>
</html>