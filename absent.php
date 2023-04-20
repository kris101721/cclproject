<?php
include("connect.php");
error_reporting(0);
$rno=$_GET['rn'];
$date=$_GET['dt'];

$query3="INSERT INTO `attendance` (`rno`, `date`, `att`) VALUES ('$rno', '$date', 'absent');";
$data3=mysqli_query($conn,$query3);
if($data3)
{
    echo"<script>alert('Success');document.location=''</script>";
}
else
{
    echo"<script>alert('Fail);document.location=''</script>";
}
?>