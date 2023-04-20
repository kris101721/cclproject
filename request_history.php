<html>
    <head> <title> Request History </title> 
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
                <li><a href="request.php" style="color:#fff; text-decoration:none">REQUESTS</a></li> 
                    <li><a href="request_history.php" style="color:#fff; text-decoration:none">HISTORY</a></li> 
                    <li><a href="chat_bypass.php" style="color:#fff; text-decoration:none">CHAT</a></li>
                    <li><a href="logout.php" style="color:#fff; text-decoration:none">LOGOUT</a></li>
                </ul>
                
            </div>
</nav>
<div class="container" style="padding-left: 50px;"> 
<table class="table table-striped table-dark">
        <tr>
            <th>Role </th>
            <th>First Name </th>
            <th>Last Name </th>
            <th>Branch </th>
            <th>Username </th>
            <th> Email </th>
            <th> Status </th>
            
        </tr>
       
<?php
    include("connect.php");
    error_reporting(0);
    $query = "select * from request";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
   
    if( $total!=0)
    {
        while($result = mysqli_fetch_assoc($data))
        {
            echo "
            <tr>
                <td>" . $result['roles'] . "</td>
                <td>" . $result['fname'] . "</td>
                <td>" . $result['lname'] . "</td>
                <td>" . $result['branch'] . "</td>
                <td>" . $result['uname'] . "</td>
                <td>" . $result['email'] . "</td>
                <td>" . $result['status'] . "</td>
               
                
            </tr>";
            
        }
    }   
?>

        </table>
        </div>
    </body>
</html>   