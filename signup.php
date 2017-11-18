<?php
    session_start();
    if(!empty($_POST['acc']) && !empty($_POST['pass'])){
        $acc = $_POST['acc'];
        $pass = (string)$_POST['pass'];

        $conn = new mysqli("localhost", "h", "pf", "users");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "SELECT * FROM users WHERE acc='" . $_POST['acc'] . "';";
        $result = $conn->query($sql);
        
        if ($result->num_rows == 0){
            $sql = "INSERT INTO users
            VALUES ('" . $acc . "', '" . $pass . "')";

            if ($conn->query($sql) === TRUE) {
                include 'succededsignup.php';
            } else {
                include 'failedsignup.php';
            }

            $conn->close();
        } else {
            include 'failedsignup.php';
        }
    } else {
        include 'failedsignup.php';
    }