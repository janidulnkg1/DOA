<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php include ("database.php");?>
</head>


<body>
<?php 
$insertquery="INSERT INTO userquery VALUES ('', '".$_POST['txtUsername']."', '".$_POST['txtQuery']."','0')";


if(!mysqli_query($connect,$insertquery))
{
die("Query has not been submitted!");
}
else
{
echo ("Query has been submitted Successfully!!");
header ("refresh:.5;url=submitquery.php"); 
}
mysqli_close($connect);
?>
</body>
</html>
