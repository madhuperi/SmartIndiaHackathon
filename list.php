<?php
$con=mysql_connect('localhost', 'root', '') or die('error: '.mysql_error());
	$dbS=mysql_select_db('validate');
	$q1=mysql_query('select * from registration');
?>

<!DOCTYPE HTML>
<html>
<head>
<style>
.error {
	color: #FF0000;
}
</style>
</head>
<body>
<center><h2 >REGISTRATIONS List</h2></center>
<table width="100%" border="1">
  <tr>
    <th>S.no</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Gender</th>
    <th>DOB</th>
    <th>Contact</th>
    <th>Aadhar</th>
    <th>Ration</th>
    <th>PAN</th>
    <th>BANK</th>
  </tr>
  
<?php 
$i=1;
while($q1Ft=mysql_fetch_assoc($q1)){
	
	?>
  <tr>
    <td><?php echo $i;?></td>
    <td><?php echo $q1Ft['fst_name'];?></td>
    <td><?php echo $q1Ft['lst_name'];?></td>
    <td><?php echo $q1Ft['gender'];?></td>
    <td><?php echo $q1Ft['dob'];?></td>
    <td><?php echo $q1Ft['contact_num'];?></td>
    <td><?php echo $q1Ft['aadhar_num'];?></td>
    <td><?php echo $q1Ft['ration_num'];?></td>
    <td><?php echo $q1Ft['pan_num'];?></td>
    <td><?php echo $q1Ft['bank_acc'];?></td>
  </tr>	
<?php	$i++;
}
?>
  
  
  
  
  
</table>
</body>
</html>