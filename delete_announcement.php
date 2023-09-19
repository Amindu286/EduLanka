<?php
$host = "localhost";
$user = "phpuser";
$password = "php123";
$db = "schoolproject";

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['announcement_id'])) {
        $announcementId = $_POST['announcement_id'];
        

        $imageQuery = "SELECT image FROM announcements WHERE id = '$announcementId'";
        $imageResult = mysqli_query($conn, $imageQuery);
        $imageRow = mysqli_fetch_assoc($imageResult);
        $imageFile = $imageRow['image'];

        // delete img from the folder
        unlink("uploads/".$imageFile);
        
        // delete from db
        $deleteQuery = "DELETE FROM announcements WHERE id = '$announcementId'";
        if (mysqli_query($conn, $deleteQuery)) {
            header("Location: adminhome.php");
            exit();
        } else {
            $_SESSION['status'] = "Failed to delete announcement.";
            header("Location: adminhome.php"); 
            exit();
        }
    }
}
?>
