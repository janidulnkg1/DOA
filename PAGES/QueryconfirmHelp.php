<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php 
include ("database.php");
?>
</head>

<body>
<?php 
$postnames = array_keys($_POST);
$keytoupdate=substr($postnames[0],7,4);
	if(mysqli_connect_errno())
		{
		echo "Database connection error! Sorry for the interruption!";
		}
	else
		{
		mysqli_query($connect,"UPDATE userquery SET queryFeedback=1 where queryID='".$keytoupdate."'");
		mysqli_close($connect);
		echo "Query has been checked!";
		header("refresh:.5,url=checkQuery.php");
		die;
		}


?>
</body>
</html>
