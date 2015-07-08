<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>日志记录</title>
</head>
<?php
date_default_timezone_set('Etc/GMT-8');
echo "现在时间：";
   echo date('Y-m-d H:i:s',time());
?>
<body bgcolor="C1DBFF">
<form action="upload.php" method="post">
<table align=center>
<tr>
<td>
值班时间
<input type="date" name="Ddate">
</td>
</tr>
<tr>
<td>值班人员
<input type="text" name="peopleA"/>
<input type="text" name="peopleB"/>
</td>
<td>天气
<select name="weather">
  <option value="晴">晴</option>
  <option value="阴">阴</option>
  <option value="雨">雨</option>
  <option value="雪">雪</option>
 <option value="多云">多云</option>
  
</select>
</td>
</tr>

</table></br></br></br>
<table border="1" align=center>
<caption><font style="font-family:Microsoft Yahei;font-size:20px;color:#204A73;">数据录入</font></caption>
 <tr align=center>
 <td>项目名</td>
 <td>项目负责人</td>
 <td>设备运行时间(h)</td>
 </tr>
 <tr>
 <td><input type="text" name="nameA"></td>
 <td><input type="text" name="chargeA"></td>
 <td><input type="text" name="timeA"></td>
 </tr>
 <tr>
 <td><input type="text" name="nameB"></td>
 <td><input type="text" name="chargeB"></td>
 <td><input type="text" name="timeB"></td>
 </tr>
 <tr>
 <td><input type="text" name="nameC"></td>
 <td><input type="text" name="chargeC"></td>
 <td><input type="text" name="timeC"></td>
 </tr>
 
</table>
</br>
<table align=center>
<tr>
<td><input type="submit" value="确认"/></td><td></td>
<td><input type="reset" value="重置"/></td>

</tr>
</table>
</form>
</body>
</html>
