<?php
$connect=mysqli_connect("localhost","","");
mysqli_select_db($connect,"");
if(!$connect)
{
die("Connection error: " . mysqli_connect_error());
}


$id=addslashes($_REQUEST['id']);

$image=mysqli_query($connect,"SELECT * FROM store WHERE id=$id");
$image=mysqli_fetch_assoc($image);
$image=$image['image'];
header("Content-type:image/jpeg");
echo $image;

?>