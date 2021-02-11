<?php
include_once("config.php");
$id=$_GET['id'];
$result=mysqli_query($con,"SELECT * FROM dailyexpenses WHERE id=$id");
while($res =mysqli_fetch_array($result))
{
	$edate=$res['Expensesdate'];
	$category=$res['category'];
	$amount=$res['amount'];
	$earningamount=$res['earningamount'];
}

?>
<form ation="edit.php" method="post">
<input type="date" name="edate" value="<?php echo $edate;?>"/>
<input type="text" name="category" value="<?php echo $category;?>"/>
<input type="number" name="amount" value="<?php echo $amount;?>"/>
<input type="number" name="earningamount" value="<?php echo $earningamount;?>"/>
<input type="text" name="id" value="<?php echo $id;?>"hidden/>
<input type="submit" name="update" value="update"/>
</form>
<?php
if(isset($_POST["update"]))
{
	$edate=$_POST['edate'];
	$category=$_POST['category'];
	$amount=$_POST['amount'];
	$earningamount=$_POST['earningamount'];
	$sql=mysqli_query($con,"update dailyexpenses SET id='$id',Expensesdate='$edate',category='$category',amount='$amount',earningamount='$earningamount' WHERE id=$id");
	header("Location:savingmoney.php");
}
?>
