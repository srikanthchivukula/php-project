<?php
$select=$_POST['branch'];
$name=$_POST['name'];
$id=$_POST['id'];
$address=$_POST['address'];
if($name==null)
{
	echo "enter name first.<br/>";
}
else
{
	if(is_numeric($name))
	{
		echo "name should be in characters.<br/>";
	}
}
if($id==null)
{
	echo "enter id first.<br/>";
}
else
{
	if(is_numeric($id))
	{
		echo "id should be in characters.<br/>";
	}
}
if($address==null)
{
	echo "enter address first.<br/>";
}
else
{
	if(is_numeric($address))
	{
		echo "address should be in characters.<br/>";
	}
}
?>