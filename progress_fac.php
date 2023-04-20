<!DOCTYPE html>
<html >
<head>
<meta charset="utf-8">
<meta name="viewport"
+ content="with=device-width, initial-scale=1.0">
<title>progress faculty</title>
 <link rel="stylesheet" type="text/css" href="style.css">
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;600;700&display=swap" rel="stylesheet">
<script type="text/javascript" src="https://kit.fontawesome.com/8ac277422e.js" crossorigin="anonymous"></script>
  </head>
<body>
  
    <div class=hero>
        <nav class=navbar>
            <a href="index.html"><img src="pics/logocan.png" class=logo></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-window-close" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="faculty-view.html" style="color:#fff; text-decoration:none">HOME</a></li>
                    <li><a href="admin_notes.html" style="color:#fff; text-decoration:none">NOTES</a></li>
                    <li><a href="Assignments-faculty.php" style="color:#fff; text-decoration:none">ASSIGNMENT</a></li>
                    <li><a href="progress-faculty.html" style="color:#fff; text-decoration:none">PROGRESS</a></li>
                    <li><a href="announcement-faculty.php" style="color:#fff; text-decoration:none">ANNOUNCEMENTS</a></li>
                    <li><a href="chat_bypass.php" style="color:#fff; text-decoration:none">CHAT</a></li>
                    <li><a href="logout.php" style="color:#fff; text-decoration:none">LOGOUT</a></li>
                </ul>
                
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
            <!-- /<button type="button">Sign UP</button> -->
        </nav>
        <div class="content">
        
    </div>
    <div class="heading">
        <h1>Progress</h1>
    </div>

    <div class="form-box-pr">
    <form id="register" class="input-group" action="progress_fac.php" method="POST">
                 
  </select>
  <br><br><br><br><br>
                <label style="color: white;">Enter the rollno</label>
                <input type="text" style="color: white;" name="rno" class="input-field" placeholder="Roll No Here" required>
                <label style="color: white;">AOA marks</label>
                <input type="text" style="color: white;" name="aoa" class="input-field" placeholder="AOA marks" required>
                <label style="color: white;">Dbms marks</label>
                <input type="text" style="color: white;" name="dbms" class="input-field" placeholder="Dbms marks" required>
                <label style="color: white;">MP marks</label>
                <input type="text" style="color: white;" name="mp" class="input-field" placeholder="MP marks" required>
                <label style="color: white;">EM-IV marks</label>
                <input type="text" style="color: white;" name="emiv" class="input-field" placeholder="EM-IV marks" required>
                <label style="color: white;">OS marks</label>
                <input type="text" style="color: white;" name="os" class="input-field" placeholder="OS marks" required>
                <button type="submit" class="submit-btn" >Submit</button>
         </form>

         </div>
  
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            
            include 'connect.php';
            // $query1="insert fname,lname,branch,uname into student from general where roles like '%student%' and email distinct";
            // $data1=mysqli_query($conn,$query1);
            $rno = $_POST['rno'];
            $aoa = $_POST['aoa'];
            $dbms = $_POST['dbms'];
            $mp = $_POST['mp'];
            $emiv = $_POST['emiv'];
            $os = $_POST['os'];
            // $query1="INSERT INTO `student` (`rno`, `fname`, `lname`, `branch`) SELECT `rno`, `fname`, `lname`, `branch` FROM 'general' WHERE rno=$rno";
            // $data1=mysqli_query($conn,$query1);

            // $query3="insert into student(rno,fname,lname,branch) select rno,fname,lname,branch from general where rno='$rno'";
            // $data3=mysqli_query($conn,$query3);

            $query2="INSERT INTO `student` (`rno`,`aoa`, `dbms`, `mp`, `emiv`, `os`) VALUES ('$rno','$aoa', '$dbms','$mp', '$emiv', '$os');";
            $data2=mysqli_query($conn,$query2);

            //echo"<script>alert('$aoa $dbms  $mp $emiv $os  ');document.location=''</script>";
            // $query1="INSERT INTO `student` (`aoa`, `dbms`, `mp`, `emiv`, `os`,) VALUES ('$aoa', '$dbms', '$mp', '$emiv', '$os')";
            // $data1=mysqli_query($conn,$query1);
            if($data2)
            {
                echo"<script>alert('Marks updated');document.location='progress_fac.php'</script>";
            }
            else{
                echo"<script>alert('fail');document.location='progress_fac.php'</script>";
            }
            
        }


                            ?>
  </select>
    </div>   
        <!------------Java Script for toogle menu----------->
         <script type="text/javascript">

             function showMenu() {
            document.getElementById("navLinks").style.width = "330px";
                           }
             function hideMenu() {
             document.getElementById("navLinks").style.width = "0";
                               }

         </script>

</body>
</html> 