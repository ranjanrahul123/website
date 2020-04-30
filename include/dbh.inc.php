<?php
    
    $servername ="localhost:3306";
    $dbusername ="id13504856_admin";
    $dbpassword ="ew_AGjB2kjqsAji";
    $dbname ="id13504856_cgpaa";

   $conn = mysqli_connect($servername, $dbusername,$dbpassword, $dbname) ;

       if(!$conn)
       {
           die("connection failed:".mysqli_connect_error());
       }












