<?php
include("connect.php");
error_reporting(0);
$rno=$_GET['rn'];
$date=$_GET['dt'];
$sub=$_GET['sb'];
$time=$_GET['tm'];

$query3="INSERT INTO `attendance` (`rno`, `date`, `sub`, `time`, `att`) VALUES ('$rno', '$date', '$sub', '$time', 'present');";
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