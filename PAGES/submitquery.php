<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
<!--
body {
	background-image: url(../IMAGES/1598250.jpg);
}
-->
</style><?php 
//include ('database.php');
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="../css/btnstyle.css">
<link rel="stylesheet" href="../css/txtstyle.css">
<style type="text/css">
<!--
#apDiv2 {
	position:absolute;
	left:499px;
	top:18px;
	width:609px;
	height:375px;
	z-index:1;
}
.style8 {font-size: 36px}
.style9 {color: #FFFFFF}
.style10 {font-size: 18px; color: #FFFFFF; }
.style12 {color: #33FF00}
-->
</style>
</head>

<body>
<div id="apDiv2">
  <form id="form2" name="form1" method="post" action="querysubmit.php">
    <table width="524" height="360" border="1">
      <tr>
        <td height="103" colspan="2"><div align="center" class="style9"><span class="style8">Enter Query</span></div></td>
      </tr>
      <tr>
        <td width="191"><span class="style10">Username</span></td>
        <td width="317"><span class="style9">
          <label>
          <input name="txtUsername" type="text" id="txtUsername" size="50" class="type-1" />
          </label>
        </span></td>
      </tr>
      <tr>
        <td><span class="style10">Message</span></td>
        <td><span class="style9">
          <label>
          <textarea name="txtQuery" cols="50" rows="10" id="txtQuery" class="type-1" ></textarea>
          </label>
        </span></td>
      </tr>
      <tr>
        <td colspan="2"><label></label>          
          <label>
          <div align="center"><a href="userpanel.php" target="_parent">back</a>
          <label>
            <input type="reset" name="btnClear" id="btnClear" value="Clear" class="button"/>
            </label>
            <label>
            <input type="submit" name="btnSubmit" id="btnSubmit" value="Submit" class="button" />
            </label>
          </div>
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
