<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
include ('header.php');
include ('database.php');
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DOA Login</title>
 <link rel="stylesheet" href="../css/btnstyle.css">
 <link rel="stylesheet" href="../css/txtstyle.css">
<link rel="icon" type="image/x-icon" href="../IMAGES/favicon.ico">
<style type="text/css">
<!--
body {
	background-image: url(../IMAGES/wallpaper.jpg);
}
#apDiv2 {
	position: absolute;
	width: 453px;
	height: 115px;
	z-index: 2;
	left: 737px;
	top: 104px;
}
.style4 {	font-size: 18px;
	font-weight: bold;
}
.style11 {color: #FFFFFF}
.style12 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 24px;
}
.style13 {color: #FF0000}
.style14 {font-size: 24px}
.style15 {
	font-size: 40px
}
.style16 {color: #CCCCCC}
-->
</style></head>

<body>
<div id="apDiv2">
  <form id="form3" name="form1" method="post" action="loginCheck.php">
    <table width="494" height="264" border="0" align="center" bordercolor="#000000">
      <tr>
        <td colspan="2" bordercolor="#000000"><h1 align="center" class="style11 style15"><strong>User Login</strong></h1></td>
      </tr>
      <tr>
        <td width="211" bordercolor="#000000"><div align="center" class="style11 style14"><strong>Username</strong></div></td>
        <td width="185"><label>
          <input type="text" name="txtUname" id="txtUname" class="type-1" />
        </label></td>
      </tr>
      <tr>
        <td bordercolor="#000000"><div align="center" class="style12">Password</div></td>
        <td><label>
          <input type="password" name="txtPass" id="txtPass" class="type-1"/>
        </label></td>
      </tr>
      <tr bordercolor="#000000">
        <td height="76" colspan="2"><label>
      <div align="center"><span class="style4"> <span class="style13">
      <label>
           <input type="reset" name="btnRClear" id="btnRClear" value="Clear" class="button"/>
           </label>
      <label>
         <input type="submit" name="btnLogin" id="btnLogin" value="LOGIN" class="button"/>
         </label>
         
         <span class="style16">No Account?</span></span> <a href="CreateUserpage.php" target="_parent">Create one</a></span></div>
          </label></td>
      </tr>
    </table>
    <p>&nbsp;</p>
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
