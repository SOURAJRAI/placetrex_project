<?php
if(isset($_GET['id']))
{
	include('config.php');
	$id=$_GET['id'];
	$status='selected';
	$query="update regstu set selects='".$status."' where id='".$id."'";
	mysqli_query($con, $query);
	echo "<script>
				alert('Select Successful');
			</script>";
			
			echo "<script> location.href='selected.php'; </script>";
			
}
?>
