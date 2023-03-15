<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DOA Field Officer page</title>
<link rel="icon" type="image/x-icon" href="../IMAGES/favicon.ico">
</head>

<?php 
	//echo '<script>alert("Welcome to DOA Field Officer Page!") </script>';
	?>

<frameset rows="66,*" cols="*" framespacing="1" frameborder="yes" border="1" bordercolor="#000000">
  <frame src="fotoppanel.php" name="topFrame" scrolling="No" noresize="noresize" id="topFrame" title="topFrame" />
  <frameset rows="*" cols="246,*" framespacing="1" frameborder="yes" border="1" bordercolor="#000000">
    <frame src="foleftpanel.php" name="leftFrame" scrolling="No" noresize="noresize" id="leftFrame" title="leftFrame" />
    <frame src="focentrepanel.php" name="mainFrame" id="mainFrame" title="mainFrame" />
  </frameset>
</frameset>
<noframes><body>
</body>
</noframes></html>
