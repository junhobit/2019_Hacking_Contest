<html>
<head>
<style>
  table {
    border: 3px solid #444444;
    border-color: black;
    background: #F2F2F2;
  }
  h1{
font-family:fantasy;
}
td{
font-family:monospace;
}
</style>
</head>
<body>
</br></br>
<div align="center">
<img src="git.png"  alt="junhobit" width="150px" height="150px"/>
</div>
<h1 align="center">Park's Hacking repository</h1>
<div align="center">
<table cellspacing="8" cellpadding="5" width="520" border="0">
  <tbody>
<tr>
    <td></td>
</tr>
  <tr><tr>
    <td align="center">Park : 1996.03.02 ~ alive</td>
</tr>
  <tr><tr>
    <td></td>
</tr>
  <tr>
  <tr>
    <td align="center"><h3>Hello Park!</h3> </td>
</tr>
<tr>
  </tr>
<tr>
    <td align="center">Enter your password...</td>
</tr>
  <tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td><!-- hint: password is his birthday yyyymmdd--></td>
</tr>
<tr>
<td align="center"><a href="view-source.php">Forgot your password?</a></td>
</tr>
  <tr>
    <td></td>
</tr>
    <tr><td align="center">
            <form method=get action=injection.php>
<input type=text name=password><input type=submit value="login">
    </td>
</tr>
  <tr>
    <td align="middle">&nbsp;</td>
</tr>
</tbody>
</table>
</div>
</form>
<?php
if($_GET['password'])
{
        $db = mysqli_connect('localhost','root','wnsghqlt');
        if(preg_match("/select|drop|alter|admin|#| |=/i",$_GET['password']))
        {
                echo ("<center><br>That was good trying<br>find another way</center>");
        }
        else
        {
                mysqli_select_db($db,'challenge');
                $row=mysqli_fetch_array(mysqli_query($db,"select id from challenge where id='guest' and password=({$_GET['password']})")) or die("<script>alert('You are not Park')</script>");
                if($row['id']=="guest")
                        echo "<script>alert('Oh!!! You are Park`s guest!!')</script>";
                if($row['id']=="admin")
                        echo "<center><br>flag:Hacking_is_FunNy</center>";
        }
}
?>
<br>
</body>
</html>
