<html>
    <head> <title> Attendance-Faculty </title> 
    <meta charset="utf-8">
    <meta name="viewport" + content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="style_m.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    <script type="text/javascript" src="https://kit.fontawesome.com/8ac277422e.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class=hero>
        <nav class=navbar>
            <a href="index.html"><img src="pics/logocan.png" class=logo></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-window-close" onclick="hideMenu()"></i>
                <ul>
                    <!-- <li><a href="faculty-view.html" style="color:#fff; text-decoration:none">HOME</a></li>
                    <li><a href="admin_notes.html" style="color:#fff; text-decoration:none">NOTES</a></li>
                    <li><a href="Assignments-faculty.php" style="color:#fff; text-decoration:none">ASSIGNMENT</a></li>
                    <li><a href="progress-faculty.html" style="color:#fff; text-decoration:none">PROGRESS</a></li>
                    <li><a href="announcement-faculty.php" style="color:#fff; text-decoration:none">ANNOUNCEMENTS</a></li>
                    <li><a href="chat_bypass.php" style="color:#fff; text-decoration:none">CHAT</a></li> -->
                    <li><a href="logout.php" style="color:#fff; text-decoration:none">LOGOUT</a></li>
                </ul>
                
            </div>
</nav>
<div class="container" style="padding-left: 50px;"> 



         




<form id="register" class="input-group" action="bulk_attend.php" method="POST">


<table class="table table-striped table-dark">
        <tr>
            
            <th>Select </th>
            <th>Roll No </th>
            <th> Date </th>
            <th> Subject </th>
            <th> Time</th>
            <!-- <th colspan="2"> Mark Attendance </th> -->
            
            
            
        </tr>
       
<?php
     include("connect.php");
     //error_reporting(0);
     $query = "select * from general where roles ='student'";
     $data = mysqli_query($conn, $query);
     $total = mysqli_num_rows($data);

     
    
     if($_SERVER["REQUEST_METHOD"]=="POST")
     {
        $date = $_POST['date'];
        $sub = $_POST['sub'];
        $time = $_POST['time'];
        session_start();
        $_SESSION['date'] = $date;
        $_SESSION['sub'] = $sub;
        $_SESSION['time'] = $time;
        if( $total!=0)
        {
            while($result = mysqli_fetch_assoc($data))
            {
                // *****************check box ***************************************************************************
                echo "
                <tr>
                
					<td> <input type='checkbox' name='check[]' value=".$result['rno']." checked> </td>
                    <td>" . $result['rno'] . "</td>
                    <td>" . $date . "</td>
                    <td>" . $sub . "</td>
                    <td>" . $time . "</td>
                    
                </tr>"
                 ;
                
            }
           ?> 
           <!-- <button type='submit' class='submit-btn' name='bulk' >Mark Attendance </button>" -->
           <?php
        }
        else
        {
            //echo "<font color='white'>No Pending request.";
        }
     }
     
   
    ?>
        </table>

		
        <!-- <form id="register" class="input-group" action="bulk_attend.php" method="POST"> -->
		
        <button  ><a href="https://attendancesystem2.azurewebsites.net/bulk_attend.php?dt=$date & sub=$sub & ti=$time">Mark Attendance </button>









        <table class="table table-striped table-dark">
        <tr>
            
            <th>Roll No</th>
            <th>Date</th>
            <th> Subject </th>
            <th> Time</th>
            <th> Status </th>
            
            
        </tr>
        <!-- <form id="register" class="input-group" action="bulk_attend.php" method="POST"> -->
                 
<!-- *****************bulk button ************************************************************************************************************* -->
                 <br>
                               
                               
                               
                        </form>
                        <br><br>
<?php
    include("connect.php");
    error_reporting(0);
	//$checkBox = $_POST['selected'];

    
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        //$rno = $_POST['rno'];
        //echo"<script>alert('$rno');document.location=''</script>";
        $query = "select * from attendance where date='$date'";
        $data = mysqli_query($conn, $query);
        $total = mysqli_num_rows($data);
        // if($data)
        // {
        //     echo"<script>alert('sucess');document.location=''</script>";
        // }
        // else{
        //     echo"<script>alert('fail');document.location=''</script>";
        // }
    }

   
    if( $total!=0)
    {
        while($result1 = mysqli_fetch_assoc($data))
        {
            echo "
            <tr>
                <td>" . $result1['rno'] . "</td>
                <td>" . $date . "</td>
                <td>" . $sub . "</td>
                <td>" . $time . "</td>
                <td>" . $result1['att'] . "</td>
               
                
                
            </tr>";
            
        }
    }
    // else
    // {
    //     echo "<font color='white'>No Pending request.";
    // }
   
    ?>

        </table>
	
        
            
            
            
        </tr>
        </div>
    </body>
</html>   


?>
	
