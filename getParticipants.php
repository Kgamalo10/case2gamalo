<?php 

    include 'connection.php';

    // check database connection
    if (!$connection)
        die("Connection failed: " . mysqli_connect_error());

    $sql = "SELECT * FROM healthdeclaration";

    if (isset($_GET['keyword'])) {
        $sql = "SELECT * FROM healthdeclaration WHERE Fname LIKE '%" . $_GET['keyword'] . "%'";
    }

    $result = mysqli_query($connection, $sql);

    $participants = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $participants[] = $row;
    }

    header('Content-type: application/json');
    echo json_encode($participants);

    mysqli_close($connection);

?>