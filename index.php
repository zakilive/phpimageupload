<html>
<head>
<title>Upload an Image</title>
</head>
<body>
<form action="index.php" method="POST" enctype="multipart/form-data">
File:
<input type="file" name="image"><input type="submit" value="Upload">
</form>
<?php
//connect to database
include 'get.php';

//file properties

if(!isset($_FILES['image'])){
echo "Please select an image.";
}else{
$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
echo $image_name=addslashes($_FILES['image']['name']);
$image_size=getimagesize($_FILES['image']['tmp_name']);
if($image_size==FALSE){
echo "That's not an image";
}else{
if(!$insert=mysqli_query($connect,"INSERT into store VALUES('','$image_name','$image')")){
echo "</br>Problem uploading image";
}
else
{
$lastid=mysqli_insert_id($connect);
echo "</br>Succsess !! Image Uploaded :)<p>Your image:</p><img src=get.php?id=$lastid>";
}
}
}
?>

</body>
</html>