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

    $firstname = validate_input($_POST['firstname']);
    $lastname = validate_input($_POST['lastname']);
    $mi = validate_input($_POST['mi']);
    $age = validate_input($_POST['age']);
    $address = validate_input($_POST['address']);
    $gender = validate_input($_POST['gender']);
    $mNumber = validate_input($_POST['mNumber']);
    $Temp = validate_input($_POST['Temp']);
    $diagnosed = validate_input($_POST['diagnosed']);
    $encounter = validate_input($_POST['encounter']);
    $vaccinated = validate_input($_POST['vaccinated']);
    $nationality = validate_input($_POST['nationality']);


    $sql = "INSERT INTO healthdeclaration (Fname, Lname, mi, age,  address, gender, mNumber, Temp, diagnosed, encounter, vaccinated, nationality) " . 
            "VALUES ('". $firstname ."', " .
                    "'". $lastname ."', " .
                    "'". $mi ."', " .
                    "'". $age ."', " .
                    "'". $address ."', " .
                    "'". $gender ."', " .
                    "'". $mNumber ."', " .
                    "'". $Temp ."', " .
                    "'". $diagnosed ."', " .
                    "'". $encounter ."', " .
                    "'". $vaccinated ."', " .
                    "'". $nationality ."')";

    mysqli_query($connection, $sql);

    echo mysqli_insert_id($connection);

    mysqli_close($connection);

?>