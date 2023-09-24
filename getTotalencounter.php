<?php 

    include 'connection.php';

    // check database connection
    if (!$connection)
        die("Connection failed: " . mysqli_connect_error());

    $sql = "SELECT COUNT(id) AS totalEncounter FROM healthdeclaration WHERE encounter = 'YES'";

    $result = mysqli_query($connection, $sql);

    $totalEncounter[] = mysqli_fetch_assoc($result);

    header('Content-type: application/json');
    echo json_encode($totalEncounter);

    mysqli_close($connection);

?>