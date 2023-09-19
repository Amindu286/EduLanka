<?php
$host = "localhost";
$user = "phpuser";
$password = "php123";
$db = "schoolproject"; 

$data = mysqli_connect($host, $user, $password, $db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['record_id'])) {
        $recordId = $_POST['record_id'];

        $deleteQuery = "DELETE FROM time_table WHERE id = '$recordId'";
        if (mysqli_query($data, $deleteQuery)) {
            echo "<script type ='text/javascript'> alert('Record deleted successfully');</script>";
            header("Location: timetable.php"); // Redirect back to the timetable page
            exit();
        } else {
            echo "<script type ='text/javascript'> alert('Failed to delete record');</script>";
            header("Location: timetable.php"); // Redirect back to the timetable page
            exit();
        }
    }
}
?>
