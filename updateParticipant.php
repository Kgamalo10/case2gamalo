<?php 

    include 'connection.php';

    // check database connection
    if (!$connection)
        die("Connection failed: " . mysqli_connect_error());

    function validate_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    
        $Fname = validate_input($_POST['firstname']);
        $Lname = validate_input($_POST['lastname']);
        $mi = validate_input($_POST['mi']);
        $age = validate_input($_POST['age']);
        $address = validate_input($_POST['address']);
        $gender = validate_input($_POST['gender']);
        $mNumber = validate_input($_POST['mNumber']);
        $temp = validate_input($_POST['Temp']);
        $diagnosed = validate_input($_POST['diagnosed']);
        $encounter = validate_input($_POST['encounter']);
        $vaccinated = validate_input($_POST['vaccinated']);
        $nationality = validate_input($_POST['nationality']);

     $sql = "UPDATE healthdeclaration SET " . 
            "Fname = '". $Fname ."', " .
            "Lname = '". $Lname ."', " .
            "mi = '". $mi ."', " .
            "age = '". $age ."', " .
            "address = '". $address ."', " .
            "gender = '". $gender ."', " .
            "mNumber = '". $mNumber ."', " .
            "Temp = '". $temp ."'" .
            "diagnosed = '". $diagnosed ."'" .
            "encounter = '". $encounter ."'" .
            "vaccinated = '". $vaccinated ."'" .
            "nationality = '". $nationality ."'" .
            "WHERE id = " . $_POST['id'];

    if (mysqli_query($connection, $sql)) {
        $success = true;
    } else {
        $success = false;
    }
                   
    echo $success;

    mysqli_close($connection);

?>