<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head><meta http-equiv="content-type" content="text/html;charset=utf-8"/></head>
<body bgcolor="C1DBFF" style="color:#204A73;">
<?php
error_reporting(0);
$user_date_start=$_POST['user_date_start'];
$user_date_end=$_POST['user_date_end'];

//得到数据库的连接
$conn=mysql_connect("localhost","root","");
if(!$conn)
{
	die("连接失败".mysql_errno());
}
//设置数据库的编码
mysql_query("set names utf8",$conn) or die(mysql_errno());
//选择数据库
mysql_select_db("register",$conn) or die(mysql_errno());
//判断输入的日期不为空并查询工作时间
 if(!empty($user_date_start)&&!empty($user_date_end))
{
$sql="select pro_name, sum(run_time) from project where run_date between '$user_date_start' and '$user_date_end' group by pro_name";
$sqlp="select dutyA,dutyB from people where duty_date between '$user_date_start' and '$user_date_end'";

} else {
	 echo "<script>alert('请输入正确日期！');history.go(-1);</script>";
}

//$sql="select pro_name, pro_charge, run_time, run_date from project where run_date='$user_date_start'";
//执行查询语句
$res=mysql_query($sql,$conn) or die(mysql_error());
$resp=mysql_query($sqlp,$conn) or die("错误信息".mysql_error());
$np=mysql_num_rows($resp);
//echo $np;
//printf($res);
echo "查询范围："."$user_date_start"."至"."$user_date_end";
echo "<table align=center border=1 cellspacing='0px' width='700px'>";
echo "<caption><font size=20px><b>值班明细</b></font></caption>";
echo "<tr align=center><td><b>值班人</b></td><td><b>值班总时间(d)</b></td></tr>";
$k=0;
//print_r($resp);
while($rowp=mysql_fetch_array($resp))
{
	$array[$k]=$rowp['dutyA'];
	$array[$k+1]=$rowp['dutyB'];
	$k+=2;
}
/*  foreach ($array as $vall)
{
echo $vall;
} */
if($rowp)
{
$arr[0][0]=$array[0];
$arr[0][1]=1;
$arr[1][0]=$array[1];
$arr[1][1]=1;	
$count=2;
//echo 2222222;
}
else
{
$arr[0][0]=$array[0];
$arr[0][1]=0;
$arr[1][0]=$array[1];
$arr[1][1]=0;	
$count=0;
//echo 111111111;
}	
for($i=2;$i<2*$np;$i++)
{
	for($j=0;$j<$count;$j++)
	{
		if($arr[$j][0]!=$array[$i] && $j==$count-1)
		{
			$arr[$count][0]=$array[$i];
			$count++;
		}elseif($arr[$j][0]==$array[$i]){
			$arr[$j][1]=$arr[$j][1]+1;
			break;
		}
	}
	
}


foreach ($arr as $val)
{echo "<tr bgcolor=white align=center>";
	
		foreach ($val as $valnext)
		{
			echo "<td>$valnext</td>";
		}
	
		echo "</tr>";
}
echo "</table>";
echo "</br>";
echo "<table border='1' align=center cellspacing='0px' width='700px'>";
echo "<caption><font size=20px ><b>项目明细</b></font></caption>";
echo "<tr align=center><td><b>项目名</b></td><td><b>各个项目设备运行总时间(h)</b></td></tr>";
$sumtime=0;
while($row=mysql_fetch_array($res))
{
	$sumtime+=$row[1];
	echo "<tr bgcolor=white align=center><td>{$row['pro_name']}</td><td>{$row[1]}</td></tr>";
}
echo "<tr align=center><td>所有项目总计</td><td>$sumtime</td></tr>";
echo "</table>";

	mysql_free_result($res);
	mysql_close($conn);
?>
</body>
</html>