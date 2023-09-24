<?php 

    include 'connection.php';

    // check database connection
    if (!$connection)
        die("Connection failed: " . mysqli_connect_error());

    $sql = "SELECT COUNT(id) AS finishedRemarks FROM healthdeclaration WHERE diagnosed = 'YES'";

    $result = mysqli_query($connection, $sql);

    $finishedRemarks[] = mysqli_fetch_assoc($result);

    header('Content-type: application/json');
    echo json_encode($finishedRemarks);

    mysqli_close($connection);

?>