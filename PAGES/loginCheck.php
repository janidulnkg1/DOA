<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
//calling database code page
include ("database.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="icon" type="image/x-icon" href="../IMAGES/favicon.ico">
</head>

<body>
<?php 

	//checking user details on the userDetails table based on username and password
$selectuser = "SELECT userName, password, userLevel FROM userDetails WHERE userName = '".$_POST['txtUname']."'";

$getuserdetails = mysqli_query($connect, $selectuser);

while($userinfo = mysqli_fetch_array($getuserdetails))
{
	if($userinfo ['password']==$_POST['txtPass'])
	{
		echo ('pass done');
		
			//logging in based on user access level
			// user level 0=admin, 1=field officer, 2= user(farmer)
			if($userinfo ['userLevel']== 0)
			{
			echo ('Admin log in');
			header('Location:adminpanel.php');
			die;
			}
			else if ($userinfo ['userLevel']== 1)
			{
			echo ('Field officer log in');
			header('Location:fopanel.php');
			die;
			}
			else if ($userinfo ['userLevel']== 2)
			{
			header('Location:userpanel.php');
			die;
			}
	}
	else
	{
	header('Location:MainLoginPage.php');
			die;
	}
}
//redirect to loginerror page if credentials are wrong
header('Location:loginerror.php');


?>

</body>
</html>
