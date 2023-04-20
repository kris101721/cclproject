<!DOCTYPE html>
<html >
<head>
<meta charset="utf-8">
<meta name="viewport"
+ content="with=device-width, initial-scale=1.0">
<title> attendance faculty</title>
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
                    <!-- <li><a href="faculty-view.html" style="color:#fff; text-decoration:none">HOME</a></li>
                    <li><a href="admin_notes.html" style="color:#fff; text-decoration:none">NOTES</a></li>
                    <li><a href="Assignments-faculty.php" style="color:#fff; text-decoration:none">ASSIGNMENT</a></li>
                    <li><a href="progress-faculty.html" style="color:#fff; text-decoration:none">PROGRESS</a></li>
                    <li><a href="announcement-faculty.php" style="color:#fff; text-decoration:none">ANNOUNCEMENTS</a></li>
                    <li><a href="chat_bypass.php" style="color:#fff; text-decoration:none">CHAT</a></li> -->
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
    <form id="register" class="input-group" action="attend_fac.php" method="POST">
                 
  </select>
  <br><br><br><br><br><br><br><br>
                <label style="color: white;">Date</label>
                <input type="date" style="color:#fff;" name="date" class="input-field" placeholder="Date" required>
               <br>
                <label  style="color: white;" for="sub">Choose Subject:</label>
                <select name="sub" >
                <option value="SPCC">SPCC</option>
                <option value="CSS">CSS</option>
                <option value="MC">MC</option>
                <option value="AI">AI</option>
                <option value="IOT">IOT</option>
                <option value="CCL">CCL</option>
                </select>
                <br>
                
                <label  style="color: white;" for="time">Choose Time:</label>
                <select name="time" >
                <option value="8:45-9:45">8:45-9:45</option>
                <option value="9:45-10:45">9:45-10:45</option>
                <option value="11:00-12:00">11:00-12:00</option>
                <option value="12:00-1:00">12:00-1:00</option>
                <option value="1:30-2:30">1:30-2:30</option>
                <option value="2:30-3:30">2:30-3:30</option>
                
                </select>
                <br><br>
                <button type="submit" class="submit-btn" >Submit</button>
         </form>

         </div>
  
    
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