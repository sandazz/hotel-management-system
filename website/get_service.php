<?php
include('include/config.php');

if(!empty($_POST["service"])) 
{

 $sql=mysqli_query($con,"select fees from services where service='".$_POST['service']."'");
 while($row=mysqli_fetch_array($sql))
 	{?>
 <option value="<?php echo htmlentities($row['fees']); ?>"><?php echo htmlentities($row['fees']); ?></option>
  <?php
}
}

?>

