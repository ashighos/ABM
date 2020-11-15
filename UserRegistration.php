<?php

require('conn.php')	;
mysqli_select_db($con,'abm');
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
$email = test_input($_POST['exampleInputEmail1']);
$pwd = test_input($_POST['cexampleInputPassword1']);
$pwd1 = test_input($_POST['cexampleInputPassword2']);
$contact = test_input($_POST['ccontact']);
}
if ($pwd != $pwd1) {
  echo "<script>alert('Please make sure that Password entered are same');window.location.href='/ABM/index.html';</script>";
  exit();
} 
 if (strlen($contact) <  "10" ) {
   echo "<script>alert('Please make sure that Contact Number is correct');window.location.href='/ABM/index.html';</script>";
   exit();
 }
 $getuserQuery = "select * from userdetail where UNAME='$email'";

 $result = mysqli_query($con, $getuserQuery);
 
 if ( mysqli_num_rows($result) > 0) 
 {
	echo "<script>alert('E-mail Already exists in our Database, Please use different e-mail');
	window.location.href='/ABM/index.html';
</script>"; 
 }
 $currentdate = date("Y/m/d");
$query = "INSERT INTO `userdetail`(`UNAME`, `PWD`, `CONTACT`,`LASTUPDATE`) VALUES 
('$email','$pwd','$contact','$currentdate')";

mysqli_query($con,$query);
echo "<script>alert('User Registration at ABM is successful !!');
window.location.href='/ABM/index.html';
</script>";
//header('location:/ABM/index.html')
 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }
?>