<?php

require('conn.php')	;
mysqli_select_db($con,'abm');
$email = $_POST['cemail'];
$mobile = $_POST['ccontactno'];
$name = $_POST['cname'];
$addd1 = $_POST['cadd1'];
$add2 = $_POST['cadd2'];
$city = $_POST['ccity'];
$state = $_POST['cstate'];
$country = $_POST['ccountry'];
$zip = $_POST['czip'];

$query = "INSERT INTO `customerinfo`(`Email`, `Mobile`, `Name`, `Add1`, `Add2`, `City`, `State`, `ZIP`) VALUES 
('$email','$mobile','$name','$addd1','$add2','$city','$state','$zip')";

mysqli_query($con,$query);
echo "<script>alert('Thanks for cotacting us.We have noted down your message/concern , A response will follow soon - Team ABM');
window.location.href='/ABM/index.html';
</script>";
//header('location:/ABM/index.html')

?>