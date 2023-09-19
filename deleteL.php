<!--delete links-->


<?php
$host = "localhost";
$user = "phpuser";
$password = "php123";
$db = "schoolproject"; 

$data = mysqli_connect($host, $user, $password, $db);
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Delete the link with the given ID from the database
    $deleteQuery = "DELETE FROM links WHERE id = $id";
    if (mysqli_query($conn, $deleteQuery)) {
        echo "<script type='text/javascript'> alert('Link Deleted Successfully');</script>";
        header('Location: your_view_links_page.php'); // Redirect back to the view links page
    } else {
        echo "<script type='text/javascript'> alert('Link Deletion Failed');</script>";
    }
}
?>
