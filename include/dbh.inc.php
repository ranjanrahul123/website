<?php
    
    $servername ="sql12.freemysqlhosting.net";
    $dbusername ="sql12337129";
    $dbpassword ="CrGnjAAr2c";
    $dbname ="sql12337129";

   $conn = mysqli_connect($servername, $dbusername,$dbpassword, $dbname) ;

       if(!$conn)
       {
           die("connection failed:".mysqli_connect_error());
       }












