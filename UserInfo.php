<?php

$con = mysqli_connect('localhost','root','','abm1','3306');
if (!$con){
	?>
	<script type="text/javascript">
	alert('Error : Not able to connect to Database')
	</script>
	<?php
}

	
	
mysqli_select_db($con,'abm');
$email = $_POST['cemail'];
$mobile = $_POST['ccontactno'];
$name = $_POST['cname'];
$addd1 = $_POST['cadd1'];
$add2 = $_POST['cadd2'];
$city = $_POST['ccity'];
// $state = $_POST['cstate'];
$zip = $_POST['czip'];

$query = "INSERT INTO `customerinfo`(`Email`, `Mobile`, `Name`, `Add1`, `Add2`, `City`, `State`, `ZIP`) VALUES 
('$email','$mobile','$name','$addd1','$add2','$city','Karnataka','$zip')";

mysqli_query($con,$query);
header('location:/ABM/index.html')

?>