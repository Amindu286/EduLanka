<?php
$host = "localhost";

$user="phpuser";

$password="php123";

$db="schoolproject"; 

session_start();

$_SESSION['username'];

$data=mysqli_connect($host,$user,$password,$db);

if($data===false){
    die("connection error");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['username'];
    $pass = $_POST['password'];

    if (empty($name) || empty($pass)) {
        echo "<script>alert('Username and password are required');</script>";
    } else {
        $sql = "SELECT * FROM user WHERE username = '".$name."' AND password = '".$pass."' ";
        $result = mysqli_query($data, $sql);

        if ($result) {
            $row = mysqli_fetch_array($result);

            if (mysqli_num_rows($result) > 0) {
                $usertype = $row["usertype"];
                switch ($usertype) {
                    case 0:
                        $_SESSION['username']=$name;
                        header("location: adminhome.php");
                        break;
                    case 1:
                        $_SESSION['username']=$name;
                        header("location: teacher.php");
                        break;
                    case 4:
                        $_SESSION['username']=$name;
                        header("location: grade4.php");
                        break;
                    case 5:
                        $_SESSION['username']=$name;
                        header("location: grade5.php");
                        break;
                    case 6:
                        $_SESSION['username']=$name;
                        header("location: grade6.php");
                        break;
                    case 7:
                        $_SESSION['username']=$name;
                        header("location: grade7.php");
                        break;
                    case 8:
                        $_SESSION['username']=$name;
                        header("location: grade8.php");
                        break;
                    case 9:
                        $_SESSION['username']=$name;
                        header("location: grade9.php");
                        break;
                    case 10:
                        $_SESSION['username']=$name;
                        header("location: grade10.php");
                        break;
                    case 11:
                        $_SESSION['username']=$name;
                        header("location: grade11.php");
                        break;
                    case 12:
                        $_SESSION['username']=$name;
                        header("location: grade12.php");
                        break;
                    case 13:
                        $_SESSION['username']=$name;
                        header("location: grade13.php");
                        break;
                    default:
                        echo "<script>alert('Invalid User Type');</script>";
                        header("location: login.php");
                }
            } else {
                echo "<script>alert('Username or Password incorrect');</script>";
                header("location: login.php");
            }
        } else {
            echo "Query error: " . mysqli_error($data);
        }
    }
}


?>