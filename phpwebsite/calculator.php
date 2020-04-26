<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <form method="GET">
             <input type="text" name="num1" placeholder="Number 1">
             <input type="text" name="num2" placeholder="Number 2">
             <select name="operator">
                <option> none </option> 
                <option> Add </option> 
                <option> Sub </option> 
                <option> Multiply </option> 
                <option> Divide </option>                 
             </select>
             <br>
             <button type="submit" value="submit" name="submit"> calculate</button>
      </form>

      <p> the answer is :</p>
      <?php
         
        if(isset($_GET['submit']))        // it shows that when u will click callculate then output will show.  
        {
            $result1 = $_GET['num1'];     // it will take num1 from url and store in result1
            $result2 = $_GET['num2'];
            $operator = $_GET['operator'];
            switch($operator)
            {
                case "none":
                    echo "you need to select an operation";
                   break;
                case "Add":
                    echo $result1 + $result2;
                   break;
                case "Sub":
                    echo $result1 - $result2;
                   break;
                case "Multiply":
                    echo $result1 * $result2;
                   break;
                case "Divide":
                    echo $result1 / $result2;
                   break;
            }
        }





     ?>
     
</body>
</html>