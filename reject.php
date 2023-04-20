<?php
include("connect.php");
error_reporting(0);
$uname=$_GET['un'];
$query1="UPDATE `request` SET `status` = 'rejected' WHERE `request`.`uname` = '$uname'";
$data1=mysqli_query($conn,$query1);

if($data1)
{
    echo"<script>alert('Request rejected');document.location='http://localhost/Mini%20Project%201B/request.php'</script>";
}
else
{
  
    echo"<script>alert('Failed to reject');document.location='http://localhost/Mini%20Project%201B/request.php'</script>";
}
?>