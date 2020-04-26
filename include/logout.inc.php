<?php

   if(isset($_POST['logout']))
   {
    session_start();
    session_unset();
    session_destroy();

    echo "<script> location.href='../login.php'; </script>";
   }


  