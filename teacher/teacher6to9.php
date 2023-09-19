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


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_FILES['file'])) {
        $title = $_POST['title'];
        $filename = $_FILES['file']['name'];
        $filetype = $_FILES['file']['type'];
        $file = $_FILES['file']['tmp_name'];

        $allowedExtensions = array('pdf', 'docx', 'ppt');
        $fileExtension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        if (!in_array($fileExtension, $allowedExtensions)) {
            echo "Only PDF, DOCX, and PPT files are allowed.";
            exit;
        }


        $uploadDirectory = '../teacher/uploads/';
        $newFilePath = $uploadDirectory . $filename;
        if (move_uploaded_file($file, $newFilePath)) {

            $query = "INSERT INTO lecture_materials_6to9 (title, filename) VALUES ('$title', '$filename')";
            if (mysqli_query($conn, $query)) {
                echo "<script type ='text/javascript'> alert('Files Upload Success');</script>";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        } else {
            echo "<script type ='text/javascript'> alert('File Upload Failed');</script>";
        }
    }

    if (isset($_POST['sub_link'])) {
        $title = $_POST['title'];
        $link = $_POST['link'];

        if (empty($title) || empty($link)) {
            echo "<script type='text/javascript'> alert('Please fill in all fields');</script>";
        } else {
            $sql = "INSERT INTO links_6to9 (title, link) VALUES ('$title', '$link')";
            if (mysqli_query($conn, $sql)) {
                echo "<script type ='text/javascript'> alert('Link Upload Success');</script>";
            } else {
                echo "<script type ='text/javascript'> alert('Link Upload Failed');</script>";
            }
        }
    }

    
    if (isset($_POST['sub_quiz'])) {
        $quizno = $_POST['quizno'];
        $quizlink = $_POST['quizlink'];

        // Check if any of the fields are empty
        if (empty($quizno) || empty($quizlink)) {
            echo "<script type='text/javascript'> alert('Please fill in all fields');</script>";
        } else {
            $sql2 = "INSERT INTO quiz_6to9 (quizno, quizlink) VALUES ('$quizno', '$quizlink')";
            if (mysqli_query($conn, $sql2)) {
                echo "<script type ='text/javascript'> alert('Link Upload Success');</script>";
            } else {
                echo "<script type ='text/javascript'> alert('Link Upload Failed');</script>";
            }
        }
    }
}
if (isset($_POST['message_box'])) {
    $person = $_POST['person'];
    $message = $_POST['message'];

    if (empty($person) || empty($message)) {
        echo "<script type='text/javascript'> alert('Please fill in all fields');</script>";
    } else {
        $check = "SELECT * FROM messages_6to9 WHERE person = '$person'";
        $check_user = mysqli_query($conn, $check);
        $row_count = mysqli_num_rows($check_user);


            $sql = "INSERT INTO messages_6to9 (person, message) VALUES ('$person', '$message')";
            if (mysqli_query($conn, $sql)) {
                echo "<script type ='text/javascript'> alert('Message Upload Success');</script>";
            } else {
                echo "<script type ='text/javascript'> alert('Message Upload Failed');</script>";
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
            <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
            <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
            <link rel="manifest" href="../favicon/site.webmanifest">
            <link rel="mask-icon" href="../favicon/safari-pinned-tab.svg" color="#5bbad5">
            <meta name="msapplication-TileColor" content="#da532c">
            <meta name="theme-color" content="#ffffff">

            <style>
                .container{
                    background-color:#f1f1f1;
                    border-radius:15px;
                }

                .main{
                    background-image: linear-gradient(to right, #ede7a1, #fff587);
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
    </head>

    <body class="main">
    <nav class="navbar" style="background-color: trasnparent;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <div class="d-flex align-items-center">
                <img src="../images/iconDark.png" alt="Logo" width="100" height="100" class="d-inline-block align-text-top">
                <h1 class="mb-0 ml-3">Welcome to Teacher's Dashboard (Grade 6 to Grade 9)</h1>
            </div>
        </a>



            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo $loggedInUsername; ?>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                    <li><a class="dropdown-item" href="../editprofile.php">Edit Profile</a></li>
                    <li><a class="dropdown-item" href="../logout.php">Logout</a></li> 
                </ul>
            </div>
    </div>
    </nav>


    <div class="hstack gap-3 px-5 ml-3">
                <div class="bg-transparent border text-dark"><a href="#sect1">Messages</a></div>
                <div class="bg-transparent border text-dark"><a href="#sect3">Upload Resources</a></div>
                <div class="bg-transparent border text-dark"><a href="#sect5">Submit Class Links</a></div>
                <div class="bg-transparent border text-dark"><a href="#sect7">Upload Quizzes</a></div>
                </div>
            </div>

    <br>




    <div class="container">
        <div class="first">
            <table width="100%">
                        <tr>
                            <td width="50%" valign="top">
                                <h2 id="sect1">Messages</h2>
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

<br><br>

<div class="container mt-4">
<h2 id="sect2">Send Messages</h2>
<p>If you have any announcements to make or any messages for students, use this.</p>

<form action="#" method="POST">
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="person">Name</label>
                <input type="text" class="form-control" id="person" name="person">
            </div>
        </div>
        <br>
        <div class="col-md-8">
            <div class="form-group">
                <label for="message">Message</label>
                <input type="text" class="form-control" id="message" name="message">
            </div>
        </div>
    </div>
    <br>
    <div class="form-group">
        <input type="submit" class="btn btn-primary mb-2" name="message_box" value="Send Message">
        <a href="delete_messages.php" class="btn btn-danger mb-2">Delete</a>
        
    </div>
</form>
</div>

<hr class="hr" />

<!--upload resources-->
    <div class="container mt-4 ">
        <h2 id="sect3">Upload Resources</h2>
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="file" class="form-label">File (PDF, DOCX, PPT)</label>
                <input type="file" class="form-control" id="file" name="file" accept=".pdf,.docx,.ppt" required>
            </div>
            <button type="submit" class="btn btn-primary mb-3">Upload and Save</button>
        </form>
    </div>





<br><br>
<!--View resources-->
    <div class="container mt-4">
    <h2 id="sect4">Available Resources</h2>
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>Title</th>
            <th>File</th>
            <th>Action</th> 
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
            $fileId = $row['id']; 

            echo "<tr>";
            echo "<td>$title</td>";
            echo "<td><a href='$fileUrl' download>Download</a></td>";
            echo "<td><a href='delete_files_6to9.php?id=$fileId' class='btn btn-danger'>Delete</a></td>"; 
            echo "</tr>";
        }

        mysqli_free_result($lecture_result);
        ?>
    </tbody>
</table>

</div>

<hr class="hr" />
<br><br>


<!--upload class link-->
<div class="container mt-3 mb-3">
    <h1 id="sect5">Submit Class Links</h1>
    <form action="#" method="POST" enctype="multipart/form-data">
        <div class="div_deg">
            <div>
                <label for="">Title</label>
                <input type="text" name="title">
            </div>
            <br>
            <div>
                <label for="">Link</label>
                <input type="url" name="link">
            </div>
            <br>
            <p class="warning">Make sure that you enter the correct link</p>
            <div>
                <input type="submit" name="sub_link" value="Submit the link" class="btn btn-danger mb-3">
            </div>
        </div>
    </form>
</div>
<hr class="hr" />


<br><br>

<!--View Class links-->
<div class="container mt-4">
    <h1 id="sect6">Available Class Links</h1>
    <br>
    <table class="table">
        <tr class="tr">
            <th>Title</th>
            <th>Link</th>
            <th>Action</th>
        </tr>

        <?php
        $selectQuery = "SELECT * FROM links_6to9";
        $result = mysqli_query($conn, $selectQuery);

        while ($info = mysqli_fetch_assoc($result)) {
            ?>
            <tr class="tr">
                <td><?php echo $info['title']; ?></td>
                <td><a href="<?php echo $info['link']; ?>" target="_blank"><?php echo $info['link']; ?></a></td>
                <td>
                    <a href="delete_link_5.php?id=<?php echo $info['id']; ?>" class="btn btn-danger btn-sm mb-3">Delete</a>
                </td>
            </tr>
            <?php
        }
        ?>

    </table>
</div>

<hr class="hr" />
<br><br>


<!--upload Quizzes-->
<div class="container mt-3 mb-3">
    <h1 id="sect7">Upload Quizzes</h1>
    <form action="#" method="POST" enctype="multipart/form-data">
        <div class="div_deg">
            <div>
                <label for="">Quiz Number</label>
                <input type="text" name="quizno">
            </div>
            <br>
            <div>
                <label for="">Quiz Link (Google Form, FlexiQuiz etc...)</label>
                <input type="url" name="quizlink">
            </div>
            <br>
            <p class="warning">Make sure that you enter the correct link</p>
            <div>
                <input type="submit" name="sub_quiz" value="Submit Quiz" class="btn btn-danger mb-3">
            </div>
        </div>
    </form>
</div>

<br>

<!--View Quizzes-->
<div class="container mt-4">
    <h1 id="sect8">Quizzes Provided</h1>
    <br>
    <table class="table">
        <tr class="tr">
            <th>Link</th>
            <th>Action</th>
        </tr>

        <?php
        $selectQuery = "SELECT * FROM quiz_6to9";
        $result = mysqli_query($conn, $selectQuery);

        while ($info = mysqli_fetch_assoc($result)) {
            ?>
            <tr class="tr">
                <td><a href="<?php echo $info['quizlink']; ?>" target="_blank"><?php echo $info['quizlink']; ?></a></td>
                <td>
                    <a href="delete_quiz_5.php?id=<?php echo $info['id']; ?>" class="btn btn-danger btn-sm mb-3">Delete</a>
                </td>
            </tr>
            <?php
        }
        ?>

    </table>
</div>

<br><br>


    </section>

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
