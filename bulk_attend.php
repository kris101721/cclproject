<?php
	 require "database/config.php";

$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL,$sslcert, NULL, NULL);
if(!mysqli_real_connect($conn, $host, $dbusername, $dbpassword, $dbname, 3306, MYSQLI_CLIENT_SSL)){
            die('Failed to connect to MySQL: '.mysqli_connect_error());
        }else{
echo"success";
}
	//error_reporting(0);
	session_start();
	$date = $_POST['date'];
	$sub = $_POST['sub'];
    $time = $_POST['time'];
echo $date;
echo $sub;
echo $time;

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
		
	 }

	 
	?>
	
	











	
