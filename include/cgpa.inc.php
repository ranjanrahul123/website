<?php
 

      if(isset($_POST['submit']))
      {
           $current = $_POST['current-cgpa'];
           $target =  $_POST['target-cgpa'];

           if($current>10 || $target>10)
           {
            header("LOCATION: ../cgpa.php?error=cgpa cannot be greater than 10");
            exit();
           }
           else if($current>$target)
           {
            header("LOCATION: ../cgpa.php?error=do you really want lesser cgpa");
            echo '<p class="signuperror" margin-left="250px"> DO YOU REALLY WANT LESSER GRADE IN FUTURE  !</p>';
            exit();
           }
           else if($current < $target)
           {
            echo " <script> location.href='../document.php' </script>" ;
            exit();
            
           }
      }

      else
      {
          header("LOCATION: ../cgpa.php?error=pressenter");
          exit();
      }