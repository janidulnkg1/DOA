<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
	//refreshing back to login page
header ("refresh:1;url=MainLoginPage.php"); 
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Error!</title>
<link rel="stylesheet" href="../css/loginerrorstyle.css">	
<link rel="stylesheet" href="../css/lerrorstyle.css">	
	
<link rel="icon" type="image/x-icon" href="../IMAGES/favicon.ico">
<?php 
	
include ('header.php');
?>

<style type="text/css">
<!--
body {
	background-image: url(../IMAGES/wallpaper.jpg);
	</style>
</head>

<body>
<header class="ScriptHeader">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading">
            	<h1>ERROR!</h1>
                <p>Please try again shortly</p>
            </div>
        </div>
    </div>
</header>

<section>
<div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
              <div class="error">INVALID LOGIN DETAILS!</div>
              	</div>
		</div>
    </div>
	</section>
</body>
<?php 
include ('footer.php');
?>
</html>
