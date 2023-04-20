<?php
    include 'connect.php';
    $Teacher_name=$_SESSION['uname'];
    $Date_Time=$_POST['Date_Time'];
    $Announcement=$_POST['Announcement'];
    //$Subjects=$_POST['Subjects'];

    $INSERT = "INSERT Into announcements ( Teacher_name, Date_Time, Announcement) values('$Teacher_name','$Date_Time','$Announcement')";

    $RESULT=mysqli_query($conn,$INSERT);

    if ($RESULT) {
        //echo "Data inserted successfully";
  header('location:announcement-faculty.php');
    }else{
        die("Conection failed: " . $conn->connect_error);
    }
   

?> 