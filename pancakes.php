<?php
    session_start();
    $_SESSION["lastpage"] = "pancakes.php";
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
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="meatballs.php">Meatballs</a></li>
                    <li><a class="active" href="pancakes.php">Pancakes</a></li>
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
            <h2>Pancakes</h2>
            <article>
                <div id="ingredientsandoperations">
                    <div id="ingredients">
                        <table>
                            <caption>Ingredients</caption>
                            <tr>
                                <td class="type">Eggs</td>
                                <td class="value">2</td>
                            </tr>
                            <tr>
                                <td class="type">Flour</td>
                                <td class="value">2 dl</td>
                            </tr>
                            <tr>
                                <td class="type">Milk</td>
                                <td class="value">2 dl</td>
                            </tr>
                            <tr>
                                <td class="type">Salt</td>
                                <td class="value">A pinch</td>
                            </tr>
                            <tr>
                                <td class="type">Butter</td>
                                <td class="value">For frying</td>
                            </tr>
                        </table>
                        <img id="pic" src="swedish-pancakes.jpg" alt="Swedish panxakes"/>
                    </div>
                        <h3>How to prepare it: </h3>
                    <ol>
                        <li>
                            Mix the flour, milk, eggs and salt in a bowl together to a smooth batter.
                        </li>
                        <li>
                            Pour 1 dl of the batter into a medium-hot pan and let it sit until the pancake is firm on the top.
                        </li>
                        <li>
                            Flip it and fry on other side for about 2 min. 
                        </li>
                        <li>
                            Repeat 2-3 until there are no more batter.
                        </li>
                        <li>
                            Serve with strawberryjam and whipped cream. 
                        </li>
                    </ol>
                </div>
            </article>
            <?php
                include 'commentsection.php';
            ?>
        </section>
    </body>
</html>

