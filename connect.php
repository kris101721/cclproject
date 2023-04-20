<?php 

$host = "ccl-project-server.mysql.database.azure.com";
$dbusername = "kristen123";
$dbpassword = "Pass@123";
$dbname = "cclprojectdb";
  
// Create connection

$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, "ccl-project-server.mysql.database.azure.com", "kristen123", $dbpassword, $dbname, 3306, MYSQLI_CLIENT_SSL);
echo"
<html>
<body> Magic happens here         </body>
</html>
";
?>



