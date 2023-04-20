<?php
include("connect.php");
error_reporting(0);
$uname=$_GET['un'];
$roles=$_GET['rl'];
$query3="insert into general select * from request where uname ='$uname'";
$data3=mysqli_query($conn,$query3);

if($data3)
            {
                echo"<script>alert('Request Approved');document.location='http://localhost/Attendance_sys/request.php'</script>";
                $query2="UPDATE `general` SET `status` = 'accepted' WHERE `general`.`uname` = '$uname'";
                $data2=mysqli_query($conn,$query2);
                $query1="UPDATE `request` SET `status` = 'accepted' WHERE `request`.`uname` = '$uname'";
                $data1=mysqli_query($conn,$query1);
                $query3="INSERT INTO login(username,password) SELECT uname,pswd1 from `request` WHERE `request`.`uname` = '$uname'";
                $data3=mysqli_query($conn,$query3);
            }

switch ($roles)
{
    case "admin":
            $query="insert into admin select * from request where uname ='$uname'";
            $data=mysqli_query($conn,$query);
            if($data)
            {
                $query2="delete from request where uname ='$uname'";
                $data2=mysqli_query($conn,$query2);

                echo "<font color='green'>Request accepted and given admin role ";
            }
            else
            {
                echo "<font color='red'>Failed to accept";
            }
    break;

    case "student":
            $query="insert into student select * from request where uname ='$uname'";
            $data=mysqli_query($conn,$query);
                
                if($data)
                {
                    $query2="delete from request where uname ='$uname'";
                    $data2=mysqli_query($conn,$query2);
                    echo "<font color='green'>Request accepted and given student role ";
                }
                else
                {
                    echo "<font color='red'>Failed to accept";
                }
            break;

    case "faculty":
            $query="insert into faculty select * from request where uname ='$uname'";
            $data=mysqli_query($conn,$query);
                
                if($data)
                {
                    $query2="delete from request where uname ='$uname'";
                    $data2=mysqli_query($conn,$query2);
                    echo "<font color='green'>Request accepted and given faculty role ";
                }
                else
                {
                    echo "<font color='red'>Failed to accept";
                }
    break;
}
?>