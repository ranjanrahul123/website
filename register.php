<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
    <link rel="stylesheet" href="registration.css">
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
            It should take a couple of minute.<br><br>
            After creating account please login.
        </div>
        <br>
        <div class="login">
         <a href="login.php"><button class="button">Login</button></a>
         </div>
     </div>
     
     <div class="block2">
         <div class="section">
         <br>            

        <?php
           if(isset($_GET["error"]))
           {
               if($_GET["error"] == "emptyfields")
               echo '<p class="signuperror" margin-left"500px">FILL IN ALL FIELDS </p>';

               else if($_GET["error"] == "invalidmailuid")
               echo '<p class="signuperror"> INVALID USERNAME AND EMAIL!</p>';

               else if($_GET["error"] == "invalidemail")
               echo '<p class="signuperror"> INVALID USERNAME AND EMAIL!</p>';

               else if($_GET["error"] == "usertaken")
               echo '<p class="signuperror"> USERNAME IS ALREADY TAKEN !</p>';
     
           }
        //     if($_GET["signup"] == "success")
        //    {
        //     echo '<p class="signuperror"> SIGNUP SUCCESSFUL !</p>';
        //     echo " <script> location.href='login.php' </script>" ;
        //    }
           
   
    ?>
             <form action="include/signup.php" method="POST">
                 <h1 class ="horizontal" > CREATE  AN  ACCOUNT </h1>
                 <hr color="blue" margin-left="13px">
                 <br>
                 <div class="forms">
                     <label for="name">NAME:</u></label>&nbsp &nbsp &nbsp 
                     <input type="text" name="name" placeholder="ex:rahulranjan" > 
                     <hr class="firstline">
                    
                 </div>
                 <div class="forms">
                       <label for ="rollno">ROLL NO:</label>&nbsp
                       <input type="text" name="rollno" placeholder="ex:CED18I041" >
                       <hr class="secondline">
                     
                 </div>
                 <div class="circle">
                     
                     <label for="gender-choice">Male:</label>
                      <input type="radio" name="gender-choice" value="choice-1">
                   
                      <label for="gender-choice">Female:</label>
                      <input type="radio" name="gender-choice" value="choice-2">
                    
                      <label for="gender-choice">Other:</label>
                      <input type="radio" name="gender-choice" value="choice-3">
                     
                 </div>
                 <div class="forms">
                     <label for="email"> EMAIL:</label>&nbsp
                     <input type="email" name="email" placeholder="rahul@gmail.com" >
                     <hr class="thirdline">

                 </div>
                 <div class="forms">
                     <label for="username">USERNAME:</label>&nbsp
                     <input type="text" name="username" placeholder="abc123@" >
                     <hr class="fourthline">
                 </div>
                 <div class="forms">
                     <label for="password">PASSWORD:</label>&nbsp
                     <input type="password" name="password" placeholder="123abc@" >
                     <hr class="fifthline">

                 </div>
                
                 <div class="forms2">
                     <input type="checkbox" name="agreement">
                     <label for="agreement"> I agree to all terms and conditions</label>
               
                 </div>
                 <br>
                 <button type="submit" name="submit" class="btn"> SUBMIT </button>
            </div>
              </form>

     </div>
</main>
</body>
</html>