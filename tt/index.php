<?php
        include_once 'dbinc.php' ;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       <?php
            $sql = "SELECT * FROM  users;";
            $result = mysqli_query($conn,$sql);    // see dbinc.php
            $resultcheck = mysqli_num_rows($result);


       ?>
        
</body>
</html>