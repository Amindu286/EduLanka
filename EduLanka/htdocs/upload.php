<?php
require_once 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $targetDir = "uploads/";

    $targetFile = $targetDir . basename($_FILES["file"]["name"]);
    $fileType = pathinfo($targetFile, PATHINFO_EXTENSION);

    $allowedFormats = array("pdf", "doc", "docx", "ppt", "pptx");
    if (!in_array($fileType, $allowedFormats)) {
        echo "Only PDF, Word documents, and PowerPoint presentations are allowed.";
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
      
            $filename = $_FILES["file"]["name"];
            $sql = "INSERT INTO lecture_materials (title, filename, filetype) VALUES ('$title', '$filename', '$fileType')";
            if ($conn->query($sql) === TRUE) {
                echo "File uploaded successfully and database updated.";
            } else {
                echo "Error updating database: " . $conn->error;
            }
        } else {
            echo "Error uploading file.";
        }
    }
}

$conn->close();
?>

