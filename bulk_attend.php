<?php
	 include("connect.php");
	//error_reporting(0);
	session_start();
	$date = $_SESSION['date'];
	$sub = $_SESSION['sub'];
    $time = $_SESSION['time'];

	 if(isset($_POST['bulk']))
	 {
		$check = $_POST['check'];
		//echo $check;
		foreach ($check as $item)
		{
			// echo $item;
			// echo $date;
			// echo $sub;
			// echo $time;
			$query1=" INSERT INTO `attendance` (`rno`, `date`, `sub`, `time`, `att`) VALUES ('$item', '$date', '$sub', '$time', 'present');";
			$data1=mysqli_query($conn,$query1);

		}
		if($data1)
		{
			echo"<script>alert('Attendance Marked');document.location='attend_fac1.php'</script>";
		}
		else
			echo"<script>alert('Something went wrong');document.location='attend_fac1.php'</script>";
	 

	 
	?>
	
	











	
