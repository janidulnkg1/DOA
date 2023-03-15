<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-image: url(../IMAGES/350327.jpg);
}
-->
</style>
<?php include ('database.php'); ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



<style type="text/css">
<!--
.style7 {color: #FFFFFF}
-->
</style>
</head>


<body style="margin: 50px;">
<form id="form1" name="form1" method="post" action="">
 <table border="1" class="table">
    <tr>
      <th>userID</th>
      <th>First and Last Name</th>
      <th>Login Username</th>
      <th>Account Password</th>
      <th>Account Type</th>
    </tr>
    
    <?php 
	$checkusers=mysqli_query($connect,"SELECT * FROM userdetails");
	
	while($userDetails=mysqli_fetch_array($checkusers))
	
	{
	?>
    
    <tr>
    	<td><font color="#FFFFFF"><?php echo ($userDetails['userID'])?></font></td>
        <td><font color="#FFFFFF"><?php echo ($userDetails['Name'])?></font></td>
        <td><font color="#FFFFFF"><?php echo ($userDetails['userName'])?></font></td>
        <td><font color="#FFFFFF"><?php echo ($userDetails['password'])?></font></td>
        <td><font color="#FFFFFF"><?php echo ($userDetails['accType'])?></font></td>
    </tr>
     <?php }?>
  </table>
    <div align="center" class="style7"><a href="adminpanel.php" target="_parent" class="style7">back</a> </div>
</form>
</body>
<?php 
include ('footer.php');
?>
</html>
