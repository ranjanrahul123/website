<?php
   session_start();
 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="logintake.css">
</head>
<body>
<header class="home">
        <img src ="images/home-run.png" alt="home" height="20" width="20"> &nbsp
         <a href="project.html">HOME</a>&nbsp&nbsp&nbsp
     </header>
    <main class="text">
        <div class="block1">
            <div class="image">
             <img src="images/user3.png" alt="user" height="120" width="160">
             </div>
             <div class ="quotes">
                 <p> Let's get you set up </p>
                 <hr class="sixthline">
             </div>
           <div class="lesson">
               It should take a couple of minute.
           </div>
           <br>
           <div class="signup">
            <a href="register.php"><button class="back">SIGNUP</button></a>
         </div>
        </div>
   
        <div class="block2">

        <?php
           if(isset($_GET["error"]))
           {
            if($_GET["error"] == "sqlerror")
            echo '<p class="signuperror" margin-left"500px">WRONG USERNAME ! </p>';

            else if($_GET["error"] == "wrongpassword")
            echo '<p class="signuperror" margin-left"500px">WRONG PASSWORD ! </p>';  

            else if($_GET["error"] == "nouser")
            echo '<p class="signuperror" margin-left"500px">NO USER EXIST! </p>'; 
           
           }
         ?>  
            <div class ="submission">           
                <form action="include/login.inc.php" method="POST">
                <div class="section"> 
                    <h1 class ="horizontal" > LOGIN  </h1> 
                    <hr class ="space">               
                    </div>
                    <div class="forms">
                        <label for="username">USERNAME:</label>&nbsp
                        <input type="text" name="username" placeholder="abc123@" required>
                        <hr class="fourthline">
                    </div>
                    <div class="forms">
                        <label for="password">PASSWORD:</label>&nbsp
                        <input type="password" name="password" placeholder="123abc@" required>
                        <hr class="fifthline">
                    </div>
                    <br><br>
                    <button name="submit" type="submit" class="btn"> SUBMIT </button>
                 </form>
         </div>
     </div>
   </main>
   
    
</body>
</html>