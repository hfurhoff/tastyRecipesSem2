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
            <h1>Could not register new user</h1>
            <p>Please try again</p>
            <br>
            <?php
                include 'signupform.php';
            ?>
        </section>
    </body>
</html>