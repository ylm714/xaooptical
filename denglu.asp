<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="Connections/myconnect3.asp" -->
<%
Dim Recordset1
Dim Recordset1_numRows

Set Recordset1 = Server.CreateObject("ADODB.Recordset")
Recordset1.ActiveConnection = MM_myconnect3_STRING
Recordset1.Source = "SELECT * FROM app_infor"
Recordset1.CursorType = 0
Recordset1.CursorLocation = 2
Recordset1.LockType = 1
Recordset1.Open()

Recordset1_numRows = 0
%>
<%
' *** Validate request to log in to this site.
MM_LoginAction = Request.ServerVariables("URL")
If Request.QueryString<>"" Then MM_LoginAction = MM_LoginAction + "?" + Server.HTMLEncode(Request.QueryString)
MM_valUsername=CStr(Request.Form("nickname"))
If MM_valUsername <> "" Then
  MM_fldUserAuthorization=""
  MM_redirectLoginSuccess="ob_ap.html"
  MM_redirectLoginFailed="denglu.asp"
  MM_flag="ADODB.Recordset"
  set MM_rsUser = Server.CreateObject(MM_flag)
  MM_rsUser.ActiveConnection = MM_myconnect3_STRING
  MM_rsUser.Source = "SELECT �û�����, �û�����"
  If MM_fldUserAuthorization <> "" Then MM_rsUser.Source = MM_rsUser.Source & "," & MM_fldUserAuthorization
  MM_rsUser.Source = MM_rsUser.Source & " FROM app_infor WHERE �û�����='" & Replace(MM_valUsername,"'","''") &"' AND �û�����='" & Replace(Request.Form("password"),"'","''") & "'"
  MM_rsUser.CursorType = 0
  MM_rsUser.CursorLocation = 2
  MM_rsUser.LockType = 3
  MM_rsUser.Open
  If Not MM_rsUser.EOF Or Not MM_rsUser.BOF Then 
    ' username and password match - this is a valid user
    Session("MM_Username") = MM_valUsername
    If (MM_fldUserAuthorization <> "") Then
      Session("MM_UserAuthorization") = CStr(MM_rsUser.Fields.Item(MM_fldUserAuthorization).Value)
    Else
      Session("MM_UserAuthorization") = ""
    End If
    if CStr(Request.QueryString("accessdenied")) <> "" And false Then
      MM_redirectLoginSuccess = Request.QueryString("accessdenied")
    End If
    MM_rsUser.Close
    Response.Redirect(MM_redirectLoginSuccess)
  End If
  MM_rsUser.Close
  Response.Redirect(MM_redirectLoginFailed)
End If
%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
<style type="text/css">
<!--
.STYLE1 {	color: #FFFFFF;
	font-size: smaller;
}
.STYLE13 {color: #FFFFFF; font-size: 12px; font-weight: bold; }
.STYLE2 {	color: #FFFFFF;
	font-weight: bold;
}
.STYLE9 {color: #FFFFFF; font-size: 12px; }
#Layer2 {position:absolute;
	width:193px;
	height:25px;
	z-index:1;
	left: 930px;
	top: 14px;
}
body {
	margin-left: 150px;
	margin-top: 1px;
}
a:link {
	color: #FFFFFF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #FFFFFF;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
#Layer1 {
	position:absolute;
	width:966px;
	height:35px;
	z-index:2;
	left: 151px;
	top: 267px;
}
.STYLE14 {
	font-family: "���鷶Ц���빼�";
	font-size: x-large;
}
-->
</style>
</head>

<body>
<table width="1000" height="150" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="150" colspan="3" background="images/banner.png"><div class="STYLE1" id="Layer2"><a href="http://www.xao.cas.cn/qita/lxwm/" target="_top">��ϵ����</a>|<a href="http://english.xao.ac.cn/" target="_top">English</a>|</a><a href="http://www.cas.cn/" target="_top">�й���ѧԺ</a></div></td>
  </tr>
  <tr>
    <td height="30" colspan="3" bgcolor="#07308F"><div align="center" class="STYLE2"><a href="optical.html">ʱ�������о�</a> | <a href="space_ob.html">�ռ�Ŀ������Ƭ</a> | <a href="sun.html">̫������</a> | <a href="ob_ap.html">NOWT�۲�����</a></div></td>
  </tr>
  <tr>
    <td width="572" height="30" bgcolor="#0080FF"><span class="STYLE9">&nbsp;<strong>����λ�ã�<a href="http://www.xao.ac.cn/">��ҳ </a>&gt; <a href="http://www.xao.ac.cn/jgsz/kyxt/">��������</a> &gt; <a href="index.asp">��ѧ�����뼼��Ӧ���о���</a> &gt; NOWT�۲����� </strong></span></td>
    <td width="124" bgcolor="#0080FF"><span class="STYLE3">
        <marquee id="mar" onmouseover="mar.stop()" onmouseout="mar.start()" scrollamount="2" >
        <span class="STYLE13"><a href="notice.html"></a></span>
              </marquee></td>
    <td width="304" bgcolor="#0080FF"><div align="center">
      <iframe src="http://cache.xixik.com.cn/5/xiaoquzi/" width="200" height="30" frameborder="0" marginwidth="0" marginheight="0" scrolling="No" allowtransparency="true" ></iframe>
      </iframe>
    </div></td>
  </tr>
</table>
<table width="1000" height="44" border="2" cellpadding="0" cellspacing="1" bordercolor="#CCCCCC">
  <tr>
    <td><form id="form1" name="form1" method="POST" action="<%=MM_LoginAction%>">
�������ʺţ�
<label>
      <input name="nickname" type="text" id="nickname" />
      </label>
       &nbsp;&nbsp; ���������룺
       <label>
       <input name="password" type="password" id="password" />
       </label>
       <label>
       <input type="submit" name="Submit" value="��¼" />
       </label>
       <label>
       <input type="reset" name="Submit2" value="����" />
       </label>
</form>
    </td>
  </tr>
</table>
<div class="STYLE14" id="Layer1">�����ʺ��뽫������Ϣ����������nowt@xao.ac.cn</div>
<p>&nbsp;</p>
</body>
</html>
<%
Recordset1.Close()
Set Recordset1 = Nothing
%>
