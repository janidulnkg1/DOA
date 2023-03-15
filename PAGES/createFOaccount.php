<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="../css/txtstyle.css">
<link rel="stylesheet" href="../css/btnstyle.css">
<style type="text/css">
<!--
#apDiv2 {
	position:absolute;
	width:513px;
	height:389px;
	z-index:1;
	left: 650px;
	top: 148px;
}
body {
	background-image: url(../IMAGES/350327.jpg);
}
.style7 {
	color: #FFFFFF;
	font-weight: bold;
}
.style8 {
	color: #FFFFFF
}
.style9 {font-size: 18px}
.style10 {
	font-size: 40px;
	font-weight: bold;
	color: #FFFFFF;
}
-->
</style>
</head>

<body>
<div id="apDiv2">
  <form id="form1" name="form1" method="post" action="FOaccCreate.php">
    <table width="449" border="0">
      <tr>
        <td colspan="2"><div align="center" class="style7 style9">
          <h1 class="style10">Create Field Officer Account</h1>
        </div></td>
      </tr>
      <tr>
        <td width="127"><span class="style7">First Name:</span></td>
        <td width="236"><label>
          <input type="text" name="txtFName" id="txtFName" class="type-1"/>
        </label></td>
      </tr>
      <tr>
        <td><span class="style7">Last Name:</span></td>
        <td><label>
          <input type="text" name="txtLName" id="txtLName" class="type-1" />
        </label></td>
      </tr>
      <tr>
        <td><span class="style7">User Login Name:</span></td>
        <td><label>
          <input type="text" name="txtUName" id="txtUName" class="type-1" />
        </label></td>
      </tr>
      <tr>
        <td><span class="style7">Password:</span></td>
        <td><label>
          <input type="password" name="txtPassword" id="txtPassword" class="type-1" />
        </label></td>
      </tr>
      <tr>
        <td><span class="style7">Confirm Password:</span></td>
        <td><input type="password" name="txtConPass" id="txtConPass" class="type-1"/></td>
      </tr>
      <tr>
        <td><div align="center"><a href="adminpanel.php" target="_parent" class="style8">back</a></div></td>
        <td><label></label>
            <label>
            <input type="reset" name="btnRClear" id="btnRClear" value="Clear" class="button"/>
            </label>
            <label>
            <input type="submit" name="btnRCreate" id="btnRCreate" value="Create" class="button"/>
          </label></td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </form>
</div>
</body>
<?php 
include ('footer.php');
?>
</html>
