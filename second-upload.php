<html>
<?php
session_start();
    $con=mysql_connect("localhost","root","");
	if(!$con)
	{
	    die('Could not connect:'.mysql_error());
	}
	
	
	mysql_select_db("register",$con);
	mysql_query("set names utf8");
	
	//$nowdate=date("Y-m-d");
	if($_SESSION['name']=='dangfei'||$_SESSION['name']=='linxingkui'||$_SESSION['name']=='sunjiantao'||$_SESSION['name']=='weipeng'||$_SESSION['name']=='mashuguo'||$_SESSION['name']=='puguangxin'||$_SESSION['name']=='zhongtuhong'||$_SESSION['name']=='wangyong'||$_SESSION['name']=='xujuanting'||$_SESSION['name']=='admin_so')
	{
	$sql1="insert into people2(dutyA,dutyB,dutyC,dutyD,weather,all_time,duty_date) values('$_POST[peopleA]','$_POST[peopleB]','$_POST[peopleC]','$_POST[peopleD]','$_POST[weather]','$_POST[alltime]','$_POST[Ddate]')";
	}
	if($_SESSION['name']=='789')
	{
	$sql1="insert into people3(dutyA,dutyB,dutyC,dutyD,weather,all_time,duty_date) values('$_POST[peopleA]','$_POST[peopleB]','$_POST[peopleC]','$_POST[peopleD]','$_POST[weather]','$_POST[alltime]','$nowdate')";
	}
	if(!mysql_query($sql1,$con))
	{
	   die('Error:'.mysql_error());
	}
	
	
	
	
	
	
	
	mysql_close($con);
	
	echo "<script>alert('Ìí¼Ó³É¹¦£¡');history.go(-1);</script>";
?>

 
</html>