<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  include 'connect.php';
  $roles = $_POST['roles'];
  $rno = $_POST['rno'];
  $fname  = $_POST['fname'];
  $lname = $_POST['lname'];
  $branch = $_POST['branch'];
  $uname = $_POST['uname'];
  $email = $_POST['email'];
  $pswd1 = $_POST['pswd1'];
  $pswd2 = $_POST['pswd2'];

 
 

  $query2="select * from general WHERE email ='$email'";
  $exe2=mysqli_query($conn,$query2);
  $total =mysqli_num_rows($exe2);

  $query3="select * from general WHERE uname ='$uname'";
  $exe3=mysqli_query($conn,$query3);
  $total2 =mysqli_num_rows($exe3);
  
  if($total!=1)
  { if($total2!=1)
    {
        if(($pswd1 == $pswd2)) 
        {
          $query1="INSERT INTO `request` (`roles`,`rno`, `fname`, `lname`, `branch`, `uname`, `email`, `pswd1`, `pswd2`, `status`) 
                    VALUES ('$roles','$rno', '$fname', '$lname', '$branch', '$uname', '$email', '$pswd1', '$pswd2', 'pending')";
          $exe1= mysqli_query($conn,$query1);
          if($exe1)
          {
            echo"<script>alert('Your request has been submitted.');document.location='http://localhost/Attendance_sys/LR.html'</script>";
          
          }
        }
        else
        {
          echo"<script>alert('Your passwords dont match.');document.location='http://localhost/Attendance_sys/LR.html'</script>";
        }
    }
    else
    {
      echo"<script>alert('This username has already been used by another user.');document.location='http://localhost/Attendance_sys/LR.html'</script>";
    }
  }  
  else
  {
    echo"<script>alert('This email has already been used by another user.');document.location='http://localhost/Attendance_sys/LR.html'</script>";
  }

} 
?>

