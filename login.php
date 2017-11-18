<?php
    session_start();
    if(!empty($_POST['acc']) && !empty($_POST['pass'])){
        $acc = $_POST['acc'];
        $pass = (string)$_POST['pass'];

        $con = mysqli_connect("localhost","h","pf","users");

        // Check connection
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        } else {
            $sql = 'SELECT * FROM users WHERE acc=\'' . $acc . '\';';
            if ($result=mysqli_query($con,$sql)){
                $obj=mysqli_fetch_object($result);
            }
            $correctPass = (string)$obj->pass;
            if($pass == $correctPass){
                setcookie("user", $acc, time() + 60*60);
                include 'succededlogin.php';
            } else {
                include 'failedloginpage.php';
            }
        }
    } else {
        include 'failedloginpage.php';
    }