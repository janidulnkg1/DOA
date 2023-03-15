<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
	//calling header
include ('header.php');
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DOA Create USer Account</title>
<link rel="stylesheet" href="../css/btnstyle.css">
<link rel="stylesheet" href="../css/txtstyle.css">
<link rel="icon" type="image/x-icon" href="../IMAGES/favicon.ico">
<style type="text/css">
<!--
#apDiv2 {
	position:absolute;
	width:478px;
	height:389px;
	z-index:1;
	left: 665px;
	top: 81px;
}
body {
	background-image: url(../IMAGES/137495.jpg);
}
.style7 {
	color: #FFFFFF;
	font-weight: bold;
}
.style8 {
	color: #999999
}
.style9 {
	font-size: 40px;
	color: #FFFFFF;
}
-->
</style>
</head>
<script type="text/javascript">
   
    </script>
<body>

<div id="apDiv2">
 <form id="form1" name="form1" method="post" action="UserCreate.php">
    <table width="444" border="0">
      <tr>
        <td colspan="2"><div align="center">
          <h1><strong><span class="style9">Create User Account</span></strong></h1>
        </div></td>
      </tr>
      <tr>
        <td width="127"><span class="style7 ft ft ft ft">First Name:</span></td>
        <td width="236"><label>
          <input type="text" name="txtFName" id="txtFName" class="type-1" />
        </label></td>
      </tr>
      <tr>
        <td><span class="style7 ft ft ft ft">Last Name:</span></td>
        <td><label>
          <input type="text" name="txtLName" id="txtLName" class="type-1" />
        </label></td>
      </tr>
      <tr>
        <td><span class="style7 ft ft ft ft">User Login Name:</span></td>
        <td><label>
          <input type="text" name="txtUName" id="txtUName" class="type-1" />
        </label></td>
      </tr>
      <tr>
        <td><span class="style7 ft ft ft ft">Password:</span></td>
        <td><label>
          <input type="password" name="txtPassword" id="txtPassword" class="type-1"/>
        </label></td>
      </tr>
      <tr>
        <td><span class="style7 ft ft ft ft">Confirm Password:</span></td>
        <td><input type="password" name="txtConPass" id="txtConPass" class="type-1"/></td>
      </tr>
      <tr>
        <td><div align="center"><a href="MainLoginPage.php" target="_parent" class="style8">back</a></div></td>
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
