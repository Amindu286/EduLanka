<!--Dlete Resources-->

<?php
$host = "localhost";
$user = "phpuser";
$password = "php123";
$db = "schoolproject"; 

$data = mysqli_connect($host, $user, $password, $db);

//Grade4 Resources
if (isset($_GET['id'])) {
    $docId = $_GET['id'];

    if (isset($_GET['confirm']) && $_GET['confirm'] === 'yes') {
        $deleteQuery = "DELETE FROM lecture_materials WHERE id = '$docId'";
        mysqli_query($data, $deleteQuery);

        echo "<script>alert('Deleted Successfully');</script>";
        header("Location:teacher4.php");
        exit();
    } else {
        echo "<script>
            var confirmed = confirm('Are you sure you want to delete this file?');
            if (confirmed) {
                window.location.href = 'delete_files.php?id=$docId&confirm=yes';
            } else {
                window.location.href = 'teacher4.php'; // Redirect back if not confirmed
            }
        </script>";
    }
}


?>

