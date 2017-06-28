<?php
$name=$_POST['name'];
$id=$_POST['id'];
mysqli_connect("localhost","root","","dcm");
if(mysqli_connect("localhost","root","","dcm"))
{
echo "connected";
}
?>