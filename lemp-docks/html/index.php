<?php
    $servername = "db";
    $username = "devops";
    $password = "devops1@1";

    $dbhandle = mysqli_connect($servername, $username, $password);
    $selected = mysqli_select_db($dbhandle, "titanic");

    echo "Connected database server <br>";
    echo "Selected database";
?>
