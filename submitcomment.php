<?php
    session_start();
    if(!empty($_POST['comment']) || $_POST['comment'] == "                    "){
        $comment = $_POST['comment'];
        date_default_timezone_set("Europe/Stockholm");
        $date = date("Y/m/d/ H:i:s");
        $acc = $_COOKIE["user"];
        $timestamp = time();

        $conn = new mysqli("localhost", "h", "pf", "comments");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "INSERT INTO comments
        VALUES ('" . $acc . "', '" . $timestamp . "', '" . $comment . "', '" . $_SESSION["lastpage"] . "', '" . $date . "')";

        if ($conn->query($sql) === TRUE) {
            include $_SESSION["lastpage"];
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    } else {
        include $_SESSION["lastpage"];
    }