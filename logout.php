<?php
session_start();
if(isset($_SESSION['rno']))
{
    unset( $_SESSION['uname']);
    unset($_SESSION['rno']);
}
else
{
    unset( $_SESSION['uname']);
}
echo"<script>alert('You have been logged out');document.location='index.html'</script>";
//header("Location:http://localhost/Mini%20Project%201B/LR.html");
?>
