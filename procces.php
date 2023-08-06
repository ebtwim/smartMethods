<?php
	// Connect to the database
	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "";
    $db_name = "robot_control";



	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

	if (!$conn) {
		die("Database connection error: " . mysqli_connect_error());
	}
					
    if(isset($_POST['move'])){
		$DE =$_POST['move'];
	}


	$sql = "insert into movement (move) value ('$DE') ";
	echo $DE ;
	echo '<br>';

	if (mysqli_query($conn, $sql)){
		echo"successfull";
	}else {
		echo "ERROR" .$sql.'<br>' .mysqli_error($conn);
	}
		
	// Close the database connection
	mysqli_close($conn);
?>