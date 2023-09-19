<!--delete Messages-->


<?php
$host = "localhost";
$user = "phpuser";
$password = "php123";
$db = "schoolproject"; 

$data = mysqli_connect($host, $user, $password, $db);

//Grade4 Messages
if (isset($_GET['id'])) {
    $mesId = $_GET['id'];


    $deleteQuery = "DELETE FROM messages WHERE id = '$mesId'";
    mysqli_query($data, $deleteQuery);

    echo "<script>alert('Deleted Successfully');</script>";
    header("Location:teacher4.php");
    exit();
}
?>
