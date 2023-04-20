<?php
 
?>
<html>
<head>
  <title>Login And Registration form </title>
  <link rel="stylesheet" href="stylee.css">
</head>
<body>
    <div class="hero_login">
      <div class="form-box">
      <div class="button-box">
      <div id="btn"></div>
       <button type="button" class="toggle-btn" onclick="login()">Log In</button>
       <button type="button" class="toggle-btn" onclick="register()">Register</button> 
</div>
           <form id="login" class="input-group" action="login.php" method="POST">
                <input type="text" name="uname" class="input-field" placeholder="Username" required>
                <input type="password" name="pswd1"class="input-field" placeholder="Password" required>
                <button type="submit" class="submit-btn">Login</button>
            </form>
   <form id="register" class="input-group" action="register.php" method="POST">
                 <label for="roles">Select your role:</label>
  <select name="roles" id="roles">
    <option value="admin">Admin</option>
    <option value="faculty">Faculty</option>
    <option value="student">Student</option>
  </select>
  <br><br>
                <input type="text" name="fname" class="input-field" placeholder="First Name" required>
                <input type="text" name="lname" class="input-field" placeholder="Last Name" required>
                <input type="text" name="branch" class="input-field" placeholder="Branch" required>
                <input type="text" name="uname" class="input-field" placeholder="Username" required>
                <input type="email" name="email" class="input-field" placeholder="Email" required>
                <input type="password" name="pswd1"class="input-field" placeholder="Password" required>
                <input type="password" name="pswd2"class="input-field" placeholder="Confirm Password" required>
                <button type="submit" class="submit-btn" >Register</button>
         </form>
      </div>
      </div>
     <script>
     var x = document.getElementById("login");
     var y = document.getElementById("register");
     var z = document.getElementById("btn");
  
     function register(){
       x.style.left ="-400px";
       y.style.left ="50px";
       z.style.left ="110px";
}

     function login(){
       x.style.left ="50px";
       y.style.left ="450px";
       z.style.left ="0px";
}
</script>
</body>
</html>