<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DOA Search</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php 
	//calling header
include ('header.php');
include ('database.php'); 
?>
<style type="text/css">
<!--
body {
	background-image: url(../IMAGES/wallpaper.jpg);
	
}
-->
</style>
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	left:354px;
	top:117px;
	width:524px;
	height:358px;
	z-index:1;
}
.style7 {
	font-size: 36px;
	font-weight: bold;
}
.style8 {font-size: 24px}
-->
</style>


</head>

<body >


<div id="apDiv1">
  <form id="form2" name="form1" method="post" action="">
    <table width="467" border="1" align="center" bordercolor="#000000">
      <tr>
        
        <td width="457" bordercolor="#F0F0F0"><div align="center" class="style7">Link to Search Result
        </div></td>
      </tr>
      
       <?php 
	$searchresults=mysqli_query($connect,"SELECT * FROM searchbar WHERE divID = '".$_POST['txtSearch']."'");
	
	while($searchDetails=mysqli_fetch_array($searchresults))
	
	{
	?>
    
      <?php 
	  $search=$_POST['txtSearch']
	  ?>
      
      <tr>
        
        <td bordercolor="#F0F0F0"><div align="center" class="style8"><font color="#000000">
          <?php if($searchDetails['divID']==$search)
	   				{ 
					//$linkaddress='index.html';
					echo "<a href=index.html#$search>$search</a>";
					}
				
					
					?>
        </font></div></td>
      </tr>
       <?php }?>
    </table>
    <p><a href=index.html>Back to Home Page</a></p>
  </form>
</div>
</body>
<?php 
include ('footer.php');
?>
</html>
