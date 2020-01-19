<?php
if($_GET['password'])
{
        if(preg_match("/select|drop|alter|admin|#| |=/i",$_GET['password']))
                echo "hack()";
        else
        {
                $row=mysqli_fetch_array(mysqli_query($db,"select id from challenge where id='guest' and password=({$_GET['password']})")) or die("error()");
                if($row['id']=="guest")
                        echo "guest()";
                if($row['id']=="admin")
                        echo "flag()";
        }
}
?>