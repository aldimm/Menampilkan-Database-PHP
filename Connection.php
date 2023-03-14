<?php
        $dbServer = 'localhost';
        $dbUser = 'root';
        $dbPass = '';
        $db = 'classicmodels';

        $connec = mysqli_connect($dbServer, $dbUser, $dbPass, $db);

        mysqli_select_db($connec, $db)
?>