<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
header ("refresh:.5;url=MainLoginPage.php"); 
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php include ("database.php");?>

</head>

<body>
<?php 
$InsertUserToDb = "INSERT INTO userDetails VALUES ('','".$_POST['txtFName']." ".$_POST['txtLName']."','".$_POST['txtUName']."','".$_POST['txtPassword']."','Farmer','2')";
if(!mysqli_query($connect,$InsertUserToDatabase))
{
echo ("User account not created");
die;
}
else
{
echo ("User Account created");
}
mysqli_close($connect);
?>


</body>


</html>
