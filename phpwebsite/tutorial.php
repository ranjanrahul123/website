<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <form method = "GET">
        <input type="text" name="person" placeholder="enter your name">
        <button>SUBMIT</button>

      </form>
    <?php
         
         echo " hi there";    // for printing on screen. it is fast
         print 12;            // for printing on screen. it is slow than echo.
         $name = "rahul";     // name is a variable
         $name = $_GET['person'];
         echo $name . "is a handsome fellow";

        // predefined function
         echo strlen("hi rahul");   // length of string 
         echo str_word_count("hi rahul"); // calculate number of word
         echo strrev("hi rahul");    // reverse string
         echo strpos("hi rahul","hi")    // where hi is present
         echo str_replace("rahul","jason","hi rahul")  // first parameter is going to replace with second parameter . output will be  hi jason

         // data types
          $name = "hi rahul" // -->string
          $name = 'hi rahul' // -->string
          $name = 23        //  -->integer
          $name = 23.987    // --> float
          true = 0          //  -->boolean
          false=0          //  -->boolean
          $names = array("daniel","dennis","rahul");    // -->array
          echo $names['0'];   // print daniel

          // arithmetic operator
          echo 5+5;    // addition ,multiplication,subtraction,division,modulus
          echo 8**2    // exponent  --> output will be 64

          // assignment operator
          $x = 100; // or we can write like this $x+=20
          echo $x;

          // comparison operator
          $x =5;
          $y = 10;
          if($x==$y)                // == comparison whether equal or not
          {                         // != not equal to
              echo "true!";         // === number equal as well as data type
          }                         // some other also like > or < or >= or <=
          else{                      // <> means not equal to   
              echo "false!";
          }

          // logical operator
          // or ,and
           if ($x ==$y or 1==1)  //or we can use || for or snd for and we can use &&
           if ($x ==$y xor 1==1)  // xor only one of the statement should be true only

           // switch statement
           switch($x)
           {
               case 1 : 
                echo "it is mine !";
                break;

              case 2 :
                 echo " hggfffft ";
                 break;  
           }

           // scheduled message programming
           <?php
             $dayofweek = date("w");

               switch($dayofweek)
               {
                 case 1:
                  echo "it is monday";
                 break;
                 case 2:
                  echo "it is tuesday";
                 break;
                 case 3:
                  echo "it is wednesday";
                 break;
                 case 4:
                  echo "it is thursday";
                 break;
                 case 5:
                  echo "<p>it is friday</p>";
                 break;
                 case 6:
                  echo "it is saturday";
                 break;
                 case 0:
                  echo "it is sunday";
                 break

               }
             // while loop
             $x=1;
             while($x<5)
             {
                echo "hi there<br>";
                $x++;
             }
            //  do while loop
            $x=1;
            do
            {
              echo "hi there<br>";
              $x++;
            }
            while($x<5);

          // for loop
          for($x=0;$x<5;$x++)
          {
            echo"hi there <br>";
          }

        // for each loop
         $array = array("daniel","jane","rahul");
         foreach($array as $loopdata)
         {
           echo "my name is ".$loopdata."<br>";
         }
         
         // user defined function
           
         $x=100;
        function newcalc($x)     // we need to pass the variable which i had created outside and using inside function.
        {
          $newnr = $x * 0.75;
          echo " here is 75% of what u wrote is ." .$newnr;
        }

        newcalc($x);    // here we are calling function


        //including documents in php
          <?php
           include 'header.php';
          ?>

           ?>
     
           // local and global scope
           $x=5;              // global scope
           function something()
           {

             $y=10;      // local scope
           }

           // super globals

           $x=5;
           function something()
           {
             $y=10;
             echo $GLOBALS['x'];   // if we do not pass x in the function then we can do like this
           }
       something();

       // post and  get superglobals

       <form method ='GET'>     // get means it will show in url .but in post method it will not show in url.
          <input type="hidden" name="name" value="value">
          <button type="submit"> press me</button>

          echo $_GET['name'];   // output will be value

      -->> // cookies and session

       // cookies saves information on user side
       // seesion saves information on server side

       setcookie("name","rahul",time()+86400);
       // first parameter is name of cookie
       // second parameter is value of cookie
       // third parameter is upto what duration u want,, 86400 milliseconds 
       // if u want to destroy cookie automatically then setcookie("name",'rahul"time() - 86400 );

       $_SESSION['name'] = "12";    

       // starting session
       <?php

          session_start();      /// if u want that system should have remembered the username, then we have to write this to all php page that we will include with this 
          ?>

          <?php

          $_SESSION['username'] = "dani948a";

            if(!isset($_SESSION['username']))
            {
              echo "you are not logged in"; 
            }
            else{
                 echo"you are logged in";
            }



    ?>
</body>
</html>


