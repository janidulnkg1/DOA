<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PIZZERIA</title>
<?php 
include("Database.php");
?>

</head>

<body>
<?php 

//##################################################    IMAGE TRANSFER    ################################
$target_dir = "../IMAGES/Products/";
$target_file = $target_dir . basename($_FILES["pimage"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) 
{
  $check = getimagesize($_FILES["pimage"]["tmp_name"]);
  if($check !== false) 
  {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
// Check if file already exists
if (file_exists($target_file)) 
{
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["pimage"]["size"] > 5000000) 
{
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) 
{
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
  header("refresh:.5;url=RequestProducts.php");
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) 
{
  echo "Sorry, your file was not uploaded.";
  header("refresh:.5;url=RequestProducts.php");
// if everything is ok, try to upload file
}
 else 
{

$newfilename=$_POST['txtptype'];
$temp = explode(".", $_FILES["pimage"]["name"]);
$newfilename = ($newfilename . '.' . end($temp));

  if (move_uploaded_file($_FILES["pimage"]["tmp_name"],$target_dir .$newfilename)) 
  {

//########### WRITE INFORMATION IN requestservices TABLE  #################

$insertSQL="INSERT INTO requestproducts values ('','".$_POST['cmbpcategory']."','".$_POST['txtptype']."','".$target_dir .$newfilename."')";

if(!mysqli_query($connect,$insertSQL))
{
die("Data not added in to table");
header("refresh:.5;url=RequestProducts.php");
}
else
{
echo ("Service information added Successfully");
header("refresh:.5;url=RequestProducts.php");
}
mysqli_close($connect);
//#################### END OF INFO WRIT IN TABLE  ####################

echo "The file ". htmlspecialchars( basename( $_FILES["pimage"]["name"])). " has been uploaded.";	
  } 
  else 
  {
    echo "Sorry, there was an error uploading your file.";
  }
}

//##################################################    END OF IMAGE TRANSFER    ################################



?>


</body>
</html>