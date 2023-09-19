<?php
session_start();
$host = "localhost";

$user = "phpuser";

$password = "php123";

$db = "schoolproject"; 

$data = mysqli_connect($host, $user, $password, $db);


if(isset($_POST['save_radio'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $request = $_POST['request'];

    $query = "INSERT INTO requests (name, email,request) VALUES ('$name','$email','$request')";

    $query_run = mysqli_query($data, $query);

    if($query_run){
        $_SESSION['status']="Sent Successfully";
        header("Location:requestAdmin.php");
    }
    else{
        $_SESSION['status']="Sent Failed";
        header("Location:requestAdmin.php");
    }
}
?>