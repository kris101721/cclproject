<?php 

require "database/config.php";

$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL,$sslcert, NULL, NULL);
if(!mysqli_real_connect($conn, $host, $dbusername, $dbpassword, $dbname, 3306, MYSQLI_CLIENT_SSL)){
            die('Failed to connect to MySQL: '.mysqli_connect_error());
        }



?>



