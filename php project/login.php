<?php
echo "hii";
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$emailid=$_POST['emailid'];
$username=$_POST['username'];
$password=$_POST['password'];


$repassword=$_POST['repassword'];
$con=mysqli_connect('localhost','root','','login');
if(mysqli_connect('localhost','root','','login'))
{
echo "connected";
}
mysqli_query($con,"insert into data values("$firtname","$lastname","$emailid","$username","$password","$reenterpassword")");


	

?>
