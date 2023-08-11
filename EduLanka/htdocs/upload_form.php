<!DOCTYPE html>
<html>
<head>
    <title>Upload Lecture Materials</title>
</head>
<body>
    <h1>Upload Lecture Materials</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required><br>
        <label for="file">Select file:</label>
        <input type="file" name="file" id="file" accept=".pdf,.doc,.docx" required><br>
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>
