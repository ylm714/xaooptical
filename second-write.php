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


 <form action="second-upload.php" method="post">

</br>
<table align=center>
<tr>
<td>
值&nbsp;班&nbsp;时&nbsp;间
<input type="date" name="Ddate">
</td>
</tr>
<tr>
<td>值&nbsp;班&nbsp;人&nbsp;员
<input type="text" name="peopleA"/>
<input type="text" name="peopleB"/>
<input type="text" name="peopleC"/>
<input type="text" name="peopleD"/>
</td>
</tr>
<tr>
<td>&nbsp;&nbsp;天&nbsp;&nbsp;&nbsp;气&nbsp;&nbsp;
<select name="weather">
  <option value="晴">晴</option>
  <option value="阴">阴</option>
  <option value="雨">雨</option>
  <option value="雪">雪</option>
 <option value="多云">多云</option>
  
</select>
</td>
</tr>
<tr><td>设备运行时间<input type="text" name="alltime"/></td></tr>
</table>

</br>
<table align=center>
<tr>
<td><input type="submit" value="确认"/></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td><input type="reset" value="重置"/></td>

</tr>
</table>
</form>


</body>
</html>
