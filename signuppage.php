<?php
    session_start();
    $_SESSION["lastpage"] = "signuppage.php";
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
                                echo '<a href="loginpage.php">Log in</a>';
                            }
                            else {
                                echo '<a href="loginpage.php">Log out</a>';
                            }
                        ?>
                    </li>
                    <li><a class="active" href="signuppage.php">New user</a></li>
                </ul>
            </nav>
        </header>
        <section>
            <?php
                if (!isset($_COOKIE["user"])) {
                    echo '<h2>Here you can register a new user!</h2>';
                    include 'signupform.php';
                } else {
                    echo '<h2>You are logged in!</h2>';
                    echo '<p>You need to be logged out to register a new user';
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
