<?php
session_start();
if(isset($_SESSION["loggedin"])&&$_SESSION["loggedin"]===true){
	header("location:main.php");
	exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登入</title>
 <div id="header">
 <div id="content">
    <label><a href="http://aliancare.com.tw/index.php/page/show_page/1" target="_blank" ><font face="標楷體">高雄市私立旭安日間照顧個案資料管理系統</a>-By C110193216 曹語芳</font></label>
    </div>
</div>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body bgcolor="#eef2bb">
<center>
<br/>
<font face="標楷體">
<font color="green"><I><h1>早安您好祝您一天順利~~</h1></I></font></font><br/>
<img src="202.jpg" style="width:600px;height:300px"/>
<font face="標楷體"><font color="blue"><u><br/><h2>登入帳號密碼</h2></u></font></font>
<table>
	<form method="post" action="login.php">
	<tr style="font-size:20px">
	<td><font face="標楷體"><font color="blue">帳號名稱:</font></font></td>
	<td><input type="text" name="username"></td>
	</tr>
	<tr style="font-size:20px">
	<td><font face="標楷體"><font color="blue">密碼:</font></font></td>
	<td><input type="password" name="passwd"></td>
	</tr>
	<tr>
		<th colspan="3"><input type="submit" value="登入" name="submit" style="width:100px;height:30px;background-color:#d1edd5;font-size:15px;"></td>
	</tr>
	</form>

</table>



</center>
</body>
</html>