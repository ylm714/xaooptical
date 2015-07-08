<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<html>
<?php
error_reporting(0);
    session_start();
   if($_POST['username']==nowt&&$_POST['password']==nowt5935835)
   {
     header("location:ob_ap.html");
	 }
    else if($_POST['username']==dangfei&&$_POST['password']==df976879||$_POST['username']==linxingkui&&$_POST['password']==lxk951196||$_POST['username']==sunjiantao&&$_POST['password']==sjt923019||$_POST['username']==weipeng&&$_POST['password']==wp495816||$_POST['username']==mashuguo&&$_POST['password']==msg371553||$_POST['username']==puguangxin&&$_POST['password']==pgx582215||$_POST['username']==zhongtuhong&&$_POST['password']==zth967985||$_POST['username']==wangyong&&$_POST['password']==wy329162||$_POST['username']==xujuanting&&$_POST['password']==xjt190891||$_POST['username']==admin_so&&$_POST['password']==spaceobjects5933097)
	{
	  header("location:second-all.php");
	  $_SESSION['name']=$_POST['username'];
	  }
	 else if($_POST['username']==xujing&&$_POST['password']==xj195590||$_POST['username']==baichunhai&&$_POST['password']==bch638021||$_POST['username']==zhangxuan&&$_POST['password']==zx905207||$_POST['username']==niuhubiao&&$_POST['password']==nhb979516||$_POST['username']==fengguojie&&$_POST['password']==fgj967985||$_POST['username']==admin_opt&&$_POST['password']==optical5935835)
	 {
	   header("location:all.php");
	   $_SESSION['name']=$_POST['username'];
	   }
	else
	   echo "<script>alert('用户名或密码不正确');history.go(-1);</script>";
?>
</html>