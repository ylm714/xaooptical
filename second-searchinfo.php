<?php echo "<?xml version=\"1.0\" encoding=\"utf-8\"?".">"; ?><!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/></head>
<body bgcolor="C1DBFF" style="color:#204A73;">
<?php
session_start();
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

     $sqlp="select dutyA,dutyB,dutyC,dutyD,all_time from people2 where duty_date between '$user_date_start' and '$user_date_end'";
	 
     $sqlwatch="select watcher,num from watchkeeper";//取出所有的值班人员
	 
	 
	 $sql_zero="update watchkeeper set num=0";
	 mysql_query($sql_zero);
}else {
	    echo "<script>alert('请输入正确日期！');history.go(-1);</script>";
}

//执行值班人员相关的查询语句
$resp=mysql_query($sqlp,$conn) or die("错误信息".mysql_error());
//计算一共取出多少条在相应时间内的记录
$np=mysql_num_rows($resp);

//执行取出所有人员查询语句
$watchp=mysql_query($sqlwatch,$conn) or die("错误信息".mysql_error());
//计算一共取出多少条在相应时间内的记录
$wp=mysql_num_rows($watchp);



//echo $np;
//printf($res);
echo "查询范围："."$user_date_start"."至"."$user_date_end";
echo "<table align=center border=1 cellspacing='0px' width='700px'>";
echo "<caption><font size=20px><b>值班明细</b></font></caption>";
echo "<tr align=center><td><b>值班人</b></td><td><b>值班总时间(d)</b></td></tr>";
$k=0;
$sum_time=0;
//print_r($resp);
//echo $np;

//将取出的在相应日期内的值班人员放到数组$array中
 while($np!=0)
{
//$sqlss="select dutyA,dutyB,dutyC,dutyD,all_time from people2 where duty_date between '$user_date_start' and '$user_date_end'";
//$respp=mysql_query($sqlss,$conn) or die("错误信息".mysql_error());
	while($rowp=mysql_fetch_array($resp))
		{
	    $sql_w="select watcher,num from watchkeeper";
		$sql_wp=mysql_query($sql_w,$conn) or die("错误信息".mysql_error());
        while($rowh=mysql_fetch_array($sql_wp))
	   {
	
	
	        if($rowp['dutyA']==$rowh['watcher'])
	          {
		
		 		 $sql="update watchkeeper set num=num+1 where watcher like '%$rowp[dutyA]%'";
		  		 mysql_query($sql);
		  
				}
	     
			if($rowp['dutyB']==$rowh['watcher'])
			{
				$sql="update watchkeeper set num=num+1 where watcher like '%$rowp[dutyB]%'";
		   		mysql_query($sql);
		 
			}
	    
			if($rowp['dutyC']==$rowh['watcher'])
	    		{
		  			 $sql="update watchkeeper set num=num+1 where watcher like '%$rowp[dutyC]%'";
		   			mysql_query($sql);
		   
				}
			if($rowp['dutyD']==$rowh['watcher'])
	    		{
					$sql="update watchkeeper set num=num+1 where watcher like '%$rowp[dutyD]%'";
		   			mysql_query($sql);
		 
				}
		}
	$sum_time+=$rowp['all_time'];	
	}
	
	$np--;
}
 
  $sqlwatch1="select watcher,num from watchkeeper";
  $watchp1=mysql_query($sqlwatch1,$conn) or die("错误信息".mysql_error());
  
while($rowh1=mysql_fetch_array($watchp1))
{
 
  if($rowh1['num']!=0)
  {
      
        echo "<tr bgcolor=white align=center><td>$rowh1[watcher]</td><td>$rowh1[num]</td></tr>";
 }
 }
echo "</table>";
echo "</br>";
echo "设备在此时间段内运行总时间："."<b>$sum_time</b>";

	mysql_free_result($res);
	mysql_close($conn);
?>
</body>
</html>