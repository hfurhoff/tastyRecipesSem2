<?php
    session_start();
    $_SESSION["lastpage"] = "meatballs.php";
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
                    <li><a class="active" href="meatballs.php">Meatballs</a></li>
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
            <h2>Meatballs</h2>
            <article>
                <div id="ingredientsandoperations">
                    <div id="ingredients">
                        <table>
                            <caption>Ingredients</caption>
                            <tr>
                                <td class="type">Ground beef</td>
                                <td class="value">600 gram</td>
                            </tr>
                            <tr>
                                <td class="type">Yellow onion</td>
                                <td class="value">1</td>
                            </tr>
                            <tr>
                                <td class="type">Eggs</td>
                                <td class="value">2</td>
                            </tr>
                            <tr>
                                <td class="type">Cream</td>
                                <td class="value">1.5 dl</td>
                            </tr>
                            <tr>
                                <td class="type">Breadcrumbs</td>
                                <td class="value">1 dl</td>
                            </tr>
                            <tr>
                                <td class="type">Potatoes</td>
                                <td class="value">8 medium sized</td>
                            </tr>
                            <tr>
                                <td class="type">Salt</td>
                                <td class="value">As you prefer</td>
                            </tr>
                            <tr>
                                <td class="type">Pepper</td>
                                <td class="value">As you prefer</td>
                            </tr>
                            <tr>
                                <td class="type">Butter</td>
                                <td class="value">For frying</td>
                            </tr>
                        </table>
                        <img id="pic" src="swedish-meatballs.jpg" alt="Swedish meatballs"/>
                    </div>
                    <h3>How to prepare it: </h3>
                    <ol>
                        <li>
                            Boil the potatoes in lots of water until they no 
                            longer are raw inside. 
                        </li>
                        <li>
                            Chop up the onion into as small pieces as you can 
                            and mix in a bowl with the ground beef, egg and 
                            breadcrumbs.
                        </li>
                        <li>
                            Form the beefmix into balls as big as you want and 
                            fry in a pan at medium-high temperature with salt 
                            and pepper.
                        </li>
                        <li>
                            When you have fried all the meatballs, pour the 
                            cream into the pan to make gravy and serve with 
                            lingonberryjam.
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
