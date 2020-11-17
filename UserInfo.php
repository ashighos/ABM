<?php

require('conn.php')	;
mysqli_select_db($con,'abm');
$email = $mobile = $name = "";
$emailErr = $mobileErr = $nameErr = $enqErr = "";
$isreqfieldavailable = "true";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//$email = test_input($_POST['cemail']);
if (empty($_POST['cemail'])) {
    $emailErr = "Name is required";
  } else {
    $email = test_input($_POST['cemail']);
    // check if name only contains letters and whitespace
    
    }
  
  if (empty($_POST['ccontactno'])) {
    $mobileErr = "Mobile number is required";
  } else {
    $mobile = test_input($_POST['ccontactno']);
    // check if name only contains letters and whitespace
    if (!preg_match('/^[0-9]{10}+$/', $mobile)) {
      $mobileErr = "Only Numbers are allowed";
    }
  }

  if (empty($_POST['cname'])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST['cname']);
    // check if name only contains letters and whitespace
    
    }
  
  if (empty($_POST['cenq'])) {
    $enqErr = "Name is required";
  } else {
    $name = test_input($_POST['cenq']);
    // check if name only contains letters and whitespace
    
    }
  
//$mobile = test_input($_POST['ccontactno']);
//$name = test_input($_POST['cname']);
$addd1 = test_input($_POST['cadd1']);
$add2 = test_input($_POST['cadd2']);
$city = test_input($_POST['ccity']);
$state = test_input($_POST['cstate']);
$country = test_input($_POST['ccountry']);
$zip = test_input($_POST['czip']);
$enq = test_input($_POST['cenq']);
}
if (strlen($emailErr)  !=0 )
{
	$isreqfieldavailable = "false";
	echo "<script>alert('E-mail id is required');window.location.href='/ABM/index.php';</script>";
}
if (strlen($mobileErr)  !=0 )
{
$isreqfieldavailable = "false";
echo "<script>alert(' Mobile Number is mandatory to contact back.');window.location.href='/ABM/index.php';</script>";
}
if (strlen($nameErr)  !=0 )
{
$isreqfieldavailable = "false";
echo "<script>alert(' Please provide the name ');window.location.href='/ABM/index.php';</script>";;
}
if (strlen($enqErr)  !=0 )
{
$isreqfieldavailable = "false";
echo "<script>alert(' Please provide your concern/suggestion/enquiry ');window.location.href='/ABM/index.php';</script>";
}
if ($isreqfieldavailable=='true')
{
$query = "INSERT INTO `customerinfo`(`Email`, `Mobile`, `Name`, `Add1`, `Add2`, `City`, `State`, `ZIP`, `ENQUIRY`) VALUES 
('$email','$mobile','$name','$addd1','$add2','$city','$state','$zip','$enq')";


mysqli_query($con,$query);
echo "<script>alert('Thanks for cotacting us.We have noted down your message/concern , A response will follow soon - Team ABM');
window.location.href='/ABM/index.php';
</script>";
}
else
{
	
	echo "<script>alert('Please provide required field to proceed');
window.location.href='/ABM/index.php'; </script>";
}
//header('location:/ABM/index.html')
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }
?>