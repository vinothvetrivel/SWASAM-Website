<?php ?>
<!DOCTYPE HTML>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>
<script src="../lib/jq-validate/jquery.validate.min.js"></script>
<script src="../lib/jq-validate/jquery.validate.pack.js"></script>
<link rel="stylesheet" href="../lib/dot-luv/jquery-ui-1.8.9.custom.css">
<style>
label.error { float: none; color: red; padding-left: .5em; vertical-align: top; }
body
{
	color:#FFF;
	font-size:16px;
}
</style>
<script>
$(document).ready(function()
{
	$( "#DOB" ).datepicker(
	{
		yearRange:'c-80:c+20',
		defaultDate: '-20y',
		showButtonPanel: true,
		showAnim: 'fold',
		dateFormat: 'yy-mm-dd',
		changeMonth: true,
		changeYear: true,
	});
	$('#VRegisterForm').submit(function()
	{
		$('label.error').remove();
		return false;
	});
	$('#SubmitRegButton').button();
//	$( "#Gender" ).buttonset();
$("#VRegisterForm").validate();
});
</script>
</head>
<body>
<table>
    	<form id="VRegisterForm" method="post" action="VregisterScript.php">
       <!-- <tr>
            	<td><label for="" ></label></td>
                <td><input id="" type="text" name="" class="" ></td>
            </tr>  -->
            <tr>
            	<td><label for="Name">Name:</label></td>
                <td><input type="text" id="Name" name="Name" class="required " minlength="2" ></td>
            </tr>  
            <tr>
            	<td><label for="DOB" >Date of Birth:</label></td>
                <td><input id="DOB" type="text" name="DOB" class="required" ></td>
            </tr>
            <tr>
            	<td><label for="" >Gender:</label></td>
                <td>
                <label for="GenderM">Male</label>
                <input id="GenderM" type="radio" name="Gender" value="M" checked='true' >
                <label for="GenderF">Female</label>
                <input id="GenderF" type="radio" name="Gender" value="F" >
                </td>
            </tr>
            <tr>
            	<td><label for="Address" >Address:</label></td>
                <td><textarea name="Address" id="Address" class="required" label="Residential" rows="5" ></textarea></td>
            </tr>
            <tr>
            	<td><label for="PhoneNo" >Phone No:</label></td>
                <td><input id="PhoneNo" type="text" name="PhoneNo" class="required number"  minlength="6" maxlength="10"></td>
            </tr>
            <tr>
            	<td><label for="MobileNo" >Mobile No:</label></td>
                <td><input id="MobileNo" type="text" name="MobileNo" class="number"  minlength="10" maxlength="10"></td>
            </tr>
            <tr>
            	<td><label for="Email" >Email Id:</label></td>
                <td><input id="Email" type="text" name="Email" class="required email" ></td>
            </tr>
            <tr>
            	<td><label for="BloodGroup" >Blood Group:</label></td>
                <td><input id="BloodGroup" type="text" name="BloodGroup" class="required " ></td>
            </tr>
            <tr>
            	<td><label for="Donation" >Willing To donate</label></td>
                <td><input id="Donation" type="checkbox" name="Donation" class="" ></td>
            </tr>
            <tr>
            	<td><label ></label></td>
                <td><input type="submit" id="SubmitRegButton" class=""  value="Register"></td>
            </tr>                      
        </form>
 </table>
</body>
</html>