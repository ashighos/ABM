<?php
session_start();
require('conn.php')	;
mysqli_select_db($con,'abm');
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
$email = test_input($_POST['lexampleInputEmail1']);
$pwd = test_input($_POST['lexampleInputPassword1']);

}

 if (strlen($pwd) == "0" ) {
   echo "<script>alert('Password cannot be blank');window.location.href='/ABM/index.php';</script>";
   exit();
 }
 $getuserQuery = "select * from userdetail where UNAME='$email' and PWD='$pwd'";

 $result = mysqli_query($con, $getuserQuery);
 $num = mysqli_num_rows($result);
 if ( $num == 1) 
 {
	$_SESSION['username']=$email;
	{
		echo "<script>alert('Welcome  $email to Alliance Bowling Machine ');
	window.location.href='/ABM/LogedinIndex.php';
</script>";
	}
	 
 }
 else
 {
	 echo "<script>alert('Credentials supplied do not match');
	 //exit();
	window.location.href='/ABM/index.php';
	</script>";
 }
	 
 
 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }
?>