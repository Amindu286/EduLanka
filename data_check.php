<?php
$host = "localhost";

$user = "phpuser";

$password = "php123";

$db = "schoolproject"; 

$data = mysqli_connect($host, $user, $password, $db);

if ($data === false) {
    die("Connection Error");
}

if (isset($_POST['apply'])) {
    $data_name = mysqli_real_escape_string($data, $_POST['name']);
    $data_school = mysqli_real_escape_string($data, $_POST['school']);
    $data_email = mysqli_real_escape_string($data, $_POST['email']);
    $data_message = mysqli_real_escape_string($data, $_POST['message']);

    // Check if all fields are filled
    if (!empty($data_name) && !empty($data_school) && !empty($data_email) && !empty($data_message)) {
        $sql = "INSERT INTO complains (name, school, email, message) 
                VALUES ('$data_name', '$data_school', '$data_email', '$data_message')";

        $result = mysqli_query($data, $sql);

        if ($result) {
            echo "<script>alert('Sent Successfully');</script>";
        } else {
            echo "<script>alert('Failed sending complain');</script>";
        }
    } else {
        echo "<script>alert('Please fill in all fields.');</script>";
    }
}
?>
