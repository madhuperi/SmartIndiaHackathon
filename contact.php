
<head>
  
  <title>Annuity Detector</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
</head>

<body>
  <div id="header_container">  
    <div id="header">
	
	  <div id="banner">
	 <p> <img src="gov.jpg" alt="government logo" width="83" height="100" align="left">
	
	 
	 <div style="color:#00FFFF"><h2>&nbsp;Ministry of Rural Development<br>&nbsp;Annuity Detector</h2></div> </p>
	 
	  
	  </div><!--close banner-->	
	  <div id="banner_slogan">
	    <img src="logo.jpg" alt="government logo" width="100" height="100">
	  </div><!--close banner_slogan-->
      <div id="menubar">
        <ul id="menu">
		  <br>
		 
          <li><a href="index.php">Home</a></li>
          <li><a href="ourwork.php">Eligibility list</a></li>
          <li><a href="login.php">Register</a></li>
          <li><a href="help.php">Help</a></li>
          <li class="current"><a href="contact.php">Contact Us</a></li>
        </ul>
      </div><!--close menubar-->  
    </div><!--close header-->  
  </div><!--close header_container-->  
  <div id="main">
	<div id="site_content">	
	  <div class="sidebar_container">       
		<div class="sidebar">
          <h2>Other Schemes</h2>
		  <div class="sidebar_item">
		
            <marquee  behavior="scroll" direction="up" scrollamount="5" scroll="continuous" valign="center" onmouseover="this.stop()" onmouseout="this.start()" ><p>Indira Gandhi National Old Age Pension Scheme</p><br>
			<p>Indira Gandhi National Widow Pension Scheme</p><br>
			<p>Indira Gandhi National Disability Pension Scheme</p><br></marquee>
		  	
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		<div class="sidebar">
          <h2>Annuity Detector</h2>
		  <div class="sidebar_item">
			<div id="content">
        <div class="content_item">
		  
          <div style="float:right;">  
			<ul class="slideshow">
              <li class="show">
              <li><img width="200" height="150" src="pic1.jpg"  /></li>
			  <li><img width="200" height="150" src="pic2.jpg"  /></li>
			  <li><img width="200" height="150" src="pic3.jpg"  /></li>
			  <li><img width="200" height="150" src="pic4.jpg"  /></li>
			  <li><img width="200" height="150" src="pic5.jpg"  /></li>
            </ul> 
          </div></div></div>
        
          </div><!--close sidebar_item--> 
        </div><!--close sidebar--> 
		 
       </div><!--close sidebar_container-->
	   
	   
       
     <div id="content">
        <div class="content_item">
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
    echo'You entered username or password is incorrect';
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



</body>
<head>
<style>
.button {
    background-color: #3366FF;
    border: none;
    color: white;
    padding: 10px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 17px;
    margin: 2px 2px;
    cursor: pointer;
}


.button4 {border-radius: 12px;}

</style>
</head>
<body>



<br><br>
<footer>
<address>
<a href="https://www.facebook.com/Annuity-detector-264041257378712/"><img title="Facebook" alt="Facebook" src="fb.jpg" width="40" height="40"></a>
<a href="https://www.youtube.com/watch?v=fTGA2gZrHnI"><img title="Youtube" alt="Youtube" src="youtube.png" width="60" height="40"></a><br>

<p><a href="index.php">Home</a> | <a href="ourwork.php">Eligibility</a> | <a href="login.php">Registration</a> | <a href="help.php">Help</a> | <a href="contact.php">Contact Us</a></p>
<br>
&copy; Copyright 2017 All Rghts Reserved www.yourdomain.com</address>
</footer>
<style>
footer {
width: 100%;
background: #232426;
float: left;
margin: 0 0 .5% 0;
border-radius: 10px;
box-shadow: 5px 5px 10px #202020
}

address {
font-size : 16px;
text-align : center; 
color: #efefef;
padding: 1% 0;
text-shadow: 1px 1px 0px #202020;
}
</style>
</div>
</body>
</html>
