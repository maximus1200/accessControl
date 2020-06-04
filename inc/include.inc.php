<?php
    /* Connection to DB */
    $servername = '127.0.0.1';
    $user = 'root';
    $pw = '';
    $db ='access_control';

    $con = new mysqli($servername, $user, $pw, $db);

    /* Connection Info */
    if($con->connect_error){
      die('[Keine Verbindung zum Server] <br>');
    }
    echo'<br>';
    echo '[Verbindung zum Server erfolgreich aufgebaut] <br>';
    
    /* Date and Time 
    echo'<br>';
    echo date('D. j. F Y');
    echo'<br>';
    echo date('H:i:s T P');
    echo'<br>' . '<br>';*/
?>