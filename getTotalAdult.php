<?php
include 'connection.php';

// Check database connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT COUNT(id) AS adult  FROM healthdeclaration WHERE age => 18";
$result = mysqli_query($connection, $sql);

$adult = mysqli_fetch_assoc($result);

header('Content-type: application/json');
echo json_encode($adult);

mysqli_close($connection);
?>
