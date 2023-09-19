<!--delete Quizzes-->


<?php
$host = "localhost";
$user = "phpuser";
$password = "php123";
$db = "schoolproject"; 

$data = mysqli_connect($host, $user, $password, $db);

//Grade4 Quizzes
if (isset($_GET['id'])) {
    $quizId = $_GET['id'];


    $deleteQuery = "DELETE FROM quiz WHERE id = '$quizId'";
    mysqli_query($data, $deleteQuery);

    echo "<script>alert('Deleted Successfully');</script>";
    header("Location:teacher4.php");
    exit();
}

?>
