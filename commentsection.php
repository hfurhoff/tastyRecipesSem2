<?php
    echo '<div id="commentsection">';
    if (isset($_COOKIE["user"])) {
        echo '
                <p>
                    You can submit a comment with the form below as user: ' 
                    . $_COOKIE["user"] .
                    '.
                </p>
                <br>
                <form name="commentform" action="submitcomment.php" method="post">
                    <textarea
                        name="comment"
                        rows="2"
                        cols="25"
                        placeholder="Feel free to submit a comment...">
                    </textarea>
                    <input type="submit" value="Submit comment"/>
                </form>';
    }
    else {
        echo '<p>You need to login to submit a comment. <a href="loginpage.php">You can do that here</a>';
    }
    echo '<h3>Comments</h3>';

    $servername = "localhost";
    $username = "h";
    $password = "pf";
    $dbname = "comments";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "SELECT user, date, comment, timestamp FROM comments WHERE page='" . $_SESSION["lastpage"] . "';";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo ""
            .   "<div class=\"postedcomment\">"
            .       "<p class=\"commentauthor\">"
            .           "At " . $row["date"] . " " . $row["user"] . " wrote:"
            .       "</p>"
            .       "<p class=\"comment\">" 
            .           $row["comment"]      
            .       "</p>";
            if(isset($_COOKIE["user"])){
                if($row["user"] == $_COOKIE["user"]){
                    echo
                           "<form name=\"deletecomment\" action=\"deletecomment.php\" method=\"post\">"
                    .           "<input type=\"hidden\" name=\"timestamp\" value=".$row["timestamp"].">"
                    .           "<input type=\"submit\" value=\"Delete comment\"/>"
                    .       "</form>";
                }
            }
            echo   "</div>";
        }
    } else {
        echo "No comments have been made for this recipe yet. Feel free to be the first one!";
    }
    $conn->close();


    /*<div class="postedcomment">
        <p class="commentauthor">
            At 2017-11-03 12:48 Calle wrote:
        </p>
        <p class="comment">
            Fysatan vad gott det var!!!!!
        </p>
    </div>
    <div class="postedcomment">
        <p class="commentauthor">
            At 2017-11-03 13:25 Ricky wrote:
        </p>
        <p class="comment">
            Can someone please translate what Calle wrote? Would be much appreciated!
        </p>
    </div>*/
    echo '</div>';
?>