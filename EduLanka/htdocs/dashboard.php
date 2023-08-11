<?php
require_once 'db_config.php';

$sql = "SELECT id, title, filename, filetype FROM lecture_materials";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>
    <ul>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <li>
                <a href="uploads/<?php echo $row['filename']; ?>" target="_blank">
                    <?php echo $row['title']; ?>
                </a>
            </li>
        <?php } ?>
    </ul>
</body>
</html>

<?php
$conn->close();
?>
