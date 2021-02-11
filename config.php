<?php
$server="localhost";
$dbname="monthly_cost";
$dbuser="root";
$dbpass="";
$con=mysqli_connect($server,$dbuser,$dbpass,$dbname);
if($con)
{
	echo ' ';
}
else
{
	echo 'not connected';
}
?>
