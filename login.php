<?php

require "connect.php" ;

$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, "ccl-project-server.mysql.database.azure.com", "kristen123", $dbpassword, $dbname, 3306, MYSQLI_CLIENT_SSL);

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
            header("Location:request.php");
            exit();
        break;

        case "student":
            session_start();
            $_SESSION['uname'] = $uname;
            $_SESSION['rno'] = $rno;
            header("Location:attend_stud.php");
            exit();
        break;

        case "faculty":
            session_start();
            $_SESSION['uname'] = $uname;
            $_SESSION['rno'] = $rno;
            header("Location:attend_fac1.php");
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
   

    
