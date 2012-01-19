<?php
$mysql_username="377563_phpuser";
$mysql_password="phppassword";
$mysql_host="localhost";
$mysql_database="swasam_zzl_registration";
$connection=mysql_connect($mysql_host,$mysql_username,$mysql_password) or die(mysql_error());
mysql_select_db($mysql_database) or die(mysql_error());
$Name=$_POST['Name'];
$DOB=$_POST['DOB'];
$Gender=$_POST['Gender'];
$Address=$_POST['Address'];
$PhoneNo=$_POST['PhoneNo'];
$MobileNo=$_POST['MobileNo'];
$Email=$_POST['Email'];
$BloodGroup=$_POST['BloodGroup'];
$Donation=0;
if(isset($_POST['Donation']))
{
	$Donation=1;
}
$sql = "INSERT INTO `vregistration`  (`v_id`, `v_name`, `v_dob`, `v_gender`, `v_address`, `v_phoneNo`, `v_mobileNo`, `v_email`, `v_bloodGroup`, `v_willingToDonate`) VALUES (NULL, '$Name', '$DOB', '$Gender', '$Address', '$PhoneNo', '$MobileNo', '$Email', '$BloodGroup', '$Donation');";
mysql_query($sql,$connection) or die(mysql_error());
echo "Registration Successfull !";
?>
