<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
	
	//echo '<script>alert("Database Connected") </script>';
	
$location ="localhost";
$username = "root";
$password = "";
$databasename = "ecoFarming";

	//connecting to database on phpmyadmin
$connect = mysqli_connect($location,$username,$password,$databasename);
if(mysqli_connect_errno($connect))
{
echo "Not Connected".mysqli_connect_error();
}
else
{
//echo ("Connected");
}
?>
<body>
</body>
</html>
