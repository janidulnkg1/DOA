<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DOA Services</title>
<link rel="stylesheet" href="../css/btnstyle.css">
 <link rel="stylesheet" href="../css/txtstyle.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="icon" type="image/x-icon" href="../IMAGES/favicon.ico">
<?php 
include("Database.php");
?>
<style type="text/css">
<!--
#apDiv1 {
	position: absolute;
	left: 428px;
	top: 306px;
	width: 660px;
	height: 532px;
	z-index: 1;
}
body {
	background-image: url(../IMAGES/1598250.jpg);
}
#apDiv2 {
	position:absolute;
	left:426px;
	top:145px;
	width:666px;
	height:73px;
	z-index:2;
}
.style4 {font-size: 24px; font-weight: bold; }
.style1 {color: #000000}
#apDiv3 {
	position:absolute;
	left:117px;
	top:793px;
	width:1409px;
	height:34px;
	z-index:1;
}
.style6 {
	font-size: 36px;
	font-style: italic;
	color: #FFFFFF;
}
.style8 {font-size: 50px}
-->
</style>
</head>

<body>


<div id="apDiv1">
  <form action="confirmrequestfproduct.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
    <table width="473" height="299" border="2" align="center">
      <tr>
        <td colspan="2"><div align="center" class="style4">
          <div align="center" class="style6">Enter Details</div>
        </div></td>
      </tr>
      <tr>
        <td width="190" class="style4"><div align="center" class="style1">Product Category</div></td>
        <td width="215"><label>
         
          <select name="cmbpcategory" id="cmbpcategory"  >
            <option value="Category Not SELECTED">SELECT Category</option>
            <option value="Organic Vegetables">Organic Vegetables</option>
            <option value="Organic Fruits">Organic Fruits</option>
            <option value="Rice">Rice</option>
            <option value="Yams">Yams</option>
            <option value="Nuts">Nuts</option>
            <option value="Legumes">Legumes</option>
       
           
            
          </select>
        </label></td>
      </tr>
      <tr>
        <td class="style4"><div align="center" class="style1">Product Name</div></td>
        <td><label>
          <input type="text" name="txtptype" id="txtptype" class="type-1/>
        </label></td>
      </tr>
      <tr>
        <td class="style4"><div align="center" class="style1"></div></td>
      
      </tr>
      <tr>
        <td class="style4"><div align="center" class="style1">Product Image</div></td>
        <td><label>
          <input type="file" name="pimage" id="pimage" />
        </label></td>
      </tr>
      <tr>
        <td><div align="center">
          <label>
          <input type="reset" name="btnClear" id="btnClear" value="CLEAR" class="button" />
          <p><a href="userpanel.php" target="_parent">back</a></p>
          </label>
        </div></td>
        <td><label>
          <div align="center">
            <input type="submit" name="btnAddProduct" id="btnAddProduct" value="ADD Product" class="button" />
          </div>
        </label></td>
      </tr>
    </table>
																												
  </form>
</div>

<div id="apDiv2">
  <h1 align="center"><span class="style8">ADD Products </span></h1>
  <h2>&nbsp;</h2>
</div>
</body>
<?php 
include ('footer.php');
?>
</html>
