<?php
include_once("config.php");
if(isset($_POST["submit"]))
{
	$date=$_POST['date'];
	$category=$_POST['category'];
	$expenses_amount=$_POST['expenses_amount'];
	$earning_amount=$_POST['earningamount'];
$sql="INSERT INTO dailyexpenses(Expensesdate,category,amount,earningamount) values('$date','$category','$expenses_amount','$earning_amount')";
	if(mysqli_query($con,$sql))
	{
		?>
		<script type="text/javascript">
				alert("Data is successfully added")
			</script> 
			<?php
			header ("refresh:0; url=dailyexpensess.php");
	}
	else
	{
		?>
		<script type="text/javascript">
				alert("Data is not successfully added")
			</script> 
			<?php
			header ("refresh:0; url=dailyexpensess.php");
	}

}
?>