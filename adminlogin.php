<?php
session_start();
if(isset($_POST['submit']))
{
 mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('validate') or die(mysql_error());
 $username=$_POST['username'];
 $password=$_POST['password'];
 if($username!=''&&$password!='')
 {
   $query=mysql_query("select * from adminlogin where username='".$username."' and password='".$password."'") or die(mysql_error());
   //echo "select * from adminlogin where username='".$username."' and password='".$password."'";
   //exit;
   $res=mysql_fetch_row($query);
   if($res)
   {
    $_SESSION['name']=$name;
    header('location:list.php');
   }
   else
   {
    echo'You  username or password you entered is incorrect';
   }
 }
 else
 {
  echo'Enter both username and password';
 }
}
?>
<html>

<form method="post" action="#">
<table width="370" border="1" align="center" style="background: silver; ">
<tr height=25 >
<th colspan="4" align="center">User Login &nbsp;
</th>
</tr>
<tr>
<td>User Name</td>
<td><input type="text" name="username" ></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password" ></td>
</tr>
<tr align="center">
<td align="center" colspan="2">
<input type="submit" name="submit" value="Submit">
</tr>
</table>
</form>
</html>


