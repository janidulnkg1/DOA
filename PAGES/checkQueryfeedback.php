<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-image: url(../IMAGES/1598250.jpg);
}
-->
</style><?php include ('database.php'); ?>

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
     <th>Query ID</th>
      <th>User name</th>
      <th>User Query</th>
      <th>Approval Status</th>
    </tr>
    
    <?php 
	$checkquery=mysqli_query($connect,"SELECT * FROM userquery");
	
	while($querydetails=mysqli_fetch_array($checkquery))
	
	{
	?>
    
    <tr>
    	<td><font color="#FFFFFF"><?php echo ($querydetails['queryID'])?></font></td>
      <td><font color="#FFFFFF"><?php echo ($querydetails['userName'])?></font></td>
      <td><font color="#FFFFFF"><?php echo ($querydetails['messageQuery'])?></font></td>
       <td><font color="#FFFFFF"><?php if($querydetails['queryFeedback']==1)
	   				{ 
					echo ('You Query has been approved!');
					}
				else if ($querydetails['queryFeedback']==0) 
					{
					echo ('Your Query has not been approved!');
					}
					
					?></font></td>
    </tr>
     <?php }?>
    </table>
    <div align="center"><a href="userpanel.php" target="_parent" class="style7">back</a>    </div>
</form>

</body>
<?php 
include ('footer.php');
?>
</html>
