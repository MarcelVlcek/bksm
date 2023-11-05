<?php
            $db_host = "localhost";
            $db_user = "vlko";
            $db_password = "Vlkinderko22";
            $db_name = "bksm";
        
        //CREATE CONNECTION
        $connection = new mysqli($db_host, $db_user, $db_password, $db_name );    

        //CHECK CONNECTION
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }


    