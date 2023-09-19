<?php

$host = "localhost";

$user = "phpuser";

$password = "php123";

$db = "schoolproject"; 

$data = mysqli_connect($host, $user, $password, $db);

$sql = "SELECT * FROM complains";
$result = mysqli_query($data,$sql);

$sql1 = "SELECT * FROM requests";
$result1 = mysqli_query($data,$sql1);


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
            margin-left: 25px;
            padding: 20px;
        }
        #sidebar-wrapper {
            width: 150px; 
        }

        .table{
            border:"10px";
        }

        .tr{
            padding:75px;
            font-size:15px;
        }
    </style>

    <link rel="stylesheet" href=" Style.css">

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
        <h4>Suggestions</h4>
        <br>

        <table class="table">
            <tr class="tr">
                <th>Name</th>
                <th>School</th>
                <th>Email</th>
                <th>Message</th>
            </tr>

            <?php
            while ($info = $result->fetch_assoc()) {
                echo '<tr class="tr">';
                echo '<td>' . $info['name'] . '</td>';
                echo '<td>' . $info['school'] . '</td>';
                echo '<td>' . $info['email'] . '</td>';
                echo '<td>' . $info['message'] . '</td>';
                echo '</tr>';
            }
            ?>
        </table>
    </div>

    <br>
    <div class="d-flex" style="height: 550px;">
        <div class="vr"></div>
    </div>
    <br>

    <div class="div-wrapper">
    <h4>Requests</h4>

    <br>

    <table class="table">
        <tr class="tr">
            <th>Name</th>
            <th>Email</th>
            <th>Request</th>
            <th>Action</th> <!-- Add a new column for the delete button -->
        </tr>

        <?php
        while ($info = $result1->fetch_assoc()) {
            echo '<tr class="tr">';
            echo '<td>' . $info['name'] . '</td>';
            echo '<td>' . $info['email'] . '</td>';
            echo '<td>' . $info['request'] . '</td>';
            echo '<td><a href="delete_request.php?id=' . $info['id'] . '">Delete</a></td>'; 
            echo '</tr>';
        }
        ?>
    </table>


    </div>



    <br>



    <script>
    function deleteRequest(requestId) {
        if (confirm('Are you sure you want to delete this request?')) {
            // Send an AJAX request to delete the request
            $.ajax({
                type: 'POST',
                url: 'delete_request.php', // Create a PHP script to handle the delete action
                data: { requestId: requestId },
                success: function (response) {
                    if (response === 'success') {
                        // If the delete was successful, remove the row from the table
                        alert('Request deleted successfully');
                        location.reload(); // Refresh the page
                    } else {
                        alert('Failed to delete request');
                    }
                },
                error: function () {
                    alert('Error occurred while deleting request');
                }
            });
        }
    }
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>