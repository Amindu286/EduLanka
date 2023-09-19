<?php
$host = "localhost";
$user = "phpuser";
$password = "php123";
$db = "schoolproject"; 

$data = mysqli_connect($host, $user, $password, $db);

$sql = "SELECT * FROM user";
$result = mysqli_query($data, $sql);
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
        
        .div-wrapper {
            margin-left: 25px; 
            padding: 20px;
        }

        .div-wrapper2 {
            margin-left: -570px; 
            padding-top: 500px;
        }
        #sidebar-wrapper {
            width: 250px; 
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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

    <div class="div-wrapper">
        <h4>Teacher Info</h4>
        <br>
        <table class="table">

        <tr class="tr">
            <th>Name</th>
            <th>Contact Number</th>
            <th>Grade</th>
            <th>Email</th>
            <th>Delete</th>
        </tr>

    <?php
    while ($info = $result->fetch_assoc()) {
        $usertype = intval($info['usertype']); 

            if ($usertype === 1) {
            ?>
            <tr class="tr">
                <td><?php echo $info['username']; ?></td>
                <td><?php echo $info['phone']; ?></td>
                <td><?php echo $usertype; ?></td>
                <td><?php echo $info['email']; ?></td>
                <td>
                    <a href="deleteT.php?id=<?php echo $info['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            <?php
            }
        }
    
    ?>

</table>

</div>

<br><br>


<div class="div-wrapper2">
    <h4>Admin Info</h4>
    <br>
    <table class="table">
        <tr class="tr">
            <th>Name</th>
            <th>Contact Number</th>
            <th>Grade</th>
            <th>Email</th>
        </tr>

        <?php
        $result->data_seek(0); 

        while ($info = $result->fetch_assoc()) {
            $usertype = intval($info['usertype']); 

            if ($usertype === 0) {  
                ?>
                <tr class="tr">
                    <td><?php echo $info['username']; ?></td>
                    <td><?php echo $info['phone']; ?></td>
                    <td><?php echo $usertype; ?></td>
                    <td><?php echo $info['email']; ?></td>
                </tr>
                <?php
            }
        }
        ?>

    </table>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
