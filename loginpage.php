<?php
    session_start();
    $_SESSION["lastpage"] = "loginpage.php";
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Tasty Recipes</title>
        <meta charset="UTF-8"/>
        <link rel ="stylesheet"
            type ="text/css"
            href ="reset.css"/>
        <link rel ="stylesheet"
            type ="text/css"
            href ="style.css"/>
    </head>
    <body>
        <header>
            <nav id="navbar">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="meatballs.php">Meatballs</a></li>
                    <li><a href="pancakes.php">Pancakes</a></li>
                    <li><a href="calendar.php">Calendar</a></li>
                    <li>
                        <?php
                            if (!isset($_COOKIE["user"])) {
                                echo '<a class="active" href="loginpage.php">Log in</a>';
                            }
                            else {
                                echo '<a class="active" href="loginpage.php">Log out</a>';
                            }
                        ?>
                    </li>
                    <li><a href="signuppage.php">New user</a></li>
                </ul>
            </nav>
        </header>
        <section>
            <?php
                if (!isset($_COOKIE["user"])) {
                    echo '<h2>Here you can log in!</h2>';
                    include 'loginform.php';
                } else {
                    echo '<h2>You are logged in!</h2>';
                    echo '
                            <form name="logout" action="logout.php" method="post">
                                <input type="submit" value="Log out"/>
                            </form>
                        ';
                }
            ?>
        </section>
    </body>
</html>
