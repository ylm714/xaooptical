<?php echo "<?xml version=\"1.0\" encoding=\"utf-8\"?".">"; ?><!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/></head>
<html>
<body bgcolor="C1DBFF" style="margin-top:20px;margin-left:20px;">
 <form action=deleteinfo.php method="post">
  <font style="color:#204A73;">请选择你要删除的起始日期：</font><input type="date" name="delete_date_start" />&nbsp;&nbsp;&nbsp;</br>
  <font style="color:#204A73;">请选择你要删除的终止日期：</font><input type="date" name="delete_date_end" />
  <input type="submit" value="删除" />
 <input type="reset" value="重置"/>
 </form>
 <p><font color="#FF0000">请谨慎删除</font></p>
 </body>
</html>