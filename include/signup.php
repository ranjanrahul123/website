<?php 
   if(isset($_POST['submit']))
    {
      require 'dbh.inc.php';
   
      $name = $_POST['name'];
      $roll = $_POST['rollno'];
      $email = $_POST['email'];
      $uid = $_POST['username'];
      $pwd = $_POST['password'];

      if(empty($name) || empty($roll) || empty($email) || empty($uid) || empty($pwd))
      {
         header("LOCATION: ../register.html?error=emptyfields&name=".$name."&rollno=".$roll."&email=".$email);
         exit();
      }
      else if((!filter_var($email,FILTER_VALIDATE_EMAIL)) && (!preg_match("/^[a-zA-Z0-9]*$/",$uid)))
      {
         header("LOCATION: ../register.html?error=invalidmailuid&name=".$name."&rollno=".$roll);
         exit();
      }
      else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
      {
         header("LOCATION: ../register.html?error=invalidemail&name=".$name."&rollno=".$roll);
         exit();
      }
      else if(!preg_match("/^[a-zA-Z0-9]*$/",$uid))
      {
         header("LOCATION: ../register.html?error=invalidusername&name=".$name."&rollno=".$roll."&email=".$email);
         exit();
      }
      else
      {
         $sql="SELECT username FROM posts WHERE username=?";
         $stmt = mysqli_stmt_init($conn);
         if(!mysqli_stmt_prepare($stmt,$sql))
         {
            header("LOCATION: ../register.html?error=sqlerror");
            exit();
         }
         else
         {
            mysqli_stmt_bind_param($stmt,"s",$uid);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt);
            if($resultcheck > 0)
            {
               header("LOCATION: ../register.html?error=usertaken&email=".$email);
               exit();
            }
            else
            {
               $sql="INSERT INTO posts(name,rollno,emailid,username,password) VALUES(?,?,?,?,?)";
               $stmt = mysqli_stmt_init($conn);
               if(!mysqli_stmt_prepare($stmt,$sql))
               {
                 header("LOCATION: ../register.html?error=sqlerror");
                 exit();
               }
               else
               {
                  $hashedpwd = password_hash($pwd,PASSWORD_DEFAULT);
                  mysqli_stmt_bind_param($stmt,"sssss",$name, $roll,$email,$uid,$hashedpwd);
                  mysqli_stmt_execute($stmt);
                  mysqli_stmt_store_result($stmt);

                  // header("LOCATION: ../register.html?signup=success");
                 
                  echo " <script> location.href='../login.html' </script>" ;
                  exit();
               }
            }
         }
      }

         mysqli_stmt_close($stmt);
         mysqli_close($conn);     
      }
      else
      {
         header("LOCATION: ../register.html?error=abc");
         exit();
      }
      
   
