<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>



<?php
session_start();
error_reporting(0);
$delete_date_start=$_POST['delete_date_start'];
$delete_date_end=$_POST['delete_date_end'];
//echo $delete_date_start;
//�õ����ݿ������
$conn=mysql_connect("localhost","root","");
if(!$conn)
{
	die("����ʧ��".mysql_errno());
}
//�������ݿ�ı���
mysql_query("set names utf8",$conn) or die(mysql_errno());
//ѡ�����ݿ�
mysql_select_db("register",$conn) or die(mysql_errno());
//�ж���������ڲ�Ϊ�ղ���ѯ����ʱ��
 if(!empty($delete_date_start)&&!empty($delete_date_end))
{
$sql="delete  from people2 where duty_date between '$delete_date_start' and '$delete_date_end'";
$sqlp="delete  from people3 where duty_date between '$delete_date_start' and '$delete_date_end'";

} else {
	 echo "<script>alert('��������ȷ���ڣ�');history.go(-1);</script>";
}

//ִ�в�ѯ���
 if($_SESSION['name']=='dangfei'||$_SESSION['name']=='linxingkui'||$_SESSION['name']=='sunjiantao'||$_SESSION['name']=='weipeng'||$_SESSION['name']=='mashuguo'||$_SESSION['name']=='puguangxin'||$_SESSION['name']=='zhongtuhong'||$_SESSION['name']=='wangyong'||$_SESSION['name']=='xujuanting'||$_SESSION['name']=='admin_so')
 {
$res=mysql_query($sql,$conn) or die(mysql_error());
}
if($_SESSION['name']=='789')
{
$resp=mysql_query($sqlp,$conn) or die("������Ϣ".mysql_error());
}
echo "<script>alert('��ɾ����');history.go(-1);</script>";


	//mysql_free_result($res);
	mysql_close($conn);
?>
</body>
</html>
