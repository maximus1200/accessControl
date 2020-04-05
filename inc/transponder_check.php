<?php
    /* Connection to DB */
    include_once 'include.php';

    /* POST input field */
    $employee_number = $_POST['employee_number'];

    /* SQL Statement + Query */
    $sql = "SELECT number, lastname ,authorized FROM employee WHERE number = '$employee_number' AND authorized = 1;";
    $result = mysqli_query($con, $sql);

    while ($row =mysqli_fetch_assoc($result)) {
        $numberFromDB = $row['number'];
    }

    /*wenn nichts eingegeben wir kommt trotzdem grün !!!!!!!!! */
    /* Copare the data from the chip with data from DB and start session (green and red) */
    if ($numberFromDB == $employee_number) {
        session_start();
        $_SESSION['check_number'] = $employee_number;
        header('Location: green.php');
    }
    else{
        header('Location: yellow.php');
    }

    
?>