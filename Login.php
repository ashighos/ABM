<?php

require('conn.php')	;
mysqli_select_db($con,'abm');
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
$email = test_input($_POST['lexampleInputEmail1']);
$pwd = test_input($_POST['lexampleInputPassword1']);
//$pwd1 = test_input($_POST['cexampleInputPassword2']);
//$contact = test_input($_POST['ccontact']);
}
// if ($pwd != $pwd1) {
  // echo "<script>alert('Please make sure that Password entered are same');window.location.href='/ABM/index.html';</script>";
  // exit();
// } 
 if (strlen($pwd) == "0" ) {
   echo "<script>alert('Password cannot be blank');window.location.href='/ABM/index.html';</script>";
   exit();
 }
 $getuserQuery = "select * from userdetail where UNAME='$email'";

 $result = mysqli_query($con, $getuserQuery);
 
 if ( mysqli_num_rows($result) > 0) 
 {
	while($row = mysqli_fetch_assoc($result)) {
		echo "<script>alert('Welcome  $row[UNAME] to Alliance Bowling Machine, Your Last Login date was : $row[LASTUPDATE] ');
	window.location.href='/ABM/index.html';
</script>";
	}
	 
 }
 else
 {
	 echo "<script>alert('Credentials supplied do not match');
	 //exit();
	window.location.href='/ABM/index.html';
	</script>";
 }
	 
 // $currentdate = date("Y/m/d");
// $query = "INSERT INTO `userdetail`(`UNAME`, `PWD`, `CONTACT`,`LASTUPDATE`) VALUES 
// ('$email','$pwd','$contact','$currentdate')";

// mysqli_query($con,$query);
// echo "<script>alert('User Registration at ABM is successful !!');
// window.location.href='/ABM/index.html';
// </script>";
//header('location:/ABM/index.html')
 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }
?>