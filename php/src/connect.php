<?php
        $host = 'db';
        $user = 'root';
        $pass = 'P@ssw0rd';
        $db = 'crud_db';
        $conn = new mysqli($host, $user, $pass, $db);
        if ($conn->connect_error) {
            die('Connection failed'. $conn->connect_error);
        }
?>