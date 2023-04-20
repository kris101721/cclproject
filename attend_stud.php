<html>
    <head> <title> Progress </title> 
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
                    <!-- <li><a href="index.html" style="color:#fff; text-decoration:none">HOME</a></li>
                    <li><a href="stud_notes.html" style="color:#fff; text-decoration:none">NOTES</a></li>
                    <li><a href="Assignments-student.php" style="color:#fff; text-decoration:none">ASSIGNMENT</a></li>
                    <li><a href="progress.html" style="color:#fff; text-decoration:none">PROGRESS</a></li>
                    <li><a href="announcement-student.php" style="color:#fff; text-decoration:none">ANNOUNCEMENTS</a></li>
                    <li><a href="chat_bypass.php" style="color:#fff; text-decoration:none">CHAT</a></li> -->
                    <!-- <li><a href="about.html" style="color:#fff; text-decoration:none">ABOUT</a></li> -->
                    <li><a href="logout.php" style="color:#fff; text-decoration:none">LOGOUT</a></li>
                </ul>
                
            </div>
</nav>
<div class="container" style="padding-left: 50px;"> 
<form id="register" class="input-group" action="attend_stud.php" method="POST">
                 
  </select>
  <br><br>
               
         </form>
<table class="table table-striped table-dark">
        <tr>
            
            
            <th>Date</th>
            <th>Subject</th>
            <th>Lecture Timing</th>
            <th> Status </th>
            
            
        </tr>
       
<?php
    include("connect.php");
    error_reporting(0);
    
    session_start();
    $uname = $_SESSION['uname'];
    $rno = $_SESSION['rno'];
    
        //$rno = $_POST['rno'];
        //echo"<script>alert('$rno');document.location=''</script>";
        $query = "select * from attendance where rno='$rno'";
        $data = mysqli_query($conn, $query);
        $total = mysqli_num_rows($data);
        // if($data)
        // {
        //     echo"<script>alert('sucess');document.location=''</script>";
        // }
        // else{
        //     echo"<script>alert('fail');document.location=''</script>";
        // }
    

   
    if( $total!=0)
    {
        while($result = mysqli_fetch_assoc($data))
        {
            echo "
            <tr>
                
                <td>" . $result['date'] . "</td>
                <td>" . $result['sub'] . "</td>
                <td>" . $result['time'] . "</td>
                <td>" . $result['att'] . "</td>
               
                
                
            </tr>";
            
        }
    }
    // else
    // {
    //     echo "<font color='white'>No Pending request.";
    // }
   
    ?>

        </table>
        </div>
    </body>
</html>   