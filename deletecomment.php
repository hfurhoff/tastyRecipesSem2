<?php
session_start();
if(!empty($_POST['timestamp'])){
    $servername = "localhost";
    $username = "h";
    $password = "pf";
    $dbname = "comments";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "DELETE FROM comments WHERE timestamp='" . $_POST["timestamp"] . "';";

    if ($conn->query($sql) === TRUE) {
        include $_SESSION["lastpage"];
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    $conn->close();
} else {
    include $_SESSION["lastpage"];
}