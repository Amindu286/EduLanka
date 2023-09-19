<?php

$host = "localhost";
$user = "phpuser";
$password = "php123";
$db = "schoolproject"; 

$conn = mysqli_connect($host, $user, $password, $db);

$check = "SELECT * FROM time_table";
$check_result = mysqli_query($conn, $check);


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


            <style>

                body{
                    background-image: linear-gradient(to right, #87CEEB, #B0E0E6);
                }
                .topic{
                    text-align:center;
                    padding-top:15px;
                    padding-bottom:15px;
                    font-family: 'Cormorant Garamond';
                    color:#333333;
                }

                .announcement{
                    background-image: linear-gradient(to right ,rgb(86,147,108,0.4),rgb(164,212,214,0.2));
                    border-radius:15px;
                }

                .text{
                    font-family: 'Cormorant Garamond';
                    color:#333333;

                }          
                
                .container{
                    border-radius:15px;
                    background-color: #f2f2f2;
                }

                .main{
                    background-repeat:no-repeat;
                    background-attachment:fixed;
                    background-size:cover;
                }

                .navbtn{
                    background-color:transparent;
                    border-color:transparent;
                    font-family: 'Cormorant Garamond';
                }

                .first {
                    padding: 20px; 
                }

                table {
                    width: 100%;
                    border-collapse: collapse;
                }

                td {
                    padding: 20px; 
                    vertical-align: top;
                }

                .topic {
                    text-align: center;
                }

                .message-container {
                    border: 1px solid #ccc;
                    padding: 10px;
                    background-color: #f9f9f9;
                    height: 300px;
                    overflow-y: auto;
                }

                .message {
                    margin-bottom: 10px; 
                }



            </style>
        
        <link rel="stylesheet" href=" Style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Cormorant Garamond' rel='stylesheet'>
    </head>

    <body>
    <nav class="navbar" style="background-color: #transparent;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <div class="d-flex align-items-center">
                <img src="./images/iconDark.png" alt="Logo" width="100" height="100" class="d-inline-block align-text-top">
                <h1 class=" text mb-0 ml-3">Grade 9</h1>
            </div>
        </a>

        <div class="hstack gap-4 navtop">
            <div class=" navlink"><button class="navbtn text-black" href="#sect1">Announcements</button></div>
            <div class=" navlink"><button class="navbtn text-black" href="#sect2">Time Table</button></div>
            <div class=" navlink"><button class="navbtn text-black" href="#sect3">Resources</button></div>
            <div class=" navlink"><button class="navbtn text-black" href="#sect4">Class links</button></div>
            <div class=" navlink"><button class="navbtn text-black" href="#sect5">Quizes</button></div>
            </div>

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





<section class="main">

<div class="container">
<div class="first">
<table width="100%">
            <tr>
                <!-- Left Column for Announcements -->
                <td width="50%" valign="top">
                    <center>
                        <h1 class="topic" id="sect1">Announcements</h1>
                        <?php
                        $sel = "SELECT * FROM announcements";
                        $que = mysqli_query($conn, $sel);

                        if (mysqli_num_rows($que) < 1) {
                            echo "<h3 class='text-center'>NO ANNOUNCEMENTS</h3>";
                        }

                        while ($row = mysqli_fetch_array($que)) {
                            echo "<img src='uploads/" . $row['image'] . "' class='my-3' style='width:80%; height:auto;'>";
                        }
                        ?>
                    </center>
                </td>
                <!-- Right Column for Messages -->
                <td width="50%" valign="top">
                    <h2 class="topic" id="sect1">Messages</h2>
                    <div id="chat-messages" class="message-container" style="color:red;">
                        <?php
                        $message_query = "SELECT * FROM messages_6to9";
                        $message_result = mysqli_query($conn, $message_query);

                        while ($message_row = mysqli_fetch_assoc($message_result)) {
                            $messagePerson = $message_row['person'];
                            $messageText = $message_row['message'];
                            echo "<div class='message'>";
                            echo "<strong>$messagePerson:</strong> $messageText";
                            echo "</div>";
                        }
                        ?>
                    </div>
                </td>
            </tr>
        </table>
</div>

</div>

<hr class="hr" />
<br><br>

<center>
    <div class="container mt-4">
    <h2 class="topic" id="sect2">Time Table for Term 01</h2>
    <br>
    <table class="table">
        <tr class="tr">
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th>
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
            </tr>
            <?php
        }
        ?>
        <br>

    </table>
</div>
</center>


<hr class="hr" />
<br><br>


<div class="container mt-4">
    <h2 class="topic" id="sect3">Resources</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>File</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $lecture_query = "SELECT * FROM lecture_materials_6to9";
            $lecture_result = mysqli_query($conn, $lecture_query);

            while ($row = mysqli_fetch_assoc($lecture_result)) {
                $title = $row['title'];
                $filename = $row['filename'];
                $fileUrl = 'teacher/uploads/' . $filename;
                echo "<tr>";
                echo "<td>$title</td>";
                echo "<td><a href='$fileUrl' download>Download</a></td>";
                echo "</tr>";
            }

            mysqli_free_result($lecture_result);
            ?>
        </tbody>
    </table>
</div>

<hr class="hr" />
<br><br>

<center>
<div class="container">
    <h2 id="sect3" class="topic" id="sect4">Class Links</h2>
    <br>
    <table class="table">
        <tr class="tr">
            <th>Title</th>
            <th>Link</th>
        </tr>

        <?php
        $selectQuery = "SELECT * FROM links_6to9";
        $result = mysqli_query($conn, $selectQuery);

        while ($info = mysqli_fetch_assoc($result)) {
            ?>
            <tr class="tr">
                <td><?php echo $info['title']; ?></td>
                <td><a href="<?php echo $info['link']; ?>" target="_blank"><?php echo $info['link']; ?></a></td>
            </tr>
            <?php
        }
        ?>

    </table>
</div>
</center>

<hr class="hr" />
<br><br>

<center>
<div class="container mt-4">
    <h2 id="sect3" class="topic" id="sect5">Quiz Links</h2>
    <br>
    <table class="table">
        <tr class="tr">
            <th>Quiz No.</th>
            <th>Quiz Link</th>
        </tr>

        <?php
        $selectQuery = "SELECT * FROM quiz_6to9";
        $result = mysqli_query($conn, $selectQuery);

        while ($info = mysqli_fetch_assoc($result)) {
            ?>
            <tr class="tr">
                <td><?php echo $info['quizno']; ?></td>
                <td><a href="<?php echo $info['quizlink']; ?>" target="_blank"><?php echo $info['quizlink']; ?></a></td>
            </tr>
            <?php
        }
        ?>

    </table>
</div>
</center>

<br>


</section>




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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    </body>
    </html>
