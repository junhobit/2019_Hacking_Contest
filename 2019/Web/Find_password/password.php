<html>
        <head>
                <h1>Find the password</h1>
        </head>
        <body>
                <script>alert('Access Denied')
                window.location.reload();</script>
                <form action='password.php' method='get'>
                        <input type='text' name='pasword'></br>
                        <input type='submit' value='search'></br>
                </form>
        <!-- hint :  "password" = "password" -->
        </body>
<html>
<?php
        $answer = $_GET["password"];
        if($answer=="&#112;&#97;&#115;&#115;&#119;&#111;&#114;&#100;")
        {
                echo "<br>flag:PaSs_worD";
        }
        else if("password"==$answer)
        {
                echo "Don't you think it's too easy?<br>No answer<br><br>";
                echo "Hint : <a href='view-source.txt'>view-source</a>";
        }
        else if(empty($answer) and empty($_GET["pasword"]))
        {
                echo "";
        }
        else
        {
                echo "<br>That's wrong!";
        }
?>