<?php
	include_once 'dbconfig.php';
	if(isset($_POST['btn-save']))
	{
		// variables for input data
		//$first_name = $_POST['first_name'];
		//$last_name = $_POST['last_name'];
		//$city_name = $_POST['city_name'];
		$cName = $_POST['cName'];
		$cAppellation= $_POST['cAppellation'];
		$cGender= $_POST['cGender'];
		$cBirth= $_POST['cBirth'];
		$cWalk = $_POST['cWalk'];
		$cBath = $_POST['cBath'];
		$cEat = $_POST['cEat'];
		$cNote = $_POST['cNote'];
		// variables for input data
 
		// sql query for inserting data into database
 
        //$sql_query = "INSERT INTO stu_list(sName,sTeam,sPhoneNo,sCity) VALUES('$sName','$sTeam','$sPhoneNo','$sCity')";
		$sql_query = "INSERT INTO customer_list(cName,cAppellation,cGender,cBirth,cWalk,cBath,cEat,cNote) VALUES('$cName','$cAppellation','$cGender','$cBirth','$cWalk','$cBath','$cEat','$cNote')";
		mysqli_query($link, $sql_query);
        
        // sql query for inserting data into database
 
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>C110193216  曹語芳</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>


<?php
 include("header.htm");
 ?>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="index.php"><font face="標楷體"><font color="green"><h2>返回主頁面</h2></font></font></a></td>
    </tr>
    <tr>
    <td><input type="text" name="cName" placeholder="姓名" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="cAppellation" placeholder="稱呼" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="cGender" placeholder="性別" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="cBirth" placeholder="出生年月日" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="cWalk" placeholder="行動" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="cBath" placeholder="洗澡" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="cEat" placeholder="進食" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="cNote" placeholder="備註" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save" style="background-color:green;"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>
<?php
 include("footer.htm");
 ?>
</center>
</body>