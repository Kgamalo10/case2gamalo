<?php
include 'connection.php';

// Check database connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT COUNT(id) AS minor FROM healthdeclaration WHERE age <= 18";
$result = mysqli_query($connection, $sql);

$minor = mysqli_fetch_assoc($result);

header('Content-type: application/json');
echo json_encode($minor);

mysqli_close($connection);
?>
