 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cgpadetails</title>
    <link rel="stylesheet" href="last.css">
</head>
<body class="bck">
   <header class="home">
         <a href="project.html">HOME</a>&nbsp&nbsp&nbsp
     </header>
    <div class="tree">
    <?php
      session_start();
      echo "<br>"."WELCOME , ". $_SESSION['userid'];
    ?> 
    </div>
      <div class="start">
         <h2 class="heading">enter your CGPA</h2>
         <hr class="line"> 
         <br>
         <form action="include/cgpa.inc.php" method="POST">
             <div class="first-line">
                  <label for ="current-cgpa">CURRENT-CGPA :</label>&nbsp &nbsp
                  <input type="number" name="current-cgpa" placeholder="ex:8.65" required>
                  <hr class="line2" color="white">
             </div>
             <div class="second-line">
                <label for ="target-cgpa">TARGET-CGPA :</label>&nbsp &nbsp
                <input type="number" name="target-cgpa" placeholder="ex:9.95" required>
                <hr class="line3" color="white">
             </div>
             <button name="submit" class="btn" type="submit"> ENTER</button>
          </form>
      </div>
      <div class="block3">
        <form action="include/logout.inc.php" method="POST">
            <button name="logout" class="log" type="submit"> LOGOUT </button>
       </form>
      </div>    
    
</body>


</html>