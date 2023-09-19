<?php
// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Add your database connection code here
    $host = "localhost";
    $user = "phpuser";
    $password = "php123";
    $db = "schoolproject";

    $data = mysqli_connect($host, $user, $password, $db);

    // Check if the connection was successful
    if (!$data) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Create a DELETE query to delete the request with the specified 'id'
    $sql = "DELETE FROM requests WHERE id = $id";

    // Execute the query
    if (mysqli_query($data, $sql)) {
        echo "Request deleted successfully.";
        header("Location: complain.php"); 
        exit();
    } else {
        echo "Error deleting request: " . mysqli_error($data);
    }

    // Close the database connection
    mysqli_close($data);
} else {
    echo "Invalid request.";
}
?>
