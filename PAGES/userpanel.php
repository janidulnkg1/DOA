<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DOA User Page</title>
<link rel="icon" type="image/x-icon" href="../IMAGES/favicon.ico">
</head>

<?php 
	//echo '<script>alert("Welcome to DOA User Page!") </script>';
	?>


<frameset rows="68,*" cols="*" framespacing="0" frameborder="yes" border="0" bordercolor="#000000">
  <frame src="usertoppanel.php" name="topFrame" scrolling="No" noresize="noresize" id="topFrame" title="topFrame" />
  <frameset rows="*" cols="238,*" framespacing="1" frameborder="yes" border="1" bordercolor="#000000">
    <frame src="userleftpanel.php" name="leftFrame" scrolling="No" noresize="noresize" id="leftFrame" title="leftFrame" />
    <frame src="usercentrepanel.php" name="mainFrame" id="mainFrame" title="usercenterframe" />
  </frameset>
</frameset>
<noframes><body>
</body>
</noframes></html>
