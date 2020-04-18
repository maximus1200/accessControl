<?php
    /* Connection to DB */
    include_once 'include.php';

    /* POST input field */
    $employee_number = $_POST['employee_number'];

    /* SQL Statement + Query */
    /*$sql = "SELECT number, lastname ,authorized FROM employee WHERE number = '$employee_number' AND authorized = '1';";*/
    $sql = "SELECT number, lastname ,authorized FROM employee WHERE number = '$employee_number';";
    $result = mysqli_query($con, $sql);

    while ($row =mysqli_fetch_assoc($result)) {
        $numberFromDB = $row['number'];
        $authorizedFromDB = $row['authorized'];
    }

    /*wenn nichts eingegeben wir kommt trotzdem grün !!!!!!!!! */
    /* Copare the data from the chip with data from DB and start session (green and red) */
    if ($numberFromDB == $employee_number and $authorizedFromDB == '1') {
        session_start();
        $_SESSION['check_number_green'] = $employee_number;
        header('Location: green.php');
    }
    elseif ($numberFromDB == $employee_number and $authorizedFromDB == '0') {
        session_start();
        $_SESSION['check_number_yellow'] = $employee_number;
        header('Location: yellow.php');
    }

    else {
        header('Location: red.php');
    }
?>