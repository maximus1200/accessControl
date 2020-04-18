<?php
    /* Connection to DB */
    include_once 'include.php';

    /* POST input field */
    $employee_number = $_POST['employee_number'];

    /* SQL Statement + Query */
    $sql = "SELECT number, title, lastname, authorized FROM employee WHERE number = '$employee_number';";
    $result = mysqli_query($con, $sql);

    while ($row =mysqli_fetch_assoc($result)) {
        $numberFromDB = $row['number'];
        $authorizedFromDB = $row['authorized'];
        $lastnameFromDB = $row['lastname'];
        $titleFromDB = $row['title'];


    }

    /* Copare the data from the transponder/chip with data from DB and start session (green, yellow and red) 
        - Green page: Right of access for this employee in this area
        - Yellow page: No right of access for this employee in this area
        - Red page: Number not correct, transponder unknown
    */
    if ($numberFromDB == $employee_number and $authorizedFromDB == '1') {
        session_start();
        $_SESSION['check_number_green'] = $employee_number;
        $_SESSION['title'] = $titleFromDB;
        $_SESSION['lastname'] = $lastnameFromDB;
        header('Location: green.php');
    }
    elseif ($numberFromDB == $employee_number and $authorizedFromDB == '0') {
        session_start();
        $_SESSION['check_number_yellow'] = $employee_number;
        $_SESSION['title'] = $titleFromDB;
        $_SESSION['lastname'] = $lastnameFromDB;
        header('Location: yellow.php');
    }

    else {
        header('Location: red.php');
    }
?>