<?php

if(isset($_POST['submit']))
{
    require 'dbh.inc.php';

    $mailuid = $_POST['username'];
    $pwd =$_POST['password'];

    if(empty($mailuid) || empty($pwd))
    {
        header("LOCATION: ../login.php?error=emptyfields");
        exit();
    }
    else 
    {
      $sql = "SELECT * FROM posts WHERE username=?;";
      $stmt = mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt,$sql))
      {
        header("LOCATION: ../login.php?error=sqlerror");
        exit();
      }
      else
      {
          mysqli_stmt_bind_param($stmt,"s",$mailuid);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          if($row = mysqli_fetch_assoc($result))
          {
            $pwdcheck = password_verify($pwd , $row['password']);   // first password what user will enter in login.php 

            if($pwdcheck == false)
            {
                header("LOCATION: ../login.php?error=wrongpassword");
                exit();
            }
            else if($pwdcheck == true)
            {
                session_start();
                $_SESSION['userid'] = $row['username'];

                echo " <script> location.href='../cgpa.php' </script>" ;
               
            }
     } 
          else
          {
            header("LOCATION: ../login.php?error=nouser");
            exit();
          }
      }


    }
}
else
{
    header("LOCATION: ../register.php");
    exit();
}