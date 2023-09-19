<!--delete class links-->


<?php
$host = "localhost";
$user = "phpuser";
$password = "php123";
$db = "schoolproject"; 

$data = mysqli_connect($host, $user, $password, $db);

//Grade4 Links
if (isset($_GET['id'])) {
    $linkId = $_GET['id'];

    $deleteQuery = "DELETE FROM links WHERE id = '$linkId'";
    mysqli_query($data, $deleteQuery);


    echo "<script>alert('Deleted Successfully');</script>";
    header("Location:teacher4.php");
    exit();
}

?>
