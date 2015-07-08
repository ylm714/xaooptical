<html>
<?php
    $con=mysql_connect("localhost","root","");
	if(!$con)
	{
	    die('Could not connect:'.mysql_error());
	}
	
	
	mysql_select_db("register",$con);
	mysql_query("set names utf8");
	
	//$nowdate=date("Y-m-d");
	
	$sql1="insert into people(dutyA,dutyB,proA,proB,proC,weather,duty_date) values('$_POST[peopleA]','$_POST[peopleB]','$_POST[nameA]','$_POST[nameB]','$_POST[nameC]','$_POST[weather]','$_POST[Ddate]')";
	if(!mysql_query($sql1,$con))
	{
	   die('Error:'.mysql_error());
	}
	
	$sql2="insert into project(pro_name,pro_charge,run_time,run_date) values('$_POST[nameA]','$_POST[chargeA]','$_POST[timeA]','$_POST[Ddate]')";
	if(!mysql_query($sql2,$con))
	{
	   die('Error:'.mysql_error());
	}
	
	if($_POST['nameB']!=NULL)
	{
	$sql3="insert into project(pro_name,pro_charge,run_time,run_date) values('$_POST[nameB]','$_POST[chargeB]','$_POST[timeB]','$_POST[Ddate]')";
	if(!mysql_query($sql3,$con))
	{
	   die('Error:'.mysql_error());
	}
	}
	
	if($_POST['nameC']!=NULL)
	{
	$sql4="insert into project(pro_name,pro_charge,run_time,run_date) values('$_POST[nameC]','$_POST[chargeC]','$_POST[timeC]','$_POST[Ddate]')";
	if(!mysql_query($sql4,$con))
	{
	   die('Error:'.mysql_error());
	}
	}
	
	
	
	
	
	mysql_close($con);
	
	echo "<script>alert('Ìí¼Ó³É¹¦£¡');history.go(-1);</script>";
?>

 
</html>