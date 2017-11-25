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
          <li class="current"><a href="http://localhost/project1/smartindia/login.php">Register</a></li>
          <li><a href="help.php">Help</a></li>
          <li><a href="contact.php">Contact Us</a></li>
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
	  <br><br>
	   
    <?php
// define variables and set to empty values
$fnameErr = $lnameErr = $genderErr = $numErr =  $aadharErr =  $dobErr = $rationErr = $bankErr =  $websiteErr = $FstnameErr= $LstnameErr ="";
$fname = $lname = $gender = $dob = $num =  $aadhar = $comment = $ration= $bank =  $website =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
  if (empty($_POST["fname"])) {
    $FstnameErr = " First Name is required";
	$e1='yes';
	  } else {
    $fstname = test_input($_POST["fname"]);
	$e1='no';
  }
  
  if (empty($_POST["lname"])) {
    $LstnameErr = " Last Name is required";
	$e2='yes';
  } else {
    $lstname = test_input($_POST["lname"]);
	$e2='no';
  }
  
   if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
	$e3='yes';
  } else {
    $gender = test_input($_POST["gender"]);
	$e3='no';
  }
  
  if (empty($_POST["dob"])) {
    $dobErr = " DOB is required";
	$e4='yes';
  } else {
    $dob = test_input($_POST["dob"]);
	$e4='no';
  }
  
  
  if (empty($_POST["num"])) {
    $numErr = "Contact number is required";
	$e5='yes';
  } else {
    $num = test_input($_POST["num"]);
	$e5='no';
  }
  if (empty($_POST["aadhar"])) {
    $aadharErr = " Aadhar card number is required";
	$e6='yes';
  } else {
    $aadhar = test_input($_POST["aadhar"]);
	$e6='no';
  }
  if (empty($_POST["ration"])) {
    $rationErr = " Ration card number is required";
	$e7='yes';
  } else {
    $ration = test_input($_POST["ration"]);
	$e7='no';
  }
    
  if (empty($_POST["bank"])) {
    $bankErr = "Bank account Number is required";
	$e8='yes';
  } else {
    $bank = test_input($_POST["bank"]);
	$e8='no';
  }
    
  

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }


if($e1=='no' && $e2=='no' && $e3=='no' && $e4=='no' && $e5=='no' && $e6=='no' && $e7=='no' && $e8=='no' ){
	$con=mysql_connect('localhost', 'root', '') or die('error: '.mysql_error());
	$dbS=mysql_select_db('validate');
	mysql_query('INSERT INTO `registration` (`fst_name`, `lst_name`, `gender`, `dob`, `contact_num`, `aadhar_num`, `ration_num`, `pan_num`, `bank_acc`)
	 VALUES ("'.$fstname.'", "'.$lstname.'", "'.$gender.'", "'.$dob.'", "'.$num.'", "'.$aadhar.'", "'.$ration.'", "'.$_POST["pancard"].'", "'.$bank.'")');
	
header('Location: login.php?msg=s');
}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  


<h2 >REGISTRATION FORM</h2>

<?php

if(isset($_GET['msg'])){

echo "<h3 style='color:red;'>Registration Successful</h3>";

}

?>
<a href="list.php" style="float:right">View Users</a>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  


  First Name:*
  <input type="text" name="fname">
  
  <span class="error"> <?php echo $FstnameErr;?></span>
  
  Last Name:* <input type="text" name="lname">
  <span class="error"> <?php echo $LstnameErr;?></span>
  <br><br>
  Gender:*
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <span class="error"> <?php echo $genderErr;?></span>
  <br><br>
  Date Of Birth: <input type="text" name="dob">
  <span class="error"><?php echo $dobErr;?></span>
  <br><br>
  Contact Number:* <input type="text" name="num">
  <span class="error"> <?php echo $numErr;?></span>
  <br><br>
  Aadhar Card Number:* <input type="text" name="aadhar">
  <span class="error"> <?php echo $aadharErr;?></span>
  <br><br>
  Ration Card Number:* <input type="text" name="ration">
  <span class="error"><?php echo $rationErr;?></span>
  <br><br>
  PAN Card number : <input type="text" name="pancard">
  
  <br><br>
  Bank Account Number :* <input type="text" name="bank">
  <span class="error"> <?php echo $bankErr;?></span>
  <br><br>
  
  <p><span class="error">* required field.</span></p>
  <input type="submit" name="submit" value="Submit">  
</form>



</body>
</html>
