<?php
include_once("config.php");

$id=$_GET['id'];
	$sql="Delete  FROM dailyexpenses WHERE id = $id";
  if(mysqli_query($con,$sql))
  {

		echo "Delete successfully";
		header("Location:savingmoney.php");

  }
  else {
    echo "No Deleted";
  }


?>
