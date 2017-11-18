<?php
    session_start();
    $_SESSION["lastpage"] = "index.php";
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
                    <li><a class="active" href="index.php">Home</a></li>
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
                    <li><a href="signuppage.php">New user</a></li>
                </ul>
            </nav>
        </header>
        <section>
            <h1>Welcome to Tasty Recipes!</h1>
            <article>
                <p>
                    At this site you can find many delicious recipes that are quick 
                    and easy to do. We also have events regularly so be sure to 
                    <a href="calendar.php">check out our awesome calendar here</a> 
                    as well. So far, we have 2 recipes in store for you to try out 
                    and please do write a comment also to let us know what you think. 
                    
                </p>
                <h2>About us</h2>
                <p>
                    The Tasty Recipes project started out as a school assignment but 
                    have grown to be one of the most visited recipe-pages on the 
                    world wide web. The key to our success was indefinitely our 
                    extraordinary calendar, where you can see what you are supposed 
                    to eat this month according to the board of health. 
                    <a href="calendar.php">Here is a link to the calendar.</a> 
                    <br>
                    <br>
                    Now you know all you need to know about so feel free to use 
                    the navigation bar at the top to begin reading the recipes 
                    or check out the calendar.
                </p>
            </article>
        </section>
    </body>
</html>
