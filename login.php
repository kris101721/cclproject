<?php

include("connect.php");
$uname = $_POST['uname'];
$pswd1 = $_POST['pswd1'];

$query="select * from general WHERE uname ='$uname' && pswd1='$pswd1' && status='accepted'";
$data=mysqli_query($conn,$query);

$total =mysqli_num_rows($data);

while($result = mysqli_fetch_assoc($data))
  {   
    $access = $result['roles'];
    $rno = $result['rno'];
  }

if ($total==1)
{
    switch ($access)
    {
        case "admin":
            session_start();
            $_SESSION['uname'] = $uname;
            $_SESSION['rno'] = $rno;
            header("Location: http://localhost/Attendance_sys/request.php");
            exit();
        break;

        case "student":
            session_start();
            $_SESSION['uname'] = $uname;
            $_SESSION['rno'] = $rno;
            header("Location: http://localhost/Attendance_sys/attend_stud.php");
            exit();
        break;

        case "faculty":
            session_start();
            $_SESSION['uname'] = $uname;
            $_SESSION['rno'] = $rno;
            header("Location: http://localhost/Attendance_sys/attend_fac1.php");
            exit();
        break;

        default:
        echo"Wrong Credentials";
        break;
    }
}
else
{
    echo"<script>alert('Wrong Credentials.');document.location='http://localhost/Attendance_sys/LR.html'</script>";
          
}    
?>
   

    