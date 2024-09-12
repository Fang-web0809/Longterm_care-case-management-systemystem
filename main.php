<?php
include_once 'dbconfig.php';

if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM customer_list WHERE cID=".$_GET['delete_id'];
 mysqli_query($link, $sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>C110193216 曹語芳 </title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript">
function edt_id(id)
{
 if(confirm('是否確認要編輯個案資料?'))
 {
  window.location.href='edit_data.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('是否確認要刪除個案資料?'))
 {
  window.location.href='main.php?delete_id='+id;
 }
}
</script>
</head>
<body>
<center>
<?php
 include("header.htm");

 ?>
 </br>
 <img src="201.jpg" style="width:350px;height:200px"/>
 <img src="203.jpg" style="width:350px;height:200px"/>
 <img src="204.jpg" style="width:350px;height:200px"/>
 <img src="205.jpg" style="width:350px;height:200px"/>
<div id="body">
 <div id="content">
    <table align="center">
    <tr>
    <th colspan="10"><a href="add_data.php"><font face="標楷體"><font color="green"><h2>新增一筆個案資料</h2></font></font></a></th>
    </tr>
    <th><font face="標楷體">姓名</font></th>
    <th><font face="標楷體">稱呼</font></th>
	<th><font face="標楷體">性別</font></th>
	<th><font face="標楷體">出生年月日</font></th>
    <th><font face="標楷體">行動</font></th>
	<th><font face="標楷體">洗澡</font></th>
	<th><font face="標楷體">進食</font></th>
	<th><font face="標楷體">備註</font></th>
	
    <th colspan="2">Operations</th>
	
    </tr>
    <?php
 $sql_query="SELECT * FROM customer_list";
 $result_set = mysqli_query($link, $sql_query);
 while ($row = mysqli_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
		<td><?php echo $row[5]; ?></td>
		<td><?php echo $row[6]; ?></td>
		<td><?php echo $row[7]; ?></td>
		<td><?php echo $row[8]; ?></td>
		<td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="ed.png" style="width:35px;height:35px" align="EDIT" /></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="bd.png" style="width:35px;height:35px" align="DELETE" /></a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>
<?php
 include("footer.htm");
 ?>

</center>
</body>
</html>