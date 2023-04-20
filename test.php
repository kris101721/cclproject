<?php
// echo $_SESSION['uname'];
session_start();
$uname = $_SESSION['uname'];
if(isset($uname))
    {
        echo $_SESSION['uname'];
        echo $_SESSION['username'];
        // echo $_SESSION['date'];
        // echo $_SESSION['sub'] ;
        // echo $_SESSION['time'] ;
    //echo$_SESSION['rno'];
    }
else
    echo"oh no";
?>
