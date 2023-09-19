<!--delete data from teacher table-->

<?php
$host = "localhost";
$user = "phpuser";
$password = "php123";
$db = "schoolproject"; 

$data = mysqli_connect($host, $user, $password, $db);

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Perform the user deletion query (replace 'id' with your actual ID column name)
    $deleteQuery = "DELETE FROM user WHERE id = '$userId'";
    mysqli_query($data, $deleteQuery);

    // Redirect back to the view_student.php page after deletion
    echo "<script>alert('Deleted Successfully');</script>";
    header("Location: view_teacher.php");
    exit();
}
?>
