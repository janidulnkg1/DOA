<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php include('Database.php') ?>
<style type="text/css">
	
<!--
body {
	background-image: url(../IMAGES/1598248.jpg);
}
#apDiv1 {
	position:absolute;
	left:177px;
	top:225px;
	width:759px;
	height:250px;
	z-index:1;
}
.style10 { color:#000000 font-size: 24px}
.style13 {color: #FFFFFF; font-size: 18px; }
.style14 {font-size: 18px}

-->
</style>
</head>

<body>

<div id="apDiv1">
  <form id="form2" name="form1" method="post" action="">
    <p>&nbsp;</p>
    <table width="738" border="1">
      <tr>
        <th><span class="ft style10 ft ft style14">Product ID</span></th>
        <th><span class="ft style10 ft ft style14">Product Category</span></th>
        <th><span class="ft style10 ft ft style14">Product Type</span></th>
        <th><span class="ft style10 ft ft style14">Product Image</span></th>
      </tr>
      <?php 
$productresults=mysqli_query($connect,"SELECT * FROM farmerproducts");
$count=0;
while($productIDs=mysqli_fetch_array($productresults))
	{
	$count=$count+1;
?>
      <tr>
        <td><span class="style13"><?php echo ($productIDs['productID'])?></span></td>
        <td><span class="style13"><?php echo ($productIDs['productCategory'])?></span></td>
        <td><span class="style13"><?php echo ($productIDs['productName'])?></span></td>
        <td><img src="<?php echo ($productIDs['productImage'])?>" width="100" height="75" /></td>
      </tr>
      <?php }?>
    </table>
    <p align="center"><a href="userpanel.php" target="_parent">back</a></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </form>
</div>
</body>
<?php 
include ('footer.php');
?>
</html>
