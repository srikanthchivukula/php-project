<?php
echo "hii";
$select=$_POST['branch'];
$con=mysqli_connect('localhost','root','','dcm');
if(mysqli_connect('localhost','root','','dcm'))
{
echo "connected";
}
$id1=$_POST['id1'];


$id2=$_POST['id2'];
echo "$id1-$select-$id2.<br/>";

if($id1==null)
{
	echo "enter id";
}
else{
	if(!is_numeric($id1))
	{
		echo "id should be numeric.<br/>";
	}
	else{
		$k=0;

while($id1>0)

{
	$a=$id1%10;
	$id1=$id1/10;
 $k++;
}
if($k<6)
{
	echo "first box number should be 5 letters.<br/>";
}
	}
	
}




?>