<?php
if(!isset($_GET['username']) or !isset($_GET['password']))
{
	echo 'Pass the username and password for the mysql database as GET parameters';
	die();
}
?>
<html>
<head>
</head>
<body>
	<table border='1' >
	<?php
	$mysql_username="377563_".$_GET['username'];
	$mysql_password=$_GET['password'];
	$mysql_host="localhost";
	$mysql_database="swasam_zzl_registration";
	$connection=mysql_connect($mysql_host,$mysql_username,$mysql_password) or die(mysql_error());
	mysql_select_db($mysql_database) or die(mysql_error());
	$sql="select * from vregistration"; 
	$result=mysql_query($sql,$connection) or die(mysql_error());

	while($row=mysql_fetch_array($result))
	{
		echo '<tr>';
		for($i=0;$i<10;$i++)
		{
			echo '<td>';
			echo $row[$i];
			echo '</td>';
		}
		echo '</tr>';
	}
	?>
	</table>
</body>
</html>
