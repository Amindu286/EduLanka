<?php
$host = "localhost";
$user = "phpuser";
$password = "php123";
$db = "schoolproject"; 

$data = mysqli_connect($host, $user, $password, $db);

if (isset($_POST['proceed'])) {
    $monday = $_POST['monday'];
    $tuesday = $_POST['tuesday'];
    $wednesday = $_POST['wednesday'];
    $thursday = $_POST['thursday'];
    $friday = $_POST['friday'];
    $saturday = $_POST['saturday'];


    $check = "SELECT * FROM time_table";
    $check_result = mysqli_query($data, $check);

    $row_count = mysqli_num_rows($check_result);

    $sql = "INSERT INTO time_table (monday, tuesday, wednesday, thursday, friday, saturday) VALUES ('$monday', '$tuesday', '$wednesday', '$thursday', '$friday', '$saturday')";
    if (mysqli_query($data, $sql)) {
        echo "<script type ='text/javascript'> alert('Data Upload Success');</script>";
    } else {
        echo "<script type ='text/javascript'> alert('Data Upload Failed');</script>";
    }
}

$check = "SELECT * FROM time_table";
$check_result = mysqli_query($data, $check);
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EduLanka</title>

    <meta charset ="utf-8">
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
            background-color:skyblue;
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

<div class="div-wrapper">
    <h1>Update the Time Table</h1>

    <form action="#" method="POST">
        <div class="div_deg">
            <div>
                <label for="">Monday</label>
                <input type="longtext" name="monday">
            </div>

            <div>
                <label for="">Tuesday</label>
                <input type="longtext" name="tuesday">
            </div>

            <div>
                <label for="">Wednesday</label>
                <input type="longtext" name="wednesday">
            </div>

            <div>
                <label for="">Thursday</label>
                <input type="longtext" name="thursday">
            </div>

            <div>
                <label for="">Friday</label>
                <input type="longtext" name="friday">
            </div>

            <div>
                <label for="">Saturday</label>
                <input type="longtext" name="saturday">
            </div>


            <br>
            <p class="warning">Make sure all fields are filled before registering a user</p>

            <div>
            <input type="submit" name="proceed" value="Update the Timetable">
            </div>
        </div>
    </form>


</div>

</center>

<br>
<center>
    <div class="container mt-4">
    <h2 class="topic" id="sect2">Time Table</h2>
    <br>
    <table class="table">
        <tr class="tr">
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th>
            <th>Action</th>
        </tr>

        <?php
        while ($info = $check_result->fetch_assoc()) {
            ?>
            <tr class="tr">
                <td><?php echo $info['monday']; ?></td>
                <td><?php echo $info['tuesday']; ?></td>
                <td><?php echo $info['wednesday']; ?></td>
                <td><?php echo $info['thursday']; ?></td>
                <td><?php echo $info['friday']; ?></td>
                <td><?php echo $info['Saturday']; ?></td>
                <td>
                    <form action="deleteU.php" method="POST">
                        <input type="hidden" name="record_id" value="<?php echo $info['id']; ?>">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?')">Delete</button>
                    </form>
                </td>
            </tr>
            <?php
        }
        ?>
        <br>

    </table>
</div>
</center>


  
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>