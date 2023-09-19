<?php

session_start();
session_unset();
session_destroy();

// Clear navigation prevention
echo '<script>window.onbeforeunload = null;</script>';

header("location:Dashboard.php");

?>