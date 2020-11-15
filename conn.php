<?php

$con = mysqli_connect('localhost','root','','abm','3306');
if (!$con){
	?>
	<script type="text/javascript">
	alert('Error : Not able to connect to Database');
	exit();
	</script>
	<?php
}

?>