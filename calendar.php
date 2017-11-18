<?php
    session_start();
    $_SESSION["lastpage"] = "calendar.php";
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
                    <li><a href="pancakes.php">Pancakes</a></li>
                    <li><a class="active" href="calendar.php">Calendar</a></li>
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
            <h2>Calendar</h2>
            <article>
                <h3>Current month: November</h3>
                <p>Click on a day to get to the recipe!</p>
                <div id="calendar">
                    <div class="monday">Mo</div>
                    <div class="tuesday">Tu</div>
                    <div class="wednesday">We</div>
                    <div class="thursday">Th</div>
                    <div class="friday">Fr</div>
                    <div class="saturday">Sa</div>
                    <div class="sunday">Su</div>

                    <div id="days">
                        <div class="monday"></div>
                        <div class="tuesday"></div>
                        <div class="wednesday">     1   </div>
                        <div class="thursday">      2   </div>
                        <div class="friday">        3   </div>
                        <div class="saturday">      4   </div>
                        <div class="sunday">        5   </div>

                        <div class="monday">        6   </div>
                        <div class="tuesday">       7   </div>
                        <div class="wednesday">     8   </div>
                        <div class="thursday">      9   </div>
                        <div class="friday">        10  </div>
                        <div class="saturday">      11  </div>
                        <div class="sunday">     
                            <a href="pancakes.php">
                                <p class="pictureday">12</p>
                            </a>  
                            <a href="pancakes.php">
                                <div class="pictureday">
                                    <img class="pictureday" 
                                         src="swedish-pancakes.jpg" 
                                         alt="Swedish panxakes"/>
                                </div>
                            </a>
                        </div>

                        <div class="monday">        13  </div>
                        <div class="tuesday">       14  </div>
                        <div class="wednesday">
                            <a href="meatballs.php">
                                <p class="pictureday">15</p>
                            </a>
                            <a href="meatballs.php">
                                <div class="pictureday">
                                    <img class="pictureday" 
                                         src="swedish-meatballs.jpg" 
                                         alt="Swedish meatballs"/>
                                </div>
                            </a>
                        </div>
                        <div class="thursday">      16  </div>
                        <div class="friday">        17  </div>
                        <div class="saturday">      18  </div>
                        <div class="sunday">        19  </div>

                        <div class="monday">        20  </div>
                        <div class="tuesday">       21  </div>
                        <div class="wednesday">     22  </div>
                        <div class="thursday">      23  </div>
                        <div class="friday">        24  </div>
                        <div class="saturday">      25  </div>
                        <div class="sunday">        26  </div>

                        <div class="monday">        27  </div>
                        <div class="tuesday">       28  </div>
                        <div class="wednesday">     29  </div>
                        <div class="thursday">      30  </div>
                    </div>
                </div>
            </article>
        </section>
    </body>
</html>
